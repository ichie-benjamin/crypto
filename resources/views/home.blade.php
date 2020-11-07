<!DOCTYPE html>
<html lang="zxx">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Crypto Assest</title>

    <!-- Favicon -->
    <link rel="icon" href="/img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="/css/style.css">

    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="/css/responsive.css">

</head>

<body class="darker">
<!-- Preloader -->
<div id="preloader">
    <div class="preload-content">
        <div id="dream-load"></div>
    </div>
</div>

<!-- ##### Header Area Start ##### -->
<nav class="navbar navbar-expand-lg navbar-white fixed-top" id="banner">
    <div class="container">
        <!-- Brand -->
        <a class="navbar-brand" href="#"><span><img src="/img/core-img/logo.png" alt="logo"></span> Crypto Assest</a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{ route('home') }}" id="navbardrop" data-toggle="dropdown">Home</a>
                </li>
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#about">About Us</a>--}}
{{--                </li>--}}
                <li class="nav-item">
                    <a class="nav-link" href="#services">Services</a>
                </li>
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#faq">FAQ</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#roadmap">Roadmap</a>--}}
{{--                </li>--}}
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
                @guest()
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                <li class="lh-55px"><a href="{{ route('register') }}" class="btn login-btn ml-50">Register</a></li>
          @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                        >Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                    <li class="lh-55px"><a href="{{ route('home') }}" class="btn login-btn ml-50">Dashboard</a></li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
<!-- ##### Header Area End ##### -->

<!-- ##### Welcome Area Start ##### -->
<section class="hero-section moving section-padding" id="home">
    <div class="moving-bg"></div>
    <!-- Hero Content -->
    <div class="hero-section-content">

        <div class="container ">
            <div class="row align-items-center">
                <!-- Welcome Content -->
                <div class="col-12 col-lg-5 col-md-12">
                    <div class="welcome-content">
                        <div class="promo-section">
                            <h3 class="special-head dark">Crypto Asset</h3>
                        </div>
                        <h1 class="fadeInUp" data-wow-delay="0.2s">TRADE FOREX, CFD AND OPTIONS</h1>
                        <p class="w-text fadeInUp" data-wow-delay="0.3s"> INVEST AND EARN UP TO 95% IN 60 SEC
                        <br>Accounts from $250<br/>
                            Trades from 10 cents!
                        </p>
                        <div class="dream-btn-group fadeInUp" data-wow-delay="0.4s">
{{--                            <a href="#" class="btn more-btn mr-3">Whitepaper</a>--}}
                            <a href="{{ route('register') }}" class="btn more-btn">Trade Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="dotted mt-30 fadeInUp" style="" data-wow-delay="0.5s">
                        <img src="/img/core-img/platform1.png" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- ##### Welcome Area End ##### -->

<div class="clearfix"></div>

<!-- ##### About Us Area Start ##### -->
<section class="about-us-area section-padding-100 clearfix">

    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 offset-lg-0 col-md-12 no-padding-left">
                <div class="welcome-meter fadeInUp" data-wow-delay="0.7s">
                    <img src="/img/core-img/about-1.png"  alt="">
                </div>
            </div>

            <div class="col-12 col-lg-6 offset-lg-0">
                <div class="who-we-contant mt-s">
                    <div class="dream-dots text-left fadeInUp" data-wow-delay="0.2s" >
                        <span class="gradient-text ">Decentralized Trading Platform</span>
                    </div>

                    <h4 class="fadeInUp" data-wow-delay="0.3s">Connect blockchain to the real world and start crypto tading.</h4>
                    <p class="fadeInUp" data-wow-delay="0.4s">BEST TRADING CONDITIONS</p>
                    <p class="fadeInUp" data-wow-delay="0.5s">IN FOREX AND CFD INDUSTRY</p>
                    <a class="btn more-btn mt-30 fadeInUp" data-wow-delay="0.6s" href="{{ route('register') }}">Get Started</a>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- ##### About Us Area End ##### -->

