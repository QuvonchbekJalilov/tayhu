<!DOCTYPE html>
<html lang="en">
<!--<< Header Area >>-->

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="gramentheme">
    <meta name="description" content="Tayhu – Comfort & Elegance">
    <!-- ======== Page title ============ -->
    <title>{{ $title ?? 'Tayhu – Comfort & Elegance'}}</title>
    <!--<< Favcion >>-->
    <link rel="shortcut icon" href="/assets/img/logo-title.png">
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <!--<< All Min Css >>-->
    <link rel="stylesheet" href="/assets/css/all.min.css">
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="/assets/css/animate.css">
    <!-- Splitting css -->
    <link rel="stylesheet" href="/assets/css/splitting.css">
    <!--<< Magnific Popup.css >>-->
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="/assets/css/meanmenu.css">
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="/assets/css/swiper-bundle.min.css">
    <!--<< Nice Select.css >>-->
    <link rel="stylesheet" href="/assets/css/nice-select.css">
    <!--<< Color.css >>-->
    <link rel="stylesheet" href="/assets/css/color.css">
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> -->

</head>

<body>
        <!-- Preloader Start -->
        <div id="preloader" class="preloader">
            <div class="animation-preloader">
                <div class="spinner">
                </div>
                <div class="txt-loading">
                    <span data-text-preloader="T" class="letters-loading">
                        T
                    </span>
                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                    <span data-text-preloader="Y" class="letters-loading">
                        Y
                    </span>
                    <span data-text-preloader="H" class="letters-loading">
                        H
                    </span>
                    <span data-text-preloader="U" class="letters-loading">
                        U
                    </span>
                </div>
                <p class="text-center">Loading</p>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>
    <!--<< Mouse Cursor Start >>-->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>

    @if (request()->routeIs('home'))
        <x-header></x-header>
    @else
        <x-header-2></x-header-2>
    @endif


    <div id="smooth-wrapper">
        <div id="smooth-content">
            {{ $slot }}
            <x-footer></x-footer>
        </div>
    </div>

    <script src="/assets/js/configurator.js"></script>

    <!--<< All JS Plugins >>-->
    <script src="/assets/js/jquery-3.7.1.min.js"></script>
    <!--<< Viewport Js >>-->
    <script src="/assets/js/viewport.jquery.js"></script>
    <!--<< Bootstrap Js >>-->
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <!--<< Gsap Js >>-->
    <script src="/assets/js/gsap/gsap.js"></script>
    <!--<< Gsap Scroll Js >>-->
    <script src="/assets/js/gsap/gsap-scroll-to-plugin.js"></script>
    <!--<< Gsap Scroll Smoother Js >>-->
    <script src="/assets/js/gsap/gsap-scroll-smoother.js"></script>
    <!--<< Gsap Scroll Trigger Js >>-->
    <script src="/assets/js/gsap/gsap-scroll-trigger.js"></script>
    <!-- Splitting Js -->
    <script src="/assets/js/splitting.js"></script>
    <!--<< Nice Select Js >>-->
    <script src="/assets/js/jquery.nice-select.min.js"></script>
    <!--<< Waypoints Js >>-->
    <script src="/assets/js/jquery.waypoints.js"></script>
    <!--<< Counterup Js >>-->
    <script src="/assets/js/jquery.counterup.min.js"></script>
    <!--<< Swiper Slider Js >>-->
    <script src="/assets/js/swiper-bundle.min.js"></script>
    <!--<< MeanMenu Js >>-->
    <script src="/assets/js/jquery.meanmenu.min.js"></script>
    <!--<< Magnific Popup Js >>-->
    <script src="/assets/js/jquery.magnific-popup.min.js"></script>
    <!--<< Wow Animation Js >>-->
    <script src="/assets/js/wow.min.js"></script>
    <!--<< Splitting Animation Js >>-->
    <script src="/assets/js/splitting-animation.js"></script>
    <!--<< Main.js >>-->
    <script src="/assets/js/main.js"></script>
</body>

</html>
