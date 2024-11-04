<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Order;
use Illuminate\Support\Facades\Log;

class PaymentCallbackController extends Controller
{
    public function handleCallback(Request $request)
    {
        Log::info('Callback received:', $request->all());
        $data = $request->all();

        // Validate required fields
        $validatedData = $request->validate([
            'uuid' => 'required|string',
            'ref' => 'required|string', // Assuming this 'ref' links to an order ID or unique reference
            'channel' => 'required|string',
            'amount' => 'required|integer',
            'fee' => 'required|integer',
            'nett_amount' => 'required|integer',
            'products' => 'required|array',
            'invoice.customer' => 'required|array',
            'invoice.url' => 'required|string',
        ]);

        // Find the associated order
        $order = Order::where('reference', $data['ref'])->first();

        if ($order) {
            // Store data in the transactions table, linking it to the order
            Transaction::create([
                'order_id' => $order->id, // Link transaction to the order
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

            // Update the order status to completed or paid
            $order->status = 'paid'; // Or 'paid' or similar status
            $order->save();
        } else {
            // Log an error if the order was not found
            Log::error('Order not found for ref: ' . $data['ref']);
        }

        // Respond with "ACCEPTED" to confirm receipt
        return response('ACCEPTED', 200);
    }
}
