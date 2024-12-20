(function ($) {
    "use strict";

    /* Event - Window Scroll */
    // $(window).scroll(function()
    // {
    // 	var scroll	=	$(window).scrollTop();
    // 	var height	=	$(window).height();

    // 	/*** set sticky menu ***/
    // 	if( scroll >= 300 )
    // 	{
    // 		$('.menu-block').addClass("navbar-fixed-top").delay( 2000 ).fadeIn();
    // 	}
    // 	else if ( scroll <= height )
    // 	{
    // 		$('.menu-block').removeClass("navbar-fixed-top");
    // 	}
    // 	else
    // 	{
    // 		$('.menu-block').removeClass("navbar-fixed-top");
    // 	} // set sticky menu - end

    // 	if ($(this).scrollTop() >= 50)
    // 	{
    // 		// If page is scrolled more than 50px
    // 		$('#back-to-top').fadeIn(200);    // Fade in the arrow
    // 	}
    // 	else
    // 	{
    // 		$('#back-to-top').fadeOut(200);   // Else fade out the arrow
    // 	}
    // });
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        var height = $(window).height();

        /*** set sticky menu ***/
        if (scroll >= 300) {
            // Use show() instead of fadeIn() for immediate visibility
            $(".menu-block").addClass("navbar-fixed-top").show();

            // Delay the fading effect with setTimeout
            setTimeout(function () {
                $(".menu-block").fadeIn(200);
            }, 2000);
        } else if (scroll < 300) {
            $(".menu-block").removeClass("navbar-fixed-top");
        } // set sticky menu - end

        if ($(this).scrollTop() >= 50) {
            $("#back-to-top").fadeIn(200); // Fade in the arrow
        } else {
            $("#back-to-top").fadeOut(200); // Else fade out the arrow
        }
    });

    /* Event - Window Scroll /- */

    $("#back-to-top").click(function () {
        // When arrow is clicked
        $("body,html").animate(
            {
                scrollTop: 0, // Scroll to top of body
            },
            800
        );
    });

    $(".dial").each(function () {
        var $this = $(this);
        var myVal = $(this).data("value");

        $this.appear(function () {
            // alert(myVal);
            $this.knob({});
            $({ value: 0 }).animate(
                { value: myVal },
                {
                    duration: 2000,
                    easing: "swing",
                    step: function () {
                        $this.val(Math.ceil(this.value)).trigger("change");
                    },
                }
            );
        });
    });

    /* Event - Document Ready /- */
    $(document).ready(function ($) {
        var scroll = $(window).scrollTop();
        var height = $(window).height();

        /*** set sticky menu ***/
        if (scroll >= height - 500) {
            $(".menu-block").addClass("navbar-fixed-top").delay(2000).fadeIn();
        } else if (scroll <= height) {
            $(".menu-block").removeClass("navbar-fixed-top");
        } else {
            $(".menu-block").removeClass("navbar-fixed-top");
        } // set sticky menu - end

        $(".navbar-nav li a, .logo-block a").on("click", function (event) {
            var anchor = $(this);

            if (
                anchor == "undefined" ||
                anchor == null ||
                anchor.attr("href") == "#"
            ) {
                return;
            }
            if (anchor.attr("href").indexOf("#") === 0) {
                if ($(anchor.attr("href")).length) {
                    $("html, body")
                        .stop()
                        .animate(
                            {
                                scrollTop:
                                    $(anchor.attr("href")).offset().top - 72,
                            },
                            1500,
                            "easeInOutExpo"
                        );
                }
                event.preventDefault();
            }
        });

        $(".goto-next a").on("click", function (event) {
            var anchor = $(this);

            if (
                anchor == "undefined" ||
                anchor == null ||
                anchor.attr("href") == "#"
            ) {
                return;
            }
            if (anchor.attr("href").indexOf("#") === 0) {
                if ($(anchor.attr("href")).length) {
                    $("html, body")
                        .stop()
                        .animate(
                            {
                                scrollTop:
                                    $(anchor.attr("href")).offset().top - 150,
                            },
                            1500,
                            "easeInOutExpo"
                        );
                }
                event.preventDefault();
            }
        });

        /* Window Hight Set to Elements /- */
        var window_height = $(window).height();
        var window_width = $(window).width();
        // $(".header").css("height", window_height + "px");

        /* Categories Section */
        $(".category-section").each(function () {
            var $this = $(this);
            var myVal = $(this).data("value");

            $this.appear(function () {
                $(".category-section .category-box-main:nth-child(odd)")
                    .addClass("animated slideInLeft")
                    .delay(10000);
                $(".category-section .category-box-main:nth-child(even)")
                    .addClass("animated slideInRight")
                    .delay(10000);
            });
        });

        /* Featured Section */
        $(".featured-products").each(function () {
            var $this = $(this);
            var myVal = $(this).data("value");

            $this.appear(function () {
                $(".featured-products .category-box-main:nth-child(odd)")
                    .addClass("animated slideInLeft")
                    .delay(10000);
                $(".featured-products .category-box-main:nth-child(even)")
                    .addClass("animated slideInRight")
                    .delay(10000);
            });
        });

        /* blog Section */
        $(".blog-section").each(function () {
            var $this = $(this);
            var myVal = $(this).data("value");

            $this.appear(function () {
                $(".blog-section .col-md-3")
                    .addClass("animated slideInLeft")
                    .delay(10000);
            });
        });

        /* About Section */
        $(".about-section").each(function () {
            var $this = $(this);
            var myVal = $(this).data("value");

            $this.appear(function () {
                $(".about-section .about-content-box .col-md-6:nth-child(odd)")
                    .addClass("animated slideInLeft")
                    .delay(10000);
                $(".about-section .about-content-box .col-md-6:nth-child(even)")
                    .addClass("animated slideInRight")
                    .delay(10000);
            });
        });

        /* footer Section */
        $(".footer-section").each(function () {
            var $this = $(this);
            var myVal = $(this).data("value");

            $this.appear(function () {
                $(".add-banner-section")
                    .addClass("animated fadeInUp")
                    .delay(10000);
            });
        });

        /* contact-form Section */
        $(".contact-form-details").each(function () {
            var $this = $(this);
            var myVal = $(this).data("value");

            $this.appear(function () {
                $(".contact-form").addClass("animated fadeInUp").delay(10000);
                $(".contact-details")
                    .addClass("animated fadeInDown")
                    .delay(10000);
            });
        });

        /* categories Section */
        $("#categories-list").owlCarousel({
            autoPlay: 3000, //Set AutoPlay to 3 seconds
            nav: false,
            dots: false,
            items: 4,
            itemsDesktop: [1199, 4],
            itemsDesktopSmall: [991, 3],
            navigation: false,
            pagination: false,
            responsive: {
                0: {
                    items: 1,
                },
                767: {
                    items: 2,
                },
                991: {
                    items: 3,
                },
                1000: {
                    items: 4,
                },
            },
        });

        /* Partners Section */
        $("#our-partner").owlCarousel({
            autoPlay: 3000, //Set AutoPlay to 3 seconds
            nav: false,
            dots: false,
            items: 4,
            itemsDesktop: [1199, 4],
            itemsDesktopSmall: [991, 3],
            navigation: false,
            pagination: false,
            responsive: {
                0: {
                    items: 1,
                },
                767: {
                    items: 2,
                },
                991: {
                    items: 3,
                },
                1000: {
                    items: 4,
                },
            },
        });

        /* Price Filter */
        $("#slider-range").slider({
            range: true,
            nav: false,
            dots: false,
            min: 0,
            max: 15000,
            values: [0, 10000],
            slide: function (event, ui) {
                $("#amount").val(ui.values[0] + " $");
                $("#amount2").val(ui.values[1] + " $");
            },
        });

        $("#amount").val($("#slider-range").slider("values", 0) + " $");
        $("#amount2").val($("#slider-range").slider("values", 1) + " $");

        // Product Slider
        $("#about-carousel").flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            itemWidth: 170,
            itemMargin: 5,
            asNavFor: "#about-slider",
            direction: "vertical",
            nav: false,
            dots: false,
        });

        $("#about-slider").flexslider({
            animation: "fade",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            sync: "#about-carousel",
            directionNav: false,
            nav: false,
            dots: false,
        });

        /* Loader */
        $(".loading a").on("click", function (e) {
            $(".category-box-main.new-categories").removeClass(
                "animated slideInLeft"
            );
            $(".category-box-main.new-categories")
                .css("display", "block")
                .addClass("animated fadeInUp")
                .delay(2000);
            $(".loading").css("display", "none");
            return false;
        });

        /* Single product */
        $("#color-widget li a").on("click", function (e) {
            $("#color-widget li a").removeClass("active");
            $(this).addClass("active");
            return false;
        });

        $("#size-widget li a").on("click", function (e) {
            $("#size-widget li a").removeClass("active");
            $(this).addClass("active");
            return false;
        });

        /* Blog Listing */
        $(".loading a").on("click", function (e) {
            $(".type-post.new-post")
                .css("display", "inline-block")
                .addClass("animated fadeInUp");
            $(".loading").css("display", "none");
            return false;
        });

        if ($(window).width() > 991) {
            $(".dropdown").hover(
                function () {
                    $(".dropdown-menu", this).fadeIn("slow");
                },
                function () {
                    $(".dropdown-menu", this).fadeOut("slow");
                }
            );
        }
        /* Lightbox for Highlights Gallery	*/
        $(".product-box-inner").magnificPopup({
            delegate: " ul > li:first-Child > a",
            type: "image",
            tLoading: "Loading image #%curr%...",
            mainClass: "mfp-img-mobile",
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0, 1], // Will preload 0 - before current, and 1 after the current image
            },
            image: {
                tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
            },
        });

        $(".look-book-img-box-hover").magnificPopup({
            delegate: " ul > li:first-Child > a",
            type: "image",
            tLoading: "Loading image #%curr%...",
            mainClass: "mfp-img-mobile",
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0, 1], // Will preload 0 - before current, and 1 after the current image
            },
            image: {
                tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
            },
        });

        /* About Slider */
        $("#about-slider").magnificPopup({
            delegate: "a",
            type: "image",
            tLoading: "Loading image #%curr%...",
            mainClass: "mfp-img-mobile",
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0, 1], // Will preload 0 - before current, and 1 after the current image
            },
            image: {
                tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
            },
        });

        /* megnify */
        if ($(".magniflier").length) {
            var native_width = 0;
            var native_height = 0;
            var mouse = { x: 0, y: 0 };
            var magnify;
            var cur_img;

            var ui = {
                magniflier: $(".magniflier"),
            };

            // Add the magnifying glass
            if (ui.magniflier.length) {
                var div = document.createElement("div");
                div.setAttribute("class", "glass");
                ui.glass = $(div);

                $("body").append(div);
            }

            // All the magnifying will happen on "mousemove"

            var mouseMove = function (e) {
                var $el = $(this);

                // Container offset relative to document
                var magnify_offset = cur_img.offset();

                // Mouse position relative to container
                // pageX/pageY - container's offsetLeft/offetTop
                mouse.x = e.pageX - magnify_offset.left;
                mouse.y = e.pageY - magnify_offset.top;

                // The Magnifying glass should only show up when the mouse is inside
                // It is important to note that attaching mouseout and then hiding
                // the glass wont work cuz mouse will never be out due to the glass
                // being inside the parent and having a higher z-index (positioned above)
                if (
                    mouse.x < cur_img.width() &&
                    mouse.y < cur_img.height() &&
                    mouse.x > 0 &&
                    mouse.y > 0
                ) {
                    magnify(e);
                } else {
                    ui.glass.fadeOut(100);
                }
                return;
            };

            var magnify = function (e) {
                // The background position of div.glass will be
                // changed according to the position
                // of the mouse over the img.magniflier
                //
                // So we will get the ratio of the pixel
                // under the mouse with respect
                // to the image and use that to position the
                // large image inside the magnifying glass

                var rx =
                    Math.round(
                        (mouse.x / cur_img.width()) * native_width -
                            ui.glass.width() / 2
                    ) * -1;
                var ry =
                    Math.round(
                        (mouse.y / cur_img.height()) * native_height -
                            ui.glass.height() / 2
                    ) * -1;
                var bg_pos = rx + "px " + ry + "px";

                // Calculate pos for magnifying glass
                //
                // Easy Logic: Deduct half of width/height
                // from mouse pos.

                // var glass_left = mouse.x - ui.glass.width() / 2;
                // var glass_top  = mouse.y - ui.glass.height() / 2;
                var glass_left = e.pageX - ui.glass.width() / 2;
                var glass_top = e.pageY - ui.glass.height() / 2;
                //console.log(glass_left, glass_top, bg_pos)
                // Now, if you hover on the image, you should
                // see the magnifying glass in action
                ui.glass.css({
                    left: glass_left,
                    top: glass_top,
                    backgroundPosition: bg_pos,
                });

                return;
            };

            $(".magniflier").on("mousemove", function () {
                ui.glass.fadeIn(100);

                cur_img = $(this);

                var large_img_loaded = cur_img.data("large-img-loaded");
                var src = cur_img.data("large") || cur_img.attr("src");

                // Set large-img-loaded to true
                // cur_img.data('large-img-loaded', true)

                if (src) {
                    ui.glass.css({
                        "background-image": "url(" + src + ")",
                        "background-repeat": "no-repeat",
                    });
                }

                // When the user hovers on the image, the script will first calculate
                // the native dimensions if they don't exist. Only after the native dimensions
                // are available, the script will show the zoomed version.
                //if(!native_width && !native_height) {

                if (!cur_img.data("native_width")) {
                    // This will create a new image object with the same image as that in .small
                    // We cannot directly get the dimensions from .small because of the
                    // width specified to 200px in the html. To get the actual dimensions we have
                    // created this image object.
                    var image_object = new Image();

                    image_object.onload = function () {
                        // This code is wrapped in the .load function which is important.
                        // width and height of the object would return 0 if accessed before
                        // the image gets loaded.
                        native_width = image_object.width;
                        native_height = image_object.height;

                        cur_img.data("native_width", native_width);
                        cur_img.data("native_height", native_height);

                        //console.log(native_width, native_height);

                        mouseMove.apply(this, arguments);

                        ui.glass.on("mousemove", mouseMove);
                    };

                    image_object.src = src;

                    return;
                } else {
                    native_width = cur_img.data("native_width");
                    native_height = cur_img.data("native_height");
                }
                //}
                //console.log(native_width, native_height);

                mouseMove.apply(this, arguments);

                ui.glass.on("mousemove", mouseMove);
            });

            ui.glass.on("mouseout", function () {
                ui.glass.off("mousemove", mouseMove);
            });
        }

        $("#default").on("click", function () {
            $("#color").attr("href", "css/color-schemes/default.css");
            return false;
        });

        $("#cyan").on("click", function () {
            $("#color").attr("href", "css/color-schemes/cyan.css");
            return false;
        });

        $("#dark-blue").on("click", function () {
            $("#color").attr("href", "css/color-schemes/dark-blue.css");
            return false;
        });

        $("#green").on("click", function () {
            $("#color").attr("href", "css/color-schemes/green.css");
            return false;
        });

        $("#red").on("click", function () {
            $("#color").attr("href", "css/color-schemes/red.css");
            return false;
        });

        $("#yellow").on("click", function () {
            $("#color").attr("href", "css/color-schemes/yellow.css");
            return false;
        });

        $("#light-green").on("click", function () {
            $("#color").attr("href", "css/color-schemes/light-green.css");
            $(".dial").trigger("configure", { fgColor: "#64E294" });
            return false;
        });

        $("#orange").on("click", function () {
            $("#color").attr("href", "css/color-schemes/orange.css");
            return false;
        });

        $("#pink").on("click", function () {
            $("#color").attr("href", "css/color-schemes/pink.css");
            return false;
        });

        $("#black").on("click", function () {
            $("#color").attr("href", "css/color-schemes/black.css");
            return false;
        });

        // picker buttton
        $(".picker_close").on("click", function () {
            $("#choose_color").toggleClass("position");
        });

        /* gMAP */
        $("#gmap").gMap({
            controls: false,
            scrollwheel: true,

            markers: [
                {
                    latitude: 47.670553,
                    longitude: 9.588479,
                    icon: {
                        image: "images/map-marker.png",
                        iconsize: [26, 46],
                        iconanchor: [12, 46],
                    },
                },
                {
                    latitude: 47.65197522925437,
                    longitude: 9.47845458984375,
                },
                {
                    latitude: 47.594996,
                    longitude: 9.600708,
                    icon: {
                        image: "images/map-marker.png",
                        iconsize: [26, 46],
                        iconanchor: [12, 46],
                    },
                },
            ],
            icon: {
                image: "images/map-marker.png",
                iconsize: [26, 46],
                iconanchor: [12, 46],
            },
            latitude: 47.58969,
            longitude: 9.473413,
            zoom: 10,
        });
    });
    /* document.ready /- */

    /* Event - Window Resize /- */
    $(window).resize(function () {
        /* Window Hight Set to Elements /- */
        var window_height = $(window).height();
        var window_width = $(window).width();
        // $(".header").css("height", window_height + "px");
    });
    /* Event - Window Resize /- */

    var $itemsHolder = $(".portfolio-list");
    var $itemsClone = $itemsHolder.clone();
    var $filterClass = "";
    $(".portfolio-categories li").click(function (e) {
        e.preventDefault();
        $filterClass = $(this).attr("data-value");
        if ($filterClass == "all") {
            var $filters = $itemsClone.find("li");
        } else {
            var $filters = $itemsClone.find(
                "li[data-type=" + $filterClass + "]"
            );
        }
        $itemsHolder.quicksand($filters, {
            duration: 1000,
        });
    });

    $(".portfolio-categories li a").on("click", function (e) {
        $(".portfolio-categories li a").removeClass("active");
        $(this).addClass("active");
    });

    var wow = new WOW({
        boxClass: "wow", // animated element css class (default is wow)
        animateClass: "animated", // animation css class (default is animated)
        offset: 0, // distance to the element when triggering the animation (default is 0)
        mobile: true, // trigger animations on mobile devices (default is true)
        live: true, // act on asynchronously loaded content (default is true)
    });
    wow.init();

    // if (!$('html').is('.ie6, .ie7, .ie8'))
    // {
    // 	/* Event - Window Load */
    // 	$(window).load(function()
    // 	{
    // 		/* Loader */
    // 		$("#site-loader").delay(1000).fadeOut("slow");
    // 	});
    // 	/* Event - Window Load /- */
    // }
    // else
    // {
    // 	$("#site-loader").css('display','none');
    // }

    if (!$("html").is(".ie6, .ie7, .ie8")) {
        /* If the browser is not IE6, IE7, or IE8 */

        /* Event - Window Load */
        $(window).on("load", function () {
            /* Inside the window load event */

            /* Loader */
            $("#site-loader").delay(1000).fadeOut("slow");
        });
        /* Event - Window Load /- */
    } else {
        /* If the browser is IE6, IE7, or IE8 */

        $("#site-loader").css("display", "none");
    }
})(jQuery);

