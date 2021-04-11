@extends('layouts.master')

@section('style')
    <style>

        /*! CSS Used from: https://cryptoassest.com/css/animate.css */
        .animated{-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-fill-mode:both;animation-fill-mode:both;}
        .fadeInUp{-webkit-animation-name:fadeInUp;animation-name:fadeInUp;}
        /*! CSS Used from: https://cryptoassest.com/css/bootstrap.min.css */
        *,::after,::before{box-sizing:border-box;}
        section{display:block;}
        h1,h4,h6{margin-top:0;margin-bottom:.5rem;}
        p{margin-top:0;margin-bottom:1rem;}
        ul{margin-top:0;margin-bottom:1rem;}
        strong{font-weight:bolder;}
        a{color:#007bff;text-decoration:none;background-color:transparent;-webkit-text-decoration-skip:objects;}
        a:hover{color:#0056b3;text-decoration:underline;}
        img{vertical-align:middle;border-style:none;}
        h1,h4,h6{margin-bottom:.5rem;font-family:inherit;font-weight:500;line-height:1.2;color:inherit;}
        h1{font-size:2.8rem;}
        h4{font-size:2.1rem;}
        h6{font-size:1.7rem;}
        .container{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto;}
        @media (min-width:576px){
            .container{max-width:540px;}
        }
        @media (min-width:768px){
            .container{max-width:720px;}
        }
        @media (min-width:992px){
            .container{max-width:960px;}
        }
        @media (min-width:1200px){
            .container{max-width:1140px;}
        }
        .row{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-15px;margin-left:-15px;}
        .col-lg-12,.col-lg-4,.col-lg-6,.col-lg-8,.col-md-12,.col-md-6,.col-sm-12{position:relative;width:100%;min-height:1px;padding-right:15px;padding-left:15px;}
        @media (min-width:576px){
            .col-sm-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%;}
        }
        @media (min-width:768px){
            .col-md-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%;}
            .col-md-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%;}
        }
        @media (min-width:992px){
            .col-lg-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%;}
            .col-lg-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%;}
            .col-lg-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%;}
            .col-lg-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%;}
            .offset-lg-2{margin-left:16.666667%;}
        }
        .btn{display:inline-block;font-weight:400;text-align:center;white-space:nowrap;vertical-align:middle;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;border:1px solid transparent;padding:.375rem .75rem;font-size:1rem;line-height:1.5;border-radius:.25rem;transition:color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;}
        @media screen and (prefers-reduced-motion:reduce){
            .btn{transition:none;}
        }
        .btn:focus,.btn:hover{text-decoration:none;}
        .btn:focus{outline:0;box-shadow:0 0 0 .2rem rgba(0, 123, 255, .25);}
        .btn:disabled{opacity:.65;}
        .breadcrumb{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;padding:.75rem 1rem;margin-bottom:1rem;list-style:none;background-color:#e9ecef;border-radius:.25rem;}
        .bg-transparent{background-color:transparent!important;}
        .justify-content-center{-ms-flex-pack:center!important;justify-content:center!important;}
        .align-items-center{-ms-flex-align:center!important;align-items:center!important;}
        .m-0{margin:0!important;}
        .p-0{padding:0!important;}
        .text-center{text-align:center!important;}
        .text-uppercase{text-transform:uppercase!important;}
        @media print{
            *,::after,::before{text-shadow:none!important;box-shadow:none!important;}
            a:not(.btn){text-decoration:underline;}
            img{page-break-inside:avoid;}
            p{orphans:3;widows:3;}
            .container{min-width:992px!important;}
        }
        @media (min-width: 768px){
            .col-sm-12{float:left;}
            .col-sm-12{width:100%;}
        }
        @media (min-width: 992px){
            .col-md-6,.col-md-12{float:left;}
            .col-md-12{width:100%;}
            .col-md-6{width:50%;}
        }
        @media (min-width: 1200px){
            .col-lg-4,.col-lg-6,.col-lg-8,.col-lg-12{float:left;}
            .col-lg-12{width:100%;}
            .col-lg-8{width:66.66666667%;}
            .col-lg-6{width:50%;}
            .col-lg-4{width:33.33333333%;}
        }
        /*! CSS Used from: https://cryptoassest.com/font-awesome/css/font-awesome.css */
        .fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
        .fa-3x{font-size:3em;}
        .fa-money:before{content:"\f0d6";}
        .fa-exchange:before{content:"\f0ec";}
        .fa-bitcoin:before{content:"\f15a";}
        /*! CSS Used from: https://cryptoassest.com/css/ionicons.min.css */
        .ion-ios-arrow-thin-right:before{display:inline-block;font-family:"Ionicons";speak:none;font-style:normal;font-weight:normal;font-variant:normal;text-transform:none;text-rendering:auto;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
        .ion-ios-arrow-thin-right:before{content:"\f3d6";}
        /*! CSS Used from: https://cryptoassest.com/css/style1.css */
        h1,h4,h6{color:#5957cd;}
        p{color:#7a7a7a;margin-bottom:30px;}
        a{color:#5957cd;text-decoration:none;-webkit-transition:all 0.5s ease;transition:all .5s ease;}
        a:hover{color:#ff69c9;text-decoration:none;transition:all .5s ease;}
        a:focus{outline:none;text-decoration:none;}
        img{max-width:100%;}
        ul,li{margin:0;padding:0;}
        ::-webkit-input-placeholder{color:#7a7a7a;font-weight:400;font-family:'Poppins', sans-serif;}
        :-moz-placeholder{color:#7a7a7a;font-weight:400;font-family:'Poppins', sans-serif;}
        ::-moz-placeholder{color:#7a7a7a;font-weight:400;font-family:'Poppins', sans-serif;}
        :-ms-input-placeholder{color:#7a7a7a;font-weight:400;font-family:'Poppins', sans-serif;}
        section{padding:100px 0;position:relative;}
        section.small_pt{padding-top:50px;}
        section.small_pb{padding-bottom:50px;}
        .title_default_light h4{font-size:26px;font-weight:bold;margin-bottom:30px;text-transform:capitalize;}
        .title_default_light h4,.title_default_light p{color:#fff;}
        .title_border h4{padding-bottom:15px;position:relative;}
        .title_border h4::before{background-color:#5957cd;bottom:0;content:"";height:2px;left:0;position:absolute;right:0;width:80px;}
        .title_border.text-center h4::before{margin:0 auto;}
        .title_default_light.title_border h4::before{background-color:#fff;}
        .bg_light_dark{background-color:#121833;}
        .container{position:relative;z-index:5;}
        .btn{border:0 none;border-radius:5px;font-size:16px;font-weight:500;height:54px;line-height:54px;padding:0 25px;position:relative;text-transform:uppercase;vertical-align:middle;}
        .btn.btn-radius{border-radius:40px;}
        .btn:active:focus,.btn:active:hover,.btn:active,.btn:focus{background-image:-webkit-linear-gradient(left, #ff67cb 0%,#ffcc67 51%,#ff67cb);background-image:linear-gradient(to right, #ff67cb 0%,#ffcc67 51%,#ff67cb);box-shadow:none;outline:none;}
        .btn-default{background-size:200% auto;background-image:-webkit-linear-gradient(left, #ff67cb 0%,#ffcc67 51%,#ff67cb);background-image:linear-gradient(to right, #ff67cb 0%,#ffcc67 51%,#ff67cb);border:0;color:#fff;outline:none;text-transform:uppercase;z-index:2;transition:all 0.5s ease 0s;}
        .btn-default:hover{background-position:right center;}
        .btn-default:hover{color:#fff;}
        .btn-default:active:focus,.btn-default:active:hover,.btn-default:active,.btn-default:focus{background-image:-webkit-linear-gradient(left, #ffcc67 0%,#ff67cb 51%,#ffcc67);background-image:linear-gradient(to right, #ffcc67 0%,#ff67cb 51%,#ffcc67);box-shadow:none;color:#fff;outline:none;}
        .btn i{font-size:30px;line-height:24px;margin-left:5px;padding-top:4px;vertical-align:middle;}
        .banner_text h1{color:#ffffff;font-weight:bold;margin-bottom:25px;}
        .box_wrap{box-shadow:0 0 10px rgba(0, 0, 0, 0.1);margin-top:30px;padding:20px 15px;transition:all 0.5s ease 0s;}
        .box_wrap h4{color:#7a7a7a;font-size:22px;font-weight:600;margin-bottom:20px;margin-top:20px;}
        .box_wrap p{margin:0;}
        .v_dark .box_wrap h4,.v_dark .box_wrap p{color:#ffffff;}
        .v_dark .box_wrap{background-color:#121833;}
        .section_token{position:relative;}
        .section_breadcrumb{padding:200px 0 100px;}
        .breadcrumb li a,.breadcrumb li span{color:#ffffff;text-transform:capitalize;}
        .breadcrumb li a:hover{color:#ff69c9;}
        .breadcrumb li::before{color:#ffffff;content:"/";margin:5px;}
        .breadcrumb li:first-child:before{content:normal;}
        /*! CSS Used from: https://cryptoassest.com/css/theme.css */
        a:hover,.breadcrumb li a:hover{color:#ff69c9;}
        .btn-default{background-image:-webkit-linear-gradient(left, #ff67cb 0%,#ffcc67 51%,#ff67cb);background-image:linear-gradient(to right, #03A9F4 0%,#ffcc67 51%,#2196F3);}
        .btn-default:active:focus,.btn-default:active:hover,.btn-default:active,.btn-default:focus{background-image:-webkit-linear-gradient(left, #ffcc67 0%,#ff67cb 51%,#ffcc67);background-image:linear-gradient(to right, #ffcc67 0%,#ff67cb 51%,#ffcc67);}
        /*! CSS Used from: https://cryptoassest.com/css/rev/layers.css */
        *{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
        /*! CSS Used from: Embedded */
        .bg-fix{background:url(https://cryptoassest.com/images/new-site/banner1.jpg) no-repeat fixed 50% 0;background-size:cover;position:relative;transition:all 2s linear;}
        /*! CSS Used keyframes */
        @-webkit-keyframes fadeInUp{0%{opacity:0;-webkit-transform:translateY(20px);transform:translateY(20px);}100%{opacity:1;-webkit-transform:translateY(0);transform:translateY(0);}}
        @keyframes fadeInUp{0%{opacity:0;-webkit-transform:translateY(20px);-ms-transform:translateY(20px);transform:translateY(20px);}100%{opacity:1;-webkit-transform:translateY(0);-ms-transform:translateY(0);transform:translateY(0);}}
 .bg-fix {
     text-align: justify;
 }
   </style>
@endsection

@section('content')
    <div class="bg-fix">
        <!-- START SECTION BANNER -->
        <section class="section_breadcrumb dark_light_bg" data-z-index="1" data-parallax="scroll" data-image-src="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="banner_text text-center">
                            <h1 class="animation" data-animation="fadeInUp" data-animation-delay="1.1s">About Us</h1>
                            <ul class="breadcrumb bg-transparent justify-content-center animation m-0 p-0" data-animation="fadeInUp" data-animation-delay="1.3s">
                                <li><a href="{{ route('home') }}">Home</a> </li>
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
                            <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">About Binary 24 Trades™️</h4>
                            <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">Binary 24 Trades is one of the most transformative technologies since the era of cryptocurrency trading and investments. We stands firmly in support of financial freedom
                                and the liberty that Bitcoin and other Digital assets provides globally for anyone to voluntarily participate in a permissionless and decentralized network. </p>
                            <p class="animation" data-animation="fadeInUp" data-animation-delay="0.5s">which empowers
                                people to not be marginalized by governments and financial institutions. </p>
                            <p class="animation" data-animation="fadeInUp" data-animation-delay="0.6s">Binary 24 Trades is a leading provider
                                of Contracts for Difference (CFDs), delivering trading facilities on Binary Options, forex, commodities, cryptocurrencies,
                                ETFs, and indices, alongside innovative trading technology.</p>
                        </div>
                        <a href="/login" class="btn btn-default btn-radius video animation" data-animation="fadeInUp" data-animation-delay="1s">Let's Get Started <i class="ion-ios-arrow-thin-right"></i></a>
                    </div>
                    <div class=" col-md-12 col-sm-12 res_md_mt_30 res_sm_mt_20">

                        <div class="title_default_light title_border" style="margin-top: 40px">
                            <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.5s">Who We Are</h4>
                            <p class="animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                                The Binary 24 trading platform is offered by FOREX PLUS LTD, which holds a UK financial services license with Mauritius-based Incorporated. The company is Authorised and regulated by the Financial Conduct Authority to offer Contracts For Difference (CFD). Binary 24 Trades is a rapidly growing CFD provider and currently offers its portfolio of over 2000 instruments. Binary 24 Trades is a subsidiary of FOREX PLUS LTD
                            </p>
                            <p class="animation" data-animation="fadeInUp" data-animation-delay="0.7s">
                                Binary 24 Trades  is Authorized and regulated by the Mauritius Securities and Exchange Commission with Company registration number C092215 with registered office at Unit 2 Air Mauritius Bldg, Lebrun St, Port Louis,Mauritius
                            </p>

                            <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.8s">Client Money</h4>
                            <p class="animation" data-animation="fadeInUp" data-animation-delay="0.9s">
                                When you open an account, Binary 24 Trades Ltd we hold your funds on a segregated basis, in accordance with the Financial Conduct Authority's client money rules.
                                Client Money Protection </p>

                            <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.10s"> Highly Rated CFD Provider</h4>
                            <p class="animation" data-animation="fadeInUp" data-animation-delay="0.10s">
                                Binary 24 Trades Ltd is one of the highest rated CFD trading platform</p>
                        </div>





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
                                <h6 style="color: #fff" class="animation" data-animation="fadeInUp" data-animation-delay="0.4s"><a href="{{ route('register') }}" target="_blank">Register</a> with Binary 24 Trades and then <a href="/dashboard/deposits/create" target="_blank">Make A Deposit</a>  If you already have a trading account with Binary 24 Trades, please, <a href="/login" target="_blank">Login</a> and make a deposit..</h6>
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
                            <img src="/images/screen/trades.png">
                        </div>
                        <ul style="margin-top: 40px">
                            <li class="li-3">
                                <h6 style="color: #fff"><strong>Realtime Trading Result.</strong></h6>

                            </li>
                        </ul>
                        <div class="img-block">
                            <img src="/images/screen/trades1.png">
                        </div>


      <ul style="margin-top: 40px">
                            <li class="li-3">
                                <h6 style="color: #fff"><strong>Withdrawal.</strong></h6>

                            </li>
                        </ul>
                        <div class="img-block">
                            <img src="/images/screen/withdraw.png">
                        </div>

                    </div>

                </div>

            </div>
        </section>

        <br/> <br/> <br/>



        <!-- END SECTION SERVICES -->


    </div>
@endsection
@section('contents')

    <!-- HEADER TITLE BREADCRUBS SECTION -->
    <div class="header-title-breadcrumb relative">
        <div class="header-title-breadcrumb-overlay text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-6 col-xs-6 text-left">
                        <h1>About us</h1>
                    </div>
                    <div class="col-md-5 col-sm-6 col-xs-6">
                        <ol class="breadcrumb text-right">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li class="active">About us</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Page content -->
    <div class="no-padding content-area no-sidebar" role="main">
        <div class="container-fluid">
            <div class="row entry-content">
                <!-- Section1 - Cryptic About Us -->
                <div class="clearfix"></div>
                <div class="cryptic_about_us padding_80 data_background text-center" data-background="assets/images/cryptic-about-us.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="title-subtile-holder wow fadeIn text_center">
                                    <h1 class="section-title dark_title">ABOUT BINARY 24 TRADE</h1>
                                </div>
                                <div class="spacer_50"></div>
                                <p class="text-center">
                                        <span>Binary 24 Trade is a company that successfully achieves its objectives and gives others the opportunity to prosper.
                                            <br />
                                        We are working in the investment market for several years and continue our progress</span>
                                </p>
                                <p class="text-center"><span>We offers our investors the unique opportunity to get passive income from investing to the most profitable
                                        directions of the present market.</span>
                                </p>
                                <div class="spacer_70"></div>

                            </div>
                            <div class="spacer_80"></div>
                            <div class="col-sm-12">
                                <div class="cryptic_separator cryptic_separator_light fadeIn" >
                                </div>
                            </div>
                            <div class="spacer_30"></div>
                            <div class="col-sm-4 cryptic_about_us_info first-item">
                                <img src="/assets/images/one.png" alt="one"/>
                                <h2>Passive earnings</h2>
                                <p class="text-left"><span>You do not need to have <br/>special knowledge and perform actions - <br>our team of professionals will do all the work.</span>
                                </p>
                            </div>
                            <div class="col-sm-4 cryptic_about_us_info">
                                <img src="/assets/images/two.png" alt="two"/>
                                <h2>Total Profit</h2>
                                <p class="text-left"><span>Investors, <br /> particularly novices, <br /> are often advised to adopt a particular</span></p>
                            </div>
                            <div class="col-sm-4 cryptic_about_us_info">
                                <img src="/assets/images/three.png" alt="three"/>
                                <h2>Reliability</h2>
                                <p class="text-left"><span>Binary 24 Trades has been working<br /> in the market for 5 years and it<br /> has a positive reputation.</span></p>
                            </div>

                            <div class="col-sm-4 cryptic_about_us_info">
                                <img src="/assets/images/four.png" alt="three"/>
                                <h2>High return</h2>
                                <p class="text-left"><span>We offer our investors<br /> a much higher return than the banking<br /> one and we provide reduced risks.</span></p>
                            </div>
                            <div class="col-sm-4 cryptic_about_us_info">
                                <img src="/assets/images/five.png" alt="three"/>
                                <h2>Stability</h2>
                                <p class="text-left"><span>The project guarantees <br /> the implementation of payments in <br /> accordance with the terms of the regulation.</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Section2 - Cryptic Transactions -->
                <div class="clearfix"></div>
                <div class="cryptic_transactions padding_80 data_background" data-background="/assets/images/counter.jpg">
                    <div class="container">
                        <div class="row">

                            <div class="title-subtile-holder wow fadeIn text_center">
                                <h1 class="section-title dark_title">How Binary 24 Trades works?</h1>
                            </div>

                                <div class="info-social">
                                    <div class="container-fluid">
                                        <div class="content-block">
                                            <p>An exceptional trader that integrates an automated copy trading platform with the opportunities in open markets will be assigned to your account on your first deposit.</p>

                                            <h3>Get a professional trader linked to your account for free</h3>
                                            <p>Professional trading service from Trade Assets designed for both beginners and pros.</p>
                                            <p>Beginners traders can really totally on our experts to the trading for them.
                                                Our Professionals allows you to copy their trades and share own skills and get additional income. Level up your income with Binary 24 Trades platform.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="people-in-tifia" >
                                    {{--            <img src="/images/pro.jpeg">--}}
                                    <div class="container-fluid">
                                        <h4>Share experience, chat with our professional traders around the world, trade and earn together!</h4>
                                        <p>Become more confident in making trading decisions and get the most out of your trading with Binary 24 Trades.</p>

                                        @guest()
                                            <div class="group-success">
                                                <div class="group">
                                                    <h3>Join Binary 24 Trades</h3>
                                                    <a class="btn-show-right" href="{{ route('login') }}" rel="nofollow" target="blank"><div class="circle"><span class="icon arrow"></span></div><p class="button-text">Login</p></a>                </div>
                                            </div>
                                            <div class="btn-block mob-only">
                                                <a class="btn btn-red" href="{{ route('register') }}" rel="nofollow" target="blank">Registration</a>
                                            </div>
                                        @else
                                            <div class="group-success">
                                                <div class="group">
                                                    <h3>Make a deposit today</h3>
                                                    <a class="btn-show-right" href="{{ route('backend.deposits.create') }}" rel="nofollow" target="blank"><div class="circle"><span class="icon arrow"></span></div><p class="button-text">Start Trading</p></a>                </div>
                                            </div>
                                            <div class="btn-block mob-only">
                                                <a class="btn btn-red" href="{{ route('backend.deposits.create') }}" rel="nofollow" target="blank">Start Trading</a>
                                            </div>

                                        @endguest

                                    </div>
                                </div>
                                <div style="background-color: black" class="trader-role">
                                    <div class="container-fluid">
                                        <div class="content-block">
                                            <h2>Try a trader's role</h2>
                                            <h4>Are you an experienced and successful trader? Your experience can yield you more money.<br>Trade with Binary 24 Trades and get additional income</h4>
                                        </div>
                                    </div>
                                    <div class="container-fluid">
                                        <ul class="social-trader-step">
                                            <li>Become a trader</li>
                                            <li><div class="arrow-right"></div></li>
                                            <li>Communicate and Trade</li>
                                            <li><div class="arrow-right"></div></li>
                                            <li>Get an additional income</li>
                                        </ul>
                                    </div>
                                    <div class="container-fluid">
                                        <div class="content-block">
                                            <p><strong>Traders</strong> make trades in their accounts or simply let our professionals do it for them. Besides their own trading profits, traders also receive a commission from their investors' accounts.</p>
                                        </div>
                                    </div>
                                    <div class="container-fluid">
                                        <div class="steps-ul">
                                            <ul>
                                                <li class="li-1">
                                                    <p><a href="{{ route('register') }}" target="_blank">Register</a> with Binary 24 Trades and then <a href="{{ route('backend.deposits.create') }}" target="_blank">Make A Deposit</a>  If you already have a trading account with Binary 24 Trades, please, <a href="{{ route('login') }}" target="_blank">Login</a> and make a deposit..</p>
                                                </li>
                                            </ul>
                                            <div class="img-block">
                                                <img src="/images/screen/dash.png">
                                            </div>
                                            <ul>
                                                <li class="li-2">
                                                    <p><strong>Multiple Payment System</strong></p>
                                                    <p>Easy deposit and withdrawal with our multiple paymment channels.</p>
                                                </li>
                                            </ul>
                                            <div class="img-block">
                                                <img src="/images/screen/1.png">
                                            </div>
                                            <ul>
                                                <li class="li-3">
                                                    <p><strong>Realtime Trading Result.</strong></p>

                                                </li>
                                            </ul>
                                            <div class="img-block">
                                                <img src="/images/screen/2.png">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="trader-role" style="background-color: black">

                                    <div class="container-fluid">
                                        <div class="steps-ul">

                                            @section('hide')
                                                <div class="copy-traders">
                                                    <h3>Free 1 for 1 Mentoring</h3>
                                                    <p>This copy type implies that the volume of a trade copied onto an investor’s account is equal to the volume of the respective trade in an trader’s account.</p>
                                                    <p>For example, if the trader has opened 5 lots in his/her account, a trade of 5 lots will be copied onto the investor’s account.</p>
                                                    <div class="copy-traders-graph">
                                                        <div class="block-copy">
                                                            <p class="min-text">Trader's account</p>
                                                            <div class="block">
                                                                <div class="avatar-block">
                                                                    <img src="https://tifia.com/images/new-site/social-trading/avatar-1.png">
                                                                </div>
                                                                <div class="info-block">
                                                                    <p>volume: 100%</p>
                                                                    <p><span>5</span> lots</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="block-arrow"></div>
                                                        <div class="block-copy">
                                                            <p class="min-text">Investor's Account</p>
                                                            <div class="block">
                                                                <div class="avatar-block">
                                                                    <img src="https://tifia.com/images/new-site/social-trading/avatar-2.png">
                                                                </div>
                                                                <div class="info-block">
                                                                    <p>volume: 100%</p>
                                                                    <p><span>5</span> lots</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="copy-traders">
                                                    <h3>Copying a fixed size of each trade</h3>
                                                    <p>This copy type implies that the volume of a trade copied onto the investor's account is always identical to the volume pre-set in copy settings.</p>
                                                    <p>For example, if the investor sets a "copy fixed size" of 2 lots and the trader opens 5 lots, 2 lots will be opened on the investor’s account.</p>
                                                    <div class="copy-traders-graph">
                                                        <div class="block-copy">
                                                            <p class="min-text">Trader's account</p>
                                                            <div class="block">
                                                                <div class="avatar-block">
                                                                    <img src="https://tifia.com/images/new-site/social-trading/avatar-1.png">
                                                                </div>
                                                                <div class="info-block">
                                                                    <p>volume: 100%</p>
                                                                    <p><span>5</span> lots</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="block-arrow"></div>
                                                        <div class="block-copy">
                                                            <p class="min-text">Investor's Account</p>
                                                            <div class="block">
                                                                <div class="avatar-block">
                                                                    <img src="https://tifia.com/images/new-site/social-trading/avatar-2.png">
                                                                </div>
                                                                <div class="info-block">
                                                                    <p>Fixed volume: 2 lots</p>
                                                                    <p><span>2</span> lots</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="copy-traders">
                                                    <h3>Copying a predefined % of each trade</h3>
                                                    <p>This copy type implies that the volume of a trade copied onto the investor's account is identical to a % of the volume of the respective trade on the trader’s account.</p>
                                                    <p>For example, if the investor sets 50% and the trader opens 5 lots, it will open 2.5 lots on the investor’s account. The investor can set from 1% to 10 000%.</p>
                                                    <div class="copy-traders-graph">
                                                        <div class="block-copy">
                                                            <p class="min-text">Trader's account</p>
                                                            <div class="block">
                                                                <div class="avatar-block">
                                                                    <img src="https://tifia.com/images/new-site/social-trading/avatar-1.png">
                                                                </div>
                                                                <div class="info-block">
                                                                    <p>volume: 100%</p>
                                                                    <p><span>5</span> lots</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="block-arrow"></div>
                                                        <div class="block-copy">
                                                            <p class="min-text">Investor's Account</p>
                                                            <div class="block">
                                                                <div class="avatar-block">
                                                                    <img src="https://tifia.com/images/new-site/social-trading/avatar-2.png">
                                                                </div>
                                                                <div class="info-block">
                                                                    <p>Copied volume coefficient: 50%</p>
                                                                    <p><span>2,5</span> lots</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="copy-traders">
                                                    <h3>Copying a fixed share of investor’s equity</h3>
                                                    <p>This copy type implies that the volume of a trade copied onto the investor's account is defined by the copy equity/trader’s equity ratio. The volume of the investor’s equity used for copying trades is defined in copy settings.</p>
                                                    <p>In case of using "All Equity" as copy equity, it shall be equal to the current amount of funds in the investor's account at the moment of copying the trade.</p>
                                                    <p><b>The volume of a trade to be copied onto the investor’s account is calculated in the following way:</b><br><i>Trade volume in the trader's account * copy equity / trader's equity = trade volume in the investor's account</i></p>
                                                    <p>For example, the equity on the trader's and investor’s account is $5000 and $10000 respectively</p>
                                                    <ul>
                                                        <li>If the investor sets copy equity at 2,500, trades will be copied onto his/her account with coefficient of 2,500/5,000 = 0.5 (50% of the volume of the trader’s trade).</li>
                                                        <li>If the investor sets copy equity at 6,000, trades will be copied onto his/her account with coefficient of 6,000/5,000 = 1.2 (120% of the volume of the trader’s trade).</li>
                                                        <li>If the investor uses all equity as copy equity, trades will be copied onto his/her account with coefficient of 10,000/5,000 = 2 (200% of the volume of the trader’s trade).</li>
                                                    </ul>
                                                    <div class="copy-traders-graph copy-traders-graph-more">
                                                        <div class="block-copy">
                                                            <p class="min-text">Trader's account</p>
                                                            <div class="block">
                                                                <div class="avatar-block">
                                                                    <img src="https://tifia.com/images/new-site/social-trading/avatar-1.png">
                                                                </div>
                                                                <div class="info-block">
                                                                    <p>volume: 100%</p>
                                                                    <p><span>5</span> lots</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="block-copy-many">
                                                            <div class="line">
                                                                <div class="block-arrow"></div>
                                                                <div class="block-copy">
                                                                    <p class="min-text">Investor's Account</p>
                                                                    <div class="block">
                                                                        <div class="avatar-block">
                                                                            <img src="https://tifia.com/images/new-site/social-trading/avatar-3.png">
                                                                        </div>
                                                                        <div class="info-block">
                                                                            <p>Total equity: 10 000 USD<br>Part of equity used: 2 500 USD</p>
                                                                            <p><span>2,5</span> lots</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="line">
                                                                <div class="block-arrow no-mob"></div>
                                                                <div class="block-copy">
                                                                    <p class="min-text">Investor's Account</p>
                                                                    <div class="block">
                                                                        <div class="avatar-block">
                                                                            <img src="https://tifia.com/images/new-site/social-trading/avatar-4.png">
                                                                        </div>
                                                                        <div class="info-block">
                                                                            <p>Total equity: 10 000 USD<br>Part of equity used: 6 000 USD</p>
                                                                            <p><span>6,25</span> lots</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="line-last">
                                                                <div class="block-arrow no-mob"></div>
                                                                <div class="block-copy">
                                                                    <p class="min-text">Investor's Account</p>
                                                                    <div class="block">
                                                                        <div class="avatar-block">
                                                                            <img src="https://tifia.com/images/new-site/social-trading/avatar-2.png">
                                                                        </div>
                                                                        <div class="info-block">
                                                                            <p>Total equity: 10 000 USD<br>Part of equity used: 10 000 USD</p>
                                                                            <p><span>10</span> lots</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endsection



                                            <ul>
                                                <li class="li-4">
                                                    <p>Chat with your account manager live and follow their instructions.</p>
                                                </li>
                                            </ul>
                                            <div class="img-block">
                                                <!--<img src="https://tifia.com/images/new-site/social-trading/screen5.png">-->
                                            </div>
                                            <ul>
                                                <li class="li-5">
                                                    <p>Learn, trade and copy successful trades.</p>
                                                </li>
                                            </ul>
                                            <div class="img-block">
                                                <!--<img src="https://tifia.com/images/new-site/social-trading/screen6.png">-->
                                            </div>
                                            <ul>
                                                <li class="li-6">
                                                    <p>Achieve your aims by copying experienced trades.</p>
                                                </li>
                                            </ul>
                                            <div class="img-block">
                                                <!--<img src="https://tifia.com/images/new-site/social-trading/screen7.png">-->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </div>
                    </div>
                </div>
                <!-- Section3 - Cryptic OUR TEAM -->
                <div class="clearfix"></div>

{{--                @section('hide')--}}
                <div class="cryptic_our_team padding_80 data_background" data-background="assets/images/bitcurrency-members.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="title-subtile-holder wow  ">
                                    <h1 class="section-title dark_title">OUR TEAM</h1>
                                    <div class="section-subtitle dark_subtitle">
                                        Our youth is only an indication of our drive. Here you have a team of experts, ready to offer consultancy when needed.
                                    </div>
                                </div>
                                <div class="spacer_80"></div>
                                <div class="row wow fadeIn">
                                    <div class="col-md-4 relative">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="members_img_holder">
                                                    <div class="memeber01-img-holder">
                                                        <img src="assets/images/bitcurrency_member1-1.jpg" alt="John Doe" />
                                                    </div>
                                                    <div class="member01-content">
                                                        <div class="member01-content-inside">
                                                            <h3 class="member01_name">John Doe</h3>
                                                            <h5 class="member01_position">Assistant Manager</h5>
                                                            <div class="content-div-content">
                                                                <p>Nemo enim ipsam voluptates consequr dolor amet quia aut fu magni dolor.</p>
                                                            </div>
                                                            <div class="member01_social">
                                                                <a target="_blank" href="https://www.facebook.com/modeltheme/" class="member01_profile-facebook">
                                                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                                                </a>
                                                                <a target="_blank" href="https://twitter.com/envato" class="member01_profile-twitter">
                                                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                                                </a>
                                                                <a target="_blank" href="https://www.linkedin.com/" class="member01_profile-linkedin">
                                                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                                                </a>
                                                                <a target="_blank" href="https://vimeo.com/" class="member01_vimeo_url">
                                                                    <i class="fa fa-vimeo" aria-hidden="true"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 relative">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="members_img_holder">
                                                    <div class="memeber01-img-holder"><img src="assets/images/bitcurrency_member2-1.jpg" alt="Robert Downey" /></div>
                                                    <div class="member01-content">
                                                        <div class="member01-content-inside">
                                                            <h3 class="member01_name">Robert Downey</h3>
                                                            <h5 class="member01_position">General Director</h5>
                                                            <div class="content-div-content"><p>Nemo enim ipsam voluptates consequr dolor amet quia aut fu magni dolor.</p></div>
                                                            <div class="member01_social"><a target="_blank" href="https://www.facebook.com/modeltheme/" class="member01_profile-facebook"> <i class="fa fa-facebook" aria-hidden="true"></i></a> <a target="_blank" href="https://twitter.com/envato" class="member01_profile-twitter"> <i class="fa fa-twitter" aria-hidden="true"></i></a> <a target="_blank" href="https://www.linkedin.com/" class="member01_profile-linkedin"> <i class="fa fa-linkedin" aria-hidden="true"></i> </a> <a target="_blank" href="https://vimeo.com/" class="member01_vimeo_url"> <i class="fa fa-vimeo" aria-hidden="true"></i> </a> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 relative">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="members_img_holder">
                                                    <div class="memeber01-img-holder"><img src="assets/images/bitcurrency_member3-1.jpg" alt="Thomas Moriz" /></div>
                                                    <div class="member01-content">
                                                        <div class="member01-content-inside">
                                                            <h3 class="member01_name">Thomas Moriz</h3>
                                                            <h5 class="member01_position">Regional Manager</h5>
                                                            <div class="content-div-content"><p>Nemo enim ipsam voluptates consequr dolor amet quia aut fu magni dolor.</p></div>
                                                            <div class="member01_social"><a target="_blank" href="https://www.facebook.com/modeltheme/" class="member01_profile-facebook"> <i class="fa fa-facebook" aria-hidden="true"></i></a> <a target="_blank" href="https://twitter.com/envato" class="member01_profile-twitter"> <i class="fa fa-twitter" aria-hidden="true"></i></a> <a target="_blank" href="https://www.linkedin.com/" class="member01_profile-linkedin"> <i class="fa fa-linkedin" aria-hidden="true"></i> </a> <a target="_blank" href="https://vimeo.com/" class="member01_vimeo_url"> <i class="fa fa-vimeo" aria-hidden="true"></i> </a> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Section4 - Cryptic Subscribe to our Newsletter -->
                <div class="clearfix"></div>


                <div class="cryptic_customer padding_80">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <h2 class="fadeIn no-margin">Subscribe to our Newsletter</h2>
                                <div class="fadeIn">
                                    <p class="text-left"><span>Sign up for our weekly industry updates, insider perspectives and<br />in-depth market analysis.</span></p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="fadeIn">
                                    <div class="spacer_20"></div>
                                    <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-335" method="post" data-id="335" data-name="newsletter">
                                        <div class="mc4wp-form-fields">
                                            <div class="newsletter">
                                                <input type="email" name="EMAIL" placeholder="Insert your email" required />
                                                <input type="submit" value="Submit" />
                                            </div>
                                            <label style="display: none !important;">Leave this field empty if you're human:
                                                <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off" />
                                            </label>
                                            <input type="hidden" name="_mc4wp_timestamp" value="1523438081" />
                                            <input type="hidden" name="_mc4wp_form_id" value="335" />
                                            <input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1" />
                                        </div>
                                        <div class="mc4wp-response"></div>
                                    </form>
                                    <!-- / MailChimp -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

{{--                @endsection--}}



            </div>
        </div>
    </div>

@endsection
