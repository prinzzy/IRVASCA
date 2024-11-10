<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Transaction;
use Illuminate\Support\Facades\Log;

class PaymentCallbackController extends Controller
{
    public function handleCallback(Request $request)
    {
        Log::info('Callback received:', $request->all());
        $data = $request->all();

        $validatedData = $request->validate([
            'uuid' => 'required|string',
            'ref' => 'required|string',
            'channel' => 'required|string',
            'amount' => 'required|integer',
            'fee' => 'required|integer',
            'nett_amount' => 'required|integer',
            'products' => 'required|array',
            'invoice.customer' => 'required|array',
            'invoice.url' => 'required|string',
        ]);

        // Find the associated order
        $order = Order::where('order_id', $data['ref'])->first();

        if ($order) {
            // Step 1: Store the transaction record
            Transaction::create([
                'order_id' => $order->id,
                'uuid' => $data['uuid'],
                'ref' => $data['ref'],
                'channel' => $data['channel'],
                'amount' => $data['amount'],
                'fee' => $data['fee'],
                'nett_amount' => $data['nett_amount'],
                'products' => json_encode($data['products']),
                'customer_details' => json_encode($data['invoice']['customer']),
                'invoice_url' => $data['invoice']['url'],
            ]);

            // Step 2: Update the order status to "paid"
            $order->status = 'paid';
            $order->save();
        } else {
            Log::error('Order not found for ref: ' . $data['ref']);
        }

        return response('ACCEPTED', 200);
    }
}