jQuery(document).ready(function () {
    // This button will increment the value
    $(".qtyplus").on("click", function (e) {
        // Stop acting like a button
        e.preventDefault();

        // Get the field name
        fieldName = $(this).attr("data-field");

        // Get its current value
        var currentVal = parseInt($("input[name=" + fieldName + "]").val());

        // If is not undefined
        if (!isNaN(currentVal)) {
            // Increment
            $("input[name=" + fieldName + "]").val(currentVal + 1);
        } else {
            // Otherwise put a 0 there
            $(this)
                .find("input[name=" + fieldName + "]")
                .val(0);
        }
    });

    // This button will decrement the value till 0
    $(".qtyminus").on("click", function (e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr("data-field");
        // Get its current value
        var currentVal = parseInt($("input[name=" + fieldName + "]").val());
        // If it isn't undefined or its greater than 0
        if (!isNaN(currentVal) && currentVal > 0) {
            // Decrement one
            $("input[name=" + fieldName + "]").val(currentVal - 1);
        } else {
            // Otherwise put a 0 there
            $("input[name=" + fieldName + "]").val(0);
        }
    });
});

$(document).ready(function () {
    // Show dropdown on hover
    $(".cart-link").hover(
        function () {
            $(".cart-dropdown").stop(true, true).slideDown(200); // Show
        },
        function () {
            $(".cart-dropdown").stop(true, true).slideUp(200); // Hide
        }
    );

    // Add to Cart functionality
    $(document).ready(function () {
        let selectedSize = $(".size-option.active").data("size"); // Get the initially selected size if available

        // Handle size selection
        $(".size-option").on("click", function (e) {
            e.preventDefault();

            // Remove 'active' class from all size options and add it to the clicked one
            $(".size-option").removeClass("active");
            $(this).addClass("active");

            // Update the selected size
            selectedSize = $(this).data("size");
        });

        // Handle Add to Cart button click
        $(".add-to-cart-btn").on("click", function (e) {
            e.preventDefault();
            let productId = $(this).data("id");

            // Validate that a size is selected
            if (!selectedSize) {
                alert("Please select a size.");
                return;
            }

            $.ajax({
                url: "/cart/add",
                method: "POST",
                data: {
                    product_id: productId,
                    size: selectedSize, // Send selected size to backend
                    _token: $('meta[name="csrf-token"]').attr("content"),
                },
                success: function (response) {
                    // Update cart count
                    $(".cart-link span").html("Cart (" + response.count + ")");

                    // Update cart dropdown with the new content
                    $(".cart-dropdown").html(response.cartView).show(); // Show updated dropdown

                    // Update subtotal and total
                    $(".sub-total").html(`
                    <p><span>Sub Total</span> ${response.subtotal}</p>
                    <p><span>Total</span> ${response.total}</p>
                `);

                    // Show success message in modal
                    $("#successMessage").text(
                        response.message ||
                            "Product added to cart successfully!"
                    );
                    $("#successModal").modal("show");

                    // Automatically hide the modal after 3 seconds
                    setTimeout(function () {
                        $("#successModal").modal("hide");
                    }, 2000);
                },
                error: function (xhr, status, error) {
                    console.error("Add to cart error:", error);
                },
            });
        });

        // Remove from Cart functionality
        $(document).on("click", ".remove-from-cart-button", function (e) {
            e.preventDefault();
            let productId = $(this).data("product-id");

            $.ajax({
                url: "/cart/remove",
                method: "POST",
                data: {
                    product_id: productId,
                    _token: $('meta[name="csrf-token"]').attr("content"),
                },
                success: function (response) {
                    $(".cart-link span").html("Cart (" + response.count + ")");
                    $(".cart-dropdown").html(response.cartView); // Update dropdown content

                    // Hide dropdown if cart is empty
                    if (response.count === 0) {
                        $(".cart-dropdown").hide();
                    }
                },
                error: function (xhr, status, error) {
                    console.error("Remove from cart error:", error);
                },
            });
        });
    });
});

