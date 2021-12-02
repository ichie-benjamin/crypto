
<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crypto Assets broker. Online Crypto trading</title>
    <meta name="description" content="Official website of Crypto Assets broker. Earn online by trading on Crypto and financial markets. With Financialtrade broker, you can trade in сurrency, oil, precious metals and stock indices. Reliable ECN Crypto broker with high-quality service.">
    <meta name="keywords">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Financialtrademarktets Crypto broker. Online Crypto trading with ECN broker">
    <meta property="og:site_name" content="Crypto Assets">
{{--    <meta property="og:url" content="index-2.html">--}}

    <link rel="icon" type="image/png" sizes="16x16" href="{{ setting('favicon','/images/fav.png') }}">


    <meta property="og:description" content="Official website of Crypto Assets Crypto broker. Earn online by trading on Crypto and financial markets. With Crypto Assets broker, you can trade in сurrency, oil, precious metals and stock indices. Reliable ECN Crypto broker with high-quality service.">

    <link href="/css/app6597.css" rel="stylesheet">

    <script src="/js/jquery.min.js"></script>

{{--    <script src="//code.jivosite.com/widget/vhb4amL596" async></script>--}}

    <style>
        .translated-ltr{margin-top:-30px;}
        .translated-ltr{margin-top:-30px;}
        .goog-te-banner-frame {display: none;margin-top:-20px;}

        .goog-logo-link {
            display:none !important;
        }

        .promotions-block-main {
            padding: 0 0 20px!important;
        }

        .section {
            min-height: 100px!important;
            height: 100%;
        }

        .goog-te-gadget select{
            /*color: transparent !important;*/
            height: inherit;
        }

        @media (max-width: 400px) {
            .goog-te-gadget {
                margin-top: 30px
            }
        }
        @media (max-width: 400px) {
            .goog-te-gadget select{
                height: inherit;
            }
        }
    </style>
    <!-- Chatra {literal} -->
    <script>

        function hasClass(elem,cls) {
            return elem.className.match(new RegExp('(\\s|^)'+cls+'(\\s|$)'));
        }

        Tifia = {
            cabinetUrl: 'https://social.tifia.com/en/',
            apiUrl: 'https://api.tifia.com',
            quotesUrl: 'https://tifia.com'
        };

        Lang = {
            'day'               : 'day',
            'days'              : 'days',
            'View'              : 'View',
            'Equity'            : 'Equity',
            'Lifespan'          : 'Lifespan',
            'Investors'         : 'Investors',
            'Profitability'     : 'Profitability',
            'InvestorsEquity'   : 'Investor&#039;s equity',
            'TradersCommission' : 'Trader&#039;s commission',
        };

        App = {
            loader: {
                getObj: function(obj) {
                    if (obj.closest('.loader-wrapper')) {
                        return obj.closest('.loader-wrapper');
                    } else if ( obj.closest('.dropdown-menu').length > 0 && obj.closest('.btn-group').length > 0 ) {
                        return obj.closest('.btn-group');
                    }

                    return obj;
                },
                show: function (obj) {
                    var obj = this.getObj(obj);

                    if (!obj.hasClass('no-loader')) {
                        obj.addClass('ajax-loading');

                        if (obj.height() >= 50) {
                            obj.append('<div class="loader"></div>');
                        } else {
                            obj.append('<div class="loader __mini"></div>');
                        }

                        obj.addClass('overlay');
                    }
                },
                hide: function (obj) {
                    var obj = this.getObj(obj);

                    obj.removeClass('ajax-loading');
                    obj.find('.loader').remove();
                    obj.removeClass('overlay');
                },
            }
        }
    </script>
    <!-- /Chatra {/literal} -->

    <link rel="stylesheet" href="/css/general.css">

</head>

