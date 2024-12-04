<x-app-layout>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-dark leading-tight">
        </h2>
    </x-slot>
    <div class="container">
        <h2>Order Management</h2>
        <!-- Include DataTables CSS -->


        <table id="ordersTable" class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Customer</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Discount Code</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ json_decode($order->customer_details)->name ?? 'N/A' }}</td>
                    <td>Rp {{ number_format($order->amount, 0, ',', '.') }}</td>
                    <td>{{ ucfirst($order->status) }}</td>
                    <td>{{ $order->discount_code ?? 'None' }}</td>
                    <td>
                        <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#orderModal{{ $order->id }}">View / Edit</button>
                    </td>
                </tr>

                <!-- Order Details Modal -->
                <div class="modal fade" id="orderModal{{ $order->id }}" tabindex="-1" aria-labelledby="orderModalLabel{{ $order->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Order #{{ $order->id }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p><strong>Customer:</strong> {{ json_decode($order->customer_details)->name ?? 'N/A' }}</p>
                                <p><strong>Phone:</strong> {{ json_decode($order->customer_details)->phone ?? 'N/A' }}</p>
                                <p><strong>Address:</strong> {{ json_decode($order->customer_details)->address ?? 'N/A' }}</p>
                                <p><strong>Amount:</strong> Rp {{ number_format($order->amount, 0, ',', '.') }}</p>
                                <p><strong>Discount Code:</strong> {{ $order->discount_code ?? 'None' }}</p>
                                <p><strong>Products:</strong> {{ $order->products }}</p>
                                <form action="{{ route('admin.orders.updateStatus', $order->id) }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="status" class="form-label">Status</label>
                                        <select name="status" class="form-select">
                                            <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                            <option value="processed" {{ $order->status == 'processed' ? 'selected' : '' }}>Processed</option>
                                            <option value="shipped" {{ $order->status == 'shipped' ? 'selected' : '' }}>Shipped</option>
                                            <option value="delivered" {{ $order->status == 'delivered' ? 'selected' : '' }}>Delivered</option>
                                            <option value="cancelled" {{ $order->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="resi" class="form-label">Delivery Airway Bill (Resi)</label>
                                        <input type="text" class="form-control" name="resi" value="{{ $order->resi }}">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update Order</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </tbody>
        </table>
        @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <!-- Include jQuery and DataTables JS -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

        <script>
            $(document).ready(function() {
                $('#ordersTable').DataTable({
                    responsive: true,
                    order: [
                        [0, 'desc']
                    ], // Default order by ID descending
                    pageLength: 10, // Number of rows per page
                    lengthMenu: [10, 25, 50, 100], // Page length options
                });
            });
        </script>

    </div>


</x-app-layout>