<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-dark leading-tight">
        </h2>
    </x-slot>

    <h1>Transactions</h1>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>UUID</th>
                <th>Reference</th>
                <th>Channel</th>
                <th>Amount</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transactions as $transaction)
            <tr>
                <td>{{ $transaction->uuid }}</td>
                <td>{{ $transaction->ref }}</td>
                <td>{{ $transaction->channel }}</td>
                <td>Rp {{ number_format($transaction->amount, 0, ',', '.') }}</td>
                <td>
                    <!-- View Button -->
                    <button class="btn btn-primary" onclick="showTransactionDetails('{{ $transaction->id }}')">View</button>

                    <!-- Delete Form -->
                    <form action="{{ route('admin.transactions.destroy', $transaction->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Modal for Viewing Transaction Details -->
    <div class="modal fade" id="transactionModal" tabindex="-1" aria-labelledby="transactionModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="transactionModalLabel">Transaction Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>UUID:</strong> <span id="modalUuid"></span></p>
                    <p><strong>Reference:</strong> <span id="modalRef"></span></p>
                    <p><strong>Channel:</strong> <span id="modalChannel"></span></p>
                    <p><strong>Amount:</strong> <span id="modalAmount"></span></p>
                    <p><strong>Fee:</strong> <span id="modalFee"></span></p>
                    <p><strong>Nett Amount:</strong> <span id="modalNettAmount"></span></p>
                    <p><strong>Products:</strong>
                    <pre id="modalProducts"></pre>
                    </p>
                    <p><strong>Customer Details:</strong>
                    <pre id="modalCustomerDetails"></pre>
                    </p>
                    <p><strong>Invoice URL:</strong> <span id="modalInvoiceUrl"></span></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>