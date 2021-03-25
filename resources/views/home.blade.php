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
                                    <h1>Access  <span class="brand-color">Options Trading FX</span></h1>
                                    <p class="h3">Is the most popular trading platform</p>
                                    <ul class="regular-list d-none d-md-inline">
                                        <li><i class="fa fa-angle-right"></i> Free Crypto Wallet</li>
                                        <li><i class="fa fa-angle-right"></i> Many deposit options</li>
                                        <li><i class="fa fa-angle-right"></i> Withdraw instantly anytime</li>
                                    </ul>
                                    @guest()
                                        <a href="{{ route('register') }}" class="btn-2 bold">CREATE ACCOUNT</a>
                                    @else
                                        <a href="{{ route('backend.dashboard') }}" class="btn-2 bold">Dashboard</a>
                                    @endguest
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
                        <h2>Reliability</h2>
                        <img src="/front/images/about-1.png" alt="">
                        <p>Access Options Trading Fx has been working in the market for 5 years and it has a positive reputation.</p>
                        <a href="{{ route('backend.dashboard') }}" class="btn-2">Read More</a>

                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 text-center">
                    <div class="about-item">
                        <h2>High return</h2>
                        <img src="/front/images/about-2.png" alt="">
                        <p>We offer our investors a much higher return than the banking one and we provide reduced risks.</p>
                        <a href="{{ route('backend.dashboard') }}" class="btn-2">Get Started</a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 text-center">
                    <div class="about-item mb-0">
                        <h2>24/7 Support</h2>
                        <img src="/front/images/about-3.png" alt="">
                        <p>Great Customer Support, Get all your questions attended to within 12hrs</p>
                        <a href="#service-part" class="btn-2">Contact Us</a>
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
                        <h2 class="mb-2">Contact <span>Us </span> </h2>
                        <form class="form-group mt-3 mt-sm-4 mb-0">
                            <div class="row">
                                <div class="col-12">
                                    <input class="form-control form-item" name="first_name" type="text" placeholder="First Name">
                                </div>
                                <div class="col-12">
                                    <input class="form-control form-item" name="last_name" type="text" placeholder="Last Name">
                                </div>
                                <div class="col-12">
                                    <input class="form-control form-item" type="text" placeholder="Email">
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
                    <img style="width: 100%" src="/front/images/affiliates.png" />
                </div>
            </div>
        </div>
    </section>
    <!-- Service Part End -->

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

    @php
  $count = (int)date('y') + (int)date('m')+(int)date('d');
  $count1 = (int)date('h') + (int)date('i');
@endphp
    <!-- Counter Part Start -->
    <section id="counter-part" class="section-p">
        <div class="container">
            <div class="row">
{{--                {{ $count1 }}--}}
                <div class="col-lg-3 col-sm-6 col-12 mb-3 mb-sm-4 mb-lg-0">
                    <div class="counter-item text-center">
                        <h2 class="counter">{{ $count1 * 3}}</h2>
                        <h5>Transactions in last 24h</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 mb-3 mb-sm-4 mb-lg-0">
                    <div class="counter-item text-center">
                        <h2 class="counter">{{ $count * 55 + $count1 }}</h2>
                        <h5>Total Transactions </h5>
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
                        <h2 class="counter">{{ date('Y') - 2011 }}</h2>
                        <h5>Year of Experiences</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter Part End -->

    <!-- Price Part Start -->

{{--    --}}
    <section id="price-part" class="section-p">
        <div class="container">
            <div class="row">
                @foreach(\App\Models\Package::where('minimum_purchase','>',0)->get() as $item)
                <div class="col-sm-6 col-md-4">
                    <div class="price-item">
                        <div class="coin-type">
                            <h5>{{ $item->name }}</h5>
                        </div>
                        <h3>{{ $item->period }} Day(s)</h3>
                        <p>From</p>
                        <h2>$ <span class="counter">{{ $item->minimum_purchase }}</span> to $ <span class="counter">{{ $item->maximum_purchase }}</span></h2>
                        <a href="{{ route('deposit.purchase', $item->id) }}" class="btn-4">BUY NOW</a>
                    </div>
                </div>
                @endforeach

                <div class="col-12 text-center mt-5">
                    <a href="{{ route('backend.dashboard') }}" class="btn-4">Your Dashboard</a>
                </div>
            </div>
        </div>
    </section>
{{--    --}}

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


@endsection
