<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CartController extends Controller
{
    // Add item to cart
    public function addToCart(Request $request)
    {
        $product = Product::find($request->product_id);
        $quantity = $request->quantity ?? 1;
        $size = $request->size ?? null;  // Get the selected size

        // Log the initial details
        Log::info('Attempting to add product to cart:', [
            'product_id' => $request->product_id,
            'quantity' => $quantity,
            'size' => $size,
            'user_id' => auth()->check() ? auth()->id() : 'guest',
        ]);

        if (auth()->check()) {
            // Check if the product with the same size already exists in the cart
            $cartItem = CartItem::where('user_id', auth()->id())
                ->where('product_id', $product->id)
                ->where(
                    'size',
                    $size
                ) // Check by size
                ->first();

            if ($cartItem) {
                // If it exists, just increment the quantity
                $cartItem->increment('quantity', $quantity);
                Log::info('Incremented quantity for existing cart item:', [
                    'cart_item_id' => $cartItem->id,
                    'new_quantity' => $cartItem->quantity,
                ]);
            } else {
                // If it does not exist, create a new cart item
                $newCartItem = CartItem::create([
                    'user_id' => auth()->id(),
                    'product_id' => $product->id,
                    'quantity' => $quantity,
                    'size' => $size,  // Save the size
                ]);
                Log::info('Created new cart item:', [
                    'cart_item_id' => $newCartItem->id,
                    'product_id' => $product->id,
                    'quantity' => $quantity,
                    'size' => $size,
                ]);
            }
        } else {
            // Handle cart for guest (use session or cookie)
            $cart = session()->get('cart', []);
            $key = $product->id . '_' . $size;  // Create a unique key for product + size
            if (isset($cart[$key])) {
                // Increment the quantity for existing cart item with the same size
                $cart[$key]['quantity'] += $quantity;
                Log::info('Incremented quantity for guest cart item:', [
                    'key' => $key,
                    'new_quantity' => $cart[$key]['quantity'],
                ]);
            } else {
                // Add new product to the cart with the size
                $cart[$key] = [
                    'name' => $product->name,
                    'quantity' => $quantity,
                    'price' => $product->price,  // Ensure price is stored
                    'image' => $product->image_path,
                    'size' => $size  // Store the selected size
                ];
                Log::info('Added new product to guest cart:', [
                    'key' => $key,
                    'quantity' => $quantity,
                    'size' => $size,
                ]);
            }
            session()->put('cart', $cart);
        }

        // Get updated cart items
        $cartItems = auth()->check() ? CartItem::with('product')->where('user_id', auth()->id())->get() : session()->get('cart', []);

        // Calculate subtotal and total
        $subtotal = auth()->check() ? collect($cartItems)->sum(function ($item) {
            return $item->product->price * $item->quantity;
        }) : collect($cartItems)->sum(function ($item) {
            return $item['price'] * $item['quantity'];
        });
        $total = $subtotal;

        // Log the updated cart items
        Log::info('Updated cart items:', [
            'cart_items' => $cartItems,
            'subtotal' => $subtotal,
            'total' => $total,
        ]);

        // Render the cart view HTML
        $cartView = view('layouts.partials.cart', compact('cartItems', 'subtotal', 'total'))->render();

        return response()->json([
            'message' => 'Product added to cart!',
            'cartView' => $cartView,
'subtotal' => 'Rp' . number_format($subtotal, 0, ',', '.'),
    'total' => 'Rp' . number_format($total, 0, ',', '.'),
            'count' => auth()->check() ? $cartItems->count() : count($cartItems)
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
                    'size' => $item->size,  // Include size
                    'image' => $item->product->image_path,
                ];
            });
        } else {
            // Fetch cart items from session for guests
            $cartItems = session()->get('cart', []);

            // Map the session cart items to include size information
            $cartItems = collect($cartItems)->map(function ($item, $key) {
                return [
                    'product_id' => explode('_', $key)[0], // Extract product ID from the key
                    'name' => $item['name'],
                    'price' => $item['price'],
                    'quantity' => $item['quantity'],
                    'size' => $item['size'],  // Ensure size is included
                    'image' => $item['image'],
                ];
            });
        }

        // Log the fetched cart items
        Log::info('Fetched cart items:', [
            'cartItems' => $cartItems,
            'user_id' => auth()->check() ? auth()->id() : 'guest',
        ]);

        // Calculate subtotal and total
        $subtotal = collect($cartItems)->sum(function ($item) {
            return $item['price'] * $item['quantity'];
        });
        $total = $subtotal;

        return view('home.modal', compact('cartItems', 'subtotal', 'total'));
    }
}
