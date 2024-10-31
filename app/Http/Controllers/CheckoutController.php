<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cartitem;
use App\Models\Address;
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
            // dd($cartItems->toArray());

        // Calculate total price assuming no quantity, just sum product prices directly
        $totalPrice = $cartItems->sum(function ($cartItem) {
            return $cartItem->product->price;
        });

        return view('checkout.index', [
            'address' => $address,
            'cartItems' => $cartItems,
            'totalPrice' => $totalPrice,
        ]);
    }
}
