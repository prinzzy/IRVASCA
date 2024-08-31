<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coming Soon!</title>
    <link rel="icon" href="{{ asset('images/logo/logo_ungu.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Noto Sans', sans-serif !important;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #520055;
            color: #ffffff;
            overflow-x: hidden;
            /* Prevent horizontal scrolling */
        }

        .logo {
            margin-top: 20px;
            text-align: center;
            padding: 0 20px;
            /* Added padding for smaller screens */
        }

        .logo img {
            width: 100%;
            max-width: 250px;
        }

        .coming-soon-text {
            margin-top: 30px;
            font-size: 3rem;
            font-weight: 700;
            text-align: center;
            letter-spacing: 1px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            padding: 0 20px;
            /* Increased padding */
        }

        .countdown {
            margin-top: 30px;
            font-size: 1.5rem;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .countdown div {
            text-align: center;
        }

        .countdown span {
            font-weight: 700;
            font-size: 2rem;
            display: block;
        }

        .subscribe-form {
            margin-top: 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 0 20px;
            /* Added padding for smaller screens */
        }

        .form-group {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
            width: 100%;
            max-width: 400px;
            padding: 0 15px;
            /* Added padding */
        }

        .form-group input[type="email"] {
            padding: 15px;
            border-radius: 5px;
            border: none;
            width: 100%;
            min-width: 350px;
            /* Ensure it stays long on larger screens */
            max-width: 600px;
            /* Set a maximum width */
            font-family: 'Noto Sans', sans-serif !important;
            font-size: 1.2rem;
        }

        .form-group button {
            padding: 15px 30px;
            background-color: #b78027;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 600;
            font-family: 'Noto Sans', sans-serif !important;
            font-size: 1.2rem;
        }

        .subscribe-message {
            font-size: 0.9rem;
            /* Reduced font size */
            color: #ffffff;
            text-align: center;
            margin-top: 10px;
            font-weight: 400;
            padding: 0 20px;
            /* Increased padding */
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .carousel-wrapper {
            background-color: #ffffff;
            padding: 30px 0;
            width: 100%;
            box-sizing: border-box;
            position: relative;
            min-height: 220px;
            overflow: hidden;
            /* Prevent horizontal scrolling 
}

.carousel-container {
    position: relative;
    width: 100%;
    max-width: 1400px;
    margin: 0 auto;
}

.carousel-inner {
    width: 100%;
}

.carousel-item {
    display: flex;
    justify-content: center; /* Center align items */
            align-items: center;
            /* Vertically center items */
            overflow: hidden;
        }

        .carousel-item img {
            width: 100%;
            height: auto;
            max-height: 400px;
            object-fit: cover;
            border-radius: 10px;
            transition: filter 0.3s ease-in-out;
        }

        .carousel-item-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            z-index: 10;
            background: rgba(0, 0, 0, 0.5);
            padding: 15px;
            border-radius: 5px;
        }

        .carousel-item-content h3 {
            font-size: 2rem;
            font-weight: 700;
            margin: 0;
            color: #b78027 !important;
            white-space: nowrap;
        }

        .carousel-controls {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
        }

        .carousel-control-prev,
        .carousel-control-next {
            background-color: #b78027;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: #ffffff;
            border-radius: 50%;
            width: 25px;
            height: 25px;
        }

        @media (max-width: 768px) {
            .coming-soon-text {
                font-size: 2rem;
                padding: 0 15px;
                /* Adjusted padding */
            }

            .countdown span {
                font-size: 1.5rem;
            }

            .subscribe-message {
                font-size: 0.8rem;
                /* Reduced font size */
                padding: 0 15px;
                /* Adjusted padding */
            }

            .carousel-item-content h3 {
                font-size: 1.2rem;
                /* Adjusted font size */
                white-space: normal;
            }

            .carousel-item img {
                max-height: 250px;
            }

            .carousel-item-content {
                width: 80%;
                /* Further reduced width for smaller screens */
                max-width: 250px;
                padding: 8px;
            }

            .carousel-wrapper {
                padding: 20px 0;
                /* Adjust padding for smaller screens */
            }
        }

        @media (max-width: 576px) {
            .subscribe-form {
                padding: 0 10px;
                /* Adjusted padding */
            }

            .form-group input[type="email"] {
                max-width: 100%;
            }

            .form-group button {
                width: 100%;
                max-width: 300px;
                margin-top: 10px;
            }

            .carousel-item-content h3 {
                font-size: 1rem;
                white-space: normal;
            }

            .carousel-item img {
                max-height: 200px;
            }

            .carousel-item-content {
                width: 70%;
                /* Reduced width for extra small screens */
                max-width: 200px;
                padding: 6px;
            }

            .carousel-wrapper {
                padding: 15px 0;
                /* Adjust padding for extra small screens */
            }
        }

        .toast {
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            animation: slideIn 0.5s ease-out;
        }

        .toast-body {
            padding: 15px;
            font-family: 'Noto Sans', sans-serif;
            font-size: 1rem;
        }

        @keyframes slideIn {
            from {
                transform: translateX(100%);
                opacity: 0;
            }

            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @media (max-device-width: 812px) and (orientation: portrait) {
            .coming-soon-text {
                font-size: 1.8rem;
                /* Smaller font size for portrait mode on iPhones */
                padding: 0 10px;
                /* Adjusted padding */
            }

            .countdown span {
                font-size: 1.4rem;
            }

            .subscribe-message {
                font-size: 0.60rem;
                /* Reduced font size */
                padding: 0 10px;
                /* Adjusted padding */
            }

            .carousel-item-content h3 {
                font-size: 1.1rem;
                /* Adjusted font size */
            }

            .carousel-item img {
                max-height: 180px;
                /* Reduced height for better fit */
            }

            .carousel-item-content {
                width: 65%;
                /* Reduced width for iPhone portrait */
                max-width: 180px;
                padding: 5px;
            }

            .carousel-wrapper {
                padding: 10px 0;
                /* Adjust padding */
            }
        }

        @media (max-device-width: 812px) and (orientation: landscape) {
            .coming-soon-text {
                font-size: 1.9rem;
                /* Adjusted font size for landscape mode */
                padding: 0 15px;
                /* Adjusted padding */
            }

            .countdown span {
                font-size: 1.6rem;
            }

            .subscribe-message {
                font-size: 0.8rem;
                /* Slightly reduced font size */
                padding: 0 15px;
                /* Adjusted padding */
            }

            .carousel-item-content h3 {
                font-size: 1.2rem;
                /* Adjusted font size */
            }

            .carousel-item img {
                max-height: 220px;
                /* Slightly increased height for landscape */
            }

            .carousel-item-content {
                width: 75%;
                /* Increased width for iPhone landscape */
                max-width: 220px;
                padding: 6px;
            }

            .carousel-wrapper {
                padding: 15px 0;
                /* Adjust padding */
            }
        }

        .toast-container {
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
            max-width: 600px;
            /* Adjust based on your design */
            z-index: 1050;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
            padding: 20px;
        }

        .toast {
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            animation: slideIn 0.5s ease-out;
            background-color: #520055;
            color: #b78027;
            width: 100%;
            max-width: 100%;
        }

        .toast-header {
            background-color: #520055;
            color: #b78027;
        }

        .toast-body {
            background-color: #520055;
            color: #b78027;
        }

        .toast .close {
            color: #b78027;
        }

        @keyframes slideIn {
            from {
                transform: translateY(-100%);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @media (max-width: 768px) {
            .toast-container {
                padding: 10px;
            }

            .toast {
                font-size: 0.9rem;
            }
        }

        @media (max-width: 576px) {
            .toast-container {
                padding: 5px;
            }

            .toast {
                font-size: 0.8rem;
            }
        }
    </style>
</head>

<body>

    <!-- Logo -->
    <div class="logo">
        <img src="{{ asset('images/logo/logo_ungu.png') }}" alt="IRVASCA Logo">
    </div>

    <!-- Coming Soon Text -->
    <div class="coming-soon-text">
        We Will Be Coming Soon
    </div>

    <!-- Countdown Timer -->
    <div class="countdown">
        <div>
            <span id="days">00</span>
            Days
        </div>
        <div>
            <span id="hours">00</span>
            Hours
        </div>
        <div>
            <span id="minutes">00</span>
            Minutes
        </div>
        <div>
            <span id="seconds">00</span>
            Seconds
        </div>
    </div>

    <div id="toast-container" class="toast-container" style="position: relative; min-height: 0; opacity: 0; transition: opacity 0.3s;">
        <div style="position: absolute; top: 20px; right: 20px;">
            <!-- Success Toast -->
            @if(session('success'))
            <div class="toast" id="successToast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000">
                <div class="toast-header" style="background-color: #520055; color: #b78027;">
                    <strong class="mr-auto">Success</strong>
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close" style="color: #b78027;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="toast-body" style="background-color: #520055; color: #b78027;">
                    {{ session('success') }}
                </div>
            </div>
            @endif

            <!-- Info Toast -->
            @if(session('info'))
            <div class="toast" id="infoToast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000">
                <div class="toast-header" style="background-color: #520055; color: #b78027;">
                    <strong class="mr-auto">Info</strong>
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close" style="color: #b78027;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="toast-body" style="background-color: #520055; color: #b78027;">
                    {{ session('info') }}
                </div>
            </div>
            @endif
        </div>
    </div>

    <div id="toast-messages"
        data-success="{{ session('success') }}"
        data-info="{{ session('info') }}"
        style="display: none;">
    </div>



    <!-- Subscribe Form -->
    <div class="subscribe-form">
        <form action="{{ route('emails.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <input type="email" name="email" placeholder="Enter your email" required>
                <button type="submit">Subscribe</button>
            </div>
        </form>
        <p class="subscribe-message">
            <strong>Subscribe now and might win an exclusive IRVASCA T-shirt or hoodie!</strong>
            <br>
            Hit that subscribe button for a chance to snag some cool outfit!
        </p>
    </div>

    <!-- Product Carousel Wrapper with White Background -->
    <div class="carousel-wrapper">
        <!-- Product Carousel -->
        <div class="carousel-container">
            <div id="productCarousel" class="carousel slide product-carousel" data-ride="carousel" data-interval="2500">
                <div class="carousel-inner">
                    @foreach($products->chunk(3) as $index => $chunk)
                    <div class="carousel-item @if($index == 0) active @endif">
                        <div class="row no-gutters">
                            @foreach($chunk as $product)
                            <div class="col-4 d-flex align-items-center justify-content-center">
                                <div class="carousel-item-content">
                                    <h3>Coming Soon</h3>
                                </div>
                                <img src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->name }}" class="d-block w-100">
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#productCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#productCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/countdown.js') }}"></script>
</body>

</html>