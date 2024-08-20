<!DOCTYPE html>
<html lang="en">

<head>
  <title>IRVASCA</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="utf-8" />
  <meta property="twitter:card" content="summary_large_image" />

  <style data-tag="reset-style-sheet">
    html {
      line-height: 1.15;
    }

    body {
      margin: 0;
    }

    * {
      box-sizing: border-box;
      border-width: 0;
      border-style: solid;
    }

    p,
    li,
    ul,
    pre,
    div,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    figure,
    blockquote,
    figcaption {
      margin: 0;
      padding: 0;
    }

    button {
      background-color: transparent;
    }

    button,
    input,
    optgroup,
    select,
    textarea {
      font-family: inherit;
      font-size: 100%;
      line-height: 1.15;
      margin: 0;
    }

    button,
    select {
      text-transform: none;
    }

    button,
    [type="button"],
    [type="reset"],
    [type="submit"] {
      -webkit-appearance: button;
      appearance: button;
    }

    button::-moz-focus-inner,
    [type="button"]::-moz-focus-inner,
    [type="reset"]::-moz-focus-inner,
    [type="submit"]::-moz-focus-inner {
      border-style: none;
      padding: 0;
    }

    button:-moz-focus,
    [type="button"]:-moz-focus,
    [type="reset"]:-moz-focus,
    [type="submit"]:-moz-focus {
      outline: 1px dotted ButtonText;
    }

    a {
      color: inherit;
      text-decoration: inherit;
    }

    input {
      padding: 2px 4px;
    }

    img {
      display: block;
    }

    html {
      scroll-behavior: smooth;
    }
  </style>

  <style data-tag="default-style-sheet">
    html {
      font-family: Inter;
      font-size: 16px;
    }

    body {
      font-weight: 400;
      font-style: normal;
      text-decoration: none;
      text-transform: none;
      letter-spacing: normal;
      line-height: 1.15;
      color: var(--dl-color-theme-neutral-dark);
      background-color: var(--dl-color-theme-neutral-light);

      fill: var(--dl-color-theme-neutral-dark);
    }
  </style>
  <link
    rel="stylesheet"
    href="https://unpkg.com/animate.css@4.1.1/animate.css" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
    data-tag="font" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=STIX+Two+Text:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;display=swap"
    data-tag="font" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
    data-tag="font" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
    data-tag="font" />
  <link
    rel="stylesheet"
    href="https://unpkg.com/@teleporthq/teleport-custom-scripts/dist/style.css" />
  <style>
    @keyframes fade-in-left {
      0% {
        opacity: 0;
        transform: translateX(-20px);
      }

      100% {
        opacity: 1;
        transform: translateX(0);
      }
    }
  </style>
</head>

