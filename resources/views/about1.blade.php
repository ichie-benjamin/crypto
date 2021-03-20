@extends('layouts.pages')

@section('content')
    <!-- START SECTION BANNER -->
    <section class="section_breadcrumb dark_light_bg" data-z-index="1" data-parallax="scroll" data-image-src="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="banner_text text-center">
                        <h1 class="animation" data-animation="fadeInUp" data-animation-delay="1.1s">About Us</h1>
                        <ul class="breadcrumb bg-transparent justify-content-center animation m-0 p-0" data-animation="fadeInUp" data-animation-delay="1.3s">
                            <li><a href="#">Home</a> </li>
                            <li><span>About us</span></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- START SECTION ABOUT US -->
    <section id="about" class="small_pt">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="text_md_center">
                        <img class="animation" data-animation="zoomIn" data-animation-delay="0.2s" src="https://binaryoptionsfx.online/asset/assets/images/about_img2.png" alt="aboutimg2"/>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 res_md_mt_30 res_sm_mt_20">
                    <div class="title_default_light title_border">
                        <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">About Crypto Asset Trades™️</h4>
                        <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">Crypto Assets is one of the most transformative technologies since the era of cryptocurrency trading and investments. We stands firmly in support of financial freedom
                            and the liberty that Bitcoin and other Digital assets provides globally for anyone to voluntarily participate in a permissionless and decentralized network. </p>
                        <p class="animation" data-animation="fadeInUp" data-animation-delay="0.5s">which empowers
                            people to not be marginalized by governments and financial institutions. </p>
                        <p class="animation" data-animation="fadeInUp" data-animation-delay="0.6s">Crypto Asset Trade is a leading provider
                        of Contracts for Difference (CFDs), delivering trading facilities on Binary Options, forex, commodities, cryptocurrencies,
                            ETFs, and indices, alongside innovative trading technology.</p>
                    </div>
                    <a href="{{ route('login') }}" class="btn btn-default btn-radius video animation" data-animation="fadeInUp" data-animation-delay="1s">Let's Get Started <i class="ion-ios-arrow-thin-right"></i></a>
                </div>
                <div class=" col-md-12 col-sm-12 res_md_mt_30 res_sm_mt_20">

                    <div class="title_default_light title_border" style="margin-top: 40px">
                        <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.5s">Who We Are</h4>
                        <p class="animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                            The Crypto Asset trading platform is offered by FOREX PLUS LTD, which holds a UK financial services license with Mauritius-based Incorporated. The company is Authorised and regulated by the Financial Conduct Authority to offer Contracts For Difference (CFD). Crypto Asset is a rapidly growing CFD provider and currently offers its portfolio of over 2000 instruments. Crypto Asset trade is a subsidiary of FOREX PLUS LTD
                        </p>
                        <p class="animation" data-animation="fadeInUp" data-animation-delay="0.7s">
                            Crypto Assets  is Authorized and regulated by the Mauritius Securities and Exchange Commission with Company registration number C092215 with registered office at Unit 2 Air Mauritius Bldg, Lebrun St, Port Louis,Mauritius 
                        </p>

                        <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.8s">Client Money</h4>
                        <p class="animation" data-animation="fadeInUp" data-animation-delay="0.9s">
                        When you open an account, Crypto Asset Ltd we hold your funds on a segregated basis, in accordance with the Financial Conduct Authority's client money rules.
                            Client Money Protection </p>

                        <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.10s"> Highly Rated CFD Provider</h4>
                        <p class="animation" data-animation="fadeInUp" data-animation-delay="0.10s">
                            Crypto Asset Ltd is one of the highest rated CFD trading platform</p>
                    </div>