$(document).ready(function () {
    let otpRequestTime = null; // Variable to track the last OTP request time
    const OTP_COOLDOWN_SECONDS = 60; // Cooldown period in seconds

    // Handle Request OTP
    $("#requestOtpBtn").on("click", function () {
        const name = $("#register-name").val();
        const email = $("#register-email").val();
        const password = $("#register-password").val();
        const passwordConfirmation = $("#register-password-confirmation").val();

        // Validate fields before sending request
        if (!name || !email || !password || !passwordConfirmation) {
            Swal.fire({
                icon: "error",
                title: "Validation Error",
                text: "Please fill in all fields before requesting OTP.",
                confirmButtonText: "Okay",
            });
            return;
        }

        // Show loading message
        Swal.fire({
            title: "Sending OTP...",
            text: "Please wait a moment.",
            allowOutsideClick: false,
            onOpen: () => {
                Swal.showLoading();
            },
        });

        $.ajax({
            url: "/request-otp",
            method: "POST",
            data: {
                name: name,
                email: email,
                password: password,
                password_confirmation: passwordConfirmation,
                _token: $('input[name="_token"]').val(),
            },
            success: function (response) {
                Swal.fire({
                    icon: "success",
                    title: "OTP Sent!",
                    text: response.message,
                    confirmButtonText: "Okay",
                });
                $("#resendOtpBtn").show(); // Show resend OTP button
                otpRequestTime = Date.now(); // Store the current time
                updateResendOtpButton(); // Update the button state
            },
            error: function (xhr) {
                let errorMessage =
                    xhr.responseJSON?.message ||
                    "Email Already Exists/Please wait for another OTP";
                $("#error-message").text(errorMessage).removeClass("d-none");
                Swal.fire({
                    icon: "error",
                    title: "Error",
                    text: errorMessage,
                    confirmButtonText: "Okay",
                });
            },
        });
    });

    // Handle OTP Verification
    $("#registerForm").on("submit", function (event) {
        event.preventDefault(); // Prevent default form submission

        const email = $("#register-email").val();
        const otp = $("#register-otp").val();

        // Validate that the OTP is a number
        if (!/^\d+$/.test(otp)) {
            Swal.fire({
                icon: "error",
                title: "Invalid OTP",
                text: "Please enter a valid numeric OTP.",
                confirmButtonText: "Okay",
            });
            return;
        }

        $.ajax({
            url: "/verify-otp",
            method: "POST",
            data: {
                email: email,
                otp: otp,
                _token: $('input[name="_token"]').val(),
            },
            success: function (response) {
                Swal.fire({
                    icon: "success",
                    title: "OTP Verified!",
                    text: response.message,
                    confirmButtonText: "Okay",
                });
                completeRegistration(); // Call to complete the registration process
            },
            error: function (xhr) {
                let errorMessage = xhr.responseJSON?.message || "Invalid OTP.";
                $("#error-message").text(errorMessage).removeClass("d-none");
                Swal.fire({
                    icon: "error",
                    title: "Error",
                    text: errorMessage,
                    confirmButtonText: "Okay",
                });
            },
        });
    });

    // Function to complete registration after OTP verification
    function completeRegistration() {
        const name = $("#register-name").val();
        const email = $("#register-email").val();
        const password = $("#register-password").val();
        const passwordConfirmation = $("#register-password-confirmation").val();

        // Validate again before submitting
        if (!name || !email || !password || !passwordConfirmation) {
            Swal.fire({
                icon: "error",
                title: "Validation Error",
                text: "Please fill in all fields before completing registration.",
                confirmButtonText: "Okay",
            });
            return;
        }

        $.ajax({
            url: "/register",
            method: "POST",
            data: {
                name: name,
                email: email,
                password: password,
                password_confirmation: passwordConfirmation,
                _token: $('input[name="_token"]').val(),
            },
            success: function (response) {
                Swal.fire({
                    icon: "success",
                    title: "Registration Successful!",
                    text: "You have been registered successfully.",
                    confirmButtonText: "Okay",
                }).then(() => {
                    $("#registerModal").modal("hide"); // Close modal
                    location.reload(); // Refresh the page
                });
            },
            error: function (xhr) {
                let errorMessage =
                    xhr.responseJSON?.message || "Something went wrong.";
                $("#error-message").text(errorMessage).removeClass("d-none");
                Swal.fire({
                    icon: "error",
                    title: "Error",
                    text: errorMessage,
                    confirmButtonText: "Okay",
                });
            },
        });
    }

    // Handle Resend OTP
    $("#resendOtpBtn").on("click", function () {
        const email = $("#register-email").val();

        if (canRequestOtp()) {
            // Show loading message for resend OTP
            Swal.fire({
                title: "Resending OTP...",
                text: "Please wait a moment.",
                allowOutsideClick: false,
                onOpen: () => {
                    Swal.showLoading();
                },
            });

            $.ajax({
                url: "/request-otp",
                method: "POST",
                data: {
                    email: email,
                    _token: $('input[name="_token"]').val(),
                },
                success: function (response) {
                    Swal.fire({
                        icon: "success",
                        title: "OTP Resent!",
                        text: response.message,
                        confirmButtonText: "Okay",
                    });
                    otpRequestTime = Date.now(); // Update request time
                    updateResendOtpButton(); // Update button state
                },
                error: function (xhr) {
                    let errorMessage =
                        xhr.responseJSON?.message || "Something went wrong.";
                    $("#error-message")
                        .text(errorMessage)
                        .removeClass("d-none");
                    Swal.fire({
                        icon: "error",
                        title: "Error",
                        text: errorMessage,
                        confirmButtonText: "Okay",
                    });
                },
            });
        } else {
            // Show cooldown message if the OTP request is still on cooldown
            Swal.fire({
                icon: "warning",
                title: "Cooldown",
                text: "Please wait before requesting another OTP.",
                confirmButtonText: "Okay",
            });
        }
    });

    // Function to check if the OTP can be requested again
    function canRequestOtp() {
        if (!otpRequestTime) return true; // If no previous request, allow

        const secondsSinceLastRequest = (Date.now() - otpRequestTime) / 1000;
        return secondsSinceLastRequest >= OTP_COOLDOWN_SECONDS; // Check cooldown
    }

    // Function to update the resend OTP button state
    function updateResendOtpButton() {
        if (canRequestOtp()) {
            $("#resendOtpBtn").show(); // Show button if cooldown expired
        } else {
            $("#resendOtpBtn").hide(); // Hide button if still in cooldown
        }
    }
    $("#checkoutButton").on("click", function () {
        fetch("/check-auth")
            .then((response) => response.json())
            .then((data) => {
                if (data.isAuthenticated) {
                    // Show the address modal if the user is authenticated
                    $("#addressModal").modal("show");
                } else {
                    // Display a message prompting the user to register or log in first, with a timer
                    Swal.fire({
                        icon: "info",
                        title: "Access Restricted",
                        text: "Please register or log in to proceed to checkout.",
                        timer: 3000, // Time in milliseconds (3000ms = 3 seconds)
                        timerProgressBar: true,
                        showConfirmButton: false, // Hide the confirm button to make it auto-close
                        willClose: () => {
                            // Show the user account modal after the alert automatically closes
                            $("#userAccountModal").modal("show");
                        },
                    });
                }
            })
            .catch((error) => console.error("Error:", error));

        // // Event listener for addressSubmit button
        // const addressSubmitButton = document.getElementById("addressSubmit");
        // if (addressSubmitButton) {
        //     addressSubmitButton.addEventListener("click", function () {
        //         console.log("Submit button clicked"); // Log for debugging
        //         const formData = {
        //             name: document.getElementById("name").value,
        //             street: document.getElementById("street").value,
        //             city: document.getElementById("city").value,
        //             state: document.getElementById("state").value,
        //             postal_code: document.getElementById("postal_code").value,
        //             country: document.getElementById("country").value,
        //             phone: document.getElementById("phone").value,
        //         };

        //         fetch("/store-address", {
        //             method: "POST",
        //             headers: {
        //                 "Content-Type": "application/json",
        //                 "X-CSRF-TOKEN": document
        //                     .querySelector('meta[name="csrf-token"]')
        //                     .getAttribute("content"),
        //             },
        //             body: JSON.stringify(formData),
        //         })
        //             .then((response) => response.json())
        //             .then((data) => {
        //                 if (data.success) {
        //                     alert(
        //                         "Address saved successfully, please select your address."
        //                     );

        //                     // Clear form inputs after submission
        //                     document.getElementById("addressForm").reset();

        //                     // Hide the form and display the "Add New Address" button
        //                     document.getElementById(
        //                         "addressForm"
        //                     ).style.display = "none";
        //                     document.getElementById(
        //                         "addNewAddressButton"
        //                     ).style.display = "block";

        //                     // Update address cards
        //                     updateAddressDropdown();
        //                 } else {
        //                     alert("Failed to save address");
        //                 }
        //             })
        //             .catch((error) => console.error("Error:", error));
        //     });
        // }
        // // Function to update the address dropdown
        // function updateAddressDropdown() {
        //     const existingAddressCards = document.getElementById(
        //         "existingAddressCards"
        //     );
        //     existingAddressCards.innerHTML = ""; // Clear existing cards

        //     fetch("/address-modal-data") // Adjust route as necessary
        //         .then((response) => response.json())
        //         .then((data) => {
        //             data.addresses.forEach((address) => {
        //                 // Create a card element for each address
        //                 const card = document.createElement("div");
        //                 card.classList.add(
        //                     "address-card",
        //                     "p-3",
        //                     "rounded",
        //                     "border"
        //                 );
        //                 card.style.cursor = "pointer";
        //                 card.innerHTML = `
        //             <strong>${address.name}</strong><br>
        //             ${address.street}<br>
        //             ${address.phone}
        //         `;

        //                 // Set up click event to select this address
        //                 card.addEventListener("click", function () {
        //                     // Mark as selected and clear previous selections
        //                     document
        //                         .querySelectorAll(".address-card")
        //                         .forEach((c) => c.classList.remove("selected"));
        //                     card.classList.add("selected");
        //                     selectedAddressId = address.id; // Store selected address ID
        //                 });

        //                 existingAddressCards.appendChild(card);
        //             });
        //         })
        //         .catch((error) =>
        //             console.error("Error fetching addresses:", error)
        //         );
        // }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    let selectedAddressId = null;

    // Event listener for "Checkout" button to load addresses
    const checkoutButton = document.getElementById("checkoutButton");
    if (checkoutButton) {
        checkoutButton.addEventListener("click", function () {
            const existingAddressCards = document.getElementById(
                "existingAddressCards"
            );
            existingAddressCards.innerHTML = ""; // Clear existing cards

            fetch("/address-modal-data") // Adjust route as necessary
                .then((response) => response.json())
                .then((data) => {
                    data.addresses.forEach((address) => {
                        // Create a card element for each address
                        const card = document.createElement("div");
                        card.classList.add(
                            "address-card",
                            "p-3",
                            "rounded",
                            "border"
                        );
                        card.style.cursor = "pointer";
                        card.innerHTML = `
                            <strong>${address.name}</strong><br>
                            ${address.street}<br>
                            ${address.phone}
                        `;

                        // Click event to select this address
                        card.addEventListener("click", function () {
                            // Clear previous selections and mark this one as selected
                            document
                                .querySelectorAll(".address-card")
                                .forEach((c) => c.classList.remove("selected"));
                            card.classList.add("selected");
                            selectedAddressId = address.id;

                            document.getElementById(
                                "continueButton"
                            ).style.display = "block";

                            // Hide the address form and show the "Add New Address" button
                            document.getElementById(
                                "addressForm"
                            ).style.display = "none";
                            document.getElementById(
                                "addNewAddressButton"
                            ).style.display = "block";
                        });

                        existingAddressCards.appendChild(card);
                    });
                })
                .catch((error) =>
                    console.error("Error fetching addresses:", error)
                );
        });
    }

    // Show the address form when "Add New Address" button is clicked
    const addNewAddressButton = document.getElementById("addNewAddressButton");
    if (addNewAddressButton) {
        addNewAddressButton.addEventListener("click", function () {
            document.getElementById("addressForm").style.display = "block";
            this.style.display = "none";

            // Clear selected address ID and remove selection highlights
            selectedAddressId = null;
            document
                .querySelectorAll(".address-card")
                .forEach((c) => c.classList.remove("selected"));

            // Hide the Continue button when adding a new address
            document.getElementById("continueButton").style.display = "none";
        });
    }

    // Event listener for addressSubmit button
    const addressSubmitButton = document.getElementById("addressSubmit");
    if (addressSubmitButton) {
        addressSubmitButton.addEventListener("click", function () {
            const formData = {
                name: document.getElementById("name").value,
                street: document.getElementById("street").value,
                city: document.getElementById("city").value,
                state: document.getElementById("state").value,
                postal_code: document.getElementById("postal_code").value,
                country: document.getElementById("country").value,
                phone: document.getElementById("phone").value,
            };

            fetch("/store-address", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document
                        .querySelector('meta[name="csrf-token"]')
                        .getAttribute("content"),
                },
                body: JSON.stringify(formData),
            })
                .then((response) => response.json())
                .then((data) => {
                    if (data.success) {
                        alert(
                            "Address saved successfully, please select your address."
                        );

                        // Clear form inputs after submission
                        document.getElementById("addressForm").reset();

                        // Hide the form and display the "Add New Address" button
                        document.getElementById("addressForm").style.display =
                            "none";
                        document.getElementById(
                            "addNewAddressButton"
                        ).style.display = "block";

                        // Update address cards
                        loadAddresses(data.newAddressId);
                    } else {
                        alert("Failed to save address.");
                    }
                })
                .catch((error) => console.error("Error:", error));
        });
    }

    // **Updated: loadAddresses function with a selectedId parameter to auto-select the new address**
    function loadAddresses(selectedId = null) {
        const existingAddressCards = document.getElementById(
            "existingAddressCards"
        );
        existingAddressCards.innerHTML = ""; // Clear existing cards

        fetch("/address-modal-data")
            .then((response) => response.json())
            .then((data) => {
                data.addresses.forEach((address) => {
                    // Create a card element for each address
                    const card = document.createElement("div");
                    card.classList.add(
                        "address-card",
                        "p-3",
                        "rounded",
                        "border"
                    );
                    card.style.cursor = "pointer";
                    card.innerHTML = `
                        <strong>${address.name}</strong><br>
                        ${address.street}<br>
                        ${address.phone}
                    `;

                    // **Updated: Automatically select the card if it matches the selectedId**
                    if (selectedId && address.id === selectedId) {
                        card.classList.add("selected");
                        selectedAddressId = address.id;
                        document.getElementById(
                            "continueButton"
                        ).style.display = "block";
                    }

                    // Set up click event to select this address
                    card.addEventListener("click", function () {
                        document
                            .querySelectorAll(".address-card")
                            .forEach((c) => c.classList.remove("selected"));
                        card.classList.add("selected");
                        selectedAddressId = address.id;

                        document.getElementById(
                            "continueButton"
                        ).style.display = "block";
                    });

                    existingAddressCards.appendChild(card);
                });
            })
            .catch((error) =>
                console.error("Error fetching addresses:", error)
            );
    }

    // Event listener for Continue button
    const continueButton = document.getElementById("continueButton");
    if (continueButton) {
        continueButton.addEventListener("click", function () {
            if (selectedAddressId) {
                // Send selected address ID to the backend
                fetch("/checkout/set-selected-address", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": document
                            .querySelector('meta[name="csrf-token"]')
                            .getAttribute("content"),
                    },
                    body: JSON.stringify({ address_id: selectedAddressId }),
                })
                    .then((response) => response.json())
                    .then((data) => {
                        if (data.success) {
                            // Redirect to checkout page
                            window.location.href = "/checkout";
                        } else {
                            alert("Failed to proceed to checkout.");
                        }
                    })
                    .catch((error) => console.error("Error:", error));
            } else {
                alert("Please select an address before continuing.");
            }
        });
    }

    const applyDiscountBtn = document.querySelector(".apply-discount-btn");
    const discountInput = document.querySelector(".discount-input");
    const grandTotalElement = document.getElementById("grandTotal");
    const discountAmountElement = document.getElementById("discountAmount");
    const discountValueElement = document.getElementById("discountValue");
    const finalTotalInput = document.getElementById("finalTotal"); // Hidden input for the updated grand total
    const discountCodeInputHidden = document.getElementById(
        "discountCodeInputHidden"
    ); // Hidden input for the discount code
    const originalGrandTotal = parseFloat(
        grandTotalElement.innerText.replace(/[^0-9,-]+/g, "").replace(",", ".")
    );

    applyDiscountBtn.addEventListener("click", function () {
        const discountCode = discountInput.value.trim();

        fetch("/apply-discount", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute("content"),
            },
            body: JSON.stringify({
                discount_code: discountCode,
                grand_total: originalGrandTotal,
            }),
        })
            .then((response) => response.json())
            .then((data) => {
                console.log("Response Data:", data);

                if (data.success === true) {
                    // Update the displayed total and discount amount
                    const newTotal = data.new_total;
                    const discountAmount = originalGrandTotal - newTotal;

                    grandTotalElement.innerText = `Grand Total: Rp ${newTotal.toLocaleString(
                        "id-ID"
                    )},00`;
                    discountValueElement.innerText =
                        discountAmount.toLocaleString("id-ID");
                    discountAmountElement.style.display = "block";
                    discountAmountElement.style.color = "green";
                    discountInput.value = ""; // Clear the input

                    // Update the hidden inputs for form submission
                    finalTotalInput.value = newTotal;
                    discountCodeInputHidden.value = discountCode;

                    // Show success message with SweetAlert
                    Swal.fire({
                        title: "Success!",
                        text: "Discount applied successfully!",
                        icon: "success",
                        confirmButtonText: "OK",
                        timer: 3000,
                        timerProgressBar: true,
                    });
                } else {
                    // Show error message with SweetAlert for unexpected responses
                    Swal.fire({
                        title: "Error!",
                        text: data.message || "Failed to apply discount.",
                        icon: "error",
                        confirmButtonText: "OK",
                        timer: 3000,
                        timerProgressBar: true,
                    });
                }
            })
            .catch((error) => {
                console.error("Error:", error);
                Swal.fire({
                    title: "Error!",
                    text: "An error occurred while applying the discount.",
                    icon: "error",
                    confirmButtonText: "OK",
                    timer: 3000,
                    timerProgressBar: true,
                });
            });
    });

    document.addEventListener("DOMContentLoaded", () => {
        // Attach click listeners to all view buttons
        const buttons = document.querySelectorAll(".view-transaction-btn");
        buttons.forEach((button) => {
            button.addEventListener("click", function () {
                const transactionId = this.getAttribute("data-transaction-id");
                showTransactionDetails(transactionId);
            });
        });
    });

    // Function to display transaction details in a modal
    function showTransactionDetails(transactionId) {
        console.log("Transaction ID:", transactionId); // For debugging

        // Fetch the transaction details via AJAX
        fetch(`/admin/transactions/${transactionId}`)
            .then((response) => {
                if (!response.ok) {
                    throw new Error("Failed to fetch transaction details");
                }
                return response.json();
            })
            .then((data) => {
                console.log("Transaction Data:", data); // For debugging

                // Populate modal with transaction details
                document.getElementById(
                    "transactionModalLabel"
                ).innerText = `Transaction Details for ID: ${transactionId}`;
                document.getElementById("transactionUUID").innerText =
                    data.uuid;
                document.getElementById("transactionRef").innerText = data.ref;
                document.getElementById("transactionChannel").innerText =
                    data.channel;
                document.getElementById(
                    "transactionAmount"
                ).innerText = `Rp ${new Intl.NumberFormat("id-ID").format(
                    data.amount
                )}`;
                document.getElementById(
                    "transactionFee"
                ).innerText = `Rp ${new Intl.NumberFormat("id-ID").format(
                    data.fee
                )}`;
                document.getElementById(
                    "transactionNettAmount"
                ).innerText = `Rp ${new Intl.NumberFormat("id-ID").format(
                    data.nett_amount
                )}`;
                document.getElementById("transactionProducts").innerText =
                    JSON.stringify(data.products, null, 2);
                document.getElementById("transactionCustomer").innerText =
                    JSON.stringify(data.customer_details, null, 2);
                document.getElementById("transactionInvoiceURL").href =
                    data.invoice_url;
                document.getElementById("transactionInvoiceURL").innerText =
                    data.invoice_url;

                // Initialize and show the Bootstrap modal
                const transactionModal = new bootstrap.Modal(
                    document.getElementById("transactionModal")
                );
                transactionModal.show();
            })
            .catch((error) => {
                console.error("Error fetching transaction details:", error);
                alert("Failed to load transaction details.");
            });
    }
});

