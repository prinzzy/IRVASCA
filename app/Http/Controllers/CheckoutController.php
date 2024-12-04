<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cartitem;
use App\Models\Address;
use App\Models\Discount;
use Illuminate\Support\Facades\Auth;
use App\Services\WinPayService;
use Illuminate\Support\Facades\Log;
use App\Models\Order;

class CheckoutController extends Controller
{
    /**
     * Set the selected address ID in the session.
     */
    public function setSelectedAddress(Request $request)
    {
        $request->validate([
            'address_id' => 'required|exists:addresses,id',
        ]);

        // Store the selected address ID in the session
        session(['selected_address_id' => $request->address_id]);

        return response()->json(['success' => true]);
    }

    /**
     * Display the checkout page with cart items, total price, and delivery information.
     */
    public function showCheckout(Request $request)
    {
        // Retrieve the selected address ID from the session
        $selectedAddressId = session('selected_address_id');

        if (!$selectedAddressId) {
            return redirect()->back()->with('error', 'Please select an address.');
        }

        // Retrieve the selected address details
        $address = Address::find($selectedAddressId);
        $userId = Auth::id();

        // Fetch cart items with product relationship
        $cartItems = CartItem::with('product')->where('user_id', $userId)->get();

        // Calculate total price based on product price and quantity
        // Calculate total price based on product price and quantity
        $grandTotal = $cartItems->sum(function ($cartItem) {
            return $cartItem->product->price * $cartItem->quantity; // Assuming there's a quantity field
        });

        // Return the checkout view with the calculated total price
        return view('checkout.index', [
            'address' => $address,
            'cartItems' => $cartItems,
            'totalPrice' => $grandTotal, // Update this to match the grand total calculation
        ]);
    }

    public function applyDiscount(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'discount_code' => 'nullable|string|max:255',
            'grand_total' => 'required|numeric', // Add validation for grand_total
        ]);

        $discountCode = $request->input('discount_code');
        $discount = Discount::where('code', $discountCode)
            ->where('status', 'active')
            ->where('expiration_date', '>=', now()->toDateString())
            ->first();

        // Use the total price calculated in the controller
        $grandTotal = $request->input('grand_total');

        if ($discount) {
            $discountPercentage = $discount->discount_percentage;
            $discountAmount = ($grandTotal * $discountPercentage) / 100;
            $newTotal = $grandTotal - $discountAmount;

            return response()->json([
                'success' => true,
                'message' => 'Discount applied successfully!',
                'new_total' => $newTotal,
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Invalid discount code.',
            ]);
        }
    }
    public function checkoutProcess(Request $request, WinPayService $winPayService)
    {
        $orderId = 'ORDER_' . now()->setTimezone('Asia/Jakarta'); // Generate a unique order ID
        $totalAmount = (int) $request->input('grand_total'); // Use the grand total from the form directly

        // Prepare the customer data from the request
        $customerName = $request->input('customer_name'); // Get the customer name from the form
        $customerEmail = $request->user()->email; // Assuming the email is still retrieved from the authenticated user
        $customerPhone = $request->input('customer_phone'); // Get the customer phone from the form
        $customerAddress = $request->input('customer_address');
        $discountCode = $request->input('discount_code');

        // Retrieve the products array from the request
        $productsData = $request->input('products', []);
        $products = [];
        $originalTotalPrice = 0; // To calculate original total price without quantity
        $actualTotalPrice = 0;   // To calculate actual total price with quantity

        // Decode the product data and calculate totals
        foreach ($productsData as $productJson) {
            $product = json_decode($productJson, true); // Decode JSON to array

            // Filter the product name, quantity, and price
            if (isset($product['name']) && isset($product['quantity']) && isset($product['price'])) {
                $price = (int) $product['price'];
                $quantity = (int) $product['quantity'];

                // Add product to the list for the invoice
                $products[] = [
                    'name' => $product['name'] . ' | Size: ' . $product['size'],
                    'qty' => $quantity,
                    'price' => $price,
                ];

                // Calculate original total (price only) and actual total (price * quantity)
                $originalTotalPrice += $price;
                $actualTotalPrice += $price * $quantity;
            }
        }

        // Log totals for debugging
        Log::info('Original total price (sum of prices without qty): ' . $originalTotalPrice);
        Log::info('Actual total price (sum with qty): ' . $actualTotalPrice);
        Log::info('Total amount (grand total): ' . $totalAmount);

        // Only create discount product if neither total matches the total amount
        if ($originalTotalPrice !== $totalAmount && $actualTotalPrice !== $totalAmount) {
            // Set all existing products' prices to 0
            foreach ($products as &$product) {
                $product['price'] = 0; // Set original product prices to 0
            }

            // Add a new discount product with the total amount
            $discountProduct = [
                'name' => 'Discount',
                'qty' => 1, // Quantity for the discount product
                'price' => $totalAmount, // Set the price to the total amount
            ];
            $products[] = $discountProduct; // Add the discount product to the list
        }

        // Step 1: Store the initial order in the orders table with status "waiting for payment"
        $order = Order::create([
            'order_id' => $orderId,
            'user_id' => Auth::id(), // Set the user_id here
            'customer_name' => $customerName,
            'customer_email' => $customerEmail,
            'customer_phone' => $customerPhone,
            'customer_address' => $customerAddress,
            'products' => json_encode($products),
            'total_amount' => $totalAmount,
            'status' => 'Pending', // Initial status
            'resi' => null, // Airway bill initially null
            'discount_code' => $discountCode,
        ]);


        session(['order_id' => $order->order_id, 'total_amount' => $totalAmount]);

        // Call the createInvoice method in the WinPay service
        $response = $winPayService->createInvoice(
            $totalAmount,
            $orderId,
            $customerName,
            $customerEmail,
            $customerPhone, // Add customer phone to the method
            'https://irvasca.com/thank-you', // Replace with your actual back URL
            $products // Pass the filtered product details array
        );

        // Log the response from WinPay for debugging
        Log::info('WinPay Response:', ['response' => $response]);

        // Check if the response contains the necessary redirect URL for payment
        if (isset($response['responseData']['redirect_url'])) {
            return redirect($response['responseData']['redirect_url']);
        } else {
            return redirect()->back()->withErrors('Failed to create payment: ' . ($response['responseMessage'] ?? 'Unknown error.'));
        }
    }
}
