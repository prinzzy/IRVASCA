<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collections</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Noto Sans', sans-serif !important;
            margin: 0 !important;
            padding: 0 !important;
            overflow-x: hidden;
            /* Prevent horizontal scroll */
        }

        .hero {
            background-color: #520055 !important;
            color: #ffffff !important;
            padding: 0.1rem 0 !important;
            /* Adjusted padding for smaller hero section */
            margin: 0 !important;
        }

        .hero .btn-warning {
            background-color: #b78027 !important;
            border-color: #b78027 !important;
        }

        .hero .btn-outline-light {
            border-color: #ffffff !important;
            color: #ffffff !important;
        }

        .btn-warning:hover {
            background-color: #a56a1f !important;
            border-color: #a56a1f !important;
        }

        .btn-outline-light:hover {
            color: #520055 !important;
            background-color: #ffffff !important;
            border-color: #ffffff !important;
        }

        .bg-dark-custom {
            background-color: #520055 !important;
        }

        .text-primary-custom {
            color: #520055 !important;
        }

        .border-gold {
            border-color: #b78027 !important;
        }

        .text-gold {
            color: #b78027 !important;
        }

        .bg-light-custom {
            background-color: #f8f9fa !important;
        }

        .text-white-custom {
            color: #ffffff !important;
        }

        header {
            background-color: #520055 !important;
            color: #ffffff !important;
            padding: 0.1rem 0 !important;
            /* Adjusted padding for smaller header */
            margin: 0 !important;
            position: relative !important;
            width: 100%;
            /* Ensure the header takes the full width */
        }

        header img {
            width: 150px !important;
            height: auto !important;
        }

        header nav a {
            color: #ffffff !important;
        }

        @media (max-width: 768px) {
            .container {
                padding-left: 1rem !important;
                padding-right: 1rem !important;
            }

            header img {
                width: 120px !important;
                /* Slightly reduce the size for smaller screens */
            }
        }

        header nav a {
            cursor: pointer;
            display: inline-block;
            overflow: hidden;
            font-weight: 600;
            color: white !important;
            /* Set the base font color to white */
            background: linear-gradient(to right, #b78027 50%, white 50%);
            transition: background-position 300ms ease, color 300ms ease;
            /* Smooth transition for the background position and color change */
            background-clip: text;
            background-size: 200% 100%;
            background-position: 100%;
            -webkit-text-fill-color: transparent;
            /* Makes the gradient text effect work */
        }

        header nav a:hover {
            background-position: 0 100%;
            -webkit-text-fill-color: #b78027 !important;
            /* Change the color to gold when hovered */
        }
    </style>
</head>

<body>

    <!-- Header -->
    <header class="bg-dark-custom text-white">
        <div class="container d-flex justify-content-between align-items-center" style="max-width: 100%; padding: 0 1rem;">
            <img src="{{ asset('images/logo/logo_ungu.jpg') }}" alt="IRVASCA Logo">
            <nav class="d-flex gap-3">
                <a href="{{ route('index') }}" class="text-white align-self-center">Home</a>
                <a href="{{ route('catalog.index') }}" class="text-white align-self-center">About</a>
                <a href="{{ route('catalog.index') }}" class="text-white align-self-center">Contact</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero text-center">
        <div class="container">
            <h1 class="display-4 mb-3 text-gold">Collections</h1>
            <p class="mb-2">Discover our exclusive collection of fashion products.</p>
        </div>
    </section>

    <!-- Catalog Page -->
    <div id="catalog" class="container mt-5">
        <!-- Filters -->
        <div class="mb-4 d-flex justify-content-center flex-wrap">
            <form action="{{ route('catalog.index') }}" method="GET" class="d-flex gap-3 flex-wrap">
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