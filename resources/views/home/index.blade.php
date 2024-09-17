<!doctype html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
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

	<link href='http://fonts.googleapis.com/css?family=PT+Serif:400,400italic,700,700italic' rel='stylesheet'
		type='text/css'>
	<link
		href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,400italic,300italic,500,500italic,700,700italic,900,900italic'
		rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic,900,900italic'
		rel='stylesheet' type='text/css'>

</head>

<body data-offset="200" data-spy="scroll" data-target=".primary-navigation">
	<!-- LOADER -->
	<!-- <div id="site-loader" class="load-complete">
		<div class="load-position">
			<div class="logo"><img src="images/logo.png" alt="logo"></div>
			<h6>Please wait, loading...</h6>
			<div class="loading">
				<div class="loading-line"></div>
				<div class="loading-break loading-dot-1"></div>
				<div class="loading-break loading-dot-2"></div>
				<div class="loading-break loading-dot-3"></div>
			</div>
		</div>
	</div> -->
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
						<button class=" navbar-toggler collapsed" aria-controls="navbar" aria-expanded="false"
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
																	src="{{ asset('images/mega-menu/new-collection.png') }}"
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
																	src="{{ asset('images/mega-menu/new-collection-2.png') }}"
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

	<!-- Slider Section -->
	<div id="slider-section" class="slider-section">
		<div id="carouselexamplegeneric" class="carousel slide slider-indexone" data-bs-ride="carousel">
			<!-- Indicators -->
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselexamplegeneric" data-bs-slide-to="0"
					class="active"></button>
				<button type="button" data-bs-target="#carouselexamplegeneric" data-bs-slide-to="1"></button>
				<button type="button" data-bs-target="#carouselexamplegeneric" data-bs-slide-to="2"></button>
			</div>
			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="carousel-item active">
					<img src="images/slider/slide-1.jpg" alt="slide-1">
					<div class="container">
						<div class="slider-box">
							<button class="btn">Button</button>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<img src="images/slider/slide-2.jpg" alt="slide-1">
					<div class="container">
						<div class="slider-box">
							<button class="btn">Button</button>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<img src="images/slider/slide-3.jpg" alt="slide-2">
					<div class="container">
						<div class="slider-box">
							<button class="btn">Button</button>
						</div>
					</div>
				</div>
			</div>
			<!-- Controls -->
			<a title="Previous" class="carousel-control-prev" data-bs-target="#carouselexamplegeneric" role="button"
				data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</a>
			<a title="Next" class="carousel-control-next" data-bs-target="#carouselexamplegeneric" role="button"
				data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</a>
		</div>

	</div>
	<!-- Slider Section /- -->

	<!-- Category Section -->
	<div id="category-section" class="category-section bottom-shadow">
		<!-- container -->
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-3 col-lg-3 categories-title">
					<h3>Special Offer’s and Discount</h3>
					<p>Vivamus nec urna luctus, dignissim est</p>
				</div>
				<div class="col-12 col-md-6 col-lg-6">
					<h3>70,000+ Collection</h3>
					<h4>500+ Stylish Brand’s</h4>
				</div>
				<div class="col-12 col-md-3 col-lg-3 categories-title">
					<h3>Free 30 Days Returns</h3>
					<p>Sed at justo eget nulla placerat</p>
				</div>
			</div>
			<div class="category-box-main categories-slider">
				<!-- Owl Carousel -->
				<div class="our-partner">
					<div id="categories-list" class="owl-carousel owl-theme">
						<div class="item">
							<div class="category-box">
								<span class="sale">+786</span>
								<a title="Women’s Wear" href="./02_categories.html">
									<img src="images/category/cat-img-1.jpg" alt="cat-img" />
									<span>Women’s Wear</span>
									<div class="cat-hover"></div>
								</a>
							</div>
						</div>
						<div class="item">
							<div class="category-box">
								<a title="Accessories" href="./02_categories.html">
									<img src="images/category/cat-img-2.jpg" alt="cat-img" />
									<span>Accessories </span>
									<div class="cat-hover"></div>
								</a>
							</div>
						</div>
						<div class="item">
							<div class="category-box">
								<span class="new">New</span>
								<a title="Kids Wear" href="./02_categories.html">
									<img src="images/category/cat-img-3.jpg" alt="cat-img" />
									<span>Women Shopping</span>
									<div class="cat-hover"></div>
								</a>
							</div>
						</div>
						<div class="item">
							<div class="category-box">
								<a title="Women Accessories" href="./02_categories.html">
									<img src="images/category/cat-img-4.jpg" alt="cat-img" />
									<span>Women Cosmetic</span>
									<div class="cat-hover"></div>
								</a>
							</div>
						</div>
						<div class="item">
							<div class="category-box">
								<span class="new">New</span>
								<a title="Kids Wear" href="./02_categories.html">
									<img src="images/category/cat-img-5.jpg" alt="cat-img" />
									<span>Kids Wear</span>
									<div class="cat-hover"></div>
								</a>
							</div>
						</div>
						<div class="item">
							<div class="category-box">
								<a title="Women Accessories" href="./02_categories.html">
									<img src="images/category/cat-img-6.jpg" alt="cat-img" />
									<span>Women Accessories</span>
									<div class="cat-hover"></div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- container /- -->
	</div><!-- Category Section /- -->

	<!-- Feature Product -->
	<Section id="featured-products" class="featured-products bottom-shadow">
		<!-- container -->
		<div class="container">
			<!-- Section Header -->
			<div class="section-header">
				<h3>Featured products</h3>
				<p>Nam ac egestas est. Mauris et pulvinar risus, at tincidunt lorem. Maecenas tristique sit amet odio
					sit amet aliquet. Quisque a pharetra quam. Sed in ultrices diam, eget sodales ligula. Sed ut
					tincidunt lacus.</p>
			</div><!-- Section Header /- -->

			<div class="category-box-main product-box-main row">
				<div class="col-lg-3 col-md-6 col-12">
					<div class="main-product">
						<div class="category-box product-box">
							<span class="sale">sales</span>
							<div class="inner-product">
								<img src="images/featured/featured-1.jpg" alt="featured-img" />
								<div class="product-box-inner">
									<ul>
										<li><a title="Eye" href="images/featured/featured-1.jpg"><i
													class="fa fa-eye"></i></a></li>
										<li><a title="Heart" href="#"><i class="fa fa-heart"></i></a></li>
									</ul>
									<a title="Add to cart" href="04_single_product.html" class="btn">add to cart</a>
								</div>
							</div>
						</div>
						<a href="04_single_product.html" class="product-title">Skater Dress</a>
						<ul class="star">
							<li>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
							</li>
						</ul>
						<span class="amount"><del>&dollar;24.99</del> &dollar;19.99</span>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="main-product">
						<div class="category-box product-box">
							<div class="inner-product">
								<img src="images/featured/featured-2.jpg" alt="featured-img" />
								<div class="product-box-inner">
									<ul>
										<li><a title="Eye" href="images/featured/featured-2.jpg"><i
													class="fa fa-eye"></i></a></li>
										<li><a title="Heart" href="#"><i class="fa fa-heart"></i></a></li>
									</ul>
									<a title="Add to cart" href="04_single_product.html" class="btn">add to cart</a>
								</div>
							</div>
						</div>
						<a title="Fashionable Pink Top" href="04_single_product.html" class="product-title">Mini Dress</a>
						<ul class="star">
							<li>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
							</li>
						</ul>
						<span class="amount"><del>&dollar;24.99</del> &dollar;19.99</span>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="main-product">
						<div class="category-box product-box">
							<span class="sale">sales</span>
							<div class="inner-product">
								<img src="images/featured/featured-3.jpg" alt="featured-img" />
								<div class="product-box-inner">
									<ul>
										<li><a title="Eye" href="images/featured/featured-3.jpg"><i
													class="fa fa-eye"></i></a></li>
										<li><a title="Heart" href="#"><i class="fa fa-heart"></i></a></li>
									</ul>
									<a title="Add to cart" href="04_single_product.html" class="btn">add to cart</a>
								</div>
							</div>
						</div>
						<a href="04_single_product.html" class="product-title">Off Shoulder Dress</a>
						<ul class="star">
							<li>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
							</li>
						</ul>
						<span class="amount"><del>&dollar;24.99</del> &dollar;19.99</span>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="main-product">
						<div class="category-box product-box">
							<div class="inner-product">
								<img src="images/featured/featured-4.jpg" alt="featured-img" />
								<div class="product-box-inner">
									<ul>
										<li><a title="Eye" href="images/featured/featured-4.jpg"><i
													class="fa fa-eye"></i></a></li>
										<li><a title="Heart" href="#"><i class="fa fa-heart"></i></a></li>
									</ul>
									<a href="04_single_product.html" class="btn">add to cart</a>
								</div>
							</div>
						</div>
						<a href="04_single_product.html" class="product-title">Sweater Dress</a>
						<ul class="star">
							<li>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
							</li>
						</ul>
						<span class="amount"><del>&dollar;24.99</del> &dollar;19.99</span>
					</div>
				</div>
			</div>
			<div class="category-box-main product-box-main row">
				<div class="col-lg-3 col-md-6 col-12">
					<div class="main-product">
						<div class="category-box product-box">
							<span class="sale">sales</span>
							<div class="inner-product">
								<img src="images/featured/featured-5.jpg" alt="featured-img" />
								<div class="product-box-inner">
									<ul>
										<li><a title="Eye" href="images/featured/featured-5.jpg"><i
													class="fa fa-eye"></i></a></li>
										<li><a title="Heart" href="#"><i class="fa fa-heart"></i></a></li>
									</ul>
									<a title="Add to cart" href="04_single_product.html" class="btn">add to cart</a>
								</div>
							</div>
						</div>
						<a href="04_single_product.html" class="product-title">Tie Detail Dress</a>
						<ul class="star">
							<li>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
							</li>
						</ul>
						<span class="amount"><del>&dollar;24.99</del> &dollar;19.99</span>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="main-product">
						<div class="category-box product-box">
							<div class="inner-product">
								<img src="images/featured/featured-6.jpg" alt="featured-img" />
								<div class="product-box-inner">
									<ul>
										<li><a title="Eye" href="images/featured/featured-6.jpg"><i
													class="fa fa-eye"></i></a></li>
										<li><a title="Heart" href="#"><i class="fa fa-heart"></i></a></li>
									</ul>
									<a title="Add to cart" href="04_single_product.html" class="btn">add to cart</a>
								</div>
							</div>
						</div>
						<a href="04_single_product.html" class="product-title">Peplum Dress</a>
						<ul class="star">
							<li>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
							</li>
						</ul>
						<span class="amount"><del>&dollar;24.99</del> &dollar;19.99</span>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="main-product">
						<div class="category-box product-box">
							<span class="sale">sales</span>
							<div class="inner-product">
								<img src="images/featured/featured-7.jpg" alt="featured-img" />
								<div class="product-box-inner">
									<ul>
										<li><a title="Eye" href="images/featured/featured-7.jpg"><i
													class="fa fa-eye"></i></a></li>
										<li><a title="Heart" href="#"><i class="fa fa-heart"></i></a></li>
									</ul>
									<a href="04_single_product.html" class="btn">add to cart</a>
								</div>
							</div>
						</div>
						<a href="04_single_product.html" class="product-title"> Backless Dress</a>
						<ul class="star">
							<li>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
							</li>
						</ul>
						<span class="amount"><del>&dollar;24.99</del> &dollar;19.99</span>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="main-product">
						<div class="category-box product-box">
							<div class="inner-product">
								<img src="images/featured/featured-8.jpg" alt="featured-img" />
								<div class="product-box-inner">
									<ul>
										<li><a title="Eye" href="images/featured/featured-8.jpg"><i
													class="fa fa-eye"></i></a></li>
										<li><a title="Heart" href="#"><i class="fa fa-heart"></i></a></li>
									</ul>
									<a title="Add to cart" href="04_single_product.html" class="btn">add to cart</a>
								</div>
							</div>
						</div>
						<a title="Fashionable Pink Top" href="04_single_product.html" class="product-title">Fringe Detail Dress</a>
						<ul class="star">
							<li>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
							</li>
						</ul>
						<span class="amount"><del>&dollar;24.99</del> &dollar;19.99</span>
					</div>
				</div>
			</div>
		</div><!-- container /- -->
	</section>
	<!-- Feature Product /- -->

	<!-- Feature Product -->
	<Section id="blog-section" class="blog-section bottom-shadow">
		<!-- container -->
		<div class="container">
			<!-- Section Header -->
			<div class="section-header">
				<h3>Latest From Our Blog</h3>
			</div><!-- Section Header /- -->
			<div class="row">
				<div class="col-12 col-md-12 col-lg-3">
					<div class="badge-box">
						<img src="images/blog/badge-img.jpg" alt="offer img" />
						<div class="badge-icon">
							<img src="images/blog/badge-icon.png" alt="badge icon" />
						</div>
					</div>
				</div>

				<div class="col-12 col-md-12 col-lg-6 blog-content">
					<article>
						<div class="row">
							<div class="col-md-4 col-sm-4 col-xs-4 ow-left-padding">
								<a class="post-thumbnail"><img src="images/blog/post-thumbnail-1.jpg"
										alt="post-thumbnail" /></a>
							</div>
							<div class="col-md-8 col-sm-8 col-xs-8">
								<header class="entry-header">
									<h2 class="entry-title"><a href="13_single-blog-post.html">Etiam leo neque, fringilla eget interdum nec,
											Aliquam vel justo.</a></h2>
								</header>
								<footer class="entry-footer">
									<span class="posted-on">
										<span class="sr-only">Posted on </span>
										<a rel="bookmark" href="13_single-blog-post.html">
											<span class="entry-date">04/12/14</span>
											<svg viewBox="0 0 276.338 276.338">
												<path
													d="M267.207,99.838v-37.64v-4.123c0-21.569-19.036-39.141-42.689-39.748v0.005v9.549v0.009v9.6v0.019v5.454    c0,13.999-11.388,25.387-25.384,25.387c-13.997,0-25.385-11.388-25.385-25.387v-5.582v-9.558v-9.558h-71.98v9.558v9.558v5.582    c0,13.999-11.388,25.387-25.386,25.387c-13.997,0-25.384-11.388-25.384-25.387v-5.372v-0.033v-9.631v-0.009V18.37V18.36    C27.737,19.345,9.131,36.756,9.131,58.07v4.123v37.64v132.573c0,24.218,19.709,43.932,43.929,43.932h170.216    c24.217,0,43.927-19.714,43.927-43.932V99.838H267.207z M248.09,232.411c0,13.684-11.131,24.811-24.814,24.811H53.065    c-13.682,0-24.812-11.127-24.812-24.811V99.838H248.09V232.411z" />
												<path
													d="M65.339,11.049v7.215v9.558v9.558v5.582c0,6.104,4.945,11.049,11.049,11.049c6.102,0,11.049-4.945,11.049-11.049v-5.582    v-9.558v-9.558v-7.215C87.438,4.945,82.491,0,76.389,0C70.284,0.005,65.339,4.95,65.339,11.049z" />
												<path
													d="M199.137,0.005c-6.104,0-11.051,4.945-11.051,11.049v7.215v9.558v9.558v5.582c0,6.104,4.946,11.049,11.051,11.049    s11.052-4.945,11.052-11.049v-5.587v-9.558v-9.558v-7.215C210.18,4.95,205.238,0.005,199.137,0.005z" />
												<path
													d="M106.19,231.87c12.463,0,21.875-3.481,28.238-10.445c6.352-6.963,9.535-15.037,9.535-24.222    c0-8.737-2.719-15.626-8.163-20.666c-1.477-1.354-2.814-2.437-4.009-3.239c-2.188-1.475-2.352-2.529-0.292-4.125    c1.157-0.901,2.294-1.988,3.407-3.268c3.794-4.392,5.691-9.782,5.691-16.176c0-9.026-3.171-16.23-9.532-21.597    s-14.725-8.048-25.095-8.048c-5.582,0-10.296,0.674-14.137,2.021c-3.839,1.349-7.15,3.292-9.945,5.841    c-3.739,3.594-6.48,7.512-8.23,11.759c-1.15,3.388-1.949,6.921-2.39,10.584c-0.315,2.623,1.769,4.761,4.406,4.761h10.356    c2.64,0,4.674-2.156,5.057-4.77c0.465-3.174,1.505-5.853,3.116-8.032c2.366-3.192,6.065-4.793,11.093-4.793    c4.383,0,7.775,1.297,10.193,3.893c2.408,2.595,3.619,5.964,3.619,10.108c0,6.395-2.366,10.637-7.089,12.732    c-2.053,0.933-5.29,1.544-9.696,1.838c-2.632,0.168-4.774,2.324-4.774,4.957v5.717c0,2.637,2.147,4.756,4.784,4.9    c4.669,0.248,8.254,0.878,10.744,1.899c5.773,2.399,8.66,7.169,8.66,14.3c0,5.396-1.559,9.521-4.669,12.396    c-3.11,2.87-6.763,4.303-10.944,4.303c-6.823,0-11.532-2.618-14.118-7.859c-0.845-1.731-1.433-3.733-1.767-6.011    c-0.383-2.614-2.462-4.771-5.106-4.771H73.726c-2.639,0-4.718,2.138-4.427,4.761c0.714,6.478,2.343,11.878,4.879,16.194    C80.157,226.853,90.831,231.87,106.19,231.87z" />
												<path
													d="M165.582,154.303h15.976c2.637,0,4.778,2.138,4.778,4.779v65.312c0,2.637,2.143,4.779,4.779,4.779h12.308    c2.637,0,4.778-2.143,4.778-4.779v-99.005c0-2.637-2.142-4.779-4.778-4.779h-8.266c-2.637,0-4.812,0.994-5.064,2.188    c-0.135,0.63-0.312,1.349-0.541,2.151c-0.942,3.244-2.343,5.839-4.182,7.785c-2.688,2.842-6.175,4.739-10.454,5.691    c-1.997,0.448-5.115,0.808-9.344,1.092c-2.632,0.168-4.77,2.399-4.77,5.031v4.966    C160.802,152.161,162.949,154.303,165.582,154.303z" />
											</svg>
										</a>
									</span>
									<span class="comments-link">
										<a href="#">12
											<svg viewBox="0 0 441.6 441.6">
												<path
													d="M406.975,205.046v5.087c0,46.294-37.663,83.958-83.958,83.958H201.071v10.472c0,22.139,17.946,40.084,40.083,40.084    h101.938l46.158,45.411c1.645,1.617,3.828,2.477,6.047,2.477c1.123,0,2.254-0.221,3.33-0.67c3.204-1.344,5.289-4.479,5.289-7.951    v-39.345c21.019-1.242,37.683-18.675,37.683-40.006V244.75C441.6,224.467,426.528,207.711,406.975,205.046z" />
												<path
													d="M383.787,208.459v-95.437c0-35.323-28.636-63.958-63.958-63.958H63.958C28.635,49.064,0,77.699,0,113.022v95.437    c0,34.037,26.589,61.851,60.126,63.833v62.777c0,5.542,3.327,10.544,8.438,12.686c1.718,0.721,3.522,1.069,5.313,1.069    c3.542,0,7.025-1.368,9.649-3.95l73.65-72.457h162.651C355.152,272.418,383.787,243.783,383.787,208.459z" />
											</svg>
										</a>
									</span>
									<span class="byline">
										<span class="author vcard">
											<span class="sr-only">Author </span>
											<a href="#" class="url fn n">Artist
												<svg viewBox="0 0 43.028 43.028">
													<path
														d="M39.561,33.971l-0.145,0.174c-4.774,5.728-11.133,8.884-17.902,8.884c-6.77,0-13.128-3.155-17.903-8.884l-0.144-0.174   l0.034-0.223c0.922-6.014,4.064-10.845,8.847-13.606l0.34-0.196l0.271,0.284c2.259,2.37,5.297,3.674,8.554,3.674   s6.295-1.305,8.554-3.674l0.271-0.284l0.34,0.196c4.783,2.761,7.925,7.592,8.848,13.606L39.561,33.971z M21.514,21.489   c5.924,0,10.744-4.82,10.744-10.744C32.258,4.821,27.438,0,21.514,0S10.77,4.821,10.77,10.744S15.59,21.489,21.514,21.489z" />
												</svg>
											</a>
										</span>
									</span>
								</footer>
								<div class="entry-content">
									<p>Quisque finibus eleifend elit, et mattis magna dignissim a. Phasellus auctor
										facilisis mollis.</p>
								</div>
								<a href="13_single-blog-post.html" class="read-more">Read More</a>
							</div>
						</div>
					</article>

					<article>
						<div class="row">
							<div class="col-md-4 col-sm-4 col-xs-4 ow-left-padding">
								<a class="post-thumbnail"><img src="images/blog/post-thumbnail-2.jpg"
										alt="post-thumbnail" /></a>
							</div>
							<div class="col-md-8 col-sm-8 col-xs-8">
								<header class="entry-header">
									<h2 class="entry-title"><a href="13_single-blog-post.html">GOLD at mollis nibh, quis varius massa.
											Pellentesque nibh massa.</a></h2>
								</header>
								<footer class="entry-footer">
									<span class="posted-on">
										<span class="sr-only">Posted on </span>
										<a rel="bookmark" href="javascript:;">
											<span class="entry-date">03/12/14
												<svg viewBox="0 0 276.338 276.338">
													<path
														d="M267.207,99.838v-37.64v-4.123c0-21.569-19.036-39.141-42.689-39.748v0.005v9.549v0.009v9.6v0.019v5.454    c0,13.999-11.388,25.387-25.384,25.387c-13.997,0-25.385-11.388-25.385-25.387v-5.582v-9.558v-9.558h-71.98v9.558v9.558v5.582    c0,13.999-11.388,25.387-25.386,25.387c-13.997,0-25.384-11.388-25.384-25.387v-5.372v-0.033v-9.631v-0.009V18.37V18.36    C27.737,19.345,9.131,36.756,9.131,58.07v4.123v37.64v132.573c0,24.218,19.709,43.932,43.929,43.932h170.216    c24.217,0,43.927-19.714,43.927-43.932V99.838H267.207z M248.09,232.411c0,13.684-11.131,24.811-24.814,24.811H53.065    c-13.682,0-24.812-11.127-24.812-24.811V99.838H248.09V232.411z" />
													<path
														d="M65.339,11.049v7.215v9.558v9.558v5.582c0,6.104,4.945,11.049,11.049,11.049c6.102,0,11.049-4.945,11.049-11.049v-5.582    v-9.558v-9.558v-7.215C87.438,4.945,82.491,0,76.389,0C70.284,0.005,65.339,4.95,65.339,11.049z" />
													<path
														d="M199.137,0.005c-6.104,0-11.051,4.945-11.051,11.049v7.215v9.558v9.558v5.582c0,6.104,4.946,11.049,11.051,11.049    s11.052-4.945,11.052-11.049v-5.587v-9.558v-9.558v-7.215C210.18,4.95,205.238,0.005,199.137,0.005z" />
													<path
														d="M106.19,231.87c12.463,0,21.875-3.481,28.238-10.445c6.352-6.963,9.535-15.037,9.535-24.222    c0-8.737-2.719-15.626-8.163-20.666c-1.477-1.354-2.814-2.437-4.009-3.239c-2.188-1.475-2.352-2.529-0.292-4.125    c1.157-0.901,2.294-1.988,3.407-3.268c3.794-4.392,5.691-9.782,5.691-16.176c0-9.026-3.171-16.23-9.532-21.597    s-14.725-8.048-25.095-8.048c-5.582,0-10.296,0.674-14.137,2.021c-3.839,1.349-7.15,3.292-9.945,5.841    c-3.739,3.594-6.48,7.512-8.23,11.759c-1.15,3.388-1.949,6.921-2.39,10.584c-0.315,2.623,1.769,4.761,4.406,4.761h10.356    c2.64,0,4.674-2.156,5.057-4.77c0.465-3.174,1.505-5.853,3.116-8.032c2.366-3.192,6.065-4.793,11.093-4.793    c4.383,0,7.775,1.297,10.193,3.893c2.408,2.595,3.619,5.964,3.619,10.108c0,6.395-2.366,10.637-7.089,12.732    c-2.053,0.933-5.29,1.544-9.696,1.838c-2.632,0.168-4.774,2.324-4.774,4.957v5.717c0,2.637,2.147,4.756,4.784,4.9    c4.669,0.248,8.254,0.878,10.744,1.899c5.773,2.399,8.66,7.169,8.66,14.3c0,5.396-1.559,9.521-4.669,12.396    c-3.11,2.87-6.763,4.303-10.944,4.303c-6.823,0-11.532-2.618-14.118-7.859c-0.845-1.731-1.433-3.733-1.767-6.011    c-0.383-2.614-2.462-4.771-5.106-4.771H73.726c-2.639,0-4.718,2.138-4.427,4.761c0.714,6.478,2.343,11.878,4.879,16.194    C80.157,226.853,90.831,231.87,106.19,231.87z" />
													<path
														d="M165.582,154.303h15.976c2.637,0,4.778,2.138,4.778,4.779v65.312c0,2.637,2.143,4.779,4.779,4.779h12.308    c2.637,0,4.778-2.143,4.778-4.779v-99.005c0-2.637-2.142-4.779-4.778-4.779h-8.266c-2.637,0-4.812,0.994-5.064,2.188    c-0.135,0.63-0.312,1.349-0.541,2.151c-0.942,3.244-2.343,5.839-4.182,7.785c-2.688,2.842-6.175,4.739-10.454,5.691    c-1.997,0.448-5.115,0.808-9.344,1.092c-2.632,0.168-4.77,2.399-4.77,5.031v4.966    C160.802,152.161,162.949,154.303,165.582,154.303z" />
												</svg>
											</span>
										</a>
									</span>
									<span class="comments-link">
										<a href="#">55
											<svg viewBox="0 0 441.6 441.6">
												<path
													d="M406.975,205.046v5.087c0,46.294-37.663,83.958-83.958,83.958H201.071v10.472c0,22.139,17.946,40.084,40.083,40.084    h101.938l46.158,45.411c1.645,1.617,3.828,2.477,6.047,2.477c1.123,0,2.254-0.221,3.33-0.67c3.204-1.344,5.289-4.479,5.289-7.951    v-39.345c21.019-1.242,37.683-18.675,37.683-40.006V244.75C441.6,224.467,426.528,207.711,406.975,205.046z" />
												<path
													d="M383.787,208.459v-95.437c0-35.323-28.636-63.958-63.958-63.958H63.958C28.635,49.064,0,77.699,0,113.022v95.437    c0,34.037,26.589,61.851,60.126,63.833v62.777c0,5.542,3.327,10.544,8.438,12.686c1.718,0.721,3.522,1.069,5.313,1.069    c3.542,0,7.025-1.368,9.649-3.95l73.65-72.457h162.651C355.152,272.418,383.787,243.783,383.787,208.459z" />
											</svg>
										</a>
									</span>
									<span class="byline">
										<span class="author vcard">
											<span class="sr-only">Author </span>
											<a title="" href="#" class="url fn n">Ajay
												<svg viewBox="0 0 43.028 43.028">
													<path
														d="M39.561,33.971l-0.145,0.174c-4.774,5.728-11.133,8.884-17.902,8.884c-6.77,0-13.128-3.155-17.903-8.884l-0.144-0.174   l0.034-0.223c0.922-6.014,4.064-10.845,8.847-13.606l0.34-0.196l0.271,0.284c2.259,2.37,5.297,3.674,8.554,3.674   s6.295-1.305,8.554-3.674l0.271-0.284l0.34,0.196c4.783,2.761,7.925,7.592,8.848,13.606L39.561,33.971z M21.514,21.489   c5.924,0,10.744-4.82,10.744-10.744C32.258,4.821,27.438,0,21.514,0S10.77,4.821,10.77,10.744S15.59,21.489,21.514,21.489z" />
												</svg>
											</a>
										</span>
									</span>
								</footer>
								<div class="entry-content">
									<p>Quisque finibus eleifend elit, et mattis magna dignissim a. Phasellus auctor
										facilisis mollis.</p>
								</div>
								<a href="13_single-blog-post.html" class="read-more">Read More</a>
							</div>
						</div>
					</article>
				</div>

				<div class=" col-12 col-md-12 col-lg-3">
					<div class="badge-box">
						<img src="images/blog/badge-img-2.jpg" alt="offer img" />
						<div class="middle-add">
							<h3>Take a walk on the wild side</h3>
							<a title="Read More" href="13_single-blog-post.html" class="read-more">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- Container /- -->
	</section>

	<!-- Footer Section -->
	<div id="footer-section" class="footer-section">

		<!-- Add Banner -->
		<div id="add-banner-section" class="add-banner-section bottom-shadow">
			<!-- container -->
			<div class="container">
				<a title="Add-banner" href="#"><img src="images/add-banner-2.jpg" alt="add-banner" /></a>
			</div><!-- container /- -->
		</div><!-- Add Banner /- -->

		<!-- Our Partner -->
		<div id="our-partner-section" class="our-partner-section bottom-shadow">
			<!-- container -->
			<div class="container">
				<!-- Section Header -->
				<div class="section-header">
					<h3>Partners with us</h3>
					<p>Nam ac egestas est. Mauris et pulvinar risus, at tincidunt lorem. Maecenas tristique sit amet
						odio sit amet aliquet. Quisque a pharetra quam. Sed in ultrices diam, eget sodales ligula. Sed
						ut tincidunt lacus.</p>
				</div><!-- Section Header /- -->
				<!-- Owl Carousel -->
				<div id="our-partner" class="owl-carousel owl-theme our-partner">
					<div class="item">
						<a title="Partner" href="#" class="partner-box">
							<img src="images/partner/partner-1.png" alt="partner-1" />
						</a>
					</div>
					<div class="item">
						<a title="Partner" href="#" class="partner-box">
							<img src="images/partner/partner-2.png" alt="partner-1" />
						</a>
					</div>
					<div class="item">
						<a title="Partner" href="#" class="partner-box">
							<img src="images/partner/partner-3.png" alt="partner-1" />
						</a>
					</div>
					<div class="item">
						<a title="Partner" href="#" class="partner-box">
							<img src="images/partner/partner-4.png" alt="partner-1" />
						</a>
					</div>
					<div class="item">
						<a title="Partner" href="#" class="partner-box">
							<img src="images/partner/partner-1.png" alt="partner-1" />
						</a>
					</div>
					<div class="item">
						<a title="Partner" href="#" class="partner-box">
							<img src="images/partner/partner-2.png" alt="partner-1" />
						</a>
					</div>
				</div><!-- Owl Carousel /- -->
			</div><!-- container /- -->
		</div><!-- Our Partner /- -->

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
							<p>+61 3 8376 6284</p>
							<p>+61 3 8376 6285</p>
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
									<li><a title="Shoes" href="02_categories.html">Shoes</a></li>
									<li><a title="Perfumes" href="02_categories.html">Perfumes</a></li>
									<li><a title="Bags" href="02_categories.html">Bags</a></li>
									<li><a title="Make Up" href="02_categories.html">Make Up</a></li>
									<li><a title="Jewelry" href="02_categories.html">Jewelry</a></li>
									<li><a title="Clothing" href="02_categories.html">Clothing</a></li>
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
							<h4>IRVASCA <span>400.000 members </span></h4>
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
	<script src="{{ asset('libraries/jquery.min.js') }}"></script>

	<!-- Google Maps API -->
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

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

	<!-- Customized Scripts -->
	<script src="{{ asset('js/functions.js') }}"></script>

</body>

</html>