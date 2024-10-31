<!doctype html>
<html class=""> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>IRVASCA</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/logo/logo_kecil.png') }}" sizes="16x16" type="image/png">
    <link rel="shortcut icon" href="{{ asset('images/logo/logo_kecil.png') }}" sizes="32x32" type="image/png">
    <link rel="shortcut icon" href="{{ asset('images/logo/logo_kecil.png') }}" sizes="48x48" type="image/png">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('libraries/bootstrap/bootstrap.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <!-- jQuery UI (Fuel UX) -->
    <link rel="stylesheet" href="{{ asset('libraries/fuelux/jquery-ui.min.css') }}">

    <!-- Owl Carousel -->
    <link href="{{ asset('libraries/owl-carousel/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('libraries/owl-carousel/owl.theme.default.min.css') }}" rel="stylesheet" />

    <!-- Font Awesome -->
    <link href="{{ asset('libraries/fonts/font-awesome.min.css') }}" rel="stylesheet" />

    <!-- Animate CSS -->
    <link href="{{ asset('libraries/animate/animate.min.css') }}" rel="stylesheet" />

    <!-- Flexslider -->
    <link href="{{ asset('libraries/flexslider/flexslider.css') }}" rel="stylesheet" />

    <!-- Magnific Popup (Light Box) -->
    <link href="{{ asset('libraries/magnific-popup.css') }}" rel="stylesheet" />

    <!-- Custom CSS Files -->
    <link href="{{ asset('css/components.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/media.css') }}" rel="stylesheet" />

    <!-- Color Schemes -->
    <link id="color" href="{{ asset('css/color-schemes/default.css') }}" rel="stylesheet" />


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="js/html5/html5shiv.min.js"></script>
      <script src="js/html5/respond.min.js"></script>
    <![endif]-->

    <link href='https://fonts.googleapis.com/css?family=PT+Serif:400,400italic,700,700italic' rel='stylesheet'
        type='text/css'>
    <link
        href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,400italic,300italic,500,500italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>


</head>

<body data-offset="200" data-spy="scroll" data-target=".primary-navigation">
    <!-- LOADER -->
    <div id="site-loader" class="load-complete">
        <div class="load-position">
            <div class="logo"><img src=" {{ asset('images/logo/logo_putihNOBG.png') }}" alt="logo" style="max-width: 15%; height: auto;"></div>
            <h6>Please wait, loading...</h6>
            <div class="loading">
                <div class="loading-line"></div>
                <div class="loading-break loading-dot-1"></div>
                <div class="loading-break loading-dot-2"></div>
                <div class="loading-break loading-dot-3"></div>
            </div>
        </div>
    </div>
    <!-- Loader /- -->

    <!-- Style Switcher -->
    <div class="color-switcher" id="choose_color">
        <a href="#." class="picker_close">
            <i class="fa fa-gear fa-spin"></i>
        </a>
        <div class="theme-colours">
            <p>Choose Colour style</p>
            <ul>
                <li><a href="#." class="blue" id="default"></a></li>
                <li><a href="#." class="cyan" id="cyan"></a></li>
                <li><a href="#." class="dark-blue" id="dark-blue"></a></li>
                <li><a href="#." class="green" id="green"></a></li>
                <li><a href="#." class="red" id="red"></a></li>
                <li><a href="#." class="yellow" id="yellow"></a></li>
                <li><a href="#." class="light-green" id="light-green"></a></li>
                <li><a href="#." class="orange" id="orange"></a></li>
            </ul>
        </div>
    </div><!-- Style Switcher /- -->

    <a id="top"></a>

    <!-- Header Section -->
    <header id="header" class="header">
        <!-- top-header -->

        <!-- container -->
        <div class="container">
            <div class="row">
                <ul class="top-social col-12 col-md-12 col-lg-6">

                    <div
                        class="col-12 col-md-12 col-lg-6 ow-right-padding  ow-right-padding2 d-flex align-content-center justify-content-end">
                        <ul class="top-menu">
                            <!-- <li><a title="My whishlist" href="#">My whishlist</a></li> -->

                        </ul>
                        <ul class="top-menu">
                            <li>
                        </ul>
                    </div>
            </div>
        </div>
        </div><!-- container /- -->
        </div><!-- top-header /- -->

        <!-- logo-search-block -->
        <div class="logo-search-block">
            <!-- container -->
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-3 ow-left-padding  d-flex align-items-center ">
                        <!-- <div class="input-group input-group1">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                            </span>
                            <input type="text" class="form-control" placeholder="Search products">
                        </div>/input-group -->
                    </div>
                    <div class="col-12 col-md-12 col-lg-6 logo-block">
                        <a title="Logo">
                            <img src=" {{ asset('images/logo/logo_putihNOBG.png') }}" alt="Logo" style="width: 35%; height: 100%;">
                        </a>
                    </div>
                    <div class="col-12 col-md-12 col-lg-3 ow-right-padding ">
                        <div class="row">
                            <form class="col-12  col-sm-6 col-md-6 col-lg-7">
                            </form>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-5 cart-link ow-right-padding">
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- container /- -->
        </div><!-- logo-add-block /- -->

        <!-- menu-block -->
    </header>
    <!-- Header Section /- -->

    <!-- Success Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Success</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p id="successMessage">Product added to cart successfully!</p>
                </div>
            </div>
        </div>
    </div>


    <!-- Page Breadcrumb -->
    <!-- container -->
    <div class="container">
        <!-- <div class="page-breadcrumb">
            <ol class="breadcrumb">
                <li><a title="Home" href="/shop">Home</a></li>
                <li><a title="Catalog" href="/catalog">Catalog</a></li>
                <li class="active">Product</li>
            </ol> -->
        <div class="return-home-link pull-right">
            <a title="Return to home page" href="/shop">return to home page</a>
        </div>
    </div>
    </div><!-- container /- -->
    <!-- Page Breadcrumb /- -->

    <!-- Single Product -->
    <div id="single-product" class="single-product">
        <!-- Container -->
        <div class="container">
            <div class="row">
                <!-- Left Column: Checkout Form -->
                <div class="col-12 col-md-12 col-lg-7">
                    <div class="checkout-container">
                        <div class="checkout-header">
                            <h2>Checkout</h2>
                        </div>

                        <!-- Delivery Address Section -->
                        <div class="checkout-section address-section">
                            <h3>Delivery Address</h3>
                            <p><strong>Name:</strong> {{ $address->name }}</p>
                            <p><strong>Address:</strong> {{ $address->street }}, {{ $address->city }}, {{ $address->state }} {{ $address->postal_code }}</p>
                            <p><strong>Country:</strong> {{ $address->country }}</p>
                            <p><strong>Phone:</strong> {{ $address->phone }}</p>
                        </div>

                        <!-- Cart Items Section -->
                        <div class="checkout-section cart-section">
                            <h3>Order Details</h3>
                            @foreach ($cartItems as $cartItem)
                            <div class="cart-item">
                                <p><strong>Product:</strong> {{ $cartItem['name'] ?? 'N/A' }}</p>
                                <p><strong>Price:</strong> Rp {{ number_format($cartItem['price'] ?? 0, 0, ',', '.') }},00</p>
                                <p><strong>Quantity:</strong> {{ $cartItem['quantity'] }}</p>
                                <p><strong>Size:</strong> {{ $cartItem['size'] }}</p>
                            </div>
                            <hr>
                            @endforeach

                            <!-- Discount Section -->
                            <div class="discount-info">
                                <p id="discountAmount" style="display: none;"><strong>Discount:</strong> Rp <span id="discountValue">0</span>,00</p>
                            </div>

                            <!-- Grand total -->
                            <div class="grand-total">
                                <h3 id="grandTotal">Grand Total: Rp {{ number_format($totalPrice, 0, ',', '.') }},00</h3>
                            </div>
                        </div>
                    </div>

                    <!-- Continue to Payment Button -->
                    <div class="checkout-footer">
                        <button class="continue-btn">Continue to Payment</button>
                    </div>
                </div>

                <!-- Right Column: Discount Section -->
                <div class="col-12 col-md-12 col-lg-5">
                    <div class="discount-container">
                        <div class="discount-header">
                            <h3>Have a Discount Code?</h3>
                        </div>

                        <div class="discount-section">
                            <p>Enter your discount code below to apply it to your order.</p>
                            <input type="text" class="discount-input" placeholder="Enter discount code">
                            <button class="apply-discount-btn">Apply Discount</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- col-md-5 -->
    <div class="col-12 col-md-12 col-lg-5 single-product-sidebar">
        <!-- <ul class="categories-list">
						<li><a title="Women" href="#">Women</a></li>
						<li><a title="Wear" href="#">Wear</a></li>
						<li><a title="Top" href="#">Top</a></li>
					</ul> -->
        <div class="page-header">

        </div>
        <!-- <ul class="star">
						<li>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-o"></i>
							<i class="fa fa-star-o"></i> <span>- ADD Rivew</span>
						</li>
					</ul> -->
        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing Donec Nulla lectus nunc, efficitur dui vitae,
						viverra finibus massa Vestibulum molestie accumsan.</p>
					<ul class="single-side-widget top-social ow-left-padding">
						<li><a title="Facebook" href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a title="Twitter" href="#"><svg viewBox="0 0 512 512">
									<path
										d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
								</svg>
							</a></li>
						<li><a title="Google Plus" href="#"><svg viewBox="0 0 448 512">
									<path
										d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
								</svg></a></li>
						<li><a title="Pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
						<li>
							<a title="QR Code" href="#">
								<svg class="qrcode" viewBox="0 0 401.994 401.994">
									<path
										d="M0,401.991h182.724V219.265H0V401.991z M36.542,255.813h109.636v109.352H36.542V255.813z" />
									<rect x="73.089" y="292.355" width="36.544" height="36.549" />
									<rect x="292.352" y="365.449" width="36.553" height="36.545" />
									<rect x="365.442" y="365.449" width="36.552" height="36.545" />
									<polygon
										points="365.446,255.813 328.904,255.813 328.904,219.265 219.265,219.265 219.265,401.991 255.813,401.991     255.813,292.355 292.352,292.355 292.352,328.904 401.991,328.904 401.991,219.265 401.991,219.265 365.446,219.265   " />
									<path
										d="M0,182.728h182.724V0H0V182.728z M36.542,36.542h109.636v109.636H36.542V36.542z" />
									<rect x="73.089" y="73.089" width="36.544" height="36.547" />
									<path
										d="M219.265,0v182.728h182.729V0H219.265z M365.446,146.178H255.813V36.542h109.633V146.178z" />
									<rect x="292.352" y="73.089" width="36.553" height="36.547" />
								</svg>
							</a>
						</li>
					</ul> -->
        <!-- <h4>Color</h4>
					<ul id="color-widget" class="single-side-widget color-widget top-social ow-left-padding">
						<li><a title="Check" href="#" class="white"><i class="fa fa-check"></i></a></li>
						<li><a title="Check" href="#" class="color color1 active"><i class="fa fa-check"></i></a></li>
						<li><a title="Check" href="#" class="color4"><i class="fa fa-check"></i></a></li>
						<li><a title="Check" href="#" class="color5"><i class="fa fa-check"></i></a></li>
					</ul> -->



        <!-- <h4>Brand or Sponsored</h4>
					<ul class="single-side-widget top-social ow-left-padding">
						<li><img src="images/summary/gucci-icon.png" alt="gucci" /></li>
					</ul> -->


    </div>
    <!-- col-md-5 /- -->
    </div>
    </div><!-- Container /- -->
    </div>
    <!-- Single Product /- -->




    <!-- jQuery Include -->
    <script src="{{ asset('libraries/jquery.min.js') }}"></script>

    <!-- Google Maps API -->
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script>

    <!-- gMap Plugin -->
    <script src="{{ asset('libraries/gmap/jquery.gmap.min.js') }}"></script>

    <!-- Easing Animation Effect -->
    <script src="{{ asset('libraries/jquery.easing.min.js') }}"></script>

    <!-- Core Bootstrap -->
    <script src="{{ asset('libraries/bootstrap/bootstrap.bundle.min.js') }}"></script>

    <!-- jQuery UI (Fuel UX) -->
    <script src="{{ asset('libraries/fuelux/jquery-ui.min.js') }}"></script>

    <!-- Animated Numbers -->
    <script src="{{ asset('libraries/jquery.animateNumber.min.js') }}"></script>

    <!-- jQuery Appear -->
    <script src="{{ asset('libraries/jquery.appear.js') }}"></script>

    <!-- jQuery Knob (Loading Circle) -->
    <script src="{{ asset('libraries/jquery.knob.js') }}"></script>

    <!-- WOW.js for Animations -->
    <script src="{{ asset('libraries/wow.min.js') }}"></script>

    <!-- Owl Carousel -->
    <script src="{{ asset('libraries/owl-carousel/owl.carousel.min.js') }}"></script>

    <!-- Expanding Search (Modernizr) -->
    <script src="{{ asset('libraries/expanding-search/modernizr.custom.js') }}"></script>

    <!-- Flexslider -->
    <script src="{{ asset('libraries/flexslider/jquery.flexslider-min.js') }}"></script>

    <!-- Magnific Popup (Light Box) -->
    <script src="{{ asset('libraries/jquery.magnific-popup.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Customized Scripts -->
    <script src="{{ asset('js/functions.js') }}"></script>







</body>

</html>