// Discount
// document.addEventListener("DOMContentLoaded", function () {
//     const applyDiscountBtn = document.querySelector(".apply-discount-btn");
//     const discountInput = document.querySelector(".discount-input");
//     const grandTotalElement = document.getElementById("grandTotal");
//     const discountAmountElement = document.getElementById("discountAmount");
//     const discountValueElement = document.getElementById("discountValue");
//     const originalGrandTotal = parseFloat(
//         grandTotalElement.innerText.replace(/[^0-9,-]+/g, "").replace(",", ".")
//     );

//     applyDiscountBtn.addEventListener("click", function () {
//         const discountCode = discountInput.value.trim();

//         fetch("/apply-discount", {
//             // Adjust the URL according to your route
//             method: "POST",
//             headers: {
//                 "Content-Type": "application/json",
//                 "X-CSRF-TOKEN": document
//                     .querySelector('meta[name="csrf-token"]')
//                     .getAttribute("content"), // Include CSRF token if using Laravel
//             },
//             body: JSON.stringify({
//                 discount_code: discountCode,
//                 grand_total: originalGrandTotal,
//             }),
//         })
//             .then((response) => response.json())
//             .then((data) => {
//                 if (data.success) {
//                     // Update the displayed total and discount amount
//                     const newTotal = data.new_total;
//                     const discountAmount = originalGrandTotal - newTotal;

