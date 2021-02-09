@extends('layouts.master')

@section('content')

    <!-- Banner Part Start -->
    <section id="banner-part">
        <div class="banner">
            <div class="owl-carousel banner-active">
                <div class="banner-item">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <div class="col-12 col-sm-7 col-md-7">
                                <div class="banner-caption">
                                    <h1>Trade  <span class="brand-color">Crypto Coin</span></h1>
                                    <p class="h3">Crypto Trade is most popular trading platform</p>
                                    <ul class="regular-list d-none d-md-inline">
                                        <li><i class="fa fa-angle-right"></i> Free Crypto Wallet</li>
                                        <li><i class="fa fa-angle-right"></i> Many deposit options</li>
                                        <li><i class="fa fa-angle-right"></i> Withdraw instantly anytime</li>
                                    </ul>
                                    <a href="{{ route('backend.dashboard') }}" class="btn-2 bold">GET START</a>
                                </div>
                            </div>
                            <div class="col-8 offset-2 offset-sm-0 col-sm-5 col-md-5 d-none d-sm-inline-block">
                                <div class="banner-right">
                                    <img src="/front/images/bg/banner-right-bg.png" alt="Banner Right img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-item">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <div class="col-12 col-sm-7 col-md-7">
                                <div class="banner-caption">
                                    <h1><span>Home of</span>  Trade</h1>
                                    <p class="h3">Access Options Trading Fx  is the most popular auto trading <span>Platform</span> </p>
                                    <ul class="regular-list d-none d-md-inline">
                                        <li><i class="fa fa-angle-right"></i> Trade like a pro</li>
                                        <li><i class="fa fa-angle-right"></i> 24/7 customer service</li>
                                        <li><i class="fa fa-angle-right"></i> Lots of withdrawal options</li>
                                    </ul>
                                    <a href="{{ route('backend.dashboard') }}" class="btn-2 bold">GET START</a>
                                </div>
                            </div>
                            <div class="col-8 offset-2 offset-sm-0 col-sm-5 col-md-5 d-none d-sm-inline-block">
                                <div class="banner-right">
                                    <img src="/front/images/bg/banner-right-bg-2.png" alt="Banner Right img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="banner-bottom">
            <div class="container-fluid">
                <div class="marquee">
                    <div class="moving-item overlay">
                        <img src="/front/images/small.png" alt="">
                        <script type="text/javascript">
                            crypt_single_base_currency = "LTCU (LTCU)";
                            crypt_single_target_currency = "US Dollar (USD)";
                        </script>
                        <script type="text/javascript" src="https://www.cryptonator.com/ui/js/widget/single_widget.js"></script>
                    </div>
                    <div class="moving-item">
                        <img src="/front/images/small-2.png" alt="">
                        <script type="text/javascript">
                            crypt_single_base_currency = "Bitcoin (BTC)";
                            crypt_single_target_currency = "US Dollar (USD)";
                            crypt_single_border_width = 0;

                        </script>
                        <script type="text/javascript" src="https://www.cryptonator.com/ui/js/widget/single_widget.js"></script>
                    </div>
                    <div class="moving-item overlay">
                        <img src="/front/images/small-3.png" alt="">
                        <script type="text/javascript">
                            crypt_single_base_currency = "Monero (XMR)";
                            crypt_single_target_currency = "US Dollar (USD)";

                        </script>
                        <script type="text/javascript" src="https://www.cryptonator.com/ui/js/widget/single_widget.js"></script>
                    </div>
                    <div class="moving-item">
                        <img src="/front/images/small-4.png" alt="">
                        <script type="text/javascript">
                            crypt_single_base_currency = "Zcash (ZEC)";
                            crypt_single_target_currency = "US Dollar (USD)";

                        </script>
                        <script type="text/javascript" src="https://www.cryptonator.com/ui/js/widget/single_widget.js"></script>
                    </div>
                    <div class="moving-item overlay">
                        <img src="/front/images/small-5.png" alt="">
                        <script type="text/javascript">
                            crypt_single_base_currency = "Monero (XMR)";
                            crypt_single_target_currency = "US Dollar (USD)";

                        </script>
                        <script type="text/javascript" src="https://www.cryptonator.com/ui/js/widget/single_widget.js"></script>
                    </div>
                    <div class="moving-item">
                        <img src="/front/images/small-3.png" alt="">
                        <script type="text/javascript">
                            crypt_single_base_currency = "SAN (SAN)";
                            crypt_single_target_currency = "US Dollar (USD)";

                        </script>
                        <script type="text/javascript" src="https://www.cryptonator.com/ui/js/widget/single_widget.js"></script>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </section>
    <!-- Banner Part End -->

    <!-- About Part Start -->
    <section id="about-part" class="section-p">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-4 text-center">
                    <div class="about-item">
                        <h2>Fair</h2>
                        <img src="/front/images/about-1.png" alt="">
                        <p>Fair service charges, </p>
                        <a href="{{ route('backend.dashboard') }}" class="btn-2">Read More</a>

                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 text-center">
                    <div class="about-item">
                        <h2>Fast</h2>
                        <img src="/front/images/about-2.png" alt="">
                        <p>Access Options Trading Fx is the fasted trading platform, we process all your transactions instantly, no service timeout</p>
                        <a href="{{ route('backend.dashboard') }}" class="btn-2">Get Started</a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 text-center">
                    <div class="about-item mb-0">
                        <h2>24/7 Customer Service</h2>
                        <img src="/front/images/about-3.png" alt="">
                        <p>Our dedicated customer care are available any time any day, contact us for any challenges and get an appropriate feedback within an hour</p>
                        <a href="{{ route('about') }}" class="btn-2">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Part End -->



    <!-- Service Part Start -->
    <section id="service-part" class="section-p">
        <div class="container">
            <div class="row d-md-flex align-items-md-center">
                <div class="col-md-6 mb-5 mb-md-0">
                    <div class="service-left">
                        <h2 class="mb-2">Get <span>Connect</span> with us</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit in sed tempore, ea exercitationem natus.</p>
                        <form class="form-group mt-3 mt-sm-4 mb-0">
                            <div class="row">
                                <div class="col-6">
                                    <input class="form-control form-item" type="text" placeholder="Name">
                                </div>
                                <div class="col-6">
                                    <input class="form-control form-item" type="text" placeholder="Phone">
                                </div>
                                <div class="col-6">
                                    <input class="form-control form-item" type="text" placeholder="Email">
                                </div>
                                <div class="col-6">
                                    <input class="form-control form-item" type="text" placeholder="Time">
                                </div>
                                <div class="col-12">
                                    <input class="form-control form-item" type="text" placeholder="Class">
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control form-item" placeholder="Message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn-4 mt-3">Submit Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="whyus">
                        <div class="section-head">
                            <h4>What We Do</h4>
                            <h2>Why <span>Choose</span> Us</h2>
                        </div>
                        <div class="why-item">
                            <div class="why-item-img">
                                <img src="images/why-1.jpg" alt="">
                            </div>
                            <div class="why-item-des">
                                <h3>Connect With Us</h3>
                                <p>Lorem ipsum dolor sit amet, consecte adipisicing elit. Assumenda ex magni modi</p>
                                <a href="#" class="font-size-15">More Details</a>
                            </div>
                        </div>
                        <div class="why-item">
                            <div class="why-item-img">
                                <img src="images/why-2.jpg" alt="">
                            </div>
                            <div class="why-item-des">
                                <h3>Bitcoin is open</h3>
                                <p>Lorem ipsum dolor sit amet, consecte adipisicing elit. Assumenda ex magni modi</p>
                                <a href="#" class="font-size-15">More Details</a>
                            </div>
                        </div>
                        <div class="why-item mb-0">
                            <div class="why-item-img">
                                <img src="images/why-3.jpg" alt="">
                            </div>
                            <div class="why-item-des">
                                <h3>Bitcoin uses</h3>
                                <p>Lorem ipsum dolor sit amet, consecte adipisicing elit. Assumenda ex magni modi</p>
                                <a href="#" class="font-size-15">More Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Part End -->

    <!-- Token Part End -->
    <section id="token-part" class="section-p">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-5 offset-lg-0">
                    <div class="token-left">
                        <div class="token-left-bg">
                            <div class="offer">
                                <img src="images/token-left-sub.png" alt="">
                                <h2>TOKEN <span class="brand-color">SALES !</span></h2>

                                <div class="buy-btn">
                                    <a href="#">Buy CPTO Token</a>
                                </div>

                                <div class="count-down">
                                    <div data-countdown="2018/03/11"></div>
                                </div>

                                <div class="payment">
                                    <p>We accept BTC, ETC, LTC and Other</p>
                                    <div class="method d-flex align-items-center justify-content-center">
                                        <a href="#"><img src="images/card-icon-1.jpg" alt=""></a>
                                        <a href="#"><img src="images/card-icon-2.jpg" alt=""></a>
                                        <a href="#"><img src="images/card-icon-3.jpg" alt=""></a>
                                        <a href="#" class="box-mth">Wire Transfer</a>
                                    </div>
                                </div>
                            </div>
                            <div class="sold">
                                <h2 class="brand-color">$<span class="counter">222222222</span></h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 mt-4 mt-sm-5 mt-lg-0">
                    <div class="token-right">
                        <div class="country-short text-center">
                            <ul id="tabs" class="flat-list">
                                <li data-tab="eng">ENG</li>
                                <li data-tab="chi" class="active">CHI</li>
                                <li data-tab="jpn">JPN</li>
                                <li data-tab="kor">KOR</li>
                                <li data-tab="rus">RUS</li>
                                <li data-tab="spn">SPN</li>
                                <li data-tab="ger">GER</li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>

                        <div class="tab-content">
                            <div class="tab-item eng">
                                <h2 class="mt-4 mb-2">Welcome to <span class="brand-color">Bitcoin</span></h2>
                                <h3 class="semi-bold">Pay with Crypto currency in <span class="brand-color">81,0000,000</span> stories Worldwide.</h3>
                                <div class="row no-gutters">
                                    <div class="col-12 col-lg-4 col-md-5">
                                        <ul class="points points01">
                                            <li class="h5"><i class="fa fa-angle-right"></i> limited and Commisions</li>
                                            <li class="h5"><i class="fa fa-angle-right"></i> Without physical Card,</li>

                                        </ul>
                                    </div>
                                    <div class="col-12 col-lg-8 col-md-7 pl-lg-1">
                                        <ul class="points points01">
                                            <li class="h5"><i class="fa fa-angle-right"></i>Price controls Crypto Bitcoin</li>
                                            <li class="h5"><i class="fa fa-angle-right"></i>Commisions Crypto bitcoin open</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="d-sm-flex align-items-sm-center text-center">
                                    <ul class="flat-list buttons-group">
                                        <li><a href="#" class="btn-4">WhitePaper</a></li>
                                        <li><a href="#" class="btn-4"><i class="fa fa-play"></i>See Our MVP</a></li>
                                        <li><a href="#" class="btn-4"><i class="fa fa-send"></i> Chat</a></li>
                                    </ul>
                                    <ul class="flat-list social-icon">
                                        <li><a href="#"><i class="fa fa-btc"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-12 col-sm-6">
                                        <div class="points-1">
                                            <div class="img">
                                                <img src="images/token-icon-1.png" alt="">
                                            </div>
                                            <h4>Why Crypto is Unique</h4>
                                            <a href="#">Read More</a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="points-1">
                                            <div class="img">
                                                <img src="images/token-icon-2.png" alt="">
                                            </div>
                                            <h4>My Chart</h4>
                                            <a href="#">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-item chi active">
                                <h2 class="mt-4 mb-2">Welcome to <span class="brand-color">CryptoBank</span></h2>
                                <h3 class="semi-bold">Pay with Crypto currency in <span class="brand-color">84,0000,000</span> stories Worldwide.</h3>
                                <div class="row no-gutters">
                                    <div class="col-12 col-md-4">
                                        <ul class="points points01">
                                            <li class="h5"><i class="fa fa-angle-right"></i> Without physical Card,</li>
                                            <li class="h5"><i class="fa fa-angle-right"></i> limited and Commisions</li>

                                        </ul>
                                    </div>
                                    <div class="col-12 col-md-8 pl-lg-1">
                                        <ul class="points points01">
                                            <li class="h5"><i class="fa fa-angle-right"></i> Price Analysis: Eve and Adam Could Be Turning</li>
                                            <li class="h5"><i class="fa fa-angle-right"></i> Physical Card, limited and Commisions</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="d-sm-flex align-items-sm-center text-center">
                                    <ul class="flat-list buttons-group">
                                        <li><a href="#" class="btn-4">WhitePaper</a></li>
                                        <li><a href="#" class="btn-4"><i class="fa fa-play"></i>See Our MVP</a></li>
                                        <li><a href="#" class="btn-4"><i class="fa fa-send"></i> Chat</a></li>
                                    </ul>
                                    <ul class="flat-list social-icon">
                                        <li><a href="#"><i class="fa fa-btc"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-12 col-sm-6">
                                        <div class="points-1">
                                            <div class="img">
                                                <img src="images/token-icon-1.png" alt="">
                                            </div>
                                            <h4>Why Crypto is Unique</h4>
                                            <a href="#">Read More</a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="points-1">
                                            <div class="img">
                                                <img src="images/token-icon-2.png" alt="">
                                            </div>
                                            <h4>My Earnings</h4>
                                            <a href="#">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-item jpn">
                                <h2 class="mt-4 mb-2">Bitcoin In <span class="brand-color">JPN</span></h2>
                                <h3 class="semi-bold">Pay with Crypto currency in <span class="brand-color">72,0000,000</span> stories Worldwide.</h3>
                                <div class="row no-gutters">
                                    <div class="col-12 col-md-4">
                                        <ul class="points points01">
                                            <li class="h5"><i class="fa fa-angle-right"></i> Adam Could Be Turning</li>
                                            <li class="h5"><i class="fa fa-angle-right"></i>limited and Commisions</li>

                                        </ul>
                                    </div>
                                    <div class="col-12 col-md-8 pl-lg-1">
                                        <ul class="points points01">
                                            <li class="h5"><i class="fa fa-angle-right"></i>Price Analysis: Without physical Card,</li>
                                            <li class="h5"><i class="fa fa-angle-right"></i>Physical Card, limited and Commisions</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="d-sm-flex align-items-sm-center text-center">
                                    <ul class="flat-list buttons-group">
                                        <li><a href="#" class="btn-4">WhitePaper</a></li>
                                        <li><a href="#" class="btn-4"><i class="fa fa-play"></i>See Our MVP</a></li>
                                        <li><a href="#" class="btn-4"><i class="fa fa-send"></i> Chat</a></li>
                                    </ul>
                                    <ul class="flat-list social-icon">
                                        <li><a href="#"><i class="fa fa-btc"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-12 col-sm-6">
                                        <div class="points-1">
                                            <div class="img">
                                                <img src="images/token-icon-1.png" alt="">
                                            </div>
                                            <h4>Why Bitcoin is Unique</h4>
                                            <a href="#">Read More</a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="points-1">
                                            <div class="img">
                                                <img src="images/token-icon-2.png" alt="">
                                            </div>
                                            <h4>My Bitcoin</h4>
                                            <a href="#">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-item kor">
                                <h2 class="mt-4 mb-2">CryptoBank in <span class="brand-color">KOR</span></h2>
                                <h3 class="semi-bold">Pay with Crypto currency in <span class="brand-color">11,0000,000</span> stories Worldwide.</h3>
                                <div class="row no-gutters">
                                    <div class="col-12 col-md-4">
                                        <ul class="points points01">
                                            <li class="h5"><i class="fa fa-angle-right"></i> Without physical Card,</li>
                                            <li class="h5"><i class="fa fa-angle-right"></i> limited and Commisions</li>

                                        </ul>
                                    </div>
                                    <div class="col-12 col-md-8 pl-lg-1">
                                        <ul class="points points01">
                                            <li class="h5"><i class="fa fa-angle-right"></i>Eve and Adam Could Be Turning Analysis</li>
                                            <li class="h5"><i class="fa fa-angle-right"></i>Limited and Commisions, physical Card </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="d-sm-flex align-items-sm-center text-center">
                                    <ul class="flat-list buttons-group">
                                        <li><a href="#" class="btn-4">WhitePaper</a></li>
                                        <li><a href="#" class="btn-4"><i class="fa fa-play"></i>See Our MVP</a></li>
                                        <li><a href="#" class="btn-4"><i class="fa fa-send"></i> Chat</a></li>
                                    </ul>
                                    <ul class="flat-list social-icon">
                                        <li><a href="#"><i class="fa fa-btc"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-12 col-sm-6">
                                        <div class="points-1">
                                            <div class="img">
                                                <img src="images/token-icon-1.png" alt="">
                                            </div>
                                            <h4>Why Crypto is Best</h4>
                                            <a href="#">Read More</a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="points-1">
                                            <div class="img">
                                                <img src="images/token-icon-2.png" alt="">
                                            </div>
                                            <h4>My CryptoCoin</h4>
                                            <a href="#">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-item rus">
                                <h2 class="mt-4 mb-2">Rus Large <span class="brand-color">CryptoBank</span></h2>
                                <h3 class="semi-bold">Pay with Crypto currency in <span class="brand-color">34,0000,000</span> stories Worldwide.</h3>
                                <div class="row no-gutters">
                                    <div class="col-12 col-md-4">
                                        <ul class="points points01">
                                            <li class="h5"><i class="fa fa-angle-right"></i> Without physical Card,</li>
                                            <li class="h5"><i class="fa fa-angle-right"></i> limited and Commisions</li>

                                        </ul>
                                    </div>
                                    <div class="col-12 col-md-8 pl-lg-1">
                                        <ul class="points points01">
                                            <li class="h5"><i class="fa fa-angle-right"></i> Price Analysis: Eve and Adam Could Be Turning</li>
                                            <li class="h5"><i class="fa fa-angle-right"></i> Physical Card, limited and Commisions</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="d-sm-flex align-items-sm-center text-center">
                                    <ul class="flat-list buttons-group">
                                        <li><a href="#" class="btn-4">WhitePaper</a></li>
                                        <li><a href="#" class="btn-4"><i class="fa fa-play"></i>See Our MVP</a></li>
                                        <li><a href="#" class="btn-4"><i class="fa fa-send"></i> Chat</a></li>
                                    </ul>
                                    <ul class="flat-list social-icon">
                                        <li><a href="#"><i class="fa fa-btc"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-12 col-sm-6">
                                        <div class="points-1">
                                            <div class="img">
                                                <img src="images/token-icon-1.png" alt="">
                                            </div>
                                            <h4>Why Crypto is Unique</h4>
                                            <a href="#">Read More</a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="points-1">
                                            <div class="img">
                                                <img src="images/token-icon-2.png" alt="">
                                            </div>
                                            <h4>My Earnings</h4>
                                            <a href="#">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-item spn">
                                <h2 class="mt-4 mb-2">Spn In <span class="brand-color">CryptoBank</span></h2>
                                <h3 class="semi-bold">Pay with Crypto currency in <span class="brand-color">48,0000,000</span> stories Worldwide.</h3>
                                <div class="row no-gutters">
                                    <div class="col-12 col-md-4">
                                        <ul class="points points01">
                                            <li class="h5"><i class="fa fa-angle-right"></i>Without Could Be Turning</li>
                                            <li class="h5"><i class="fa fa-angle-right"></i>limited Commisions and</li>

                                        </ul>
                                    </div>
                                    <div class="col-12 col-md-8 pl-lg-1">
                                        <ul class="points points01">
                                            <li class="h5"><i class="fa fa-angle-right"></i>Physical Card Price Analysis: Eve Adam </li>
                                            <li class="h5"><i class="fa fa-angle-right"></i> Physical limited and Commisions Card,</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="d-sm-flex align-items-sm-center text-center">
                                    <ul class="flat-list buttons-group">
                                        <li><a href="#" class="btn-4">WhitePaper</a></li>
                                        <li><a href="#" class="btn-4"><i class="fa fa-play"></i>See Our MVP</a></li>
                                        <li><a href="#" class="btn-4"><i class="fa fa-send"></i> Chat</a></li>
                                    </ul>
                                    <ul class="flat-list social-icon">
                                        <li><a href="#"><i class="fa fa-btc"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-12 col-sm-6">
                                        <div class="points-1">
                                            <div class="img">
                                                <img src="images/token-icon-1.png" alt="">
                                            </div>
                                            <h4>This is Unique Crypto</h4>
                                            <a href="#">Read More</a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="points-1">
                                            <div class="img">
                                                <img src="images/token-icon-2.png" alt="">
                                            </div>
                                            <h4>Earning of Coin</h4>
                                            <a href="#">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-item ger">
                                <h2 class="mt-4 mb-2">Best Ger <span class="brand-color">CryptoBank</span></h2>
                                <h3 class="semi-bold">Pay with Crypto currency in <span class="brand-color">22,0000,000</span> stories Worldwide.</h3>
                                <div class="row no-gutters">
                                    <div class="col-12 col-md-4">
                                        <ul class="points points01">
                                            <li class="h5"><i class="fa fa-angle-right"></i> best Choice of Coin</li>
                                            <li class="h5"><i class="fa fa-angle-right"></i> limited and Price</li>

                                        </ul>
                                    </div>
                                    <div class="col-12 col-md-8 pl-lg-1">
                                        <ul class="points points01">
                                            <li class="h5"><i class="fa fa-angle-right"></i> Without physical Card Could Be Turning</li>
                                            <li class="h5"><i class="fa fa-angle-right"></i> Physical Card, limited and Price</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="d-sm-flex align-items-sm-center text-center">
                                    <ul class="flat-list buttons-group">
                                        <li><a href="#" class="btn-4">WhitePaper</a></li>
                                        <li><a href="#" class="btn-4"><i class="fa fa-play"></i>See Our MVP</a></li>
                                        <li><a href="#" class="btn-4"><i class="fa fa-send"></i> Chat</a></li>
                                    </ul>
                                    <ul class="flat-list social-icon">
                                        <li><a href="#"><i class="fa fa-btc"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-12 col-sm-6">
                                        <div class="points-1">
                                            <div class="img">
                                                <img src="images/token-icon-1.png" alt="">
                                            </div>
                                            <h4>Why Crypto is Unique</h4>
                                            <a href="#">Read More</a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="points-1">
                                            <div class="img">
                                                <img src="images/token-icon-2.png" alt="">
                                            </div>
                                            <h4>My Earnings</h4>
                                            <a href="#">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Token Part End -->

    <!-- Currency Calculator Part start -->
    <section id="calculator-part" class="section-p">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-12 col-md-6">
                    <div class="calculator-left">
                        <h2>Cryptocurrency <span class="brand-color">Calculator</span></h2>
                        <p>Turn Bitcoin Into Dollars and Spend Anywhere! Millions of people have made a fortune with bitcoins! Bitcoin is a type of digital currency in which encryption techniques are used to regulate the generation of units</p>
                        <div class="mian-calclutor">
                            <script type="text/javascript" src="https://www.cryptonator.com/ui/js/widget/calc_widget.js"></script>
                        </div>
                    </div>
                </div>


                <div class="col-12 col-md-6">
                    <div class="exchange mt-5 mt-md-0">
                        <img src="/front/images/bg/calculator-bg.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Currency Calculator Part End -->

    <!-- Counter Part Start -->
    <section id="counter-part" class="section-p">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-12 mb-3 mb-sm-4 mb-lg-0">
                    <div class="counter-item text-center">
                        <h2 class="counter">599</h2>
                        <h5>Transactions in last 24h</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 mb-3 mb-sm-4 mb-lg-0">
                    <div class="counter-item text-center">
                        <h2 class="counter">15</h2>
                        <h5>Transactions Per Hour</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 mb-3 mb-sm-4 mb-sm-0">
                    <div class="counter-item text-center">
                        <h2 class="counter">300</h2>
                        <h5>Largest Transactions</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="counter-item text-center">
                        <h2 class="counter">10</h2>
                        <h5>Year of Experiences</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter Part End -->

    <!-- Price Part Start -->
    <section id="price-part" class="section-p">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="price-item">
                        <div class="coin-type">
                            <h5>BTC-ETH</h5>
                        </div>
                        <h3>1 Bitcoin</h3>
                        <p>for</p>
                        <h2>$ <span class="counter">16600.32</span></h2>
                        <a href="#" class="btn-4">BUY NOW</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="price-item">
                        <div class="coin-type">
                            <h5>BTC-ETH</h5>
                        </div>
                        <h3>1 Bitcoin</h3>
                        <p>for</p>
                        <h2>$ <span class="counter">16600.32</span></h2>
                        <a href="#" class="btn-4">BUY NOW</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="price-item">
                        <div class="coin-type">
                            <h5>BTC-ETH</h5>
                        </div>
                        <h3>1 Bitcoin</h3>
                        <p>for</p>
                        <h2>$ <span class="counter">16600.32</span></h2>
                        <a href="#" class="btn-4">BUY NOW</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="price-item">
                        <div class="coin-type">
                            <h5>BTC-ETH</h5>
                        </div>
                        <h3>1 Bitcoin</h3>
                        <p>for</p>
                        <h2>$ <span class="counter">16600.32</span></h2>
                        <a href="#" class="btn-4">BUY NOW</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="price-item">
                        <div class="coin-type">
                            <h5>BTC-ETH</h5>
                        </div>
                        <h3>1 Bitcoin</h3>
                        <p>for</p>
                        <h2>$ <span class="counter">16600.32</span></h2>
                        <a href="#" class="btn-4">BUY NOW</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="price-item">
                        <div class="coin-type">
                            <h5>BTC-ETH</h5>
                        </div>
                        <h3>1 Bitcoin</h3>
                        <p>for</p>
                        <h2>$ <span class="counter">16600.32</span></h2>
                        <a href="#" class="btn-4">BUY NOW</a>
                    </div>
                </div>

                <div class="col-12 text-center mt-5">
                    <a href="#" class="btn-4">Load More Bitcoin</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Price Part End -->

    <!-- Price Chart Part Start -->
    <section id="price-chart-part" class="section-p">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="treading">
                        <h2>Access Options <span class="brand-color"> Trading FX</span></h2>
                        <h5 class="brand-color semi-bold">No.1 Trading platform</h5>
                        <p>
                            Access Options Trading FX is a company that successfully achieves its objectives and gives others the opportunity to prosper.</p>
                        <p>We have been working in the investment market for several years and continue our progress</p>
                            <p>We offers our investors the unique opportunity to get passive income from investing to the most profitable directions of the present market.</p>
                        <a href="{{ route('login') }}" class="btn-5 mt-3 mt-lg-4">Join Us</a>
                    </div>
                </div>
                <div class="col-md-6 text-left text-md-center mt-5 mt-md-0">
                    <div class="price-chart">
                        <div class="btcwdgt-chart"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Price Chart Part End -->

    <!-- Why Digital currency Part start -->
    <section>
        <div id="why-digital-part" class="section-p">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="why"><img src="/front/images/why.png" alt=""></div>
                    </div>
                    <div class="col-12 col-md-6 mt-4 mt-md-0">
                        <div class="why-digital-currency">
                            <h2>Why are so many <span class="brand-color">people trading with</span> Access Options Trading FX</h2>
                            <a href="#" class="btn-3 mb-2 mt-4 mt-md-3 mb-lg-3 mt-lg-4">Passive earnings</a>
                            <p class="h5">You do not need to have
                                special knowledge to perform actions -
                                our team of professionals will do all the work.</p>

                             <a href="#" class="btn-3 mb-2 mt-4 mt-md-3 mb-lg-3 mt-lg-4">High return</a>
                            <p class="h5">
                                We offer our investors
                                a much higher return than the banking
                                one and we provide reduced risks.</p>
                            <a href="#" class="btn-3 mb-2 mt-4 mt-md-3 mb-lg-3 mt-lg-4"> Reliability</a>
                            <p class="h5">
                                Crypto Express has been working
                                in the market for 5 years and it
                                has a positive reputation.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="clint-part" class="section-p">
            <div class="owl-carousel clint-logo-active">
                <div class="clint-logo-item">
                    <a href="#" class="clint-logo"><img src="images/clint-logo-1.png" alt=""></a>
                </div>
                <div class="clint-logo-item">
                    <a href="#" class="clint-logo"><img src="images/clint-logo-2.png" alt=""></a>
                </div>
                <div class="clint-logo-item">
                    <a href="#" class="clint-logo"><img src="images/clint-logo-3.png" alt=""></a>
                </div>
                <div class="clint-logo-item">
                    <a href="#" class="clint-logo"><img src="images/clint-logo-4.png" alt=""></a>
                </div>
                <div class="clint-logo-item">
                    <a href="#" class="clint-logo"><img src="images/clint-logo-5.png" alt=""></a>
                </div>

            </div>
        </div>
    </section>
    <!-- Why Digital currency Part End -->

    <!-- Newsletter Part Start -->
    <div id="newsletter">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-6 text-center text-md-left">
                    <div class="subscribe-text">
                        <h2 class="mb-1">Subscribe to Our Newsletter</h2>
                        <p>Sign up for our weekly indusry Update, insider perspectives and analysis.</p>
                    </div>
                </div>
                <div class="col-md-6 text-center text-md-right mt-3 mt-md-0">
                    <div class="subscribe-form">
                        <form>
                            <input type="email" class="form-control" placeholder="Insert your email">
                            <button class="btn-4">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter Part End -->


@endsection
