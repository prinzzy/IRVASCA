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
						<li><a title="Facebook" href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a title="Twitter" href="#"><svg viewBox="0 0 512 512">
									<path
										d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
								</svg></a></li>
						<li><a title="Google" href="#"><svg viewBox="0 0 448 512">
									<path
										d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
								</svg></a></li>
						<li><a title="Pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
					</ul>
					<div
						class="col-12 col-md-12 col-lg-6 ow-right-padding  ow-right-padding2 d-flex align-content-center justify-content-end">
						<ul class="top-menu">
							<!-- <li><a title="My whishlist" href="#">My whishlist</a></li> -->
							<li><a title="CheckOut" href="#">CheckOut</a></li>
						</ul>
						<ul class="top-menu">
							<li><a title="Login" href="{{ url('/login-member') }}">Login</a></li>
							<li><a title="Register" href="{{ url('/register-member') }}">Register</a></li>
						</ul>
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
						<a title="Logo" href="{{ url('/index') }}">
							<img src=" {{ asset('images/logo/logo_putihNOBG.png') }}" alt="Logo" style="width: 35%; height: 100%;">
						</a>
					</div>
					<div class="col-12 col-md-12 col-lg-3 ow-right-padding ">
						<div class="row">
							<form class="col-12  col-sm-6 col-md-6 col-lg-7">
								<!-- <div class="select-styled">
									<select class="minimal">
										<option>Dollar (&#36;)</option>
										<option>Lira (&#8356;)</option>
										<option>Cent (&cent;)</option>
										<option>Pound (&pound;)</option>
										<option>Yen (&yen;)</option>
									</select>
								</div> -->
							</form>
							<div class="col-12 col-sm-6 col-md-6 col-lg-5 cart-link ow-right-padding">
								<svg width="16px" height="15px" viewBox="0 0 533.334 533.335">
									<g>
										<path
											d="M441.26,300.001c18.333,0,37.454-14.423,42.49-32.052l48.353-169.231c5.036-17.627-5.844-32.05-24.177-32.05H166.667   c0-36.819-29.848-66.667-66.667-66.667H0v66.667h100v283.333c0,27.614,22.386,50,50,50h316.667   c18.409,0,33.334-14.924,33.334-33.333s-14.925-33.334-33.334-33.334h-300v-33.333H441.26z M166.667,133.334h301.461l-28.573,100   H166.667V133.334z M200,491.668c0,22.916-18.75,41.666-41.667,41.666h-16.667c-22.917,0-41.667-18.75-41.667-41.666v-16.667   c0-22.917,18.75-41.667,41.667-41.667h16.667c22.917,0,41.667,18.75,41.667,41.667V491.668z M500,491.668   c0,22.916-18.75,41.666-41.667,41.666h-16.667c-22.916,0-41.666-18.75-41.666-41.666v-16.667c0-22.917,18.75-41.667,41.666-41.667   h16.667c22.917,0,41.667,18.75,41.667,41.667V491.668z" />
									</g>
								</svg>
								cart (2)
								<div class="cart-dropdown">
									<table>
										<tr>
											<td class="product-thumb"><a href="#"><img src="images/cart-hover-1.png"
														alt="cart-hover" /></a></td>
											<td><a title="Red Cotton Top" href="#">Red Cotton Top</a></td>
											<td>x1</td>
											<td>$92.00</td>
											<td><a title="close" href="#"><i class="fa fa-close"></i></a></td>
										</tr>
										<tr>
											<td class="product-thumb"><a href="#"><img src="images/cart-hover-2.png"
														alt="cart-hover" /></a></td>
											<td><a title="Red Cotton Top" href="#">Red Cotton Top</a></td>
											<td>x1</td>
											<td>$92.00</td>
											<td><a title="close" href="#"><i class="fa fa-close"></i></a></td>
										</tr>
									</table>
									<div class="sub-total">
										<p><span>Sub Total</span> $160.00</p>
										<p><span>Total</span> $160.00</p>
									</div>
									<div class="cart-button">
										<a title="Add to cart" href="#">add to cart</a>
										<a title="Checkout" href="#">Checkout</a>
									</div>
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
						<a href="{{ url('/index') }}" class="logo"><img src=" {{ asset('images/logo/logo_putihNOBG.png') }}" alt="logo" style="max-width: 35%; height: auto;"></a>
						<button class="navbar-toggler collapsed" aria-controls="navbar" aria-expanded="false"
							data-bs-target="#navbar" data-bs-toggle="collapse" type="button"
							aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
					</div>
					<div class="collapse navbar-collapse" id="navbar">
						<ul class="nav navbar-nav">
							<li class="nav-item active"><a class="nav-link active" title="Home"
									href="{{ url('/index') }}">Home</a></li>

							<li class="nav-item dropdown">
								<a title="Shop" href="#" class="nav-link dropdown-toggle"
									data-bs-toggle="dropdown">Shop</a>
								<ul class="dropdown-menu">
									<li><a title="product" class="dropdown-item" href="{{ url('/product') }}">product</a></li>
									<li><a title="Single product" class="dropdown-item"
											href="{{ url('/single-product') }}">single product</a></li>
									<li><a title="Single product" class="dropdown-item"
											href="{{ url('/single-product-2') }}">single product 2</a></li>
									<li><a title="Shopping cart" class="dropdown-item"
											href="{{ url('/shopping-cart') }}">shopping cart</a></li>
								</ul>
							</li>
							<li class="nav-item dropdown mega-dropdown">
								<a title="categories" href="{{ url('/ctg') }}" class="nav-link dropdown-toggle"
									data-bs-toggle="dropdown">categories
									<div role="tooltip" class="tooltip top">
										<div class="tooltip-arrow"></div>
										<div class="tooltip-inner">New</div>
									</div>
								</a>
								<ul class="dropdown-menu mega-dropdown-menu row">
									<div class="row">
										<li class="col-lg-3 col-md-6 col-12">
											<ul>
												<li class="dropdown-header">New in Stores</li>
												<li id="carouselExampleSlidesOnly"
													class="carousel slide mega-dropdown-slider" data-bs-ride="carousel">
													<ul class="carousel-inner">
														<li class="carousel-item active">
															<a title="Product 1" href="#"><img
																	src="images/mega-menu/new-collection.png"
																	class="img-responsive" alt="product 1"></a>
															<p><small>Summer dress floral prints</small></p>
															<button class="btn btn-primary" type="button">49,99
																€</button> <button class="btn btn-default"
																type="button"><span
																	class="glyphicon glyphicon-heart"></span> Add to
																Wishlist</button>
														</li><!-- End Item -->
														<li class="carousel-item">
															<a title="Product 2" href="#"><img
																	src="images/mega-menu/new-collection-2.png"
																	class="img-responsive" alt="product 2"></a>
															<p><small>Gold sandals with shiny touch</small></p>
															<button class="btn btn-primary" type="button">9,99
																€</button> <button class="btn btn-default"
																type="button"><span
																	class="glyphicon glyphicon-heart"></span> Add to
																Wishlist</button>
														</li><!-- End Item -->
														<li class="carousel-item">
															<a title="Product 3" href="#"><img
																	src="images/mega-menu/new-collection-3.png"
																	class="img-responsive" alt="product 3"></a>
															<p><small>Denin jacket stamped</small></p>
															<button class="btn btn-primary" type="button">49,99
																€</button> <button class="btn btn-default"
																type="button"><span
																	class="glyphicon glyphicon-heart"></span> Add to
																Wishlist</button>
														</li><!-- End Item -->
													</ul><!-- End Carousel Inner -->
												</li><!-- /.carousel -->
												<li class="divider"></li>
												<li><a title="View all Collection" class="nav-link" href="#">View all
														Collection <span
															class="glyphicon glyphicon-chevron-right pull-right"></span></a>
												</li>
											</ul>
										</li>
										<li class="col-lg-3 col-md-6 col-12">
											<ul>
												<li class="dropdown-header">Dresses</li>
												<li><a class="nav-link" title="Unique Features" href="#">Unique
														Features</a></li>
												<li><a class="nav-link" title="Image Responsive" href="#">Image
														Responsive</a></li>
												<li><a class="nav-link" title="Auto Carousel" href="#">Auto Carousel</a>
												</li>
												<li><a class="nav-link" title="Newsletter Form" href="#">Newsletter
														Form</a></li>
												<li><a class="nav-link" title="Four columns" href="#">Four columns</a>
												</li>
												<li class="divider"></li>
												<li class="dropdown-header">Tops</li>
												<li><a class="nav-link" title="Good Typography" href="#">Good
														Typography</a></li>
											</ul>
										</li>
										<li class=" col-lg-3 col-md-6 col-12">
											<ul>
												<li class="dropdown-header">Jackets</li>
												<li><a class="nav-link" title="Easy to customize" href="#">Easy to
														customize</a></li>
												<li><a class="nav-link" title="Glyphicons" href="#">Glyphicons</a></li>
												<li><a class="nav-link" title="Pull Right Elements" href="#">Pull Right
														Elements</a></li>
												<li class="divider"></li>
												<li class="dropdown-header">Pants</li>
												<li><a class="nav-link" title="Coloured Headers" href="#">Coloured
														Headers</a></li>
												<li><a class="nav-link" title="Primary Buttons & Default"
														href="#">Primary Buttons & Default</a></li>
												<li><a class="nav-link" title="Calls to action" href="#">Calls to
														action</a></li>
											</ul>
										</li>
										<li class="col-lg-3 col-md-6 col-12">
											<ul>
												<li class="dropdown-header">Accessories</li>
												<li><a class="nav-link" title="Default Navbar" href="#">Default
														Navbar</a></li>
												<li><a class="nav-link" title="Lovely Fonts" href="#">Lovely Fonts</a>
												</li>
												<li><a class="nav-link" title="Responsive Dropdown" href="#">Responsive
														Dropdown </a></li>
												<li class="divider"></li>
												<li class="dropdown-header">Pants</li>
												<li><a class="nav-link" title="Coloured Headers" href="#">Coloured
														Headers</a></li>
												<li><a class="nav-link" title="Primary Buttons & Default"
														href="#">Primary Buttons & Default</a></li>
												<li><a class="nav-link" title="Calls to action" href="#">Calls to
														action</a></li>
											</ul>
										</li>
									</div>
								</ul>
							</li>
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
				<li><a title="Home" href="{{ url('/index') }}">Home</a></li>
				<li class="active">Summary</li>
			</ol>
			<div class="return-home-link pull-right">
				<a title="Return to home page" href="{{ url('/index') }}">return to home page</a>
			</div>
		</div>
		<div class="page-header bottom-shadow">
			<h3>Summary</h3>
			<p>Payment Summary</p>
		</div><!-- Section Header /- -->
	</div><!-- container /- -->
	<!-- Page Breadcrumb /- -->

	<div class="page-wizard page-wizard1">
		<!-- container -->
		<div class="container">
			<ul class="bottom-shadow">
				<li class="active"><a href="{{ url('/login-member') }}">1# login</a></li>
				<li><a title="login" href="{{ url('/shipping-member') }}">2# Shipping Address</a></li>
				<li><a title="Shipping Address" href="{{ url('/payment-member') }}">3# Payments</a></li>
				<li><a title="summary" href="{{ url('/summary-member') }}">4# summary</a></li>
				<li><a title="Finish" href="{{ url('/finish-member') }}">5# Finish</a></li>
			</ul>
			<!-- contact-form-details -->
			<div class="contact-form-details">
				<div class="section-header">
					<h3>Send order’s</h3>
				</div>
				<div class="contact-form order-summart-text bottom-shadow">
					<h2>Order Summary.</h2>
					<p>Here are the Shipping and Product Details </p>
				</div>
			</div><!-- Contact Form Details /- -->

			<div class="shopping-information">
				<div class="row">
					<div class="col-12 col-md-4 col-lg-4 bottom-shadow">
						<div class="billing-information">
							<h2>Billing Information</h2>
							<p>IRVASCA</p>
							<p>Griya Pamoyanan,</p>
							<p>Bogor</p>
							<p>16136</p>
							<p>Indonesia</p>
						</div>
					</div>
					<div class="col-12 col-md-4 col-lg-4 bottom-shadow">
						<div class="billing-information">
							<h2>Shipping Address</h2>
							<p>Name</p>
							<p>Address,</p>
							<p>Address </p>
							<p>Address </p>
							<p>Address</p>
						</div>
					</div>
					<div class="col-12 col-md-4 col-lg-4 bottom-shadow">
						<div class="billing-information">
							<h2>Payment and Delivery</h2>
							<p>Payment <Span>Bank Transfer</span></p>
							<p>Delivery<span>Courier Service</span></p>
							<!-- <p>modify </p> -->
						</div>
					</div>
				</div>
			</div>
			<div class="page-content">
				<p>If there's anything else you'd like us to know about your order, please add it here.erra.</p>
			</div>
			<!-- Comment-area -->
			<div class="comment-area bottom-shadow">
				<form>
					<textarea class="form-control" id="comment" rows="7" placeholder="Your Comment to Order"></textarea>
				</form>
			</div><!-- comment-area /- -->

			<!-- Shopping-cart-table -->
			<div class="shopping-cart-table bottom-shadow">
				<table class="shop_table cart">
					<thead>
						<tr>
							<th class="product-name">Product</th>
							<th class="product-description">Description</th>
							<th class="product-color">Color</th>
							<th class="product-size">Size</th>
							<th class="blank-space"></th>
							<th class="product-quantity">Quantity</th>
							<th class="product-price">Price</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td data-title="Product" class="product-tdumbnail">
								<a title="Summary" href="#"><img src="images/summary/summary-1.png" alt="summary" /></a>
							</td>
							<td data-title="Description" class="product-description">
								<a title="Order No" href="#">
									<b>Fashionable Pink Top</b>
									Order No. 10101987 - 26
								</a>
							</td>
							<td data-title="Color" class="product-color">
								<span class="choose-color color1"></span>
							</td>
							<td data-title="Size" class="product-size">
								<span class="choose-size">xs</span>
							</td>
							<td class="blank-space"></td>
							<td data-title="Quantity" class="product-quantity">
								<div class="quantity">
									1
								</div>
							</td>
							<td data-title="Price" class="product-price">
								<span class="amount">&dollar; 19.99</span>
							</td>
						</tr>

						<tr>
							<td data-title="Product" class="product-tdumbnail">
								<a href="#"><img src="images/summary/summary-2.png" alt="summary" /></a>
							</td>
							<td data-title="Description" class="product-description">
								<a title="Order No" href="#">
									<b>Sed ligula magna facilisis.</b>
									Order No. 10101988 - 25
								</a>
							</td>
							<td data-title="Color" class="product-color">
								<span class="choose-color"></span>
							</td>
							<td data-title="Size" class="product-size">
								<span class="choose-size">L</span>
							</td>
							<td class="blank-space"></td>
							<td data-title="Quantity" class="product-quantity">
								<div class="quantity">
									1
								</div>
							</td>
							<td data-title="Price" class="product-price">
								<span class="amount">&dollar; 19.99</span>
							</td>
						</tr>
						<tr>
							<td data-title="Product" class="product-tdumbnail">
								<a title="Summary" href="#"><img src="images/summary/summary-3.png" alt="summary" /></a>
							</td>
							<td data-title="Description" class="product-description">
								<a title="Order No" href="#">
									<b>Vehicula vitae magna.</b>
									Order No. 10101989 - 24
								</a>
							</td>

							<td data-title="Color" class="product-color">
								<span class="choose-color color1"></span>
							</td>
							<td data-title="Size" class="product-size">
								<span class="choose-size color3">M</span>
							</td>
							<td class="blank-space"></td>
							<td data-title="Quantity" class="product-quantity">
								<div class="quantity">
									1
								</div>
							</td>
							<td data-title="Price" class="product-price">
								<span class="amount">&dollar; 19.99</span>
							</td>
						</tr>

						<tr>
							<td data-title="Product" class="product-tdumbnail">
								<a href="#"><img src="images/summary/summary-4.png" alt="summary" /></a>
							</td>
							<td data-title="Description" class="product-description">
								<a title="Order No" href="#">
									<b>Commodo a ipsum non.</b>
									Order No. 10101990 - 23
								</a>
							</td>

							<td data-title="Color" class="product-color">
								<span class="choose-color"></span>
							</td>
							<td data-title="Size" class="product-size">
								<span class="choose-size">S</span>
							</td>
							<td class="blank-space"></td>
							<td data-title="Quantity" class="product-quantity">
								<div class="quantity">
									1
								</div>
							</td>
							<td data-title="Price" class="product-price">
								<span class="amount">&dollar; 19.99</span>
							</td>
						</tr>
						<tr>
							<td data-title="Product" class="product-tdumbnail">
								<a href="#"><img src="images/summary/summary-5.png" alt="summary" /></a>
							</td>
							<td data-title="Description" class="product-description">
								<a title="Order No" href="#">
									<b>Vivamus placerat convis.</b>
									Order No. 10101991 - 22
								</a>
							</td>

							<td data-title="Color" class="product-color">
								<span class="choose-color color2"></span>
							</td>
							<td data-title="Size" class="product-size">

							</td>
							<td class="blank-space"></td>
							<td data-title="Quantity" class="product-quantity">
								<div class="quantity">
									1
								</div>
							</td>
							<td data-title="Price" class="product-price">
								<span class="amount">&dollar; 19.99</span>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="row">
					<div class="product-content col-12 col-md-12 col-lg-8">
						<h3 class="block-title">Order Total.</h3>
						<p>Your total cost, including shipping and services, is listed below</p>
					</div>
					<div class="product-total-price col-12 col-md-12 col-lg-4">
						<table>
							<tbody>
								<tr class="cart-subtotal">
									<th>Total</th>
									<td><span class="amount">&dollar;99.95</span></td>
								</tr>
								<tr class="shipping">
									<th>Estimated Shipping Cost</th>
									<td><span class="amount">&dollar;00.00</span></td>
								</tr>
								<tr class="order-total">
									<th>Together with VAT</th>
									<td><strong><span class="amount">&dollar;99.95</span></strong> </td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>

			<div class="wizard-footer">
				<a title="Back" href="{{ url('/payment-member') }}"
					class="btn btn-next btn-fill btn-warning btn-wd btn-sm ">Back</a>
				<a title="Continue" href="{{ url('/finish-member') }}"
					class="btn btn-next btn-fill btn-warning btn-wd btn-sm">Continue</a>
			</div>
		</div>

		<!-- Footer Section -->
		<div id="footer-section" class="footer-section">

			<!-- Add Banner -->

			<!-- Our Partner -->
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
								<input type="text" class="form-control" placeholder="your-email@website.com" required />
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
								<a title="Logo" href="{{ url('/index') }}">
									<img src="images/logo/logo_putihNOBG.png" alt="Logo" style="max-width: 60%; height: auto;">
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
										<li><a title="Shoes" href="{{ url('/ctg') }}">Shoes</a></li>
										<li><a title="Perfumes" href="{{ url('/ctg') }}">Perfumes</a></li>
										<li><a title="Bags" href="{{ url('/ctg') }}">Bags</a></li>
										<li><a title="Make Up" href="{{ url('/ctg') }}">Make Up</a></li>
										<li><a title="Jewelry" href="{{ url('/ctg') }}">Jewelry</a></li>
										<li><a title="Clothing" href="{{ url('/ctg') }}">Clothing</a></li>
									</ul>
								</aside>

								<aside class="col-12 col-sm-4 col-md-4 col-lg-4 widget widget_list_style">
									<h3 class="widget-title">
										ACCOUNT
										<span>informative details</span>
									</h3>
									<ul>
										<li><a title="Order Status" href="#">Order Status</a></li>
										<li><a title="My Order History" href="#">My Order History</a></li>
										<li><a title="My Favorites" href="#">My Favorites</a></li>
										<li><a title="Promo codes" href="#">Promo codes</a></li>
										<li><a title="Payments" href="#">Payments</a></li>
										<li><a title="Returns" href="#">Returns</a></li>
									</ul>
								</aside>

								<aside class="col-12  col-sm-4 col-md-4 col-lg-4 widget widget_list_style">
									<h3 class="widget-title">
										OUR SHOPS
										<span>store locations</span>
									</h3>
									<ul>
										<li><a title="Mumbai" href="#">Indonesia</a></li>
										<li><a title="INDORE" href="#">Malaysia</a></li>
										<li><a title="Toronto" href="#">Thailand</a></li>
										<li><a title="Sidney" href="#">Australia</a></li>
										<li><a title="New York" href="#">Hong Kong</a></li>
										<li><a title="Paris" href="#">Philippines</a></li>
									</ul>
								</aside>
							</div>
						</div><!-- col-md-6 /- -->

						<aside class="col-12 col-md-12 col-lg-3 widget widget_facebook">
							<div class="widget-title">
								<h4>IRVASCA <span>1.000.000 members </span></h4>
								<button type="submit" value="like" class="btn btn-default pull-right">Like <i
										class="fa fa-thumbs-o-up"></i> </button>
							</div>
							<ul>
								<li><a title="Facebook photo" href="#"><img src="images/footer/fb-1.jpg"
											alt="facebook-photo" /></a></li>
								<li><a title="Facebook photo" href="#"><img src="images/footer/fb-2.jpg"
											alt="facebook-photot" /></a></li>
								<li><a title="Facebook photo" href="#"><img src="images/footer/fb-3.jpg"
											alt="facebook-photo" /></a></li>
								<li><a title="Facebook photo" href="#"><img src="images/footer/fb-4.jpg"
											alt="facebook-photo" /></a></li>
								<li><a title="Facebook photo" href="#"><img src="images/footer/fb-5.jpg"
											alt="facebook-photo" /></a></li>
								<li><a title="Facebook photo" href="#"><img src="images/footer/fb-6.jpg"
											alt="facebook-photo" /></a></li>
								<li><a title="Facebook photo" href="#"><img src="images/footer/fb-7.jpg"
											alt="facebook-photo" /></a></li>
								<li><a title="Facebook photo" href="#"><img src="images/footer/fb-8.jpg"
											alt="facebook-photo" /></a></li>
							</ul>
							<a href="#"> facebook page </a>
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
								<li><a title="Facebook" href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a title="Twitter" href="#"><svg viewBox="0 0 512 512">
											<path
												d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
										</svg></a></li>
								<li><a title="Google plus" href="#"><svg viewBox="0 0 448 512">
											<path
												d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
										</svg></a></li>
								<li><a title="Pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
							</ul>
						</div>
						<div class="col-12 col-md-6 col-lg-6 copy-rights">
							<p> IRVASCA&copy; 2024 </p>
						</div>
						<div class="col-12 col-md-12 col-lg-3">
							<a title="Payment-getway" href="#"><img src="images/footer/payment-getway-icon.png"
									alt="payment-getway-icon"></a>
						</div>
					</div>
				</div><!-- container /- -->
				<a title="Back-to-top" id="back-to-top" href="#back-to-top" class="back-to-top"><i
						class="fa fa-caret-up"></i></a>
			</div><!-- Footer Bottom -->
		</div><!-- Footer Section /- -->

		<!-- jQuery Include -->
		<script src="libraries/jquery.min.js"></script>
		<script type="text/javascript" src='http://maps.google.com/maps/api/js?sensor=false'></script>
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
		<!-- Customized Scripts -->
		<script src="js/functions.js"></script>

</body>

</html>