<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Import DB facade

class CartController extends Controller
{
    // Add item to cart
    public function addToCart(Request $request)
    {
        $product = Product::find($request->product_id);
        $quantity = $request->quantity ?? 1;

        if (auth()->check()) {
            // Add or update the cart item for authenticated user
            CartItem::updateOrCreate(
                ['user_id' => auth()->id(), 'product_id' => $product->id],
                ['quantity' => DB::raw('quantity + ' . $quantity)]
            );
        } else {
            // Handle cart for guest (use session or cookie)
            $cart = session()->get('cart', []);
            if (isset($cart[$product->id])) {
                $cart[$product->id]['quantity'] += $quantity;
            } else {
                $cart[$product->id] = [
                    'name' => $product->name,
                    'quantity' => $quantity,
                    'price' => $product->price,
                    'image' => $product->image_path
                ];
            }
            session()->put('cart', $cart);
        }

        // Get updated cart items
        $cartItems = auth()->check() ? CartItem::with('product')->where('user_id', auth()->id())->get() : session()->get('cart', []);

        // Calculate subtotal and total
        $subtotal = collect($cartItems)->sum(function ($item) {
            return $item['price'] * $item['quantity'];
        });
        $total = $subtotal; // Add taxes or other fees if applicable

        // Render the cart view HTML
        $cartView = view('layouts.partials.cart', compact('cartItems', 'subtotal', 'total'))->render();

        return response()->json([
            'message' => 'Product added to cart!',
            'cartView' => $cartView,
            'subtotal' => number_format($subtotal, 2),
            'total' => number_format($total, 2),
            'count' => count($cartItems)
        ]);
    }



    // Remove item from cart
    public function removeFromCart(Request $request)
    {
        if (auth()->check()) {
            // Remove the item from the authenticated user's cart
            CartItem::where('user_id', auth()->id())
                ->where('product_id', $request->product_id)
                ->delete();
        } else {
            // Remove the item from session for guests
            $cart = session()->get('cart', []);
            if (isset($cart[$request->product_id])) {
                unset($cart[$request->product_id]);
                session()->put('cart', $cart);
            }
        }

        // Fetch the updated cart items
        $cartItems = auth()->check() ? CartItem::with('product')->where('user_id', auth()->id())->get() : session()->get('cart', []);

        // Calculate subtotal and total
        $subtotal = collect($cartItems)->sum(function ($item) {
            return $item['price'] * $item['quantity'];
        });
        $total = $subtotal;

        // Render the updated cart view
        $cartView = view('layouts.partials.cart', compact('cartItems', 'subtotal', 'total'))->render();

        return response()->json([
            'cartView' => $cartView,
            'subtotal' => number_format($subtotal, 2),
            'total' => number_format($total, 2),
            'count' => count($cartItems)
        ]);
    }




    // Get cart items for modal
    public function getCartItems()
    {
        if (auth()->check()) {
            // Fetch cart items from the database for authenticated users
            $cartItems = CartItem::with('product')->where('user_id', auth()->id())->get()->map(function ($item) {
                return [
                    'product_id' => $item->product->id,
                    'name' => $item->product->name,
                    'price' => $item->product->price,
                    'quantity' => $item->quantity,
                    'image' => $item->product->image_path,
                ];
            });
        } else {
            // Fetch cart items from session for guests
            $cartItems = session()->get('cart', []);
        }

        // Calculate subtotal and total
        $subtotal = collect($cartItems)->sum(function ($item) {
            return $item['price'] * $item['quantity'];
        });
        $total = $subtotal; // Add taxes or other fees if applicable

        return view('home.modal', compact('cartItems', 'subtotal', 'total'));
    }
}
