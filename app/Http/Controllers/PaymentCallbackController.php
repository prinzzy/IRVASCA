<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Transaction;
use Illuminate\Support\Facades\Log;
use App\Mail\InvoiceEmail;
use Illuminate\Support\Facades\Mail;

class PaymentCallbackController extends Controller
{
    public function handleCallback(Request $request)
    {
        // Log incoming callback data
        Log::info('Callback received:', $request->all());

        // Return accepted response first to prevent multiple retries from WinPay
        response('ACCEPTED', 200)->send();

        // Start processing the request data
        $data = $request->all();

        // Validation rules for callback data
        $request->validate([
            'uuid' => 'required|string',
            'ref' => 'required|string',
            'channel' => 'required|string',
            'amount' => 'required|integer',
            'fee' => 'required|numeric',
            'nett_amount' => 'required|numeric',
            'products' => 'required|array',
            'invoice' => 'required|array',
            'invoice.uuid' => 'nullable|string',
            'invoice.ref' => 'required|string',
            'invoice.url' => 'nullable|string',
            'invoice.customer' => 'nullable|array',
        ]);

        // Extract the order reference from the invoice ref
        $invoiceRef = $data['invoice']['ref'];

        // Step 1: Store the transaction record immediately
        try {
            $existingTransaction = Transaction::where('uuid', $data['uuid'])->first();

            if (!$existingTransaction) {
                $transaction = Transaction::create([
                    'order_id' => null,
                    'uuid' => $data['uuid'],
                    'ref' => $invoiceRef,
                    'channel' => $data['channel'],
                    'amount' => $data['amount'],
                    'fee' => $data['fee'],
                    'nett_amount' => $data['nett_amount'],
                    'products' => json_encode($data['products']),
                    'customer_details' => json_encode($data['invoice']['customer']),
                    'invoice_url' => $data['invoice']['url'],
                ]);
            }
        } catch (\Exception $e) {
            Log::error('Transaction save failed: ' . $e->getMessage());
            return;
        }

        // Step 2: Find the associated order using the invoice ref
        $order = Order::where('order_id', $invoiceRef)->first();

        if ($order) {
            // Update the order_id field in the transaction table after finding the order
            if (isset($transaction)) {
                $transaction->update(['order_id' => $order->id]);
            }

            // Step 3: Update the order status to "paid"
            $order->status = 'paid';
            $order->save();

            // Send the invoice email
            $this->sendInvoiceEmail($order, $transaction);
        } else {
            Log::error('Order not found for invoice ref: ' . $invoiceRef);
        }

        // Log success for debugging
        Log::info('Callback processed successfully for invoice ref: ' . $invoiceRef);
    }

    public function sendInvoiceEmail($order, $transaction)
    {
        try {
            Mail::to($order->customer_email)->send(new InvoiceEmail($order, $transaction));
            Log::info('Invoice email sent to: ' . $order->customer_email);
        } catch (\Exception $e) {
            Log::error('Failed to send invoice email: ' . $e->getMessage());
        }
    }
}