<!-- ##### Our Services Area Start ##### -->
<section class="join-us section-padding-0-100 clearfix" id="services">
    <div class="container">

        <div class="section-heading text-center hidden-lg">
            <!-- Dream Dots -->
            <div class="dream-dots justify-content-center fadeInUp" data-wow-delay="0.2s">
                <span>Our Services</span>
            </div>
            <h2 class="fadeInUp" data-wow-delay="0.3s">What we speciaized in</h2>
            <p class="fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.</p>
        </div>


        <div class="row dark-row pt-60">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="contribution-c-wapper has-arrow-right-lg has-arrow-top-md has-arrow-right-md has-arrow-down-sm">
                    <!-- Content -->
                    <div class="service_single_content text-center mb-30 fadeInUp" data-wow-delay="0.2s">
                        <!-- Icon -->
                        <div class="cycle_icon">
                            <span class="gradient-t orange">1</span>
                        </div>
                        <h6>Withdrawals</h6>
                        <p>Guaranteed withdrawals
                            processing within 1 hour</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mt-sm-30">
                <div class="contribution-c-wapper has-arrow-right-lg has-arrow-bottom-md has-arrow-down-sm">
                    <div class="service_single_content text-center mb-30 fadeInUp" data-wow-delay="0.3s">
                        <!-- Icon -->
                        <div class="cycle_icon">
                            <span class="gradient-t pink">2</span>
                        </div>
                        <h6>Non-stop Trading</h6>
                        <p>Non-stop trading,
                            even over weekends</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mt-s">
                <div class="contribution-c-wapper has-arrow-top-md has-arrow-down-sm">
                    <div class="service_single_content text-center mb-30 fadeInUp" data-wow-delay="0.4s">
                        <!-- Icon -->
                        <div class="cycle_icon">
                            <span class="gradient-t blue">3</span>
                        </div>
                        <h6>Wide Range Methods</h6>
                        <p>Wide range of deposit and
                            withdrawal methods.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 hidden-md hidden-sm hidden-xs">
                <img src="/img/svg/join-bottom.svg" class="arrow-img rotated" alt="">
            </div>
            <div class="col-lg-4 text-center hidden-md hidden-sm hidden-xs">
                <div class="dream-dots justify-content-center fadeInUp" data-wow-delay="0.2s">
                    <span>Join us</span>
                </div>
                <h2 class="fadeInUp" data-wow-delay="0.3s">Our Advantages</h2>
            </div>
            <div class="col-lg-4 hidden-md hidden-sm hidden-xs">
                <img src="/img/svg/join-bottom.svg" class="arrow-img" alt="">
            </div>

            <div class="col-12 col-md-6 col-lg-4 mt-30">
                <div class="contribution-c-wapper has-arrow-left-lg has-arrow-bottom-md has-arrow-down-sm">
                    <!-- Content -->
                    <div class="service_single_content text-center mb-30 fadeInUp" data-wow-delay="0.2s">
                        <!-- Icon -->
                        <div class="cycle_icon">
                            <span class="gradient-t green">6</span>
                        </div>
                        <h6>24/7 Customer</h6>
                        <p>24/7 customer
                            multilingual support</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mt-30">
                <div class="contribution-c-wapper has-arrow-left-lg has-arrow-left-md has-arrow-down-sm">
                    <div class="service_single_content text-center mb-30 fadeInUp" data-wow-delay="0.3s">
                        <!-- Icon -->
                        <div class="cycle_icon">
                            <span class="gradient-t green">5</span>
                        </div>
                        <h6>100% Secured Trading</h6>
                        <p>100% secured trading
                            with full data protection</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mt-30">
                <div class="contribution-c-wapper ">
                    <div class="service_single_content text-center mb-30 fadeInUp" data-wow-delay="0.4s">
                        <!-- Icon -->
                        <div class="cycle_icon">
                            <span class="gradient-t pink">4</span>
                        </div>
                        <h6>Trader Guidance</h6>
                        <p>Possibility to trade under
                            experienced trader guidance
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ##### About Us Area Start ##### -->
<section class="about-us-area section-padding-0-100 clearfix">

    <div class="container">
        <div class="row align-items-center">

            <div class="col-12 col-lg-6 offset-lg-0">
                <div class="who-we-contant">
                    <div class="dream-dots text-left fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <span class="gradient-text ">Crypto Asset</span>
                    </div>
                    <h4 class="fadeInUp" data-wow-delay="0.3s">NO PREVIOUS EXPERIENCE IN TRADING
                        ON FINANCIAL MARKETS?
                        Just Copy most Successeful Traders!</h4>
                    <p class="fadeInUp" data-wow-delay="0.4s">Pass free registration
                        <br>This process takes 30 sec.</p>
                    <a class="btn more-btn mt-30 fadeInUp" data-wow-delay="0.6s" href="{{ route('register') }}">Get Started</a>
                </div>
            </div>

            <img class="supportImg" src="/img/svg/trading-strokes.svg" alt="image">
            <div class="col-12 col-lg-6 offset-lg-0 col-md-12 mt-30 no-padding-left">
                <div class="welcome-meter floating-anim fadeInUp" data-wow-delay="0.7s">
                    <img src="/img/core-img/computer.png"  alt="">
                </div>
            </div>

        </div>
    </div>
</section>
<!-- ##### About Us Area End ##### -->

<div class="trust-section section-padding-0-70">
    <div class="section-heading text-center">
        <!-- Dream Dots -->
        <div class="dream-dots justify-content-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
            <span>ICO Rating</span>
        </div>
        <h2 class="wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">We are trusted</h2>
        <p class="wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
            Crypto Asset broker provides stable access to deep liquidity market and the best prices with the most popular and reliable trading platform</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                <!-- Single Cool Fact -->
                <div class="trust-item text-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <div class="ico-platform-logo">
                        <img src="/img/ico-platforms/1.png" alt="">
                    </div>
                    <!-- Single Cool Detail -->
                    <div class="check">
                        <!-- <div class="value">8.9</div> -->
                        <div class="check-icon"></div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                <!-- Single Cool Fact -->
                <div class="trust-item text-center wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="ico-platform-logo">
                        <img src="/img/ico-platforms/2.png" alt="">
                    </div>
                    <!-- Single Cool Detail -->
                    <div class="check">
                        <div class="value">8.9</div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                <!-- Single Cool Fact -->
                <div class="trust-item text-center wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                    <div class="ico-platform-logo">
                        <img src="/img/ico-platforms/3.png" alt="">
                    </div>
                    <!-- Single Cool Detail -->
                    <div class="check">
                        <!-- <div class="value">8.9</div> -->
                        <div class="check-icon"></div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                <!-- Single Cool Fact -->
                <div class="trust-item text-center wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <div class="ico-platform-logo">
                        <img src="/img/ico-platforms/4.png" alt="">
                    </div>
                    <!-- Single Cool Detail -->
                    <div class="check">
                        <!-- <div class="value">8.9</div> -->
                        <div class="check-icon"></div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                <!-- Single Cool Fact -->
                <div class="trust-item text-center wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                    <div class="ico-platform-logo">
                        <img src="/img/ico-platforms/5.png" alt="">
                    </div>
                    <!-- Single Cool Detail -->
                    <div class="check">
                        <div class="value">7.4</div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                <!-- Single Cool Fact -->
                <div class="trust-item text-center wow fadeInUp" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                    <div class="ico-platform-logo">
                        <img src="/img/ico-platforms/6.png" alt="">
                    </div>
                    <!-- Single Cool Detail -->
                    <div class="check">
                        <!-- <div class="value">8.9</div> -->
                        <div class="check-icon"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- ##### Our Services Area Start ##### -->
