<!doctype html>
<html lang="en-US">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <title>{{ $page_title }} || {{ config('app.name') }}</title>
    <meta name="description" content="Nordic is a free Bootstrap HTML Template" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Add site Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon.png">
    <meta name="msapplication-TileImage" content="assets/img/favicon.png" />
    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/customScrollbar/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="assets/vendor/magnific-popup/css/magnific-popup-min.css">
    <link rel="stylesheet" href="assets/vendor/slick-slider/slick.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body class="home">
    <div class="page-wrapper">
        <!-- Preloader Area Start -->
        <div id="wc-preload">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
            </div>
        </div>
        <!-- Preloader Area End -->
        <!-- Header Area Start -->
        <header class="wc-header-area wc-main-header">
            <div class="header-upper">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-4 col-md-3">
                            <div class="logo-box">
                                <div class="logo">
                                    <a href="{{ route('welcome') }}">
                                        <img src="{{ asset('assets/img/logo.png') }}" alt="" title="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="d-none d-lg-block col-lg-6">
                            <div class="nav-outer clearfix text-center">
                                <!-- Main Menu -->
                                <nav class="wc-main-menu navbar-expand-md">
                                    <div class="navbar-header">
                                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    <div class="navbar-collapse show collapse clearfix" id="navbarSupportedContent">
                                        <ul class="navigation clearfix">
                                            <li class="{{ url()->current() == 'how-to-work' ? 'current' : '' }}"><a href="{{ route('how-to-work') }}">How we Work</a></li>
                                            <li class="{{ url()->current() == 'how-to-work' ? 'current' : '' }}><a href="about.html">About Us</a></li>
                                            <li class="{{ url()->current() == 'how-to-work' ? 'current' : '' }}><a href="service.html">Service</a></li>
                                            <li class="{{ url()->current() == 'how-to-work' ? 'current' : '' }}><a href="portfolio.html">Portfolio</a></li>
                                            <li class="{{ url()->current() == 'how-to-work' ? 'current' : '' }}><a href="pricing.html">Priceng</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                        <div class="col-8 col-md-9 col-lg-3">
                            <!-- Outer Box -->
                            <div class="wc-outer-box">
                                <a class="wc-blank-btn" href="contact.html">Contact us</a>
                                <a class="wc-btn" href="free-trial.html">Free Trial</a>
                                <div class="mobile-nav-toggler"><i class="icofont-navigation-menu"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu  -->
            <div class="wc-mobile-menu">
                <div class="menu-backdrop"></div>
                <nav class="menu-box">
                    <div class="close-btn"><i class="icofont-close-line"></i></div>
                    <div class="nav-logo">
                        <a href="index.html"><img src="assets/img/logo.png" alt="" title=""></a>
                    </div>
                    <div class="menu-outer">
                    </div>
                </nav>
            </div>
            <!-- End Mobile Menu -->
        </header>
        <!-- Header Area End -->

        {{--  main content will go here  --}}
        @yield('content')

        <!-- Footer Area Start -->
        <footer class="wc-footer">
            <div class="wc-footer-top">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6 mb-4 mb-md-0">
                            <div class="wc-section-title mb-3 mb-lg-5">
                                <h2>Ready to get started?</h2>
                                <p>Find the time to fall in love with your work again</p>
                            </div>
                            <div class="wc-btn-group">
                                <a href="quote.html" class="wc-btn wc-fill-btn">Get A Quote</a>
                                <a href="service.html" class="wc-btn wc-border-btn">Show All Services</a>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4 mb-md-0">
                            <ul class="wc-footer-menu">
                                <li><a href="how-it-work.html">How it Work</a> </li>
                                <li><a href="service.html"> Services</a></li>
                                <li><a href="portfolio.html"> Portfolio</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <ul class="wc-footer-menu">
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                <li><a href="terms-conditions.html"> Terms and Conditions</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wc-footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <p class="copy-right text-center text-md-start">Design & Develop by <a href="https://quickteamacademy.com">Quickteam</a></p>
                        </div>
                        <div class="col-md-6">
                            <p class="copy-right">© {{ date('Y') }} WorldClippingPath. All Rights Reserved.</p>
                        </div>
                        <div class="col-md-3">
                            <ul class="wc-social text-center text-md-end">
                                <li>
                                    <a href="#"><i class="icofont-dribbble"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icofont-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icofont-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icofont-youtube-play"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End -->
        <span class="back-to-top" style="display: none;"><i class="icofont icofont-long-arrow-up"></i></span>
    </div>
    <!-- All Js -->
    <script src="assets/vendor/jQuery/jquery-1.12.4.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/slick-slider/slick.min.js"></script>
    <script src="assets/vendor/customScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/vendor/magnific-popup/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