{{--                    <a href="{{ route('login') }}" class="btn btn-default btn-radius video animation" data-animation="fadeInUp" data-animation-delay="1s">Let's Get Started <i class="ion-ios-arrow-thin-right"></i></a>--}}
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION ABOUT US -->

    <!-- END SECTION BANNER -->
    <!-- START SECTION SERVICES -->
    <section id="service" class="small_pb small_pt">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-sm-12">
                    <div class="title_default_light title_border text-center">
                        <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">How it Works</h4>
                        <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">Get instant results by following these 3 simple steps.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="box_wrap text-center animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                        <h4 class="font-size15 xs-font-size14 margin-10px-top xs-margin-8px-top text-uppercase font-weight-600 text-black">Sign Up</h4>
                        <img src="/images/service_icon1.png" alt="service_icon1"/>
                        <h4>Seamless</h4>
                        <p>Sign up via our registration link. Provide valid details in the form fields and hit the submit button.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="box_wrap text-center animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                        <h4 class="font-size15 xs-font-size14 margin-10px-top xs-margin-8px-top text-uppercase font-weight-600 text-black">Fund Account</h4>
                        <img src="/images/service_icon2.png" alt="service_icon1"/>
                        <h4>Automatic</h4>
                        <p>After verification of your details, add funds to your account. This  makes you ready to invest.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="box_wrap text-center animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                        <h4 class="font-size15 xs-font-size14 margin-10px-top xs-margin-8px-top text-uppercase font-weight-600 text-black">Start Earning</h4>
                        <img src="/images/service_icon3.png" alt="service_icon1"/>
                        <h4>Quick and easy</h4>
                        <p>Invest in any suitable plan on our platform and your money starts growing. Earn more via referrals.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION SERVICES -->


    <!-- START SECTION SERVICES -->

                <!-- START SECTION SERVICES -->
    <section id="token" class="section_token token_sale bg_light_dark" data-z-index="1" data-parallax="scroll">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-sm-12">
                    <div class="title_default_light title_border text-center">
                        <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Our Features</h4>
                        <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">Great features for investors to join us. We operate a unique system.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="box_wrap text-center animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                        <h4 class="font-size15 xs-font-size14 margin-10px-top xs-margin-8px-top text-uppercase font-weight-600 text-black">Guaranteed Investment</h4>
                        <i class="fa fa-money fa-3x"></i>
                        <!-- <img src="https://binaryoptionsfx.online/asset/assets/images/" alt="service_icon1"/> -->
                        <!-- <h4></h4> -->
                        <p>Your investment begins to grow immediately you have invested. Profits begin to accrue to your investment as the clock ticks.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="box_wrap text-center animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                        <h4 class="font-size15 xs-font-size14 margin-10px-top xs-margin-8px-top text-uppercase font-weight-600 text-black">Quick Deposits</h4>
                        <i class="fa fa-bitcoin fa-3x"></i>
                        <!-- <img src="https://binaryoptionsfx.online/asset/assets/images/" alt="service_icon1"/> -->
                        <!-- <h4></h4> -->
                        <p>Our deposit system is automated and easy.<br /> Your balance is credited with deposited amount instantly.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="box_wrap text-center animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                        <h4 class="font-size15 xs-font-size14 margin-10px-top xs-margin-8px-top text-uppercase font-weight-600 text-black">Instant Withdrawals</h4>
                        <i class="fa fa-exchange fa-3x"></i>
                        <!-- <img src="https://binaryoptionsfx.online/asset/assets/images/" alt="service_icon1"/> -->
                        <!-- <h4></h4> -->
                        <p>Withdrawals are automatically processed within 0-10 minutes. Your funds arrives your wallet timely.</p>
                    </div>
                </div>
            </div>

            <div class="row" style="margin-top: 30px">
                <div class="steps-ul">
                    <ul>
                        <li class="li-1">
                            <h6 style="color: #fff" class="animation" data-animation="fadeInUp" data-animation-delay="0.4s"><a href="{{ route('register') }}" target="_blank">Register</a> with Crypto Assets and then <a href="{{ route('backend.deposits.create') }}" target="_blank">Make A Deposit</a>  If you already have a trading account with Crypto Assets, please, <a href="{{ route('login') }}" target="_blank">Login</a> and make a deposit..</h6>
                        </li>
                    </ul>
                    <div class="img-block">
                        <img src="/images/screen/dash.png">
                    </div>
                    <ul style="margin-top: 40px">
                        <li class="li-2" style="color: #fff">
                            <h6 style="color: #fff"><strong>Multiple Payment System</strong></h6>
                            <p>Easy deposit and withdrawal with our multiple paymment channels.</p>
                        </li>
                    </ul>
                    <div class="img-block">
                        <img src="/images/screen/1.png">
                    </div>
                    <ul style="margin-top: 40px">
                        <li class="li-3">
                            <h6 style="color: #fff"><strong>Realtime Trading Result.</strong></h6>

                        </li>
                    </ul>
                    <div class="img-block">
                        <img src="/images/screen/2.png">
                    </div>

                </div>

            </div>

        </div>
    </section>

    <br/> <br/> <br/>



    <!-- END SECTION SERVICES -->


@endsection
