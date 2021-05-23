<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <title>Crypterium</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta name="viewport" content="user-scalable=no, width=device-width, height=device-height, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui" />

    <meta name="theme-color" content="#3F6EBF" />
    <meta name="msapplication-navbutton-color" content="#3F6EBF" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#3F6EBF" />

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="img/favicon.html">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.html">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.html">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.html">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/style.min.css" type="text/css">

    <!-- Load google font
    ================================================== -->
    <script type="text/javascript">
        WebFontConfig = {
            google: { families: [ 'Open+Sans:300,400,500','Lato:900', 'Poppins:400', 'Catamaran:300,400,500,600,700'] }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
                '://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>

    <!-- Load other scripts
    ================================================== -->
    <script type="text/javascript">
        var _html = document.documentElement,
            isTouch = (('ontouchstart' in _html) || (navigator.msMaxTouchPoints > 0) || (navigator.maxTouchPoints));

        _html.className = _html.className.replace("no-js","js");

        isTouch ? _html.classList.add("touch") : _html.classList.add("no-touch");
    </script>
    <script type="text/javascript" src="js/device.min.js"></script>
    <style>
        .__item--fourth{
            background-color: #292b30;
        }
       .support .__item {
            color: black;
           background: #fff;
           border: 1px solid #e7ebee;
           box-sizing: border-box;
           border-radius: 16px;
           margin-right: 5px;
           position: relative;
        }
    </style>
</head>

<body>
<!-- start header -->
<header id="top-bar" class="top-bar--light">
    <div id="top-bar__inner">
        <a id="top-bar__logo" class="site-logo" href="index.html">
            <img class="img-responsive" width="175" height="42" src="img/site_logo.png" alt="demo" />
            <img class="img-responsive" width="175" height="42" src="img/site_logo_2.png" alt="demo" />
        </a>

        <a id="top-bar__navigation-toggler" href="javascript:void(0);"><span></span></a>

        <div id="top-bar__navigation-wrap">
            <div>
                <nav id="top-bar__navigation" class="navigation" role="navigation">
                    <ul>
                        <li class="active">
                            <a href="/"><span>Home</span></a>
                        </li>

                        <li>
                            <a href="javascript:void(0);"><span>Company</span></a>
                            <div class="submenu">
                                <ul>
                                    <li><a href="{{ route('about') }}">Why #name</a></li>
                                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><span>Markets</span></a>
                            <div class="submenu">
                                <ul>
                                    <li><a href="about.html">Forex</a></li>
                                    <li><a href="services.html">Indices</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="{{ route('faqs') }}"><span>FAQ’s</span></a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}"><span>Support</span></a>
                        </li>
                    </ul>
                </nav>

                <br class="hide--lg">

                <ul id="top-bar__subnavigation">
                    <li><a class="custom-btn custom-btn--small custom-btn--style-3" href="sign_in.html">Login</a></li>
                    <li><a href="sign_up.html">Sign up</a></li>

                    <li>
                        <div id="top-bar__choose-lang">
                            <div class="list-wrap">
                                <ul class="list">
                                    <li><img class="img-responsive  circled" src="img/ico/flag/2.png" width="25" height="25" alt="demo" ></li>
                                    <li><img class="img-responsive  circled" src="img/ico/flag/3.png" width="25" height="25" alt="demo" ></li>
                                    <li><img class="img-responsive  circled" src="img/ico/flag/4.png" width="25" height="25" alt="demo" ></li>
                                </ul>
                            </div>

                            <i><img class="img--active img-responsive  circled" src="img/ico/flag/1.png" width="25" height="25" alt="demo" ></i>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- end header -->

@yield('content')
<!-- start footer -->
<footer id="footer" class="text--center text--lg-left">
    <div class="grid grid--container">

        <div class="row row--xs-middle">
            <div class="col col--sm-10 col--md-8 col--lg-4">
                <div class="__item">
                    <a class="site-logo" href="index.html">
                        <img class="img-responsive lazy" width="175" height="42" src="img/blank.gif" data-src="img/site_logo.png" alt="demo" />
                    </a>

                    <p class="__text">
                        Many desktop publishing packages and web page editors now use Lorem
                        Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
                    </p>
                </div>
            </div>

            <div class="col col--sm-10 col--md-8 col--lg-3 col--xl-offset-1">
                <div class="__item">
                    <h4 class="__title">Main menu</h4>

                    <nav id="footer__navigation" class="navigation">
                        <div class="row row--xs-middle">
                            <div class="col col--xs-auto col--lg-6">
                                <ul class="__menu">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Contacts</a></li>
                                    <li><a href="#">News</a></li>
                                </ul>
                            </div>

                            <div class="col col--xs-auto col--lg-6">
                                <ul class="__menu">
                                    <li><a href="#">Events</a></li>
                                    <li><a href="#">Wallet</a></li>
                                    <li><a href="#">FAQ’s</a></li>
                                    <li><a href="#">Support</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="col col--sm-10 col--md-8 col--lg-5 col--xl-4">
                <div class="__item">
                    <h4 class="__title">Subscribe</h4>

                    <form class="form--horizontal" action="#">
                        <div class="b-table">
                            <div class="cell v-middle">
                                <div class="input-wrp">
                                    <input class="textfield" type="text" value="" placeholder="E-mail" />
                                </div>
                            </div>

                            <div class="cell v-middle">
                                <button class="custom-btn custom-btn--medium custom-btn--style-2" type="submit" role="button">Subscribe</button>
                            </div>
                        </div>
                    </form>

                    <p class="__note">Despite some naming, syntactic, and standard</p>
                </div>
            </div>
        </div>

        <div class="row row--xs-middle row--lg-between">
            <div class="col col--sm-10 col--md-8 col--lg-4">
                <div class="__item">
                    <div class="social-btns">
                        <a class="fontello-twitter" href="#"></a>
                        <a class="fontello-facebook" href="#"></a>
                        <a class="fontello-linkedin-squared" href="#"></a>
                    </div>
                </div>
            </div>

            <div class="col col--sm-10 col--md-8 col--lg-6  text--lg-right">
                <div class="__item">
                    <span class="__copy"><a class="__dev" href="#">About Us</a> | <a href="#">Privacy Policy</a> | <a href="#">Sitemap</a></span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <p>Risk Warning: trading margined products is risky. It isn't suitable for everyone and you could lose substantially more
                    than your initial investment. You don't own or have rights in the underlying assets. Past performance is no
                    indication of future performance and tax laws are subject to change. The information on this website is general
                    in nature and doesn't take into account your personal objectives, financial circumstances, or needs.
                    Please read our RDN and other legal documents and ensure you fully understand the risks before you make any trading decisions.
                    We encourage you to seek independent advice. </p>

                <p>#name Markets Kenya Limited 2nd Floor, The Oval, Ring Road Parklands, PO Box 2905-00606 Nairobi, Kenya and
                    is licensed and regulated by the Capital Markets Authority. </p>

                <p>The information on this site and the products and services offered are not intended for distribution to any person in any country
                    or jurisdiction where such distribution or use would be contrary to local law or regulation. </p>

                <p>© {{ date('Y') }} #name Markets Kenya Limited | Company No.PVT-PJU7Q8K | CMA Licence No.128</p>
            </div>
        </div>
    </div>
</footer>
<!-- end footer -->

<div id="btn-to-top-wrap">
    <a id="btn-to-top" class="circled" href="javascript:void(0);" data-visible-offset="800"></a>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-2.2.4.min.js"><\/script>')</script>

<script type="text/javascript" src="js/main.min.js"></script>
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='https://www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>
</body>
</html>
