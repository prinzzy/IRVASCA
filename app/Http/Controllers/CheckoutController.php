<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cartitem;
use App\Models\Address;
use App\Models\Discount;
use Illuminate\Support\Facades\Auth;

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
}
