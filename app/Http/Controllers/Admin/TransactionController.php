<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    // Display a list of all transactions
    public function index()
    {
        $transactions = Transaction::all(); // or you could paginate: Transaction::paginate(10);
        return view('admin.transactions.index', compact('transactions'));
    }

    // Fetch and return specific transaction details as JSON (for the modal)
    public function show($id)
    {
        $transaction = Transaction::findOrFail($id);

        return response()->json([
            'uuid' => $transaction->uuid,
            'ref' => $transaction->ref,
            'channel' => $transaction->channel,
            'amount' => $transaction->amount,
            'fee' => $transaction->fee,
            'nett_amount' => $transaction->nett_amount,
            'products' => json_decode($transaction->products),
            'customer_details' => json_decode($transaction->customer_details),
            'invoice_url' => $transaction->invoice_url,
        ]);
    }

    // Delete a transaction
    public function destroy($id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->delete();

        return redirect()->route('admin.transactions.index')->with('success', 'Transaction deleted successfully.');
    }
}