<body class="lang-en">
<!-- End Google Tag Manager (noscript) -->
<div class="main-wrapper">
    <header class="" style="height: 95px;">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg">
                <div class="left-block mb-5">
                    <div class="logo">
                        <p>
                            <a style="margin-top: -10px; color: white;  line-height: 1px" href="{{ url('/') }}"><img alt="Crypto Assest" style="max-height: 70px; max-width: 80px;" height="70"  src="/images/fav.png"><br/>
{{--                                Crypto Assets--}}
                            </a>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="main-menu">
                            <div id="navbarNav" class="collapse navbar-collapse">
                                <ul class="">
                                    <li class="mob-only no-bg open-acc"><a class="" href="{{ route('register') }}" rel="nofollow">Registration</a>                                            </li>
                                    <li class="mob-only no-bg"><a class="" href="{{ route('login') }}" rel="nofollow">Sign in</a></li>
                                    <li>
                                        <a style="cursor: pointer" href="{{ route('home') }}">Home<span></span></a>
                                        <div class="bg-menu"></div>
                                    </li>

                                    <li>
                                        <a style="cursor: pointer" href="{{ route('about') }}" rel="nofollow">About us</a>
                                        <div class="bg-menu"></div>
                                    </li>

                                    <li><a>Trading<span></span></a>
                                        <div class="dropdawn-menu-block">
                                            <div class="row d-flex align-items-start">
                                                <div class="col-12 d-flex align-items-start">
                                                    <ul class="dropdawn-menu"><li><a href="{{ route('withdrawal') }}"><span>Withdrawal Info</span></a></li>
                                                        <li><a href="{{ route('verification') }}"><span>FAQ Verifications</span></a></li></ul>                                                        </div>
                                            </div>
                                        </div>
                                        <div class="bg-menu" style="display: none; height: 0px;"></div>
                                    </li>
                                    <li>
                                        <a style="cursor: pointer" href="{{ route('fags') }}" rel="nofollow">Faqs</a>
                                        <div class="bg-menu"></div>
                                    </li>
                                    <li>
                                        <a style="cursor: pointer" href="{{ route('contact') }}" rel="nofollow">Contact us</a>
                                        <div class="bg-menu"></div>
                                    </li>

                                    <li>
                                        <div class="bg-menu"></div>
                                    </li>
                                    <li class="mob-only">
                                        <div style="height: 20px; margin-top: -30px; margin-left: 20px" id="google_translate_element"></div>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right-block">
                    @guest()
                    <div class="reg-btn">
                        <a class="" href="{{ route('register') }}" rel="nofollow">Open account</a>
                        <a class="" href="{{ route('login') }}" rel="nofollow">Sign in</a>
                    </div>
                    @else
                        <div class="reg-btn">
                            <a class="" href="/dashboard" rel="nofollow">Dashboard</a>
                        </div>
                    @endguest
                    <div class="lang-block">
                        <span class="separator"></span>
                        <div style="height: 20px; margin-top: 30px;"  id="google_translate_element">
                        </div>
                    </div>
                </div>
                <button class="navbar-toggler navbar-btn-menu" type="button" data-toggle="collapse"
                        data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </nav>
        </div>
    </header>
    <div class="menu-overlay"></div>

    <div class="bg-fix">
        @yield('content')
    </div>

</div>









<script src="/js/TweenMax.min.js" async="" defer=""></script>
<script src="/js/ScrollMagic.min.js" async="" defer=""></script>
<script src="/js/animation.gsap.js" async="" defer=""></script>
<script src="/js/scene-scroll.js" async="" defer=""></script>
{{--<script src="/js/app1.js"></script>--}}
{{--<script src="/js/vendor.js"></script>--}}

<script src="/js/popper.min.js"></script>

<script src="/js/bootstrap.min.js"></script>

<script src="/js/lazyload.min.js"></script>
<script src="/js/lazyload-css.1.0.5.min.js"></script>
<script src="/js/new-main.js"></script>
{{--<script src="/js/main-page.js"></script>--}}
<script src="/js/select2.full.min.js"></script>
<script src="/js/jquery.inputmask.min.js"></script>
<script src="/js/flickity.pkgd.min.js"></script>
<script src="/js/jquery.jscrollpane.min.js"></script>
<script src="/js/jquery.mousewheel.js"></script>
<script src="/js/bodyScrollLock.min.js"></script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/61a94c4751498030cd3bd272/1flul3u64';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->

</body>
</html>
