<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
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
            'ref' => 'required|string',
            'channel' => 'required|string',
            'amount' => 'required|integer',
            'fee' => 'required|integer',
            'nett_amount' => 'required|integer',
            'products' => 'required|array',
            'invoice.customer' => 'required|array',
            'invoice.url' => 'required|string',
        ]);

        // Store data in the transactions table
        Transaction::create([
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

        // Respond with "ACCEPTED" to confirm receipt
        return response('ACCEPTED', 200);
    }
}
