<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    // Display the order history for the logged-in user
    public function index()
    {
        $orders = Order::where('user_id', Auth::id())->orderBy('created_at', 'desc')->get();

        return view('orders.index', compact('orders'));
    }

    // Show details of a specific order
    public function show(Order $order)
    {
        // Ensure the logged-in user is authorized to view the order
        if ($order->user_id != Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        return view('orders.show', compact('order'));
    }
}
