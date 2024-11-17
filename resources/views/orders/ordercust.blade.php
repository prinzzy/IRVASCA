<!doctype html>
<html class=""> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
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
        <div class="top-header">
            <!-- container -->
            <div class="container">
                <div class="row">
                    <ul class="top-social col-12 col-md-12 col-lg-6">
                        <!-- Facebook Icon -->
                        <li><a title="Facebook" href="https://www.facebook.com/irvasca/"><i class="fa fa-facebook"></i></a></li>

                        <!-- TikTok Icon -->
                        <li><a title="TikTok" href="https://www.tiktok.com/@irvasca"><svg viewBox="0 0 448 512">
                                    <path d="M448,209.2a209.3,209.3,0,0,1-135.6-48V349.7a94.2,94.2,0,1,1-87-93.4v60.8a33.4,33.4,0,1,0,21.5,30.6V128h66.3c7.4,47.7,46.9,83.9,93.8,83.9v61.2Z" />
                                </svg></a></li>

                        <!-- Instagram Icon -->
                        <li><a title="Instagram" href="https://www.instagram.com/irvasca/"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                    <div
                        class="col-12 col-md-12 col-lg-6 ow-right-padding  ow-right-padding2 d-flex align-content-center justify-content-end">
                        <ul class="top-menu">
                            <!-- <li><a title="My whishlist" href="#">My whishlist</a></li> -->
                            <!-- <li><a title="CheckOut" href="#">CheckOut</a></li> -->
                        </ul>
                        <ul class="top-menu">
                            <li>
                                <a href="#" title="User Account" data-bs-toggle="modal" data-bs-target="#userAccountModal">
                                    <i class="fa fa-user" aria-hidden="true"> Login/Register</i>
                                </a>
                            </li>
                        </ul>
                        @include('layouts.partials.user-modal')
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
                        <div class="input-group input-group1">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                            </span>
                            <input type="text" class="form-control" placeholder="Search products">
                        </div><!-- /input-group -->
                    </div>
                    <div class="col-12 col-md-12 col-lg-6 logo-block">
                        <a title="Logo" href="{{ url('/shop') }}">
                            <img src=" {{ asset('images/logo/logo_putihNOBG.png') }}" alt="Logo" style="width: 35%; height: 100%;">
                        </a>
                    </div>
                    <div class="col-12 col-md-12 col-lg-3 ow-right-padding ">
                        <div class="row">
                            <form class="col-12  col-sm-6 col-md-6 col-lg-7">
                            </form>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-5 cart-link ow-right-padding">
                                <span>Cart ({{ count($cartItems) }})</span>
                                <div class="cart-dropdown" style="display: none;">
                                    @include('layouts.partials.cart', ['cartItems' => $cartItems, 'subtotal' => $subtotal, 'total' => $total])
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div><!-- container /- -->
        </div><!-- logo-add-block /- -->

        <!-- menu-block -->
        <div class="menu-block">
            <!-- container -->
            <div class="container">
                <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-static-top">
                    <div class="navbar-header">
                        <a href="{{ url('/shop') }}" class="logo"><img src=" {{ asset('images/logo/logo_putihNOBG.png') }}" alt="logo" style="max-width: 35%; height: auto;"></a>
                        <button class=" navbar-toggler collapsed" aria-controls="navbar" aria-expanded="false"
                            data-bs-target="#navbar" data-bs-toggle="collapse" type="button"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar">
                        <ul class="nav navbar-nav">
                            <li class="nav-item active"><a class="nav-link active" title="Home"
                                    href="{{ url('/shop') }}">Home</a></li>
                            <li class="nav-item active"><a class="nav-link active" title="Home"
                                    href="{{ url('/catalog') }}">Shop</a></li>
                            <!-- <li class="nav-item"><a class="nav-link" title="Look Book" href="{{ url('/lookbook') }}">Look
									Book</a></li>
							<li class="nav-item"><a class="nav-link" title="Blog" href="{{ url('/blog') }}">Blog</a></li> -->
                            <li class="nav-item"><a class="nav-link" title="About Us" href="{{ url('/about') }}">About Us</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" title="Contact us" href="{{ url('/contact') }}">Contact
                                    us</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </nav>
            </div><!-- container /- -->
        </div><!-- menu-block /- -->
    </header>
    <!-- Header Section /- -->

    <!-- Page Breadcrumb -->
    <!-- container -->
    <div class="container">
        <div class="page-breadcrumb">
            <ol class="breadcrumb">
                <li><a title="Home" href="{{ url('/shop') }}">Home</a></li>
                <li class="active">My Orders</li>
            </ol>
            <div class="return-home-link pull-right">
                <a title="Return to home page" href="{{ url('/shop') }}">return to home page</a>
            </div>
        </div>
        <div class="page-header bottom-shadow">
            <h3>My Orders</h3>

        </div><!-- Section Header /- -->
    </div><!-- container /- -->
    <!-- Page Breadcrumb /- -->

    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Total Amount</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($orders as $order)
                <tr>
                    <td>{{ $order->order_id }}</td>
                    <td>{{ $order->created_at->format('Y-m-d H:i') }}</td>
                    <td>{{ ucfirst($order->status) }}</td>
                    <td>Rp {{ number_format($order->total_amount, 0, ',', '.') }}</td>
                    <td>
                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                            data-bs-target="#orderModal{{ $order->id }}">
                            View Details
                        </button>
                    </td>
                </tr>

                <!-- Order Details Modal -->
                <div class="modal fade" id="orderModal{{ $order->id }}" tabindex="-1"
                    aria-labelledby="orderModalLabel{{ $order->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="orderModalLabel{{ $order->id }}">
                                    Order Details ({{ $order->order_id }})
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p><strong>Date:</strong> {{ $order->created_at->format('Y-m-d H:i') }}</p>
                                <p><strong>Status:</strong> {{ ucfirst($order->status) }}</p>

                                @if($order->status === 'shipped' && $order->resi)
                                <p><strong>Airway Bill (Resi):</strong> {{ $order->resi }}</p>
                                @endif

                                <h4>Customer Information</h4>
                                <ul>
                                    <li><strong>Name:</strong> {{ $order->customer_name }}</li>
                                    <li><strong>Email:</strong> {{ $order->customer_email }}</li>
                                    <li><strong>Phone:</strong> {{ $order->customer_phone }}</li>
                                    <li><strong>Address:</strong> {{ $order->customer_address }}</li>
                                </ul>

                                <h4>Products</h4>
                                <ul>
                                    @foreach (json_decode($order->products, true) as $product)
                                    <li>
                                        <strong>Product Name:</strong> {{ $product['name'] }}<br>
                                        <strong>Quantity:</strong> {{ $product['qty'] }}<br>
                                        <strong>Price:</strong> Rp {{ number_format($product['price'], 0, ',', '.') }}
                                    </li>
                                    <hr>
                                    @endforeach
                                </ul>

                                <h4>Total Amount</h4>
                                <p>Rp {{ number_format($order->total_amount, 0, ',', '.') }}</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <tr>
                    <td colspan="5" class="text-center">No orders found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Footer Section -->
    <div id="footer-section" class="footer-section">


        <!-- News Letter -->
        <div id="news-letter-section" class="news-letter-section">
            <!-- container -->
            <div class="container">
                <!-- Section Header -->
                <div class="section-header">
                    <h3>Sign up for our Newsletter</h3>
                </div><!-- Section Header /- -->
                <div class="col-12 col-md-12 col-lg-12">
                    <form class="navbar-form">
                        <div class="form-group">
                            <svg viewBox="0 0 485.211 485.211">
                                <path
                                    d="M485.211,363.906c0,10.637-2.992,20.498-7.785,29.174L324.225,221.67l151.54-132.584   c5.895,9.355,9.446,20.344,9.446,32.219V363.906z M242.606,252.793l210.863-184.5c-8.653-4.737-18.397-7.642-28.908-7.642H60.651   c-10.524,0-20.271,2.905-28.889,7.642L242.606,252.793z M301.393,241.631l-48.809,42.734c-2.855,2.487-6.41,3.729-9.978,3.729   c-3.57,0-7.125-1.242-9.98-3.729l-48.82-42.736L28.667,415.23c9.299,5.834,20.197,9.329,31.983,9.329h363.911   c11.784,0,22.687-3.495,31.983-9.329L301.393,241.631z M9.448,89.085C3.554,98.44,0,109.429,0,121.305v242.602   c0,10.637,2.978,20.498,7.789,29.174l153.183-171.44L9.448,89.085z" />
                            </svg>
                            <input type="text" class="form-control" placeholder="enter your email" required />
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div><!-- col-md-6 /- -->
            </div><!-- container /- -->
        </div> <!-- News Letter /- -->

        <!-- informational-icons -->
        <div class="informational bottom-shadow">
            <!-- container -->
            <div class="container">
                <ul class="informational-icons">
                    <li>
                        <svg class="free-shipping" viewBox="0 0 46.354 46.354">
                            <path
                                d="M45.186,27.226v-0.496l-4.175-13.713h-9.239V9.737H9.563v8.487H4.834l-2,2.667h6.729v1.928v0.072H2l-2,2.667h9.562v1.668   H8.5v4.5h1.062v0.668h0.722c0.404,2.393,2.485,4.223,4.992,4.223c2.507,0,4.587-1.83,4.991-4.223h11.382   c0.402,2.393,2.483,4.223,4.99,4.223c2.506,0,4.588-1.83,4.991-4.223h3.555v-0.668h1.169v-4.5H45.186L45.186,27.226z    M15.276,34.233c-1.479,0-2.684-1.205-2.684-2.686c0-1.479,1.204-2.683,2.684-2.683c1.479,0,2.683,1.203,2.683,2.683   C17.959,33.028,16.755,34.233,15.276,34.233z M36.64,34.233c-1.479,0-2.685-1.205-2.685-2.686c0-1.479,1.205-2.683,2.685-2.683   s2.683,1.203,2.683,2.683C39.322,33.028,38.119,34.233,36.64,34.233z M34.156,21.475v-6.074h5.088l1.85,6.074H34.156z" />
                        </svg>
                        <span>Free Shipping</span>
                    </li>
                    <li>
                        <svg class="support" viewBox="0 0 542.662 542.662">
                            <path
                                d="M363.168,74.051c-18.537,0-36.429,2.368-53.263,6.759c-28.03-11.01-59.299-17.199-92.283-17.199   C97.627,63.61,0,145.123,0,245.312c0,53.143,27.281,102.827,75.141,137.387v96.354l99.845-55.573   c14.104,2.345,28.421,3.54,42.63,3.54c59.479,0,113.439-20.042,152.763-52.445c8.983-0.304,17.994-1.161,26.909-2.607l84.34,46.938   v-81.527c38.906-28.556,61.034-69.348,61.034-112.994C542.674,141.492,462.142,74.051,363.168,74.051z M217.622,397.736   c-14.181,0-28.484-1.338-42.508-3.968l-5.2-0.973l-65.497,36.452v-62.022l-6.504-4.346c-43.617-29.15-68.636-72.008-68.636-117.568   c0-84.046,84.492-152.425,188.346-152.425c16.76,0,32.996,1.804,48.472,5.143c-49.541,26.786-82.437,73.399-82.437,126.354   c0,71.607,60.104,131.64,140.269,146.672C293.648,387.867,257.033,397.736,217.622,397.736z M458.865,317.593l-6.502,4.346v47.174   L402.377,341.3l-0.12,0.022l-5.072,0.949c-11.23,2.104-22.666,3.168-34.021,3.168c-1.225,0-2.425-0.052-3.637-0.074   c-81.162-1.572-146.593-55.214-146.593-120.982c0-51.133,39.568-94.93,95.313-112.642c14.197-4.509,29.437-7.33,45.355-8.145   c3.167-0.163,6.347-0.269,9.565-0.269c82.837,0,150.229,54.307,150.229,121.056C513.397,260.458,493.517,294.435,458.865,317.593z" />
                        </svg>
                        <span>24/7 Support</span>
                    </li>
                    <li>
                        <svg class="promotion" viewBox="0 0 512 512">
                            <path
                                d="M304,160c0-5.123-0.805-10.169-2.392-14.998c-1.379-4.197-5.902-6.479-10.098-5.102c-4.198,1.379-6.482,5.9-5.103,10.098   C287.464,153.212,288,156.577,288,160c0,17.645-14.355,32-32,32s-32-14.355-32-32s14.355-32,32-32c3.785,0,7.486,0.652,11,1.938   c4.15,1.519,8.744-0.613,10.263-4.762c1.519-4.149-0.613-8.744-4.762-10.263C267.219,112.981,261.668,112,256,112   c-26.467,0-48,21.533-48,48s21.533,48,48,48S304,186.468,304,160z" />
                            <path
                                d="M362.8,337.74c-6.429-6.768-12.821-11.898-16.698-14.788C355.164,293.051,360,260.978,360,228   c0-91.433-36.996-175.999-98.963-226.215c-2.937-2.38-7.137-2.38-10.073,0C188.996,52.001,152,136.568,152,228   c0,32.978,4.837,65.051,13.898,94.953c-3.877,2.89-10.269,8.02-16.698,14.788C135.133,352.548,128,367.439,128,382v122   c0,3.235,1.949,6.152,4.938,7.391c0.99,0.41,2.029,0.609,3.06,0.609c2.082,0,4.128-0.813,5.659-2.343l81.789-81.79   c7.648,8.595,15.853,16.563,24.554,23.864V503c0,4.418,3.582,8,8,8s8-3.582,8-8v-51.268c8.701-7.301,16.906-15.27,24.554-23.864   l81.789,81.79c1.53,1.53,3.576,2.343,5.659,2.343c1.03,0,2.07-0.199,3.06-0.609c2.989-1.238,4.938-4.155,4.938-7.391V382   C384,367.439,376.867,352.548,362.8,337.74z M144,484.687V382c0-12.767,9.018-24.998,16.582-33.01   c3.765-3.988,7.565-7.36,10.686-9.919c10.254,28.139,24.385,54.013,41.899,76.449L144,484.687z M264,430.271V328   c0-4.418-3.582-8-8-8s-8,3.582-8,8v102.271c-5.955-5.685-11.625-11.727-16.985-18.109c-0.357-0.652-0.806-1.266-1.358-1.818   c-0.175-0.175-0.358-0.337-0.545-0.492C190.317,362.437,168,297.387,168,228c0-84.128,32.782-161.908,88-209.571   C311.218,66.092,344,143.872,344,228c0,69.386-22.317,134.436-61.112,181.851c-0.187,0.155-0.37,0.317-0.545,0.492   c-0.552,0.552-1.001,1.166-1.358,1.818C275.625,418.544,269.955,424.586,264,430.271z M368,484.687l-69.167-69.167   c17.525-22.449,31.662-48.34,41.917-76.499C352.011,348.262,368,365.088,368,382V484.687z" />
                        </svg>
                        <span>Promotions</span>
                    </li>
                    <li>
                        <svg class="seller" viewBox="0 0 24 24">
                            <path
                                d="M15.997,13.865c0.174,0,0.328-0.113,0.381-0.278l0.641-2.006l1.679-1.238c0.138-0.103,0.196-0.28,0.144-0.444L18.2,7.893   l0.641-2.005c0.052-0.164-0.005-0.342-0.143-0.444l-1.679-1.239l-0.641-2.005c-0.053-0.165-0.207-0.278-0.381-0.278h-2.073   l-1.677-1.237c-0.141-0.104-0.333-0.104-0.475,0l-1.679,1.237h-2.07c-0.174,0-0.328,0.113-0.381,0.278L7.002,4.204l-1.68,1.239   C5.184,5.546,5.126,5.725,5.179,5.888l0.643,2.005L5.179,9.898c-0.052,0.163,0.005,0.342,0.144,0.444l1.68,1.238l0.641,2.006   c0.053,0.165,0.207,0.278,0.381,0.278h2.07l1.679,1.236c0.071,0.052,0.154,0.078,0.237,0.078s0.167-0.026,0.237-0.078l1.677-1.236   H15.997z M13.556,13.143l-1.546,1.14l-1.548-1.14c-0.069-0.051-0.152-0.078-0.237-0.078H8.315l-0.591-1.851   c-0.025-0.08-0.076-0.15-0.144-0.2L6.028,9.869l0.594-1.854c0.025-0.079,0.025-0.165,0-0.244L6.028,5.917l1.553-1.146   c0.068-0.051,0.118-0.12,0.144-0.2l0.591-1.85h1.909c0.085,0,0.168-0.027,0.237-0.078l1.548-1.141l1.546,1.141   c0.069,0.051,0.152,0.078,0.237,0.078h1.912l0.591,1.85c0.025,0.08,0.076,0.149,0.143,0.2l1.553,1.146l-0.592,1.854   c-0.025,0.079-0.025,0.165,0,0.244l0.592,1.854l-1.552,1.145c-0.068,0.051-0.118,0.12-0.144,0.2l-0.591,1.851h-1.912   C13.708,13.064,13.625,13.092,13.556,13.143z" />
                            <path
                                d="M9.922,15.596c-0.205-0.076-0.438,0.025-0.516,0.231l-2.285,5.985l-0.775-2.294c-0.039-0.115-0.128-0.207-0.243-0.248   c-0.114-0.043-0.241-0.028-0.345,0.035L3.7,20.57l2.012-5.657c0.074-0.208-0.035-0.437-0.243-0.511   c-0.208-0.074-0.437,0.035-0.511,0.243l-2.392,6.727C2.51,21.531,2.56,21.71,2.692,21.816c0.132,0.107,0.316,0.119,0.461,0.03   l2.596-1.597l0.97,2.872c0.054,0.16,0.203,0.269,0.371,0.272c0.002,0,0.005,0,0.008,0c0.166,0,0.314-0.103,0.374-0.258l2.682-7.024   C10.232,15.906,10.128,15.675,9.922,15.596z" />
                            <path
                                d="M21.434,21.372l-2.392-6.727c-0.074-0.208-0.305-0.317-0.511-0.243c-0.208,0.074-0.317,0.303-0.243,0.511l2.012,5.658   l-2.058-1.266c-0.104-0.063-0.23-0.077-0.346-0.035c-0.114,0.041-0.204,0.133-0.243,0.248l-0.775,2.294l-2.34-6.13   c-0.079-0.206-0.309-0.31-0.516-0.231c-0.207,0.079-0.31,0.311-0.231,0.517l2.736,7.169c0.059,0.155,0.208,0.258,0.374,0.258   c0.002,0,0.005,0,0.008,0c0.168-0.004,0.317-0.112,0.371-0.272l0.97-2.872l2.597,1.597c0.145,0.089,0.329,0.077,0.461-0.03   C21.44,21.71,21.49,21.531,21.434,21.372z" />
                        </svg>
                        <span>Top Seller</span>
                    </li>
                </ul>
            </div><!-- container /- -->
        </div><!-- informational-icons /- -->

        <!-- widget section -->
        <div class="widget-section bottom-shadow">
            <!-- container -->
            <div class="container">
                <div class="row">
                    <!-- widget about -->
                    <aside class="col-12 col-md-12 col-lg-3  widget widget_about">
                        <h3 class="widget-title logo-block">
                            <a title="Logo" href="{{ url('/shop') }}">
                                <img src=" {{ asset('images/logo/logo_putihNOBG.png') }}" alt="Logo" style="max-width: 60%; height: auto;">
                            </a>
                        </h3>
                        <div class="address">
                            <svg viewBox="0 0 512 512">
                                <path
                                    d="M192,307.188V160l128-96v227.5c-6.281,0.656-12.938,1.344-20.094,2.062c-27.969,2.813-62.781,6.313-107.281,13.531   L192,307.188z M488.344,145.813L352,64v223.125C406.281,277.188,426.531,253.375,488.344,145.813z M352,319.312V416l160,96V168.719   C445.719,282.938,421,307.906,352,319.312z M21.594,428.938L160,512V344.719C112.031,353.188,66.031,368,21.594,428.938z    M303.094,325.406c-27.531,2.781-61.813,6.219-105.344,13.25l-5.75,0.906V512l128-96v-92.375   C314.531,324.219,309.062,324.812,303.094,325.406z M80,144c-5.469,0-10.813-0.563-16-1.625V256l32-16v-97.625   C90.813,143.438,85.469,144,80,144z M80,0C44.656,0,16,28.625,16,64s28.656,64,64,64c35.375,0,64-28.625,64-64S115.375,0,80,0z    M64,80c-17.688,0-32-14.313-32-32s14.313-32,32-32s32,14.313,32,32S81.688,80,64,80z M128,146.656v113.125l-96,48V146.656   c-12.875-7.531-23.781-18-32-30.344v288.156C52.25,336.25,108.219,321,160,312.25V160l-27.375-16.438   C131.063,144.594,129.625,145.719,128,146.656z" />
                            </svg>
                            <h4>IRVASCA Headquarters </h4>
                            <p>Griya Pamoyanan, Blok G 17, Pamoyanan </p>
                            <p>Bogor, Indonesia, 16136</p>
                        </div>
                        <div class="helpline">
                            <svg viewBox="0 0 51.413 51.413">
                                <path
                                    d="M25.989,12.274c8.663,0.085,14.09-0.454,14.823,9.148h10.564c0-14.875-12.973-16.88-25.662-16.88    c-12.69,0-25.662,2.005-25.662,16.88h10.482C11.345,11.637,17.398,12.19,25.989,12.274z" />
                                <path
                                    d="M5.291,26.204c2.573,0,4.714,0.154,5.19-2.377c0.064-0.344,0.101-0.734,0.101-1.185H10.46H0    C0,26.407,2.369,26.204,5.291,26.204z" />
                                <path
                                    d="M40.88,22.642h-0.099c0,0.454,0.039,0.845,0.112,1.185c0.502,2.334,2.64,2.189,5.204,2.189    c2.936,0,5.316,0.193,5.316-3.374H40.88z" />
                                <path
                                    d="M35.719,20.078v-1.496c0-0.669-0.771-0.711-1.723-0.711h-1.555c-0.951,0-1.722,0.042-1.722,0.711    v1.289v1h-11v-1v-1.289c0-0.669-0.771-0.711-1.722-0.711h-1.556c-0.951,0-1.722,0.042-1.722,0.711v1.496v1.306    C12.213,23.988,4.013,35.073,3.715,36.415l0.004,8.955c0,0.827,0.673,1.5,1.5,1.5h40c0.827,0,1.5-0.673,1.5-1.5v-9    c-0.295-1.303-8.493-12.383-11-14.987V20.078z M19.177,37.62c-0.805,0-1.458-0.652-1.458-1.458s0.653-1.458,1.458-1.458    s1.458,0.652,1.458,1.458S19.982,37.62,19.177,37.62z M19.177,32.62c-0.805,0-1.458-0.652-1.458-1.458s0.653-1.458,1.458-1.458    s1.458,0.652,1.458,1.458S19.982,32.62,19.177,32.62z M19.177,27.621c-0.805,0-1.458-0.652-1.458-1.458    c0-0.805,0.653-1.458,1.458-1.458s1.458,0.653,1.458,1.458C20.635,26.969,19.982,27.621,19.177,27.621z M25.177,37.62    c-0.805,0-1.458-0.652-1.458-1.458s0.653-1.458,1.458-1.458c0.806,0,1.458,0.652,1.458,1.458S25.983,37.62,25.177,37.62z     M25.177,32.62c-0.805,0-1.458-0.652-1.458-1.458s0.653-1.458,1.458-1.458c0.806,0,1.458,0.652,1.458,1.458    S25.983,32.62,25.177,32.62z M25.177,27.621c-0.805,0-1.458-0.652-1.458-1.458c0-0.805,0.653-1.458,1.458-1.458    c0.806,0,1.458,0.653,1.458,1.458C26.635,26.969,25.983,27.621,25.177,27.621z M31.177,37.62c-0.806,0-1.458-0.652-1.458-1.458    s0.652-1.458,1.458-1.458s1.458,0.652,1.458,1.458S31.983,37.62,31.177,37.62z M31.177,32.62c-0.806,0-1.458-0.652-1.458-1.458    s0.652-1.458,1.458-1.458s1.458,0.652,1.458,1.458S31.983,32.62,31.177,32.62z M31.177,27.621c-0.806,0-1.458-0.652-1.458-1.458    c0-0.805,0.652-1.458,1.458-1.458s1.458,0.653,1.458,1.458C32.635,26.969,31.983,27.621,31.177,27.621z" />
                            </svg>
                            <h4>Help Lines</h4>
                            <p>+62 812-389-333</p>
                            <a href="https://wa.me/62812389333" target="_blank" title="Chat on WhatsApp" style="display: flex; align-items: center; gap: 8px;">Chat on WhatsApp
                                <i class="bi bi-whatsapp" style="color: #25D366; font-size: 24px;"></i>

                            </a>
                        </div>
                    </aside><!-- widget about /- -->

                    <!-- col-md-6 -->
                    <div class="col-12 col-md-12 col-lg-6">
                        <div class="row">
                            <aside class=" col-12 col-sm-4 col-md-4 col-lg-4 widget widget_list_style">
                                <h3 class="widget-title">
                                    GET INSPIRED
                                    <span>from our store</span>
                                </h3>
                                <ul>
                                    <li><a title="Tshirts" href="" style="pointer-events: none;">Tshirts</a></li>
                                    <li><a title="Jackets" href="" style="pointer-events: none;">Jackets</a></li>
                                    <li><a title="Dress" href="" style="pointer-events: none;">Dress</a></li>
                                    <li><a title="Hoodie" href="" style="pointer-events: none;">Hoodie</a></li>
                                    <!-- <li><a title="Jewelry" href="">Jewelry</a></li>
									<li><a title="Clothing" href="">Clothing</a></li> -->
                                </ul>
                            </aside>

                            <aside class="col-12 col-sm-4 col-md-4 col-lg-4 widget widget_list_style">
                                <h3 class="widget-title">
                                    ACCOUNT
                                    <span>informative details</span>
                                </h3>
                                <ul>
                                    <li><a title="Order Status" href="">Order Status</a></li>
                                    <li><a title="My Order History" href="">My Order History</a></li>
                                    <li><a title="My Favorites" href="">Privacy Policy</a></li>
                                    <!-- <li><a title="Promo codes" href="#">Promo codes</a></li> -->
                                    <!-- <li><a title="Payments" href="#">Payments</a></li> -->
                                    <!-- <li><a title="Returns" href="#">Returns</a></li> -->
                                </ul>
                            </aside>

                            <aside class="col-12  col-sm-4 col-md-4 col-lg-4 widget widget_list_style">
                                <h3 class="widget-title">
                                    OUR SHOPS
                                    <span>store locations</span>
                                </h3>
                                <ul>
                                    <li><a title="Indonesia" href="#" style="pointer-events: none;">Indonesia</a></li>
                                    <li><a title="USA" href="#" style="pointer-events: none;">USA</a></li>
                                    <li><a title="Europe" href="#" style="pointer-events: none;">Europe</a></li>
                                    <li><a title="Malaysia" href="#" style="pointer-events: none;">Malaysia</a></li>
                                    <li><a title="Thailand" href="#" style="pointer-events: none;">Thailand</a></li>
                                    <li><a title="Sidney" href="#" style="pointer-events: none;">Australia</a></li>
                                    <li><a title="Hong Kong" href="#" style="pointer-events: none;">Hong Kong</a></li>
                                    <li><a title="Philippines" href="#" style="pointer-events: none;">Philippines</a></li>

                                </ul>
                            </aside>
                        </div>
                    </div>

                    <aside class="col-12 col-md-12 col-lg-3 widget widget_list_style">
                        <h3 class="widget-title">
                            PAYMENTS
                            <span>Quick, Easy & Secure Payment Options!</span>
                        </h3>
                        <ul>
                            <li><a title="Facebook photo"><img src="images/logo/payment.png"
                                        alt="facebook-photo" /></a></li>
                        </ul>
                    </aside>
                </div>
            </div><!-- container /- -->
        </div><!-- widget section /- -->
        <!-- Footer bottom -->
        <div class="footer-bottom">
            <!-- container -->
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3 top-header">
                        <ul class="top-social ">
                            <!-- Facebook Icon -->
                            <li><a title="Facebook" href="https://www.facebook.com/irvasca/"><i class="fa fa-facebook"></i></a></li>

                            <!-- TikTok Icon -->
                            <li><a title="TikTok" href="https://www.tiktok.com/@irvasca"><svg viewBox="0 0 448 512">
                                        <path d="M448,209.2a209.3,209.3,0,0,1-135.6-48V349.7a94.2,94.2,0,1,1-87-93.4v60.8a33.4,33.4,0,1,0,21.5,30.6V128h66.3c7.4,47.7,46.9,83.9,93.8,83.9v61.2Z" />
                                    </svg></a></li>

                            <!-- Instagram Icon -->
                            <li><a title="Instagram" href="https://www.instagram.com/irvasca/"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 copy-rights">
                        <p> PT INOVASI IRVASCA INDONESIA&copy; 2024 </p>
                    </div>
                    <!--<div class="col-12 col-md-12 col-lg-3">-->
                    <!--	<a title="Payment-getway" href="#"><img src="images/footer/payment-getway-icon.png"-->
                    <!--			alt="payment-getway-icon"></a>-->
                    <!--</div>-->
                </div>
            </div><!-- container /- -->
            <a title="Back-to-top" id="back-to-top" href="#back-to-top" class="back-to-top"><i
                    class="fa fa-caret-up"></i></a>
        </div><!-- Footer Bottom -->
    </div><!-- Footer Section /- -->


    <!-- jQuery Include -->
    <script src="libraries/jquery.min.js"></script>
    <script type="text/javascript" src='https://maps.google.com/maps/api/js?sensor=false'></script>
    <script src="libraries/gmap/jquery.gmap.min.js"></script> <!-- Light Box -->
    <script src="libraries/jquery.easing.min.js"></script><!-- Easing Animation Effect -->
    <script src="libraries/bootstrap/bootstrap.bundle.min.js"></script> <!-- Core Bootstrap v3.3.4 -->
    <script src="libraries/fuelux/jquery-ui.min.js"></script>
    <script src="libraries/jquery.animateNumber.min.js"></script> <!-- Used for Animated Numbers -->
    <script src="libraries/jquery.appear.js"></script> <!-- It Loads jQuery when element is appears -->
    <script src="libraries/jquery.knob.js"></script> <!-- Used for Loading Circle -->
    <script src="libraries/wow.min.js"></script> <!-- Use For Animation -->
    <script src="libraries/owl-carousel/owl.carousel.min.js"></script> <!-- Core Owl Carousel CSS File  *	v1.3.3 -->
    <script src="libraries/expanding-search/modernizr.custom.js"></script> <!-- Core Owl Carousel CSS File  *	v1.3.3 -->
    <script src="libraries/flexslider/jquery.flexslider-min.js"></script> <!-- flexslider   -->
    <script src="libraries/jquery.magnific-popup.min.js"></script> <!-- Light Box -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Customized Scripts -->
    <script src="js/functions.js"></script>
    <script src="libraries/contact_form.js"></script>

</body>

</html>