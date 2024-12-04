<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Discount;
use Illuminate\Support\Facades\Auth;

class SalesTransactionController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        $orders = Order::whereHas('discount', function ($query) use ($userId) {
            $query->where('user_id', $userId);
        })
            ->where('status', '!=', 'pending')
            ->get();

        return view('sales.index', compact('orders'));
    }


    public function getDashboardData()
    {
        $userId = Auth::id();
        $orders = Order::whereHas('discount', function ($query) use ($userId) {
            $query->where('user_id', $userId);
        })
        ->where('status', '!=', 'pending')
        ->get();

        // Hitung data untuk grafik
        $salesData = $orders->groupBy(function($order) {
            return $order->created_at->format('F'); // Mengelompokkan berdasarkan bulan
        })->map(function($group) {
            return $group->count();
        });

        // Hitung total pesanan sepanjang waktu
        $totalOrders = $orders->count();

        return response()->json([
            'salesData' => $salesData,
            'totalOrders' => $totalOrders
        ]);
    }
}
