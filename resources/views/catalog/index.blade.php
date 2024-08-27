<x-guest-layout>
    <div class="container mt-5">
        <h1 class="mb-4">Product Catalog</h1>

        <!-- Filters -->
        <div class="mb-4">
            <form action="{{ route('catalog.index') }}" method="GET" class="d-flex gap-2">
                <select name="category" class="form-select" onchange="this.form.submit()">
                    <option value="" {{ request('category') == '' ? 'selected' : '' }}>All Categories</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>

                <select name="subcategory" class="form-select" onchange="this.form.submit()">
                    <option value="" {{ request('subcategory') == '' ? 'selected' : '' }}>All Subcategories</option>
                    @foreach($subcategories as $subcategory)
                        <option value="{{ $subcategory->id }}" {{ request('subcategory') == $subcategory->id ? 'selected' : '' }}>{{ $subcategory->name }}</option>
                    @endforeach
                </select>
            </form>
        </div>

        <!-- Product Grid -->
        <div class="row">
            @forelse($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('storage/' . $product->image_path) }}" class="card-img-top" alt="{{ $product->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <p class="card-text text-primary">${{ number_format($product->price, 2) }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-info" role="alert">
                        No products found.
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</x-guest-layout>