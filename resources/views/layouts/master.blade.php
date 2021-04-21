<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keyword" content="">

    <!-- favicon icon -->
    <link rel="icon" href="#">

    <title>Access Options Trading FX</title>

    <!-- Main style css -->
    <link rel="stylesheet" href="/front/css/style.css">

    <script src="//code.jivosite.com/widget/alEJteVfBc" async></script>

</head>

<body>

<!-- Preloader Part Start -->
<div id="prelaoder">
    <div class="cssload-loader">
        <div class="cssload-flipper">
            <div class="cssload-front"></div>
            <div class="cssload-back"></div>
        </div>
    </div>
</div>
<!-- Preloader Part End -->

<!-- Header Part Start -->
<header>
{{--    <div class="header-top">--}}
{{--        <div class="container">--}}
{{--            <div class="row d-flex align-items-center">--}}

{{--                <div class="col-12 col-md-4  text-center text-md-left">--}}
{{--                    <div class="header-top-left mb-2 mb-md-0">--}}
{{--                        <ul class="flat-list social-icon">--}}
{{--                            <li><a href="#"><img src="/front/images/card-icon-1.jpg" alt=""></a></li>--}}
{{--                            <li><a href="#"><img src="/front/images/card-icon-2.jpg" alt=""></a></li>--}}
{{--                            <li><a href="#"><img src="/front/images/card-icon-3.jpg" alt=""></a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-12 col-md-8  text-center text-md-right">--}}
{{--                    <div class="header-top-right">--}}
{{--                        <ul class="flat-list">--}}
{{--                            <li>--}}
{{--                                <h5>+0.11+</h5>--}}
{{--                                <h5>+0.13+</h5>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <h5><i class="fa fa-caret-up"></i> Day Hight 88.77</h5>--}}
{{--                                <h5><i class="fa fa-caret-down"></i> Day Hight 88.77</h5>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href=".html" class="popup-chart"><img src="images/header-top-icon.png" alt="">--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <!-- Price Chart Part Start -->
    <div class="section-p chart-popup-content mfp-hide" style="background:#fff">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-6">
                    <div class="treading">
                        <h2>Treding <span class="brand-color">Fee 0%</span></h2>
                        <h5 class="brand-color semi-bold">On the UK's no.1 Bitcoin exchange</h5>
                        <p>Bitcoin Hit $15000 in Magor Milestone for #1 CryptoCurrency.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it.</p>
                        <a href="{{ route('register') }}" class="btn-5 mt-3 mt-lg-4">Join Us</a>
                    </div>
                </div>
                <div class="col-md-6 text-center mt-3 mt-md-0">
                    <div class="price-chart">
                        <div class="btcwdgt-chart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Price Chart Part End -->

    <!-- Navigation -->

    <nav id="navigation" class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="main-logo" href="{{ url('/') }}"><img src="/front/images/logo.png" alt="LOGO"></a>

            <div class="out-link ml-auto d-none d-sm-inline d-lg-none"><a href="#" class="btn-1">Free Consultation</a></div>

            <button class="navbar-toggler mobile-toggle ml-auto ml-sm-0" type="button" data-toggle="collapse" data-target="#nav-list">
                <i class="fa fa-bars"></i>
            </button>

            <div id="nav-list" class="navbar-collapse collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#banner-part">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#price-chart-part">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#service-part">Contact Us</a>
                    </li>
                    @guest()
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                        @endguest
                </ul>
            </div>

            @guest()
                <div class="out-link d-none d-lg-inline"><a href="{{ route('register') }}" class="btn-1">Create Account</a></div>
            @else
                <div class="out-link d-none d-lg-inline"><a href="{{ route('backend.dashboard') }}" class="btn-1">Dashboard</a></div>
            @endguest

        </div>
    </nav>

    <!-- mobile manu -->
    <div id="mobile-manu">
        <div class="mobile-manu-box">
            <div class="mobile-manu-top d-flex align-items-center">
                <a href="{{ url('/') }}"><img src="/front/images/logo.png" alt=""></a>
                <button class="close-mobile-manu ml-auto"><i class="fa fa-close"></i></button>
            </div>
            <ul class="mobile-list">
                <li class="nav-item">
                    <a class="nav-link" href="#banner-part">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#price-chart-part">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#service-part">Contact Us</a>
                </li>
                @guest()
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                    @endguest
            </ul>

            @guest()
                <div class="out-link pl-0 mt-3"><a href="{{ route('register') }}" class="btn-1">Create Account</a></div>
            @else
                <div class="out-link pl-0 mt-3"><a href="{{ route('backend.dashboard') }}" class="btn-1">Dashboard</a></div>
            @endguest
        </div>

    </div>
</header>
<!-- Header Part End -->

@yield('content')

<!-- Footer Part Start -->
<footer id="footer-part">
    <div id="footer-widget" class="section-p">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="footer-widget-item">
                        <h4>Contact</h4>
                        <div class="contact">
                            <ul>
                                <li><i class="fa fa-map-marker"></i>{{ setting('address') }}</li>
                                <li><a href="mailto:: {{ setting('email','support@accessoptionstrading.com') }}"><i class="fa fa-envelope"></i>
                                    {{ setting('email','support@accessoptionstrading.com') }}</a></li>
                                <li><a href="callto::{{ setting('phone') }}"><i class="fa fa-phone"></i>{{ setting('phone','+1(209)245‑8464') }}</a></li>
                            </ul>
                        </div>
                        <div class="footer-widget-item">
                            <h4 class="mb-1">Connect with us:</h4>
                            <ul class="flat-list social-icon">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="footer-widget-item  mt-4 mt-sm-0">
                        <h4>Links</h4>
                        <ul class="regular-list">
                            <li><a href="{{ route('backend.dashboard') }}">Dashboard</a></li>
                            <li><a href="#price-chart-part">About</a></li>
                            <li><a href="#service-part">Contact Us</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-lg-4">
                    <div class="footer-about mt-4 mt-lg-0">
                        <div class="footer-logo">
                            <a href="#"><img src="/front/images/logo-footer.png" alt=""></a>
                            <p class="mt-3 mb-">Access Options Trading FX is a company that successfully achieves its objectives and gives others the opportunity to prosper.</p>
                            <a href="#"><i class="fa fa-caret-right"></i> About us</a>
                        </div>
                        <div class="footer-widget-item">
                            <ul class="flat-list">
                                <li><a href="#"><img src="/front/images/card-icon-1.jpg" alt=""></a></li>
                                <li><a href="#"><img src="/front/images/card-icon-2.jpg" alt=""></a></li>
                                <li><a href="#"><img src="/front/images/card-icon-3.jpg" alt=""></a></li>
                                <li><a href="#"><img src="/front/images/card-icon-1.jpg" alt=""></a></li>
                                <li><a href="#"><img src="/front/images/card-icon-2.jpg" alt=""></a></li>
                                <li><a href="#"><img src="/front/images/card-icon-3.jpg" alt=""></a></li>
                                <li><a href="#"><img src="/front/images/card-icon-2.jpg" alt=""></a></li>
                                <li><a href="#"><img src="/front/images/card-icon-3.jpg" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>Copyright © {{ date('Y') }} <a href="#">Access Options Trading FX</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Part End -->

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="/front/js/jquery.min.js"></script>
<script src="/front/js/popper.min.js"></script>
<script src="/front/js/bootstrap.min.js"></script>

<!-- Plug In Js -->
<script src="/front/js/plugins.js"></script>

<!-- Custom js -->
<script src="/front/js/custom.js"></script>



</body>

</html>
