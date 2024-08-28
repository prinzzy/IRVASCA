<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Catalog</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Noto Sans', sans-serif;
        }
        .hero {
            background-color: #520055;
            color: #ffffff;
        }
        .hero .btn-warning {
            background-color: #b78027;
            border-color: #b78027;
        }
        .hero .btn-outline-light {
            border-color: #ffffff;
            color: #ffffff;
        }
        .btn-warning:hover {
            background-color: #a56a1f;
            border-color: #a56a1f;
        }
        .btn-outline-light:hover {
            color: #520055;
            background-color: #ffffff;
            border-color: #ffffff;
        }
        .bg-dark-custom {
            background-color: #520055;
        }
        .text-primary-custom {
            color: #520055;
        }
        .border-gold {
            border-color: #b78027;
        }
        .text-gold {
            color: #b78027;
        }
        .bg-light-custom {
            background-color: #f8f9fa;
        }
        .text-white-custom {
            color: #ffffff;
        }
    </style>
</head>
<body>

<!-- Header -->
<header class="bg-dark-custom text-white py-3">
    <div class="container d-flex justify-content-between align-items-center">
        <h1 class="h3 mb-0 text-gold">IRVASCA</h1>
        <nav class="d-flex gap-3">
        <a href="{{ route('catalog.index') }}" class="text-white">Home</a>
            <a href="{{ route('catalog.index') }}" class="text-white">Catalog</a>
            <a href="{{ route('catalog.index') }}" class="text-white">About</a>
            <a href="{{ route('catalog.index') }}" class="text-white">Contact</a>
            <!-- <a href="{{ route('catalog.index') }}" class="btn btn-outline-light">Login</a>
            <a href="{{ route('catalog.index') }}" class="btn btn-warning">Register</a> -->
    </div>
</header>

<!-- Hero Section -->
<section class="hero text-center py-5">
    <div class="container">
        <h1 class="display-4 mb-4 text-gold">Collections</h1>
        <p class="lead mb-4">Discover our exclusive collection of fashion products.</p>
    </div>
</section>

<!-- Catalog Page -->
<div id="catalog" class="container mt-5">
    <!-- <h2 class="mb-4 text-center text-primary-custom" style="font-weight: bold;">Explore a Selection of IRVASCA Creations</h2> -->
    <!-- Filters -->
    <div class="mb-4 d-flex justify-content-center">
        <form action="{{ route('catalog.index') }}" method="GET" class="d-flex gap-3">
            <select name="category" class="form-select border-gold text-primary-custom" onchange="this.form.submit()">
                <option value="" {{ request('category') == '' ? 'selected' : '' }}>All Categories</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>

            <select name="subcategory" class="form-select border-gold text-primary-custom" onchange="this.form.submit()">
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
                <div class="card h-100 border-0 shadow-sm" style="border-radius: 10px;">
                    <img src="{{ asset('storage/' . $product->image_path) }}" class="card-img-top" style="border-top-left-radius: 10px; border-top-right-radius: 10px;" alt="{{ $product->name }}">
                    <div class="card-body bg-light-custom">
                        <h5 class="card-title text-primary-custom">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <p class="card-text text-gold" style="font-weight: bold;">${{ number_format($product->price, 2) }}</p>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-info text-center" role="alert">
                    No products found.
                </div>
            </div>
        @endforelse
    </div>
</div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
