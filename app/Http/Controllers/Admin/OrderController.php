<?php

// app/Http/Controllers/Admin/OrderController.php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::latest()->get();
        return view('admin.orders.index', compact('orders'));
    }

    public function updateStatus(Request $request, Order $order)
    {
        $request->validate([
            'status' => 'required|string',
            'resi' => 'nullable|string',
        ]);

        $order->update([
            'status' => $request->status,
            'resi' => $request->resi,
        ]);

        return back()->with('success', 'Order status updated successfully.');
    }
}
