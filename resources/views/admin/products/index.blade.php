<x-app-layout>
    <x-slot name="header"></x-slot>
    <div class="container">
        <h1>Product Catalog</h1>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createProductModal">Add Product</button>
        <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#createCategoryModal">Add Category</button>
        <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#createSubcategoryModal">Add Subcategory</button>

        <!-- Success Message -->
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <!-- Error Message -->
        @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <!-- Product Table -->
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Subcategory</th>
                    <th>Price</th>
                    <th>Original Price</th>
                    <th>Discount Price</th>
                    <th>Star Rating</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>{{ optional($product->subcategory)->name }}</td>
                    <td>${{ number_format($product->price, 2) }}</td>
                    <td>
                        @if ($product->original_price)
                        ${{ number_format($product->original_price, 2) }}
                        @else
                        N/A
                        @endif
                    </td>
                    <td>
                        @if ($product->discount_price)
                        ${{ number_format($product->discount_price, 2) }}
                        @else
                        N/A
                        @endif
                    </td>
                    <td>{{ number_format($product->star_rating, 1) }} / 5</td>
                    <td>
                        <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#viewProductModal{{ $product->id }}">View</button>
                        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editProductModal{{ $product->id }}">Edit</button>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>

                <!-- View Product Modal -->
                <div class="modal fade" id="viewProductModal{{ $product->id }}" tabindex="-1" aria-labelledby="viewProductModalLabel{{ $product->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="viewProductModalLabel{{ $product->id }}">Product Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p><strong>Name:</strong> {{ $product->name }}</p>
                                <p><strong>Category:</strong> {{ $product->category->name }}</p>
                                <p><strong>Subcategory:</strong> {{ optional($product->subcategory)->name }}</p>
                                <p><strong>Price:</strong> ${{ number_format($product->price, 2) }}</p>
                                <p><strong>Original Price:</strong>
                                    @if ($product->original_price)
                                    ${{ number_format($product->original_price, 2) }}
                                    @else
                                    N/A
                                    @endif
                                </p>
                                <p><strong>Discount Price:</strong>
                                    @if ($product->discount_price)
                                    ${{ number_format($product->discount_price, 2) }}
                                    @else
                                    N/A
                                    @endif
                                </p>
                                <p><strong>Star Rating:</strong> {{ number_format($product->star_rating, 1) }} / 5</p>
                                <p><strong>Stock by Size:</strong></p>
                                <ul>
                                    @foreach ($product->sizes as $size)
                                    <li>{{ $size->size }}: {{ $size->stock }} in stock</li>
                                    @endforeach
                                </ul>
                                <p><strong>Description:</strong> {{ $product->description }}</p>

                                @if ($product->image_path)
                                <p><strong>Main Image:</strong> <img src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->name }}" style="width: 100px;"></p>
                                @endif

                                @if ($product->thumbnails)
                                <p><strong>thumbnails:</strong> <img src="{{ asset('storage/' . $product->thumbnails) }}" alt="{{ $product->name }} thumbnails" style="width: 100px;"></p>
                                @endif

                                @if ($product->images)
                                <p><strong>Additional Images:</strong></p>
                                <div>
                                    @foreach (json_decode($product->images) as $additionalImage)
                                    <img src="{{ asset('storage/' . $additionalImage) }}" alt="{{ $product->name }} Additional" style="width: 100px; margin-right: 5px;">
                                    @endforeach
                                </div>
                                @endif
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Edit Product Modal -->
                <div class="modal fade" id="editProductModal{{ $product->id }}" tabindex="-1" aria-labelledby="editProductModalLabel{{ $product->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editProductModalLabel{{ $product->id }}">Edit Product</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" class="form-control" value="{{ old('name', $product->name) }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="category_id">Category</label>
                                        <select name="category_id" class="form-control" required>
                                            @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="subcategory_id">Subcategory</label>
                                        <select name="subcategory_id" class="form-control">
                                            <option value="">None</option>
                                            @foreach ($subcategories as $subcategory)
                                            <option value="{{ $subcategory->id }}" {{ $product->subcategory_id == $subcategory->id ? 'selected' : '' }}>{{ $subcategory->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Price</label>
                                        <input type="number" name="price" class="form-control" value="{{ old('price', $product->price) }}" step="0.01" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="original_price">Original Price</label>
                                        <input type="number" class="form-control" id="original_price" name="original_price" value="{{ old('original_price', $product->original_price) }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="discount_price">Discount Price</label>
                                        <input type="number" class="form-control" id="discount_price" name="discount_price" value="{{ old('discount_price', $product->discount_price) }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="star_rating">Star Rating</label>
                                        <input type="number" class="form-control" id="star_rating" name="star_rating" value="{{ old('star_rating', $product->star_rating) }}" step="0.1" min="0" max="5" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="sizes[]">Sizes and Stock</label>
                                        <div id="sizeStockInputs{{ $product->id }}">
                                            @foreach ($product->sizes as $size)
                                            <div class="d-flex mb-2">
                                                <input type="text" name="sizes[]" class="form-control me-2" value="{{ $size->size }}" required>
                                                <input type="number" name="stocks[]" class="form-control" value="{{ $size->stock }}" required>
                                            </div>
                                            @endforeach
                                        </div>
                                        <button type="button" class="btn btn-secondary btn-sm" id="addSizeStock{{ $product->id }}">Add More Sizes</button>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea name="description" class="form-control" required>{{ old('description', $product->description) }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="image"> Main Image</label>
                                        <input type="file" name="image" class="form-control">
                                        @if ($product->image_path)
                                        <img src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->name }}" style="width: 100px;">
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="thumbnails">thumbnails</label>
                                        <input type="file" name="thumbnails" class="form-control">
                                        @if ($product->thumbnails)
                                        <img src="{{ asset('storage/' . $product->thumbnails) }}" alt="{{ $product->name }} thumbnails" style="width: 100px;">
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="additional_images">Additional Images</label>
                                        <input type="file" name="additional_images[]" class="form-control" multiple>
                                        @if ($product->images)
                                        <p>Existing Images:</p>
                                        <div>
                                            @php
                                            $existingImages = json_decode($product->images, true); // Decode the JSON string into an array
                                            @endphp
                                            @foreach ($existingImages as $additionalImage)
                                            <img src="{{ asset('storage/' . $additionalImage) }}" alt="{{ $product->name }} Additional" style="width: 100px; margin-right: 5px;">
                                            @endforeach
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Update Product</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Create Product Modal -->
    <div class="modal fade" id="createProductModal" tabindex="-1" aria-labelledby="createProductModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createProductModalLabel">Create Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="category_id">Category</label>
                            <select name="category_id" class="form-control" required>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="subcategory_id">Subcategory</label>
                            <select name="subcategory_id" class="form-control">
                                <option value="">None</option>
                                @foreach ($subcategories as $subcategory)
                                <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" name="price" class="form-control" step="0.01" required>
                        </div>
                        <div class="form-group">
                            <label for="original_price">Original Price</label>
                            <input type="number" class="form-control" id="original_price" name="original_price">
                        </div>
                        <div class="form-group">
                            <label for="discount_price">Discount Price</label>
                            <input type="number" class="form-control" id="discount_price" name="discount_price">
                        </div>
                        <div class="form-group">
                            <label for="star_rating">Star Rating</label>
                            <input type="number" class="form-control" id="star_rating" name="star_rating" step="0.1" min="0" max="5" required>
                        </div>
                        <div class="form-group">
                            <label for="sizes[]">Sizes and Stock</label>
                            <div id="sizeStockInputs">
                                <div class="d-flex mb-2">
                                    <input type="text" name="sizes[0][size]" class="form-control me-2" placeholder="Size (e.g., S, M, L)" required>
                                    <input type="number" name="sizes[0][stock]" class="form-control" placeholder="Stock" required>
                                </div>
                            </div>
                            <button type="button" class="btn btn-secondary btn-sm" id="addSizeStock">Add More Sizes</button>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="image_path">Main Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="thumbnails">Thumbnails</label>
                            <input type="file" class="form-control" name="thumbnails">
                        </div>
                        <div class="form-group">
                            <label for="images">Additional Images</label>
                            <input type="file" class="form-control" name="images[]" multiple>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Create Product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Create Category Modal -->
    <div class="modal fade" id="createCategoryModal" tabindex="-1" aria-labelledby="createCategoryModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createCategoryModalLabel">Create Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('categories.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Category Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Create Category</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Create Subcategory Modal -->
    <div class="modal fade" id="createSubcategoryModal" tabindex="-1" aria-labelledby="createSubcategoryModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createSubcategoryModalLabel">Create Subcategory</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('subcategories.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Subcategory Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="category_id">Select Category</label>
                            <select name="category_id" class="form-control" required>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Create Subcategory</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>