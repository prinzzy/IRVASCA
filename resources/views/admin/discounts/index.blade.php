<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-dark leading-tight">
            {{ __('Submitted Email') }}
        </h2>
    </x-slot>

    @if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="container">
        <h1>Discount Vouchers</h1>
        <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#createDiscountModal">Add New Discount</button>

        <!-- Discounts Table -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Code</th>
                    <th>Percentage</th>
                    <th>Expiry Date</th>
                    <th>Status</th> <!-- Added Status Column -->
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($discounts as $discount)
                <tr>
                    <td>{{ $discount->id }}</td>
                    <td>{{ $discount->code }}</td>
                    <td>{{ $discount->discount_percentage }}%</td> <!-- Updated field -->
                    <td>{{ $discount->expiration_date }}</td> <!-- Updated field -->
                    <td>{{ $discount->status }}</td> <!-- Displaying Status -->
                    <td>
                        <!-- Edit Button -->
                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editDiscountModal{{ $discount->id }}">Edit</button>
                        <!-- Delete Button -->
                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteDiscountModal{{ $discount->id }}">Delete</button>
                    </td>
                </tr>

                <!-- Edit Discount Modal -->
                <div class="modal fade" id="editDiscountModal{{ $discount->id }}" tabindex="-1" aria-labelledby="editDiscountModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form action="{{ route('discounts.update', $discount->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editDiscountModalLabel">Edit Discount</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="code">Code</label>
                                        <input type="text" name="code" class="form-control" value="{{ $discount->code }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="discount_percentage">Percentage</label> <!-- Updated field -->
                                        <input type="number" name="discount_percentage" class="form-control" value="{{ $discount->discount_percentage }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="expiration_date">Expiry Date</label> <!-- Updated field -->
                                        <input type="date" name="expiration_date" class="form-control" value="{{ $discount->expiration_date }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select name="status" class="form-control" required>
                                            <option value="Active" {{ $discount->status === 'Active' ? 'selected' : '' }}>Active</option>
                                            <option value="Inactive" {{ $discount->status === 'Inactive' ? 'selected' : '' }}>Inactive</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Update Discount</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Delete Discount Modal -->
                <div class="modal fade" id="deleteDiscountModal{{ $discount->id }}" tabindex="-1" aria-labelledby="deleteDiscountModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form action="{{ route('discounts.destroy', $discount->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteDiscountModalLabel">Delete Discount</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure you want to delete this discount?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </tbody>
        </table>

        <!-- Create Discount Modal -->
        <div class="modal fade" id="createDiscountModal" tabindex="-1" aria-labelledby="createDiscountModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ route('discounts.store') }}" method="POST">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="createDiscountModalLabel">Add New Discount</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="code">Code</label>
                                <input type="text" name="code" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="discount_percentage">Percentage</label> <!-- Updated field -->
                                <input type="number" name="discount_percentage" class="form-control" step="0.01" required>
                            </div>
                            <div class="form-group">
                                <label for="expiration_date">Expiry Date</label> <!-- Updated field -->
                                <input type="date" name="expiration_date" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status" class="form-control" required>
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add Discount</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>