<section class="our_services_area section-padding-0-0 clearfix" id="services">
    <div class="container">

        <div class="section-heading text-center">
            <!-- Dream Dots -->
{{--            <div class="dream-dots justify-content-center fadeInUp" data-wow-delay="0.2s">--}}
{{--                <span>Why choose us</span>--}}
{{--            </div>--}}
            <h2 class="fadeInUp" data-wow-delay="0.3s">Top Crypto broker for great success!</h2>
{{--            <p class="fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.</p>--}}
        </div>


        <div class="row">
            <div class="col-12 col-md-6 col-lg-3">
                <!-- Content -->
                <div class="service_single_content text-center mb-100 fadeInUp" data-wow-delay="0.2s">
                    <!-- Icon -->
                    <div class="service_icon">
                        <img src="/img/features/feature-1.svg" alt="">
                    </div>
                    <h6>Scalping, automated trading, news trading and arbitrage allowed</h6>
                    <p>The company allows using such trading strategies as scalping, automated EA trading, news trading,
                        and arbitrage. Our clients enjoy complete freedom and convenience when trading, regardless of their strategies.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <!-- Content -->
                <div class="service_single_content text-center mb-100 fadeInUp" data-wow-delay="0.3s">
                    <!-- Icon -->
                    <div class="service_icon">
                        <img src="/img/features/feature-2.svg" alt="">
                    </div>
                    <h6>Rapid execution with no re-quotes</h6>
                    <p>Our clients know for sure that their work in the Forex market will be smooth and uninterrupted since there are no re-quotes when executing orders at Tifia. The opportunity to close or open a trade immediately
                        enables our clients to react to market fluctuations as fast as possible, which is an essential condition for success in the Forex market.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <!-- Content -->
                <div class="service_single_content text-center mb-100 fadeInUp" data-wow-delay="0.4s">
                    <!-- Icon -->
                    <div class="service_icon">
                        <img src="/img/features/feature-3.svg" alt="">
                    </div>
                    <h6>Hedging (partial or fully locked positions) is allowed</h6>
                    <p>Our clients may hedge positions partially or in full. Hedging allows them to reduce the risk of losing money in unprofitable trades, and thus insures their deposits.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <!-- Content -->
                <div class="service_single_content text-center mb-100 fadeInUp" data-wow-delay="0.5s">
                    <!-- Icon -->
                    <div class="service_icon">
                        <img src="/img/features/feature-4.svg" alt="">
                    </div>
                    <h6>24/5 Professional team working in the best interests of the Client</h6>
                    <p>Our client support team strives to provide an individual approach to every client. You may receive prompt and competent advice at any time, as our professional team acts in the best interests of the clients..</p>
                </div>
            </div>
            @section('hide')
            <div class="col-12 col-md-6 col-lg-3">
                <!-- Content -->
                <div class="service_single_content text-center mb-100 fadeInUp" data-wow-delay="0.6s">
                    <!-- Icon -->
                    <div class="service_icon">
                        <img src="/img/features/feature-5.svg" alt="">
                    </div>
                    <h6>Connect free</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla neque quam, maxi ut accumsan ut, posuere sit Lorem ipsu.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <!-- Content -->
                <div class="service_single_content text-center mb-100 fadeInUp" data-wow-delay="0.7s">
                    <!-- Icon -->
                    <div class="service_icon">
                        <img src="/img/features/feature-6.svg" alt="">
                    </div>
                    <h6>AI matching</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla neque quam, maxi ut accumsan ut, posuere sit Lorem ipsu.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <!-- Content -->
                <div class="service_single_content text-center mb-100 fadeInUp" data-wow-delay="0.7s">
                    <!-- Icon -->
                    <div class="service_icon">
                        <img src="/img/features/feature-7.svg" alt="">
                    </div>
                    <h6>Low cost</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla neque quam, maxi ut accumsan ut, posuere sit Lorem ipsu.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <!-- Content -->
                <div class="service_single_content text-center mb-100 fadeInUp" data-wow-delay="0.7s">
                    <!-- Icon -->
                    <div class="service_icon">
                        <img src="img/features/feature-8.svg" alt="">
                    </div>
                    <h6>Digital personas</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla neque quam, maxi ut accumsan ut, posuere sit Lorem ipsu.</p>
                </div>
            </div>
            @endsection
        </div>
    </div>
</section>

<!-- ##### About Us Area Start ##### -->
<section class="smart-contract section-padding-0-70 clearfix">

    <div class="container">
        <div class="row ">


            <div class="col-12 col-lg-6 offset-lg-0">
                <div class="who-we-contant">
                    <div class="dream-dots text-left fadeInUp" data-wow-delay="0.2s" >
                        <span class="gradient-text ">TRADE FOREX
                    WITH Crypto Asset</span>
                    </div>

                    <h4 class="fadeInUp" data-wow-delay="0.3s">Trade with Crypto Asset</h4>
                    <p class="fadeInUp" data-wow-delay="0.4s">    What is CFD trading? First of all, CFD is highly profitable but risky financial instrument that allows you to get profit in 60 seconds.
                       </p>
                    <p class="fadeInUp" data-wow-delay="0.5s"> It's easy to understand and to trade. No need to learn a lot - you can start trading today.</p>
                    <a class="btn more-btn mt-30 fadeInUp" data-wow-delay="0.6s" href="{{ route('register') }}">Get Started</a>

                </div>
            </div>
            <div class="col-12 col-lg-6 offset-lg-0 mt-s">
                <div class="services-block-four v3">
                    <div class="inner-box">
                        <div class="icon-img-box">
                            <img src="img/features/s1.svg" alt="">
                        </div>
                        <h3><a href="#">Registration</a></h3>
                        <div class="text">Pass free registration</div>
                    </div>
                </div>
                <div class="services-block-four v3">
                    <div class="inner-box">
                        <div class="icon-img-box">
                            <img src="img/features/s2.svg" alt="">
                        </div>
                        <h3><a href="#">Activate trading account</a></h3>
                        <div class="text">Fund your trading account by initial deposit to start with.</div>
                    </div>
                </div>
{{--                <div class="services-block-four v3">--}}
{{--                    <div class="inner-box">--}}
{{--                        <div class="icon-img-box">--}}
{{--                            <img src="img/features/s3.svg" alt="">--}}
{{--                        </div>--}}
{{--                        <h3><a href="#">Software development kit (SDK)</a></h3>--}}
{{--                        <div class="text">Lorem ipsum dolor sit amet, conse ctetur dolor adipisicing elit.</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="services-block-four v3">
                    <div class="inner-box">
                        <div class="icon-img-box">
                            <img src="img/features/s4.svg" alt="">
                        </div>
                        <h3><a href="#">Start copy trading</a></h3>
                        <div class="text">Choose one or more successful traders, start copying and follow the results!</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- ##### About Us Area End ##### -->


<section class="features section-padding-0-100 ">

    <div class="container">
        <div class="section-heading text-center">
            <!-- Dream Dots -->
            <div class="dream-dots justify-content-center fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <span>Try our Platform</span>
            </div>
            <h2 class="fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">Our Trading Platform</h2>
            <p class="fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Copy profitable trades of Forex pros and level up your income!</p>
        </div>
        <div class="row align-items-center">

            <div class="service-img-wrapper col-lg-5 col-md-12 col-sm-12 no-padding-right">
                <div class="features-list">
                    <div class="who-we-contant">

                        <h4 class="w-text fadeInUp" data-wow-delay="0.3s">Powerful platform.</h4>
                        <p class="w-text fadeInUp" data-wow-delay="0.4s">We are dedicated to providing professional service with the highest degree of honesty and integrity, and strive to add value to our tax and consulting services.</p>
                    </div>
                    <ul class="list-marked">
                        <li class="text-white"><i class="fa fa-check"></i>Competent Professionals</li>
                        <li class="text-white"><i class="fa fa-check"></i>24/7 Customer Support</li>
                        <li class="text-white"><i class="fa fa-check"></i>High Successful Recovery</li>
{{--                        <li class="text-white"><i class="fa fa-check"></i>Creative Layout</li>--}}
                    </ul>
                    <a class="btn more-btn mt-30 fadeInUp" data-wow-delay="0.6s" href="{{ route('register') }}">Get Started</a>
                </div>
            </div>

            <div class="service-img-wrapper col-lg-7 col-md-12 col-sm-12 mt-s">
                <div class="image-box">
                    <img src="/img/core-img/platform.png" class="center-block img-responsive phone-img" alt="">
                    <img src="/img/core-img/rings.png" class="center-block img-responsive rings " alt="">
                </div>
            </div>

        </div>
    </div>
</section>

<section class="features section-padding-0-70 ">

    <div class="container">
        <div class="section-heading text-center">
            <!-- Dream Dots -->
            <div class="dream-dots justify-content-center fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <span>Token Prices</span>
            </div>
            <h2 class="fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">Our Packages</h2>
            <p class="fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">For your convenience we have combined the most demanded services into packages.
                Their accessibility depends from the amount of first trading deposit. By investing more, you get more bonuses and advantages!</p>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="pricing-item ">
                    <h4>Round 1</h4>
                    <h3><strong class="xzc-1-month">0.96$</strong></h3>
                    <span>1 ETH = 500 Token</span>
                    <div class="pricing">15,000,000 Token</div>
                    <label><strong>42% bonus</strong></label>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="pricing-item ">
                    <h4>Round 2</h4>
                    <h3><strong class="xzc-1-month">1.25$</strong></h3>
                    <span>1 ETH = 500 Token</span>
                    <div class="pricing">15,000,000 Token</div>
                    <label><strong>35% bonus</strong></label>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="pricing-item ">
                    <h4>Round 3</h4>
                    <h3><strong class="xzc-1-month">1.50$</strong></h3>
                    <span>1 ETH = 500 Token</span>
                    <div class="pricing">15,000,000 Token</div>
                    <label><strong>25% bonus</strong></label>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="pricing-item ">
                    <h4>Round 4</h4>
                    <h3><strong class="xzc-1-month">1.96$</strong></h3>
                    <span>1 ETH = 500 Token</span>
                    <div class="pricing">15,000,000 Token</div>
                    <label><strong>15% bonus</strong></label>
                </div>
            </div>


        </div>
    </div>
</section>

<div class="clearfix"></div>


<!-- ##### Our Trial Area End ##### -->
@section('hide')
<section class="spread-map download" >
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6 col-xs-12">
                <div class="welcome-meter fadeInUp" data-wow-delay="0.7s">
                    <img src="img/core-img/whitepaper.png" class="center-block" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-xs-12 mt-s">
                <div class="who-we-contant">
                    <div class="dream-dots text-left fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <img src="img/svg/section-icon-11.svg" alt="">
                    </div>
                    <h4 class="text-white fadeInUp" data-wow-delay="0.3s">Downoad Our Whitepaper</h4>
                    <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore qui iste asperiores harum maiores praesentium facere ullam blanditiis, odio dolorum. Officia quisquam eaque suscipit facere ducimus, sit quaerat. Numquam, corrupti?</p>
                    <a class="btn dream-btn mt-30 fadeInUp" data-wow-delay="0.6s" href="#">
                        Get Whitepaper
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection


@section('hide')

    <section class="token-distribution section-padding-100-85">
        <div class="container">

            <div class="section-heading text-center">
                <!-- Dream Dots -->
                <div class="dream-dots justify-content-center fadeInUp" data-wow-delay="0.2s">
                    <span>ICO Distribution</span>
                </div>
                <h2 class="fadeInUp" data-wow-delay="0.3s">Our ICO Distribution</h2>
                <p class="fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.</p>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-12">
                    <div class=" ">
                        <h2 class="text-center mb-30 fadeInUp" data-wow-delay="0.3s">Funds Allocation</h2>
                        <img src="img/core-img/distribution.png" class="center-block" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 mt-s">
                    <h2 class="text-center mb-30 fadeInUp" data-wow-delay="0.3s">Token Distribution</h2>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="">
                                <img src="img/core-img/graph-11.png" class="center-block" alt="">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="token-info">
                                <div class="info-wrapper one">
                                    <div class="token-icon">12</div>
                                    <div class="token-descr">Overhead Token Distribution</div>
                                </div>
                            </div>
                            <div class="token-info">
                                <div class="info-wrapper two">
                                    <div class="token-icon">23</div>
                                    <div class="token-descr">Supporting Blockchain </div>
                                </div>
                            </div>

                            <div class="token-info">
                                <div class="info-wrapper four">
                                    <div class="token-icon">08</div>
                                    <div class="token-descr">Engineers and R&D</div>
                                </div>
                            </div>
                            <div class="token-info">
                                <div class="info-wrapper five">
                                    <div class="token-icon">07</div>
                                    <div class="token-descr"> Paltform Operations</div>
                                </div>
                            </div>
                            <div class="token-info">
                                <div class="info-wrapper three">
                                    <div class="token-icon">05</div>
                                    <div class="token-descr">Network Growth Marketing</div>
                                </div>
                            </div>
                            <div class="token-info">
                                <div class="info-wrapper six">
                                    <div class="token-icon">08</div>
                                    <div class="token-descr">Oracle Network Developers</div>
                                </div>
                            </div>
                            <div class="token-info">
                                <div class="info-wrapper seven">
                                    <div class="token-icon">05</div>
                                    <div class="token-descr">Engineers and R&D</div>
                                </div>
                            </div>
                            <div class="token-info">
                                <div class="info-wrapper eight">
                                    <div class="token-icon">27</div>
                                    <div class="token-descr"> Paltform Operations</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="roadmap section-padding-0-0" id="roadmap">
        <div class="section-heading text-center">
            <!-- Dream Dots -->
            <div class="dream-dots justify-content-center fadeInUp" data-wow-delay="0.2s">
                <span>ICO Roadmap</span>
            </div>
            <h2 class="fadeInUp" data-wow-delay="0.3s">Our ICO Roadmap</h2>
            <p class="fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-timeline">
                        <div class="timeline">
                            <div class="icon"></div>
                            <div class="date-content">
                                <div class="date-outer"> <span class="date"> <span class="month">22 Sept</span> <span class="year">2018</span> </span>
                                </div>
                            </div>
                            <div class="timeline-content">
                                <h5 class="title">Listing to the major exchanges</h5>
                                <p class="description text-light-gray"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur ex sit amet massa scelerisque scelerisque. Aliquam erat volutpat. Aenean interdum finibus efficitur. Praesent dapibus dolor felis, eu ultrices elit molestie.</p>
                            </div>
                        </div>
                        <div class="timeline">
                            <div class="icon"></div>
                            <div class="date-content">
                                <div class="date-outer"> <span class="date"> <span class="month">27 Nov</span> <span class="year">2018</span> </span>
                                </div>
                            </div>
                            <div class="timeline-content">
                                <h5 class="title">Platform integration to marketplaces</h5>
                                <p class="description text-light-gray"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur ex sit amet massa scelerisque scelerisque. Aliquam erat volutpat. Aenean interdum finibus efficitur. Praesent dapibus dolor felis, eu ultrices elit molestie.</p>
                            </div>
                        </div>
                        <div class="timeline">
                            <div class="icon"></div>
                            <div class="date-content">
                                <div class="date-outer"> <span class="date"> <span class="month">19 Dec</span> <span class="year">2018</span> </span>
                                </div>
                            </div>
                            <div class="timeline-content">
                                <h5 class="title">Crypto Wallet version release</h5>
                                <p class="description text-light-gray"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur ex sit amet massa scelerisque scelerisque. Aliquam erat volutpat. Aenean interdum finibus efficitur. Praesent dapibus dolor felis, eu ultrices elit molestie.</p>
                            </div>
                        </div>
                        <div class="timeline">
                            <div class="icon"></div>
                            <div class="date-content">
                                <div class="date-outer"> <span class="date"> <span class="month">25 Jan</span> <span class="year">2019</span> </span>
                                </div>
                            </div>
                            <div class="timeline-content">
                                <h5 class="title">Platform ealier version development</h5>
                                <p class="description text-light-gray"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur ex sit amet massa scelerisque scelerisque. Aliquam erat volutpat. Aenean interdum finibus efficitur. Praesent dapibus dolor felis, eu ultrices elit molestie.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ##### Token Info Start ##### -->
<div class="features2 section-padding-100-70" >
    <div class="container">

        <div class="row align-items-center">

            <div class="col-12 col-lg-5 offset-lg-0 col-md-8 offset-md-2 col-sm-10 offset-sm-1">
                <div class="ico-counter mb-30">
                    <div class="counter-down">

                        <div class="content">
                            <div class="conuter-header">
                                <h3 class="w-text text-center">TOKEN SALE ENDS IN</h3>
                            </div>
                            <div class="counterdown-content">

                                <!-- Countdown  -->
                                <div class="count-down titled circled text-center">
                                    <div class="simple_timer"></div>
                                </div>
                                <div class="ico-progress">
                                    <ul class="list-unstyled list-inline clearfix mb-10">
                                        <li class="title">33m</li>
                                        <li class="strength">75m</li>
                                    </ul>
                                    <!-- skill strength -->
                                    <div class="current-progress">
                                        <div class="progress-bar has-gradient" style="width: 75%"></div>
                                    </div>
                                    <span class="pull-left">Softcap in 103 days</span>
                                    <span class="pull-right">Token Hardcap</span>
                                </div>
                                <div class="text-center">
                                    <a class="btn dream-btn mt-30 fadeInUp" data-wow-delay="0.6s" href="#">Buy More tokens</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-7 col-sm-12">
                <div class="col-lg-6 col-md-6 col-sm-12 mt-md-30">
                    <div class="services-block-four v2">
                        <div class="inner-box">
                            <div class="icon-img-box">
                                <img src="img/features/f1.svg" alt="">
                            </div>
                            <h3><a href="#">Delivery Reports</a></h3>
                            <div class="text">Lorem ipsum dolor sit amet, conse ctetur.</div>
                        </div>
                    </div>
                    <div class="services-block-four v2">
                        <div class="inner-box">
                            <div class="icon-img-box">
                                <img src="img/features/f2.svg" alt="">
                            </div>
                            <h3><a href="#">Branded Sender</a></h3>
                            <div class="text">Lorem ipsum dolor sit amet, conse ctetur.</div>
                        </div>
                    </div>
                    <div class="services-block-four v2">
                        <div class="inner-box">
                            <div class="icon-img-box">
                                <img src="img/features/f3.svg" alt="">
                            </div>
                            <h3><a href="#">SMS Messaging</a></h3>
                            <div class="text">Lorem ipsum dolor sit amet, conse ctetur.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mt-md-30 mt-smy-0">
                    <div class="services-block-four v2">
                        <div class="inner-box">
                            <div class="icon-img-box">
                                <img src="img/features/f4.svg" alt="">
                            </div>
                            <h3><a href="#">Marketing Plans</a></h3>
                            <div class="text">Lorem ipsum dolor sit amet, conse ctetur.</div>
                        </div>
                    </div>
                    <div class="services-block-four v2">
                        <div class="inner-box">
                            <div class="icon-img-box">
                                <img src="img/features/f5.svg" alt="">
                            </div>
                            <h3><a href="#">Seed Routing</a></h3>
                            <div class="text">Lorem ipsum dolor sit amet, conse ctetur.</div>
                        </div>
                    </div>
                    <div class="services-block-four v2">
                        <div class="inner-box">
                            <div class="icon-img-box">
                                <img src="img/features/f6.svg" alt="">
                            </div>
                            <h3><a href="#">Traking API</a></h3>
                            <div class="text">Lorem ipsum dolor sit amet, conse ctetur.</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

<!-- ##### FAQ & Timeline Area Start ##### -->
<div class="faq-timeline-area section-padding-0-85" id="faq">
    <div class="container">
        <div class="section-heading text-center">
            <!-- Dream Dots -->
            <div class="dream-dots justify-content-center fadeInUp" data-wow-delay="0.2s">
                <span>Token FAQ</span>
            </div>
            <h2 class="fadeInUp" data-wow-delay="0.3s">  Frequently Questions</h2>
            <p class="fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.</p>
        </div>
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 offset-lg-0 col-md-8 offset-md-2 col-sm-12">
                <img src="img/svg/faq.svg" alt="" class="center-block img-responsive">
            </div>
            <div class="col-12 col-lg-6 col-md-12">
                <div class="dream-faq-area mt-s ">
                    <dl style="margin-bottom:0">
                        <!-- Single FAQ Area -->
                        <dt class="wave fadeInUp" data-wow-delay="0.2s">What are the objectives of this Token?</dt>
                        <dd class="fadeInUp" data-wow-delay="0.3s">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore omnis quaerat nostrum, pariatur ipsam sunt accusamus enim necessitatibus est fugiat, assumenda dolorem, deleniti corrupti cupiditate ipsum, dolorum voluptatum esse error?</p>
                        </dd>
                        <!-- Single FAQ Area -->
                        <dt class="wave fadeInUp" data-wow-delay="0.3s">What is the best features and services we deiver?</dt>
                        <dd>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore omnis quaerat nostrum, pariatur ipsam sunt accusamus enim necessitatibus est fugiat, assumenda dolorem, deleniti corrupti cupiditate ipsum, dolorum voluptatum esse error?</p>
                        </dd>
                        <!-- Single FAQ Area -->
                        <dt class="wave fadeInUp" data-wow-delay="0.4s">Why this ICO important to me?</dt>
                        <dd>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore omnis quaerat nostrum, pariatur ipsam sunt accusamus enim necessitatibus est fugiat, assumenda dolorem, deleniti corrupti cupiditate ipsum, dolorum voluptatum esse error?</p>
                        </dd>
                        <!-- Single FAQ Area -->
                        <dt class="wave fadeInUp" data-wow-delay="0.5s">how may I take part in and purchase this Token?</dt>
                        <dd>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore omnis quaerat nostrum, pariatur ipsam sunt accusamus enim necessitatibus est fugiat, assumenda dolorem, deleniti corrupti cupiditate ipsum, dolorum voluptatum esse error?</p>
                        </dd>
                    </dl>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- ##### FAQ & Timeline Area End ##### -->

<!-- ##### Team Area Start ##### -->
<section class="our_team_area section-padding-100-0 clearfix" id="team">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center">
                    <!-- Dream Dots -->
                    <div class="dream-dots justify-content-center fadeInUp" data-wow-delay="0.2s">
                        <span>Our Team</span>
                    </div>
                    <h2 class="fadeInUp" data-wow-delay="0.3s">Awesome Team</h2>
                    <p class="fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo. </p>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Single Team Member -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-team-member fadeInUp" data-wow-delay="0.2s">
                    <!-- Image -->
                    <div class="team-member-thumb">
                        <img src="img/team-img/1.png" class="center-block" alt="">
                    </div>
                    <!-- Team Info -->
                    <div class="team-info">
                        <h5 class="w-text">Joman Helal</h5>
                        <p class="g-text">Executive Officer</p>
                    </div>
                    <!-- Social Icon -->
                    <div class="team-social-icon">
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <!-- Single Team Member -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-team-member fadeInUp" data-wow-delay="0.3s">
                    <!-- Image -->
                    <div class="team-member-thumb">
                        <img src="img/team-img/2.png" class="center-block" alt="">
                    </div>
                    <!-- Team Info -->
                    <div class="team-info">
                        <h5 class="w-text">Slans Alons</h5>
                        <p class="g-text">Business Development</p>
                    </div>
                    <!-- Social Icon -->
                    <div class="team-social-icon">
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <!-- Single Team Member -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-team-member fadeInUp" data-wow-delay="0.4s">
                    <!-- Image -->
                    <div class="team-member-thumb">
                        <img src="img/team-img/3.png" class="center-block" alt="">
                    </div>
                    <!-- Team Info -->
                    <div class="team-info">
                        <h5 class="w-text">Josha Michal</h5>
                        <p class="g-text">UX/UI Designer</p>
                    </div>
                    <!-- Social Icon -->
                    <div class="team-social-icon">
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <!-- Single Team Member -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-team-member fadeInUp" data-wow-delay="0.5s">
                    <!-- Image -->
                    <div class="team-member-thumb">
                        <img src="img/team-img/4.png" class="center-block" alt="">
                    </div>
                    <!-- Team Info -->
                    <div class="team-info">
                        <h5 class="w-text">Johan Wright</h5>
                        <p class="g-text">Head of Marketing</p>
                    </div>
                    <!-- Icon -->
                    <div class="team-social-icon">
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- ##### Team Area End ##### -->


<section class="container" >
    <div class="subscribe section-padding-0-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="subscribe-wrapper">
                    <div class="section-heading text-center">
                        <h2 class="wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">Don’t Miss ICO News And Updates!</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.</p>
                    </div>
                    <div class="service-text text-center">

                        <div class="subscribe-section has-shadow">
                            <div class="input-wrapper">
                                <i class="fa fa-home"></i>
                                <input type="email" placeholder="Enter your Email">
                            </div>
                            <button class="btn more-btn">Subscribe</button>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ##### Blog Area Start ##### -->
<section class="our_blog_area clearfix section-padding-100-0" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center">
                    <!-- Dream Dots -->
                    <div class="dream-dots justify-content-center fadeInUp" data-wow-delay="0.2s">
                        <span>Blog Posts</span>
                    </div>
                    <h2 class="fadeInUp" data-wow-delay="0.3s">Latest News</h2>
                    <p class="fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo. </p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">

            <!-- Single Blog Post -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-blog-area fadeInUp" data-wow-delay="0.2s">
                    <!-- Post Thumbnail -->
                    <div class="blog_thumbnail">
                        <img src="img/blog-img/1.jpg" alt="">
                    </div>
                    <!-- Post Content -->
                    <div class="blog-content">
                        <!-- Dream Dots -->

                        <div class="post-meta mt-20">
                            <p>By <a href="#" class="post-author">ADMIN</a> <a href="#">Apr 10, 2018</a> <a href="#" class="post-comments">7 comments</a></p>
                        </div>
                        <a href="#" class="post-title">
                            <h4>What is this Token for?.</h4>
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus fugiat at vitae, ratione sapiente repellat.</p>
                        <a href="#" class="btn more-btn mt-15">Read Details</a>
                    </div>
                </div>
            </div>

            <!-- Single Blog Post -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-blog-area fadeInUp" data-wow-delay="0.3s">
                    <!-- Post Thumbnail -->
                    <div class="blog_thumbnail">
                        <img src="img/blog-img/2.jpg" alt="">
                    </div>
                    <!-- Post Content -->
                    <div class="blog-content">
                        <!-- Dream Dots -->

                        <div class="post-meta mt-20">
                            <p>By <a href="#" class="post-author">ADMIN</a> <a href="#">Apr 10, 2018</a> <a href="#" class="post-comments">7 comments</a></p>
                        </div>
                        <a href="#" class="post-title">
                            <h4>The most powerful Token</h4>
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus fugiat at vitae, ratione sapiente repellat.</p>
                        <a href="#" class="btn more-btn mt-15">Read Details</a>
                    </div>
                </div>
            </div>

            <!-- Single Blog Post -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-blog-area fadeInUp" data-wow-delay="0.4s">
                    <!-- Post Thumbnail -->
                    <div class="blog_thumbnail">
                        <img src="img/blog-img/3.jpg" alt="">
                    </div>
                    <!-- Post Content -->
                    <div class="blog-content">
                        <!-- Dream Dots -->

                        <div class="post-meta mt-20">
                            <p>By <a href="#" class="post-author">ADMIN</a> <a href="#">Apr 10, 2018</a> <a href="#" class="post-comments">7 comments</a></p>
                        </div>
                        <a href="#" class="post-title">
                            <h4>How to get trial version</h4>
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus fugiat at vitae, ratione sapiente repellat.</p>
                        <a href="#" class="btn more-btn mt-15">Read Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Blog Area End ##### -->
@endsection



<!-- ##### Footer Area Start ##### -->
<footer class="footer-area bg-img" style="background-image: url(img/core-img/pattern.png);">

    <!-- ##### Contact Area Start ##### -->
    <div class="contact_us_area section-padding-0-0" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <!-- Dream Dots -->
                        <div class="dream-dots justify-content-center fadeInUp" data-wow-delay="0.2s">
                            <span class="gradient-text">Contact us</span>
                        </div>
                        <h2 class="fadeInUp" data-wow-delay="0.3s">Contact With Us</h2>
                        <p class="fadeInUp" data-wow-delay="0.4s">Please fill up the form and our support team will get in contact with you</p>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <div class="contact_form">
                        <form action="#" method="post" id="main_contact_form" novalidate>
                            <div class="row">
                                <div class="col-12">
                                    <div id="success_fail_info"></div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="group fadeInUp" data-wow-delay="0.2s">
                                        <input type="text" name="name" id="name" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Name</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="group fadeInUp" data-wow-delay="0.3s">
                                        <input type="text" name="email" id="email" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="group fadeInUp" data-wow-delay="0.4s">
                                        <input type="text" name="subject" id="subject" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="group fadeInUp" data-wow-delay="0.5s">
                                        <textarea name="message" id="message" required></textarea>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Message</label>
                                    </div>
                                </div>
                                <div class="col-12 text-center fadeInUp" data-wow-delay="0.6s">
                                    <button type="submit" class="btn more-btn">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Contact Area End ##### -->

    <div class="footer-content-area ">
        <div class="container">
            <div class="row ">
                <div class="col-12 col-lg-4 col-md-6">
                    <div class="footer-copywrite-info">
                        <!-- Copywrite -->
                        <div class="copywrite_text fadeInUp" data-wow-delay="0.2s">
                            <div class="footer-logo">
                                <a href="#"><img src="/img/core-img/logo.png" alt="logo"> Crypto Asset </a>
                            </div>
                            <p>Trade with Crypto Asset
                                What is CFD trading? First of all, CFD is highly profitable but risky financial instrument that allows you to get profit in 60 seconds.

                                It's easy to understand and to trade. No need to learn a lot - you can start trading today</p>
                        </div>
                        <!-- Social Icon -->
{{--                        <div class="footer-social-info fadeInUp" data-wow-delay="0.4s">--}}
{{--                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>--}}
{{--                            <a href="#"> <i class="fa fa-twitter" aria-hidden="true"></i></a>--}}
{{--                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>--}}
{{--                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>--}}
{{--                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>--}}
{{--                        </div>--}}
                    </div>
                </div>

                <div class="col-12 col-lg-3 col-md-6">
                    <div class="contact_info_area d-sm-flex justify-content-between">
                        <!-- Content Info -->
{{--                        <div class="contact_info mt-x text-center fadeInUp" data-wow-delay="0.3s">--}}
{{--                            <h5>PRIVACY & TOS</h5>--}}
{{--                            <a href="#"><p>Advertiser Agreement</p></a>--}}
{{--                            <a href="#"><p>Acceptable Use Policy</p></a>--}}
{{--                            <a href="#"><p>Privacy Policy</p></a>--}}
{{--                            <a href="#"><p>Technology Privacy</p></a>--}}
{{--                            <a href="#"><p>Developer Agreement</p></a>--}}
{{--                        </div>--}}
                        <div class="image-box">
                            <img src="/img/core-img/platform.png" class="center-block img-responsive phone-img" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-2 col-md-6 ">
                    <!-- Content Info -->
                    <div class="contact_info_area d-sm-flex justify-content-between">
                        <div class="contact_info mt-s text-center fadeInUp" data-wow-delay="0.2s">
                            <h5>NAVIGATE</h5>
                            <a href="#"><p>Home</p></a>
                            <a href="#services"><p>Services</p></a>
                            <a href="#contact"><p>Contact Us</p></a>
                        </div>
                    </div>
                </div>


                <div class="col-12 col-lg-3 col-md-6 ">
                    <div class="contact_info_area d-sm-flex justify-content-between">
                        <!-- Content Info -->
                        <div class="contact_info mt-s text-center fadeInUp" data-wow-delay="0.4s">
                            <h5>CONTACT US</h5>
                            <p>Mailing Address:xx00 E. Union Ave</p>
                            <p>Suite 1100. Denver, CO 80237</p>
                            <p>+999 90932 627</p>
                            <p>support@yourdomain.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</footer>
<!-- ##### Footer Area End ##### -->

<!-- ########## All JS ########## -->
<!-- jQuery js -->
<script src="js/jquery.min.js"></script>
<!-- Popper js -->
<script src="js/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- All Plugins js -->
<script src="js/plugins.js"></script>
<!-- Parallax js -->
<script src="js/dzsparallaxer.js"></script>

<script src="js/jquery.syotimer.min.js"></script>

<!-- script js -->
<script src="js/script.js"></script>

</body>

</html>