<body>
  <link rel="stylesheet" href="/css/style.css" />
  <div>
    <link href="/css/index.css" rel="stylesheet" />

    <div class="home-container">
      <navbar-wrapper class="navbar-navbar-wrapper">
        <header class="navbar-container">
          <header data-thq="thq-navbar" class="navbar-navbar-interactive">
            <img
              alt="IRVASCA Logo"
              src="{{ asset('images/logo/logo_ungu.jpg') }}"
              class="navbar-image1"
              style="width: 120px; height: auto;" />
            <div data-thq="thq-navbar-nav" class="navbar-desktop-menu">
              <nav class="navbar-links1">
                <span class="thq-link thq-body-small" style="color: white;"><span>Home</span></span>
                <span class="thq-link thq-body-small" style="color: white;"><span>Shop</span></span>
                <span class="thq-link thq-body-small" style="color: white;"><span>Collections</span></span>
                <span class="thq-link thq-body-small" style="color: white;"><span>About Us</span></span>
                <span class="thq-link thq-body-small" style="color: white;"><span>Contact</span></span>
              </nav>
              <div class="navbar-buttons1">
                <button class="navbar-action11 thq-button-animated thq-button-filled" style="background-color: #b78027; border-color: #b78027;">
                  <span class="thq-body-smallnav">Login</span>
                </button>
                <button class="navbar-action21 thq-button-outline thq-button-animated" style="color: #b78027; border-color: #b78027;">
                  <span class="thq-body-smallnav">Register</span>
                </button>
              </div>
            </div>
            <div data-thq="thq-burger-menu" class="navbar-burger-menu">
              <svg viewBox="0 0 1024 1024" class="navbar-icon1">
                <path
                  d="M128 554.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 298.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 810.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667z"></path>
              </svg>
            </div>
            <div data-thq="thq-mobile-menu" class="navbar-mobile-menu">
              <div class="navbar-nav">
                <div class="navbar-top">
                  <img
                    alt="IRVASCA Logo"
                    src="{{ asset('images/logo/logo_putih.jpg') }}"
                    class="navbar-logo"
                    style="width: 120px; height: auto;" />
                  <div data-thq="thq-close-menu" class="navbar-close-menu">
                    <svg viewBox="0 0 1024 1024" class="navbar-icon3">
                      <path
                        d="M810 274l-238 238 238 238-60 60-238-238-238 238-60-60 238-238-238-238 60-60 238 238 238-238z"></path>
                    </svg>
                  </div>
                </div>
                <nav class="navbar-links2">
                  <span class="thq-linkm thq-body-small">
                    <span>Home</span>
                  </span>
                  <span class="thq-linkm thq-body-small">
                    <span>Shop</span>
                  </span>
                  <span class="thq-linkm thq-body-small">
                    <span>Collections</span>
                  </span>
                  <span class="thq-linkm thq-body-small">
                    <span>About Us</span>
                  </span>
                  <span class="thq-linkm thq-body-small">
                    <span>Contact</span>
                  </span>
                </nav>
              </div>
              <div class="navbar-buttons2">
                <button class="thq-button-filled" style="color: #b78027; border-color: #b78027;">Login</button>
                <button class="thq-button-outline" style="color: #b78027; border-color: #b78027;">Register</button>
              </div>
            </div>
          </header>
        </header>
      </navbar-wrapper>
      <hero-wrapper class="hero-hero-wrapper">
        <div class="hero-header78">
          <div class="hero-column thq-section-padding thq-section-max-width">
            <div class="hero-content1">
              <h1 class="hero-text1 thq-heading-1">
                <span>IRVASCA</span>
              </h1>
              <p class="hero-text2 thq-body-large">
                <span>
                  Experience the epitome of luxury with our exclusive
                  collection of outfit, accessories, and more.
                </span>
              </p>
            </div>
            <div class="hero-actions">
              <button class="thq-button-filled hero-button1" style="background-color: #b78027; border-color: #b78027;">
                <span class="thq-body-small"><span>Shop Now</span></span>
              </button>
              <button class="thq-button-outline hero-button2" style="border-color: #b78027;">
                <span class="thq-body-small"><span>Discover More</span></span>
              </button>
            </div>
          </div>
          <div class="hero-content2">
            <div
              class="hero-row-container1 thq-animated-group-container-horizontal thq-mask-image-horizontal">
              <div class="thq-animated-group-horizontal">
                <img
                  alt="Luxury Handbag"
                  src="https://images.unsplash.com/photo-1505330622279-bf7d7fc918f4?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcyMzU4NDA0Mnw&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080"
                  class="hero-placeholder-image10 thq-img-scale thq-img-ratio-1-1" />
                <img
                  alt="Elegant Watch"
                  src="https://images.unsplash.com/photo-1498673394965-85cb14905c89?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcyMzU4NDAzN3w&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080"
                  class="hero-placeholder-image11 thq-img-scale thq-img-ratio-1-1" />
                <img
                  alt="Stylish Sunglasses"
                  src="https://images.unsplash.com/photo-1502945015378-0e284ca1a5be?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcyMzU4NDAzNnw&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080"
                  class="hero-placeholder-image12 thq-img-scale thq-img-ratio-1-1" />
                <img
                  alt="Chic Wallet"
                  src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcyMzU4NDA0Mnw&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080"
                  class="hero-placeholder-image13 thq-img-scale thq-img-ratio-1-1" />
                <img
                  alt="Sophisticated Shoes"
                  src="https://images.unsplash.com/photo-1507206130118-b5907f817163?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcyMzU4NDA0MXw&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080"
                  class="hero-placeholder-image14 thq-img-scale thq-img-ratio-1-1" />
                <img
                  alt="Classy Belt"
                  src="https://images.unsplash.com/photo-1474557157379-8aa74a6ef541?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcyMzU4NDAzOXw&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080"
                  class="hero-placeholder-image15 thq-img-scale thq-img-ratio-1-1" />
              </div>
              <div class="thq-animated-group-horizontal">
                <img
                  alt="Luxury Handbag"
                  src="https://images.unsplash.com/photo-1505330622279-bf7d7fc918f4?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcyMzU4NDA0Mnw&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080"
                  class="hero-placeholder-image16 thq-img-scale thq-img-ratio-1-1" />
                <img
                  alt="Elegant Watch"
                  src="https://images.unsplash.com/photo-1498673394965-85cb14905c89?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcyMzU4NDAzN3w&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080"
                  class="hero-placeholder-image17 thq-img-scale thq-img-ratio-1-1" />
                <img
                  alt="Stylish Sunglasses"
                  src="https://images.unsplash.com/photo-1502945015378-0e284ca1a5be?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcyMzU4NDAzNnw&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080"
                  class="hero-placeholder-image18 thq-img-scale thq-img-ratio-1-1" />
                <img
                  alt="Chic Wallet"
                  src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcyMzU4NDA0Mnw&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080"
                  class="hero-placeholder-image19 thq-img-scale thq-img-ratio-1-1" />
                <img
                  alt="Sophisticated Shoes"
                  src="https://images.unsplash.com/photo-1507206130118-b5907f817163?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcyMzU4NDA0MXw&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080"
                  class="hero-placeholder-image20 thq-img-scale thq-img-ratio-1-1" />
                <img
                  alt="Hero Image"
                  src="https://images.unsplash.com/photo-1534312527009-56c7016453e6?ixid=M3w5MTMyMXwwfDF8c2VhcmNofDIxfHxhYnN0cmFjdHxlbnwwfHx8fDE3MTA4NzA5MzB8MA&amp;ixlib=rb-4.0.3&amp;w=1500"
                  class="hero-placeholder-image21 thq-img-scale thq-img-ratio-1-1" />
              </div>
            </div>
            <div
              class="hero-row-container2 thq-animated-group-container-horizontal thq-mask-image-horizontal">
              <div class="thq-animated-group-horizontal-reverse">
                <img
                  alt="Fashionable Scarf"
                  src="https://images.unsplash.com/photo-1487058792275-0ad4aaf24ca7?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcyMzU4NDAzOXw&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080"
                  class="hero-placeholder-image22 thq-img-scale thq-img-ratio-1-1" />
                <img
                  alt="Trendy Hat"
                  src="https://images.unsplash.com/photo-1493836512294-502baa1986e2?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcyMzU4NDA0MXw&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080"
                  class="hero-placeholder-image23 thq-img-scale thq-img-ratio-1-1" />
                <img
                  alt="Exclusive Perfume"
                  src="https://images.unsplash.com/photo-1493934558415-9d19f0b2b4d2?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcyMzU4NDA0MHw&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080"
                  class="hero-placeholder-image24 thq-img-scale thq-img-ratio-1-1" />
                <img
                  alt="Luxurious Jewelry"
                  src="https://images.unsplash.com/photo-1516383740770-fbcc5ccbece0?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcyMzU4NDA0Mnw&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080"
                  class="hero-placeholder-image25 thq-img-scale thq-img-ratio-1-1" />
                <img
                  alt="Designer Coat"
                  src="https://images.unsplash.com/photo-1515377905703-c4788e51af15?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcyMzU4NDAzOHw&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080"
                  class="hero-placeholder-image26 thq-img-scale thq-img-ratio-1-1" />
                <img
                  alt="High-end Luggage"
                  src="https://images.unsplash.com/photo-1542353436-312f0e1f67ff?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcyMzU4NDA0MHw&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080"
                  class="hero-placeholder-image27 thq-img-scale thq-img-ratio-1-1" />
              </div>
              <div class="thq-animated-group-horizontal-reverse">
                <img
                  alt="Fashionable Scarf"
                  src="https://images.unsplash.com/photo-1487058792275-0ad4aaf24ca7?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcyMzU4NDAzOXw&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080"
                  class="hero-placeholder-image28 thq-img-scale thq-img-ratio-1-1" />
                <img
                  alt="Trendy Hat"
                  src="https://images.unsplash.com/photo-1493836512294-502baa1986e2?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcyMzU4NDA0MXw&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080"
                  class="hero-placeholder-image29 thq-img-scale thq-img-ratio-1-1" />
                <img
                  alt="Exclusive Perfume"
                  src="https://images.unsplash.com/photo-1493934558415-9d19f0b2b4d2?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcyMzU4NDA0MHw&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080"
                  class="hero-placeholder-image30 thq-img-scale thq-img-ratio-1-1" />
                <img
                  alt="Luxurious Jewelry"
                  src="https://images.unsplash.com/photo-1516383740770-fbcc5ccbece0?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcyMzU4NDA0Mnw&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080"
                  class="hero-placeholder-image31 thq-img-scale thq-img-ratio-1-1" />
                <img
                  alt="Designer Coat"
                  src="https://images.unsplash.com/photo-1515377905703-c4788e51af15?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcyMzU4NDAzOHw&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080"
                  class="hero-placeholder-image32 thq-img-scale thq-img-ratio-1-1" />
                <img
                  alt="Hero Image"
                  src="https://images.unsplash.com/photo-1568214379698-8aeb8c6c6ac8?ixid=M3w5MTMyMXwwfDF8c2VhcmNofDEyfHxncmFmaWN8ZW58MHx8fHwxNzE1Nzk0OTk5fDA&amp;ixlib=rb-4.0.3&amp;w=1500"
                  class="hero-placeholder-image33 thq-img-scale thq-img-ratio-1-1" />
              </div>
            </div>
          </div>
          <div>
            <div class="hero-container2">
              <style>
                @keyframes scroll-x {
                  from {
                    transform: translateX(0);
                  }

                  to {
                    transform: translateX(calc(-100% - 16px));
                  }
                }

                @keyframes scroll-y {
                  from {
                    transform: translateY(0);
                  }

                  to {
                    transform: translateY(calc(-100% - 16px));
                  }
                }
              </style>
            </div>
          </div>
        </div>
      </hero-wrapper>
      <features1-wrapper class="features1-features1-wrapper">
        <div class="thq-section-padding">
          <div class="features1-container2 thq-section-max-width">
            <div class="features1-image-container">
              <img
                alt="Luxury Handbags"
                src="https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcyMzU4NDAzN3w&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080"
                class="features1-image1 thq-img-ratio-16-9" />
              <img
                alt="Premium Leather Goods"
                src="https://images.unsplash.com/photo-1518611507436-f9221403cca2?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcyMzU4NDAzOHw&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080"
                class="features1-image2 thq-img-ratio-16-9" />
              <img
                alt="Luxury Accessories"
                src="https://images.unsplash.com/photo-1502945015378-0e284ca1a5be?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcyMzU4NDAzNnw&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080"
                class="features1-image3 thq-img-ratio-16-9" />
            </div>
            <div class="features1-tabs-menu">
              <div class="features1-tab-horizontal1">
                <div class="features1-divider-container1">
                  <div class="features1-container3"></div>
                </div>
                <div class="features1-content1">
                  <h2 class="thq-heading-2">
                    <span>Handcrafted Elegance</span>
                  </h2>
                  <span class="thq-body-small">
                    <span>
                      Indulge in the finest handcrafted luxury handbags.
                    </span>
                  </span>
                </div>
              </div>
              <div class="features1-tab-horizontal2">
                <div class="features1-divider-container2">
                  <div class="features1-container4"></div>
                </div>
                <div class="features1-content2">
                  <h2 class="thq-heading-2"><span>Leather Goods</span></h2>
                  <span class="thq-body-small">
                    <span>Discover our premium range of leather goods.</span>
                  </span>
                </div>
              </div>
              <div class="features1-tab-horizontal3">
                <div class="features1-divider-container3">
                  <div class="features1-container5"></div>
                </div>
                <div class="features1-content3">
                  <h2 class="thq-heading-2"><span>Accessories</span></h2>
                  <span class="thq-body-small">
                    <span>
                      Explore our exclusive collection of high-end
                      accessories.
                    </span>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </features1-wrapper>
      <cta-wrapper class="cta-cta-wrapper">
        <div class="thq-section-padding">
          <div class="thq-section-max-width">
            <div class="cta-accent2-bg">
              <div class="cta-accent1-bg">
                <div class="cta-container2">
                  <div class="cta-content">
                    <span class="thq-heading-2">
                      <span>Discover the Latest Collection</span>
                    </span>
                    <p class="thq-body-large">
                      <span>
                        Explore our exclusive range of luxury handbags, shoes,
                        and accessories.
                      </span>
                    </p>
                  </div>
                  <div class="cta-actions">
                    <button
                      type="button"
                      class="thq-button-filled cta-button" style="background-color: #b78027; border-color: #b78027;">
                      <span>Shop Now</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </cta-wrapper>
      <features2-wrapper class="features2-features2-wrapper">
        <div class="thq-section-padding">
          <div class="features2-container2 thq-section-max-width">
            <div class="features2-tabs-menu">
              <div class="features2-tab-horizontal1">
                <div class="features2-divider-container1">
                  <div class="features2-container3"></div>
                </div>
                <div class="features2-content1">
                  <h2 class="thq-heading-2"><span>Feature #1</span></h2>
                  <span class="thq-body-small">
                    <span>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                      Suspendisse varius enim in eros elementum tristique.
                      Duis cursus, mi quis viverra ornare, eros dolor interdum
                      nulla, ut commodo diam libero vitae erat.
                    </span>
                  </span>
                </div>
              </div>
              <div class="features2-tab-horizontal2">
                <div class="features2-divider-container2">
                  <div class="features2-container4"></div>
                </div>
                <div class="features2-content2">
                  <h2 class="thq-heading-2">
                    <span>Luxurious Designs</span>
                  </h2>
                  <span class="thq-body-small">
                    <span>
                      Explore our collection of luxurious and elegant designs
                      crafted with precision and attention to detail.
                    </span>
                  </span>
                </div>
              </div>
              <div class="features2-tab-horizontal3">
                <div class="features2-divider-container3">
                  <div class="features2-container5"></div>
                </div>
                <div class="features2-content3">
                  <h2 class="thq-heading-2"><span>Feature #3</span></h2>
                  <span class="thq-body-small">
                    <span>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                      Suspendisse varius enim in eros elementum tristique.
                      Duis cursus, mi quis viverra ornare, eros dolor interdum
                      nulla, ut commodo diam libero vitae erat.
                    </span>
                  </span>
                </div>
              </div>
            </div>
            <div class="features2-image-container">
              <img
                alt="feature 1"
                src="https://images.unsplash.com/photo-1507925921958-8a62f3d1a50d?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcyMzU4NDAzNnw&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080"
                class="features2-image1 thq-img-ratio-16-9" />
              <img
                alt="Luxurious Designs Image Alt Text"
                src="https://images.unsplash.com/photo-1501349800519-48093d60bde0?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcyMzU4NDAzOXw&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080"
                class="features2-image2 thq-img-ratio-16-9" />
              <img
                alt="image"
                src="https://images.unsplash.com/photo-1518611507436-f9221403cca2?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcyMzU4NDAzOHw&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080"
                class="features2-image3 thq-img-ratio-16-9" />
            </div>
          </div>
        </div>
      </features2-wrapper>
      <pricing-wrapper class="pricing-pricing-wrapper">
        <div class="pricing-pricing23 thq-section-padding">
          <div class="pricing-max-width thq-section-max-width">
            <div class="pricing-section-title">
              <span class="pricing-text10 thq-body-small">
                <span>Choose the perfect for you</span>
              </span>
              <div class="pricing-content">
                <h2 class="pricing-text11 thq-heading-2">
                  <span> Colections</span>
                </h2>
                <p class="pricing-text12 thq-body-large">
                  <span>
                    Discover our selections.
                  </span>
                </p>
              </div>
            </div>
            <div class="pricing-tabs">
              <button
                class="pricing-button11 thq-button-outline thq-button-animated">
                <span class="thq-body-small">Women Bags</span>
              </button>
              <button
                class="pricing-button11 thq-button-outline thq-button-animated">
                <span class="thq-body-small">Tee</span>
              </button>
              <button
                class="pricing-button11 thq-button-outline thq-button-animated">
                <span class="thq-body-small">Jackets</span>
              </button>
              <button
                class="pricing-button11 thq-button-outline thq-button-animated">
                <span class="thq-body-small">Accessories</span>
              </button>
            </div>
            <div class="pricing-container1">
              <div class="pricing-column1 thq-card">
                <div class="pricing-price10">
                  <div class="pricing-price11">
                    <p class="pricing-text17 thq-body-large">
                      <span>T-shirt1</span>
                    </p>
                    <h3 class="pricing-text18 thq-heading-3">
                      <span>$99</span>
                    </h3>
                    <p class="thq-body-large"><span>$999</span></p>
                  </div>
                  <div class="pricing-list1">
                    <div class="pricing-list-item10">
                      <svg viewBox="0 0 1024 1024" class="thq-icon-small">
                        <path
                          d="M384 690l452-452 60 60-512 512-238-238 60-60z"></path>
                      </svg>
                      <span class="thq-body-small">
                        <span>Feature 1 included</span>
                      </span>
                    </div>
                    <div class="pricing-list-item11">
                      <svg viewBox="0 0 1024 1024" class="thq-icon-small">
                        <path
                          d="M384 690l452-452 60 60-512 512-238-238 60-60z"></path>
                      </svg>
                      <span class="thq-body-small">
                        <span>Feature 2 included</span>
                      </span>
                    </div>
                    <div class="pricing-list-item12">
                      <svg viewBox="0 0 1024 1024" class="thq-icon-small">
                        <path
                          d="M384 690l452-452 60 60-512 512-238-238 60-60z"></path>
                      </svg>
                      <span class="thq-body-small">
                        <span>Feature 3 included</span>
                      </span>
                    </div>
                  </div>
                </div>
                <button
                  class="pricing-button14 thq-button-outline thq-button-animated">
                  <span class="thq-body-small"><span>Buy Now</span></span>
                </button>
              </div>
              <div class="pricing-column2 thq-card">
                <div class="pricing-price12">
                  <div class="pricing-price13">
                    <p class="pricing-text24 thq-body-large">
                      <span>T-shirt2</span>
                    </p>
                    <h3 class="pricing-text25 thq-heading-3">
                      <span>$199</span>
                    </h3>
                    <p class="thq-body-large"><span>$1999</span></p>
                  </div>
                  <div class="pricing-list2">
                    <div class="pricing-list-item13">
                      <svg viewBox="0 0 1024 1024" class="thq-icon-small">
                        <path
                          d="M384 690l452-452 60 60-512 512-238-238 60-60z"></path>
                      </svg>
                      <span class="thq-body-small">
                        <span>Feature 1 included</span>
                      </span>
                    </div>
                    <div class="pricing-list-item14">
                      <svg viewBox="0 0 1024 1024" class="thq-icon-small">
                        <path
                          d="M384 690l452-452 60 60-512 512-238-238 60-60z"></path>
                      </svg>
                      <span class="thq-body-small">
                        <span>Feature 2 included</span>
                      </span>
                    </div>
                    <div class="pricing-list-item15">
                      <svg viewBox="0 0 1024 1024" class="thq-icon-small">
                        <path
                          d="M384 690l452-452 60 60-512 512-238-238 60-60z"></path>
                      </svg>
                      <span class="thq-body-small">
                        <span>Feature 3 included</span>
                      </span>
                    </div>
                    <div class="pricing-list-item16">
                      <svg viewBox="0 0 1024 1024" class="thq-icon-small">
                        <path
                          d="M384 690l452-452 60 60-512 512-238-238 60-60z"></path>
                      </svg>
                      <span class="thq-body-small">
                        <span>Feature text goes here</span>
                      </span>
                    </div>
                  </div>
                </div>
                <button class="pricing-button14 thq-button-outline thq-button-animated">
                  <span class="thq-body-small"><span>Buy Now</span></span>
                </button>
              </div>
              <div class="pricing-column3 thq-card">
                <div class="pricing-price14">
                  <div class="pricing-price15">
                    <p class="pricing-text32 thq-body-large">
                      <span>T-shirt3</span>
                    </p>
                    <h3 class="pricing-text33 thq-heading-3">
                      <span>$299</span>
                    </h3>
                    <p class="thq-body-large"><span>$2999</span></p>
                  </div>
                  <div class="pricing-list3">
                    <div class="pricing-list-item17">
                      <svg viewBox="0 0 1024 1024" class="thq-icon-small">
                        <path
                          d="M384 690l452-452 60 60-512 512-238-238 60-60z"></path>
                      </svg>
                      <span class="thq-body-small">
                        <span>Feature 1 included</span>
                      </span>
                    </div>
                    <div class="pricing-list-item18">
                      <svg viewBox="0 0 1024 1024" class="thq-icon-small">
                        <path
                          d="M384 690l452-452 60 60-512 512-238-238 60-60z"></path>
                      </svg>
                      <span class="thq-body-small">
                        <span>Feature 2 included</span>
                      </span>
                    </div>
                    <div class="pricing-list-item19">
                      <svg viewBox="0 0 1024 1024" class="thq-icon-small">
                        <path
                          d="M384 690l452-452 60 60-512 512-238-238 60-60z"></path>
                      </svg>
                      <span class="thq-body-small">
                        <span>Feature 3 included</span>
                      </span>
                    </div>
                    <div class="pricing-list-item20">
                      <svg viewBox="0 0 1024 1024" class="thq-icon-small">
                        <path
                          d="M384 690l452-452 60 60-512 512-238-238 60-60z"></path>
                      </svg>
                      <span class="thq-body-small">
                        <span>Feature text goes here</span>
                      </span>
                    </div>
                    <div class="pricing-list-item21">
                      <svg viewBox="0 0 1024 1024" class="thq-icon-small">
                        <path
                          d="M384 690l452-452 60 60-512 512-238-238 60-60z"></path>
                      </svg>
                      <span class="thq-body-small">
                        <span>Feature text goes here</span>
                      </span>
                    </div>
                  </div>
                </div>
                <button class="pricing-button14 thq-button-outline thq-button-animated">
                  <span class="thq-body-small"><span>Buy Now</span></span>
                </button>
              </div>
            </div>
            <div class="pricing-container2">
              <div class="pricing-column4 thq-card">
                <div class="pricing-price16">
                  <div class="pricing-price17">
                    <span class="pricing-text41 thq-body-large">
                      <span>T-shirt4</span>
                    </span>
                    <h3 class="pricing-text42 thq-heading-3">
                      <span>$200</span>
                    </h3>
                  </div>
                  <div class="pricing-list4">
                    <div class="pricing-list-item22">
                      <svg viewBox="0 0 1024 1024" class="thq-icon-small">
                        <path
                          d="M384 690l452-452 60 60-512 512-238-238 60-60z"></path>
                      </svg>
                      <span class="thq-body-small">
                        <span>Feature text goes here</span>
                      </span>
                    </div>
                    <div class="pricing-list-item23">
                      <svg viewBox="0 0 1024 1024" class="thq-icon-small">
                        <path
                          d="M384 690l452-452 60 60-512 512-238-238 60-60z"></path>
                      </svg>
                      <span class="thq-body-small">
                        <span>Feature text goes here</span>
                      </span>
                    </div>
                    <div class="pricing-list-item24">
                      <svg viewBox="0 0 1024 1024" class="thq-icon-small">
                        <path
                          d="M384 690l452-452 60 60-512 512-238-238 60-60z"></path>
                      </svg>
                      <span class="thq-body-small">
                        <span>Feature text goes here</span>
                      </span>
                    </div>
                  </div>
                </div>
                <button class="pricing-button14 thq-button-outline thq-button-animated">
                  <span class="thq-body-small"><span>Buy Now</span></span>
                </button>
              </div>
              <div class="pricing-column5 thq-card">
                <div class="pricing-price18">
                  <div class="pricing-price19">
                    <span class="pricing-text48 thq-body-large">
                      <span>T-shirt3</span>
                    </span>
                    <h3 class="pricing-text49 thq-heading-3">
                      <span>$299</span>
                    </h3>
                  </div>
                  <div class="pricing-list5">
                    <div class="pricing-list-item25">
                      <svg viewBox="0 0 1024 1024" class="thq-icon-small">
                        <path
                          d="M384 690l452-452 60 60-512 512-238-238 60-60z"></path>
                      </svg>
                      <span class="thq-body-small">
                        <span>Feature text goes here</span>
                      </span>
                    </div>
                    <div class="pricing-list-item26">
                      <svg viewBox="0 0 1024 1024" class="thq-icon-small">
                        <path
                          d="M384 690l452-452 60 60-512 512-238-238 60-60z"></path>
                      </svg>
                      <span class="thq-body-small">
                        <span>Feature text goes here</span>
                      </span>
                    </div>
                    <div class="pricing-list-item27">
                      <svg viewBox="0 0 1024 1024" class="thq-icon-small">
                        <path
                          d="M384 690l452-452 60 60-512 512-238-238 60-60z"></path>
                      </svg>
                      <span class="thq-body-small">
                        <span>Feature text goes here</span>
                      </span>
                    </div>
                    <div class="pricing-list-item28">
                      <svg viewBox="0 0 1024 1024" class="thq-icon-small">
                        <path
                          d="M384 690l452-452 60 60-512 512-238-238 60-60z"></path>
                      </svg>
                      <span class="thq-body-small">
                        <span>Feature text goes here</span>
                      </span>
                    </div>
                  </div>
                </div>
                <button class="pricing-button14 thq-button-outline thq-button-animated">
                  <span class="thq-body-small"><span>Buy Now</span></span>
                </button>
              </div>
              <div class="pricing-column6 thq-card">
                <div class="pricing-price20">
                  <div class="pricing-price21">
                    <span class="pricing-text56 thq-body-large">
                      <span>T-shirt4</span>
                    </span>
                    <h3 class="pricing-text57 thq-heading-3">
                      <span>$499</span>
                    </h3>
                  </div>
                  <div class="pricing-list6">
                    <div class="pricing-list-item29">
                      <svg viewBox="0 0 1024 1024" class="thq-icon-small">
                        <path
                          d="M384 690l452-452 60 60-512 512-238-238 60-60z"></path>
                      </svg>
                      <span class="thq-body-small">
                        <span>Feature text goes here</span>
                      </span>
                    </div>
                    <div class="pricing-list-item30">
                      <svg viewBox="0 0 1024 1024" class="thq-icon-small">
                        <path
                          d="M384 690l452-452 60 60-512 512-238-238 60-60z"></path>
                      </svg>
                      <span class="thq-body-small">
                        <span>Feature text goes here</span>
                      </span>
                    </div>
                    <div class="pricing-list-item31">
                      <svg viewBox="0 0 1024 1024" class="thq-icon-small">
                        <path
                          d="M384 690l452-452 60 60-512 512-238-238 60-60z"></path>
                      </svg>
                      <span class="thq-body-small">
                        <span>Feature text goes here</span>
                      </span>
                    </div>
                    <div class="pricing-list-item32">
                      <svg viewBox="0 0 1024 1024" class="thq-icon-small">
                        <path
                          d="M384 690l452-452 60 60-512 512-238-238 60-60z"></path>
                      </svg>
                      <span class="thq-body-small">
                        <span>Feature text goes here</span>
                      </span>
                    </div>
                    <div class="pricing-list-item33">
                      <svg viewBox="0 0 1024 1024" class="thq-icon-small">
                        <path
                          d="M384 690l452-452 60 60-512 512-238-238 60-60z"></path>
                      </svg>
                      <span class="thq-body-small">
                        <span>Feature text goes here</span>
                      </span>
                    </div>
                  </div>
                </div>
                <button class="pricing-button14 thq-button-outline thq-button-animated">
                  <span class="thq-body-small"><span>Buy Now</span></span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </pricing-wrapper>
      <steps-wrapper class="steps-steps-wrapper">
        <div class="steps-container1 thq-section-padding">
          <div class="steps-max-width thq-section-max-width">
            <div class="steps-container2 thq-grid-2">
              <div class="steps-section-header">
                <h2 class="thq-heading-2">
                  Discover the Power of Our Products
                </h2>
                <p class="thq-body-large">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Suspendisse varius enim in eros elementum tristique. Duis
                  cursus, mi quis viverra ornare, eros dolor interdum nulla,
                  ut commodo diam libero vitae erat.
                </p>
                <div class="steps-actions">
                  <button
                    class="thq-button-animated thq-button-filled steps-button">
                    <span class="thq-body-smallnav">Browse Now</span>
                  </button>
                </div>
              </div>
              <div class="steps-container3">
                <div class="steps-container4 thq-card">
                  <h2 class="thq-heading-2">
                    <span>Browse our Collection</span>
                  </h2>
                  <span class="steps-text14 thq-body-small">
                    <span>
                      Explore our wide range of luxury products including
                      handbags, accessories, and more.
                    </span>
                  </span>
                  <label class="steps-text15 thq-heading-3">01</label>
                </div>
                <div class="steps-container5 thq-card">
                  <h2 class="thq-heading-2">
                    <span>Create an Account</span>
                  </h2>
                  <span class="steps-text17 thq-body-small">
                    <span>
                      Sign up for an account to receive exclusive offers,
                      track your orders, and enjoy a personalized shopping
                      experience.
                    </span>
                  </span>
                  <label class="steps-text18 thq-heading-3">02</label>
                </div>
                <div class="steps-container6 thq-card">
                  <h2 class="thq-heading-2"><span>Add to Cart</span></h2>
                  <span class="steps-text20 thq-body-small">
                    <span>
                      Select your favorite items and add them to your shopping
                      cart for a seamless checkout process.
                    </span>
                  </span>
                  <label class="steps-text21 thq-heading-3">03</label>
                </div>
                <div class="steps-container7 thq-card">
                  <h2 class="thq-heading-2"><span>Check Out</span></h2>
                  <span class="steps-text23 thq-body-small">
                    <span>
                      Complete your purchase securely and have your items
                      delivered to your doorstep in style.
                    </span>
                  </span>
                  <label class="steps-text24 thq-heading-3">04</label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </steps-wrapper>
      <contact-wrapper class="contact-contact-wrapper">
        <div class="contact-contact20 thq-section-padding">
          <div class="contact-max-width thq-section-max-width">
            <div class="contact-section-title">
              <span class="thq-body-small">
                <span>
                  Our customer service team is available to assist you from
                  Monday to Friday, 9am to 5pm.
                </span>
              </span>
              <div class="contact-content1">
                <h2 class="thq-heading-2"><span>Contact Us</span></h2>
                <p class="contact-text3 thq-body-large">
                  <span>
                    We'd love to hear from you. Reach out to us for any
                    inquiries or feedback.
                  </span>
                </p>
              </div>
            </div>
            <div class="contact-row">
              <div class="contact-content2">
                <svg viewBox="0 0 1024 1024" class="thq-icon-medium">
                  <path
                    d="M854 342v-86l-342 214-342-214v86l342 212zM854 170q34 0 59 26t25 60v512q0 34-25 60t-59 26h-684q-34 0-59-26t-25-60v-512q0-34 25-60t59-26h684z"></path>
                </svg>
                <div class="contact-contact-info1">
                  <div class="contact-content3">
                    <h3 class="contact-text4 thq-heading-3">Email</h3>
                    <p class="contact-text5 thq-body-large">
                      <span>
                        For any inquiries, please contact
                        support@irvasca.com
                      </span>
                    </p>
                  </div>
                  <span class="contact-email thq-body-small">
                    <span>support@irvasca.com</span>
                  </span>
                </div>
              </div>
              <!-- <div class="contact-content4">
                <svg viewBox="0 0 1024 1024" class="thq-icon-medium">
                  <path
                    d="M282 460q96 186 282 282l94-94q20-20 44-10 72 24 152 24 18 0 30 12t12 30v150q0 18-12 30t-30 12q-300 0-513-213t-213-513q0-18 12-30t30-12h150q18 0 30 12t12 30q0 80 24 152 8 26-10 44z"></path>
                </svg>
                <div class="contact-contact-info2">
                  <div class="contact-content5">
                    <h3 class="contact-text6 thq-heading-3">Phone</h3>
                    <p class="contact-text7 thq-body-large">
                      <span>
                        Follow us on social media for the latest updates and
                        news.
                      </span>
                    </p>
                  </div>
                  <span class="contact-phone thq-body-small">
                    <span>+1-800-123-4567</span>
                  </span>
                </div>
              </div> -->
              <div class="contact-content6">
                <svg viewBox="0 0 1024 1024" class="thq-icon-medium">
                  <path
                    d="M512 0c-176.732 0-320 143.268-320 320 0 320 320 704 320 704s320-384 320-704c0-176.732-143.27-320-320-320zM512 512c-106.040 0-192-85.96-192-192s85.96-192 192-192 192 85.96 192 192-85.96 192-192 192z"></path>
                </svg>
                <div class="contact-contact-info3">
                  <div class="contact-content7">
                    <h3 class="contact-text8 thq-heading-3">Office</h3>
                    <p class="contact-text9 thq-body-large">
                      <span>
                        Join our newsletter for exclusive offers and updates.
                      </span>
                    </p>
                  </div>
                  <span class="contact-address thq-body-small">
                    <span>Griya Pamoyanan, Blok G 17, Pamoyanan, Bogor Selatan, Bogor, 16136</span>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </contact-wrapper>
      <footer-wrapper class="footer-footer-wrapper">
        <footer class="footer-footer1 thq-section-padding">
          <div class="footer-max-width thq-section-max-width">
            <div class="footer-content">
              <div class="footer-newsletter">
                <img
                  alt="IRVASCA Logo"
                  src="{{ asset('images/logo/logo_ungu.jpg') }}"
                  class="footer-image1"
                  style="width: 120px; height: auto;" />
                <span class="thq-body1-small">
                  Subscribe to our newsletter for the latest updates on new
                  features and product releases.
                </span>
                <div class="footer-actions">
                  <div class="footer-form">
                    <div class="footer-container">
                      <input
                        type="email"
                        placeholder="Enter your email"
                        class="footer-text-input thq-input" />
                    </div>
                    <button class="thq-button-outline footer-button">
                      <span class="thq-body-smallnav">
                        <span>Subscribe to Newsletter</span>
                      </span>
                    </button>
                  </div>
                  <span class="footer-content2 thq-body-small">
                    <span>
                      Stay up to date with the latest news and offers.
                    </span>
                  </span>
                </div>
              </div>
              <div class="footer-links">
                <div class="footer-column1">
                  <strong class="thq-body-large footer-column1-title">
                    <span>Explore</span>
                  </strong>
                  <div class="footer-footer-links1">
                    <a
                      href="https://example.com"
                      target="_blank"
                      rel="noreferrer noopener"
                      class="thq-body-small">
                      <span>Men's Collection</span>
                    </a>
                    <a
                      href="https://example.com"
                      target="_blank"
                      rel="noreferrer noopener"
                      class="thq-body-small">
                      <span>Women's Collection</span>
                    </a>
                    <a
                      href="https://example.com"
                      target="_blank"
                      rel="noreferrer noopener"
                      class="thq-body-small">
                      <span>Accessories</span>
                    </a>
                    <a
                      href="https://example.com"
                      target="_blank"
                      rel="noreferrer noopener"
                      class="thq-body-small">
                      <span>Fragrances</span>
                    </a>
                    <a
                      href="https://example.com"
                      target="_blank"
                      rel="noreferrer noopener"
                      class="thq-body-small">
                      <span>Contact Us</span>
                    </a>
                  </div>
                </div>
                <div class="footer-column2">
                  <strong class="thq-body-large footer-column2-title">
                    <span>Customer Care</span>
                  </strong>
                  <div class="footer-footer-links2">
                    <a
                      href="https://example.com"
                      target="_blank"
                      rel="noreferrer noopener"
                      class="thq-body-small">
                      <span>Shipping Information</span>
                    </a>
                    <a
                      href="https://example.com"
                      target="_blank"
                      rel="noreferrer noopener"
                      class="thq-body-small">
                      <span>Returns &amp; Exchanges</span>
                    </a>
                    <a
                      href="https://example.com"
                      target="_blank"
                      rel="noreferrer noopener"
                      class="thq-body-small">
                      <span>FAQs</span>
                    </a>
                    <a
                      href="https://example.com"
                      target="_blank"
                      rel="noreferrer noopener"
                      class="thq-body-small">
                      <span>Track Your Order</span>
                    </a>
                    <a
                      href="https://example.com"
                      target="_blank"
                      rel="noreferrer noopener"
                      class="thq-body-small">
                      <span>Store Locator</span>
                    </a>
                  </div>
                </div>
                <div class="footer-column3">
                  <strong class="thq-body-large footer-social-link1-title">
                    <span>Follow Us</span>
                  </strong>
                  <div class="footer-social-links">
                    <div class="footer-link1">
                      <svg
                        viewBox="0 0 877.7142857142857 1024"
                        class="thq-icon-small">
                        <path
                          fill="#b78027"
                          d="M713.143 73.143c90.857 0 164.571 73.714 164.571 164.571v548.571c0 90.857-73.714 164.571-164.571 164.571h-107.429v-340h113.714l17.143-132.571h-130.857v-84.571c0-38.286 10.286-64 65.714-64l69.714-0.571v-118.286c-12-1.714-53.714-5.143-101.714-5.143-101.143 0-170.857 61.714-170.857 174.857v97.714h-114.286v132.571h114.286v340h-304c-90.857 0-164.571-73.714-164.571-164.571v-548.571c0-90.857 73.714-164.571 164.571-164.571h548.571z"></path>
                      </svg>
                      <span class="thq-body-small">Facebook</span>
                    </div>
                    <div class="footer-link2">
                      <svg
                        viewBox="0 0 877.7142857142857 1024"
                        class="thq-icon-small">
                        <path
                          fill="#b78027"
                          d="M585.143 512c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286 65.714 146.286 146.286 146.286 146.286-65.714 146.286-146.286zM664 512c0 124.571-100.571 225.143-225.143 225.143s-225.143-100.571-225.143-225.143 100.571-225.143 225.143-225.143 225.143 100.571 225.143 225.143zM725.714 277.714c0 29.143-23.429 52.571-52.571 52.571s-52.571-23.429-52.571-52.571 23.429-52.571 52.571-52.571 52.571 23.429 52.571 52.571zM438.857 152c-64 0-201.143-5.143-258.857 17.714-20 8-34.857 17.714-50.286 33.143s-25.143 30.286-33.143 50.286c-22.857 57.714-17.714 194.857-17.714 258.857s-5.143 201.143 17.714 258.857c8 20 17.714 34.857 33.143 50.286s30.286 25.143 50.286 33.143c57.714 22.857 194.857 17.714 258.857 17.714s201.143 5.143 258.857-17.714c20-8 34.857-17.714 50.286-33.143s25.143-30.286 33.143-50.286c22.857-57.714 17.714-194.857 17.714-258.857s5.143-201.143-17.714-258.857c-8-20-17.714-34.857-33.143-50.286s-30.286-25.143-50.286-33.143c-57.714-22.857-194.857-17.714-258.857-17.714zM877.714 512c0 60.571 0.571 120.571-2.857 181.143-3.429 70.286-19.429 132.571-70.857 184s-113.714 67.429-184 70.857c-60.571 3.429-120.571 2.857-181.143 2.857s-120.571 0.571-181.143-2.857c-70.286-3.429-132.571-19.429-184-70.857s-67.429-113.714-70.857-184c-3.429-60.571-2.857-120.571-2.857-181.143s-0.571-120.571 2.857-181.143c3.429-70.286 19.429-132.571 70.857-184s113.714-67.429 184-70.857c60.571-3.429 120.571-2.857 181.143-2.857s120.571-0.571 181.143 2.857c70.286 3.429 132.571 19.429 184 70.857s67.429 113.714 70.857 184c3.429 60.571 2.857 120.571 2.857 181.143z"></path>
                      </svg>
                      <span class="thq-body-small">Instagram</span>
                    </div>
                    <div class="footer-link3">
                      <svg
                        viewBox="0 0 950.8571428571428 1024"
                        class="thq-icon-small">
                        <path
                          fill="#b78027"
                          d="M925.714 233.143c-25.143 36.571-56.571 69.143-92.571 95.429 0.571 8 0.571 16 0.571 24 0 244-185.714 525.143-525.143 525.143-104.571 0-201.714-30.286-283.429-82.857 14.857 1.714 29.143 2.286 44.571 2.286 86.286 0 165.714-29.143 229.143-78.857-81.143-1.714-149.143-54.857-172.571-128 11.429 1.714 22.857 2.857 34.857 2.857 16.571 0 33.143-2.286 48.571-6.286-84.571-17.143-148-91.429-148-181.143v-2.286c24.571 13.714 53.143 22.286 83.429 23.429-49.714-33.143-82.286-89.714-82.286-153.714 0-34.286 9.143-65.714 25.143-93.143 90.857 112 227.429 185.143 380.571 193.143-2.857-13.714-4.571-28-4.571-42.286 0-101.714 82.286-184.571 184.571-184.571 53.143 0 101.143 22.286 134.857 58.286 41.714-8 81.714-23.429 117.143-44.571-13.714 42.857-42.857 78.857-81.143 101.714 37.143-4 73.143-14.286 106.286-28.571z"></path>
                      </svg>
                      <span class="thq-body-small">X</span>
                    </div>
                    <div class="footer-link4">
                      <svg
                        viewBox="0 0 877.7142857142857 1024"
                        class="thq-icon-small">
                        <path
                          fill="#b78027"
                          d="M135.429 808h132v-396.571h-132v396.571zM276 289.143c-0.571-38.857-28.571-68.571-73.714-68.571s-74.857 29.714-74.857 68.571c0 37.714 28.571 68.571 73.143 68.571h0.571c46.286 0 74.857-30.857 74.857-68.571zM610.286 808h132v-227.429c0-121.714-65.143-178.286-152-178.286-70.857 0-102.286 39.429-119.429 66.857h1.143v-57.714h-132s1.714 37.143 0 396.571v0h132v-221.714c0-11.429 0.571-23.429 4-32 9.714-23.429 31.429-48 68-48 47.429 0 66.286 36 66.286 89.714v212zM877.714 237.714v548.571c0 90.857-73.714 164.571-164.571 164.571h-548.571c-90.857 0-164.571-73.714-164.571-164.571v-548.571c0-90.857 73.714-164.571 164.571-164.571h548.571c90.857 0 164.571 73.714 164.571 164.571z"></path>
                      </svg>
                      <span class="thq-body-small">LinkedIn</span>
                    </div>
                    <div class="footer-link5">
                      <svg viewBox="0 0 1024 1024" class="thq-icon-small">
                        <path
                          fill="#b78027"
                          d="M406.286 644.571l276.571-142.857-276.571-144.571v287.429zM512 152c215.429 0 358.286 10.286 358.286 10.286 20 2.286 64 2.286 102.857 43.429 0 0 31.429 30.857 40.571 101.714 10.857 82.857 10.286 165.714 10.286 165.714v77.714s0.571 82.857-10.286 165.714c-9.143 70.286-40.571 101.714-40.571 101.714-38.857 40.571-82.857 40.571-102.857 42.857 0 0-142.857 10.857-358.286 10.857v0c-266.286-2.286-348-10.286-348-10.286-22.857-4-74.286-2.857-113.143-43.429 0 0-31.429-31.429-40.571-101.714-10.857-82.857-10.286-165.714-10.286-165.714v-77.714s-0.571-82.857 10.286-165.714c9.143-70.857 40.571-101.714 40.571-101.714 38.857-41.143 82.857-41.143 102.857-43.429 0 0 142.857-10.286 358.286-10.286v0z"></path>
                      </svg>
                      <span class="thq-body-small">Youtube</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="footer-credits">
              <div class="thq-divider-horizontal"></div>
              <div class="footer-row">
                <span class="thq-body2-small">
                  <span>© 2024 IRVASCA. All Rights Reserved.</span>
                </span>
                <div class="footer-footer-links3">
                  <span class="thq-body2-small">
                    <span>/privacy-policy</span>
                  </span>
                  <span class="thq-body2-small">
                    <span>/terms-and-conditions</span>
                  </span>
                  <span class="thq-body2-small">
                    <span>/cookies-policy</span>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </footer>
      </footer-wrapper>
    </div>
  </div>
  <script
    data-section-id="navbar"
    src="https://unpkg.com/@teleporthq/teleport-custom-scripts"></script>
</body>

</html>