//                     grandTotalElement.innerText = `Grand Total: Rp ${newTotal.toLocaleString(
//                         "id-ID"
//                     )},00`;
//                     discountValueElement.innerText =
//                         discountAmount.toLocaleString("id-ID"); // Update discount value
//                     discountAmountElement.style.display = "block"; // Show the discount info
//                     discountAmountElement.style.color = "green"; // Success message color
//                     discountInput.value = ""; // Clear the input
//                 } else {
//                     // Show error message (optional)
//                     alert(data.message); // Or handle it in a more user-friendly way
//                 }
//             })
//             .catch((error) => {
//                 console.error("Error:", error);
//                 alert("An error occurred while applying the discount.");
//             });
//     });
// });

// document
//     .getElementById("addressSubmit")
//     .addEventListener("click", function () {
//         const formData = new FormData(
//             document.getElementById("addressForm")
//         );

//         fetch("/checkout/address", {
//             method: "POST",
//             headers: {
//                 "X-CSRF-TOKEN": document
//                     .querySelector('meta[name="csrf-token"]')
//                     .getAttribute("content"),
//             },
//             body: formData,
//         })
//             .then((response) => response.json())
//             .then((data) => {
//                 if (data.success) {
//                     $("#addressModal").modal("hide");
//                     $("#deliveryMethodModal").modal("show"); // Proceed to delivery modal
//                 } else {
//                     alert("Error saving address");
//                 }
//             })
//             .catch((error) => console.error("Error:", error));
//     });
