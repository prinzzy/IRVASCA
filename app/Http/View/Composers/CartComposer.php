<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use App\Models\CartItem;

class CartComposer
{
    public function compose(View $view)
    {
        if (Auth::check()) {
            // Fetch cart items from the database for authenticated users
            $cartItems = CartItem::with('product')
                ->where('user_id', Auth::id())
                ->get()
                ->map(function ($item) {
                    return [
                        'product_id' => $item->product->id ?? 'N/A',
                        'name' => $item->product->name ?? 'Unnamed Product',
                        'price' => $item->product->price ?? 0,
                        'quantity' => $item->quantity ?? 1,
                    'size' => $item->size ?? 'N/A',  // Include size
                        'image' => $item->product->image_path ?? 'default_image.jpg',
                    ];
                });
        } else {
            // Fetch cart items from session for guests
            $cartItems = session()->get('cart', []);

            // Ensure product_id exists for each session cart item
            foreach ($cartItems as $key => $item) {
                if (!isset($item['product_id'])) {
                    $cartItems[$key]['product_id'] = $key;  // Use the key as the product_id
                }
                $cartItems[$key]['size'] = $item['size'] ?? 'N/A'; 
            }
        }

        // Calculate subtotal and total
        $subtotal = collect($cartItems)->sum(function ($item) {
            return $item['price'] * $item['quantity'];
        });
        $total = $subtotal; // You can add additional fees or taxes here if needed

        // Share the cart data with the view
        $view->with(compact('cartItems', 'subtotal', 'total'));
    }
}
