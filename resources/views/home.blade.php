
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
    <link rel="icon" type="image/png" href="images/new-site/logo3.png"/>
    <meta property="og:description" content="Official website of Crypto Assets Crypto broker. Earn online by trading on Crypto and financial markets. With Crypto Assets broker, you can trade in сurrency, oil, precious metals and stock indices. Reliable ECN Crypto broker with high-quality service.">

    <link href="/css/app6597.css" rel="stylesheet">

    <script src="/js/jquery.min.js"></script>

    <style>
        .translated-ltr{margin-top:-30px;}
        .translated-ltr{margin-top:-30px;}
        .goog-te-banner-frame {display: none;margin-top:-20px;}

        .goog-logo-link {
            display:none !important;
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
                            <a style="margin-top: -10px; color: white;  line-height: 1px" href="{{ url('/') }}"><img alt="Crypto Assest" style="max-height: 70px; max-width: 80px;" height="70"  src="/img/core-img/logo.png"><br/>
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
                                        <a style="cursor: pointer" href="#{{ route('about') }}" rel="nofollow">About us</a>
                                        <div class="bg-menu"></div>
                                    </li>
                                    <li>
                                        <a style="cursor: pointer" href="#{{ route('contact') }}" rel="nofollow">Contact us</a>
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
        <div class="bg-fix-new" style="background-color: rgba(11, 35, 58, 0.44)">

            <style>
                td a{
                    display: none;
                    pointer-events: none;
                }

                .social-table table tr td .view{
                    display: none;
                }
            </style>
            <section class="section about-tifia">
                <div class="container-fluid">
                    <h1>How about earning more by Crypto trading?</h1>
                    <p>Welcome to Crypto Assets! Smart Crypto trading on perfect conditions</p>
                    <div id="carousel-main" class="carousel slide conditions-block">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <p>300$</p>
                                <p>Min. depo</p>
                            </div>
                            <div class="carousel-item">
                                <p>0.0</p>
                                <p>Spreads from</p>
                            </div>
                            <div class="carousel-item">
                                <p>0.1s</p>
                                <p>Execution from</p>
                            </div>
                            <div class="carousel-item">
                                <p>120+</p>
                                <p>Trading instruments</p>
                            </div>
                            <div class="carousel-item">
                                <p>1:1000</p>
                                <p>Max Leverage</p>
                            </div>
                        </div>
                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#carousel-main" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-main" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                    <div class="group-success">
                        <div class="group">
                            <p>Crypto Assets trading account</p>
                            <a class="btn-show-right" href="{{ route('login') }}" rel="nofollow">
                                <div class="circle"><span class="icon arrow"></span></div>
                                <p class="button-text">Open</p>
                            </a>
                        </div>
                    </div>
                    <a class="scroll-icon"></a>
                </div>
            </section>
            <section class="section advantages-tifia">
                <div class="container-fluid">
                    <h2>Online trading in Crypto market on best conditions</h2>
                    <p>Crypto Assets online Crypto broker provides trading services on financial markets: Crypto, commodity markets, and stock indices.</p>
                    <h3 class="only-mob">Why Crypto Assets?</h3>
                    <div class="advantages-block">
                        <ul>
                            <li>
                                <div class="trans-block">
                                    <div class="ic1 ic"></div>
                                </div>
                                <p>Segregated accounts</p>
                            </li>
                            <li>
                                <div class="trans-block">
                                    <div class="ic2 ic"></div>
                                </div>
                                <p>Negative Balance Protection</p>
                            </li>
                            <li>
                                <div class="trans-block">
                                    <div class="ic3 ic"></div>
                                </div>
                                <p>Rapid execution with no re-quotes</p>
                            </li>
                            <li>
                                <div class="trans-block">
                                    <div class="ic4 ic"></div>
                                </div>
                                <p>Full range of analytical materials</p>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <div class="trans-block">
                                    <div class="ic5 ic"></div>
                                </div>
                                <p>All strategies welcomed</p>
                            </li>
                            <li>
                                <div class="trans-block">
                                    <div class="ic6 ic"></div>
                                </div>
                                <p>Fast withdrawal</p>
                            </li>
                            <li>
                                <div class="trans-block">
                                    <div class="ic8 ic"></div>
                                </div>
                                <p>Friendly customer support 24/5</p>
                            </li>
                        </ul>

                    </div>
                </div>
            </section>
            <section class="section social-trading" id="five">
                <div class="container-fluid">
                    <div class="social-info">
                        <img class="lazy" alt="Social Trading" data-src="/images/new-site/social-logo.svg">
                        <h4>Social Trading</h4>
                        <h2>Crypto Social Trading - Crypto copy trading system</h2>
                        <h3 class="only-mob">Synchronize your trades with successful providers' ones!</h3>
                        <p>Be among the lucky ones!</p>
                    </div>
                    <div class="social-block">
                        <div class="calculator-data">
                            <p>I want to invest</p>
                            <div class="calc-date">
                                <i class="minus">
                                    <b></b>
                                </i>
                                <span class="count">500 USD</span>
                                <i class="plus">
                                    <b></b>
                                </i>
                            </div>
                            <p>Period</p>
                            <ul class="period-date">
                                <li>1</li>
                                <li class="active">3</li>
                                <li>6</li>
                                <li>12</li>
                                <li>month</li>
                            </ul>
                        </div>





                        <div class="social-table loader-wrapper">
                            <h3>Top 5 Traders</h3>
                            <table border="0" cellspacing="0" cellpadding="0">
                                <thead>
                                <tr>
                                    <th width="30%">Monitoring of traders</th>
                                    <th width="18%">Lifespan</th>
                                    <th>Profitability</th>
                                    <th>Equity</th>
{{--                                    <th width="20%"></th>--}}
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $colors = ['E91E63', '9C27B0', '673AB7', '3F51B5', '0D47A1', '01579B', '00BCD4', '009688', '33691E', '1B5E20', '33691E', '827717', 'E65100',  'E65100', '3E2723', 'F44336', '212121'];
    $i = 0;
                                @endphp
                                @foreach($traders as $item)
                                   @php $i++;
    $background = $colors[$i%count($colors)];
 @endphp
                                <tr class="red active" data-login="6182791" data-profit="996.40" data-period="87" data-commission="10">
                                    <td>
                                        <div class="login-img">
                                            <img class="lazy loaded img-rounded" data-src="https://ui-avatars.com/api/?size=256&background{{$background}}&color=fff&name={{urlencode($item['name'])}}" data-ll-status="loaded" src="https://ui-avatars.com/api/?size=256&background{{$background}}&color=fff&name={{urlencode($item['name'])}}">
                                        </div>
                                        <div class="login-info">
                                            <span>{{ $item['name'] }}</span><br>
                                            {{ $item['id'] }}
                                        </div>
                                    </td>
                                    <td>{{ $item['days'] }}</td>
                                    <td>{{ $item['pro'] }}</td>
                                    <td>{{ $item['equity'] }}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div id="carousel-social" class="carousel slide only-mob carousel-social pointer-event" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active" data-login="6182791" data-profit="996.40" data-period="87" data-commission="10">
                                        <div class="container">
                                            <div class="login-img">
                                                <img class="lazy loaded" data-src="/images/new-site/default-avatar.png" data-ll-status="loaded" src="/images/new-site/default-avatar.png">
                                            </div>
                                            <div class="login-info">
                                                <span>@Saudagarfx1</span><br>
                                                STR-6182791
                                            </div>
                                            <div class="investors-info">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <p>Profitability</p>
                                                        <p><span>996.40 % / 408 USD</span></p>
                                                    </div>
                                                    <div class="col-3">
                                                        <p>Equity</p>
                                                        <p><span>136.29 USD</span></p>
                                                    </div>
                                                    <div class="col-3">
                                                        <p>Lifespan</p>
                                                        <p><span>87 days</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="carousel-item" data-login="6104288" data-profit="806.65" data-period="469" data-commission="15">
                                        <div class="container">
                                            <div class="login-img">
                                                <img class="lazy loaded" data-src="https://social.tifia.com/uploads/avatars/004/144/9dc078ea88021779f6dcb2638bc3756f.png" data-ll-status="loaded" src="https://social.tifia.com/uploads/avatars/004/144/9dc078ea88021779f6dcb2638bc3756f.png">
                                            </div>
                                            <div class="login-info">
                                                <span>@CareTaker</span><br>
                                                STR-6104288
                                            </div>
                                            <div class="investors-info">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <p>Profitability</p>
                                                        <p><span>806.65 % / 5436 USD</span></p>
                                                    </div>
                                                    <div class="col-3">
                                                        <p>Equity</p>
                                                        <p><span>3535.42 USD</span></p>
                                                    </div>
                                                    <div class="col-3">
                                                        <p>Lifespan</p>
                                                        <p><span>469 days</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="carousel-item" data-login="6202569" data-profit="724.80" data-period="28" data-commission="30">
                                        <div class="container">
                                            <div class="login-img">
                                                <img class="lazy loaded" data-src="https://social.tifia.com/uploads/avatars/007/614/91c75ae026addd206eddc262372a19c6.jpg" data-ll-status="loaded" src="https://social.tifia.com/uploads/avatars/007/614/91c75ae026addd206eddc262372a19c6.jpg">
                                            </div>
                                            <div class="login-info">
                                                <span>@GoTrading</span><br>
                                                STR-6202569
                                            </div>
                                            <div class="investors-info">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <p>Profitability</p>
                                                        <p><span>724.80 % / 382 USD</span></p>
                                                    </div>
                                                    <div class="col-3">
                                                        <p>Equity</p>
                                                        <p><span>216.32 USD</span></p>
                                                    </div>
                                                    <div class="col-3">
                                                        <p>Lifespan</p>
                                                        <p><span>28 days</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="carousel-item" data-login="6211125" data-profit="690.18" data-period="6" data-commission="30">
                                        <div class="container">
                                            <div class="login-img">
                                                <img class="lazy loaded" data-src="https://social.tifia.com/uploads/avatars/005/828/03a36a9f2d7126afc3bd03ca215c58fd.jpg" data-ll-status="loaded" src="https://social.tifia.com/uploads/avatars/005/828/03a36a9f2d7126afc3bd03ca215c58fd.jpg">
                                            </div>
                                            <div class="login-info">
                                                <span>@matnije</span><br>
                                                STR-6211125
                                            </div>
                                            <div class="investors-info">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <p>Profitability</p>
                                                        <p><span>690.18 % / 728 USD</span></p>
                                                    </div>
                                                    <div class="col-3">
                                                        <p>Equity</p>
                                                        <p><span>200.00 USD</span></p>
                                                    </div>
                                                    <div class="col-3">
                                                        <p>Lifespan</p>
                                                        <p><span>6 days</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="carousel-item" data-login="6182766" data-profit="672.79" data-period="101" data-commission="10">
                                        <div class="container">
                                            <div class="login-img">
                                                <img class="lazy loaded" data-src="https://social.tifia.com/uploads/avatars/005/176/dea9c000aac675859d82a1655bcceb8d.jpeg" data-ll-status="loaded" src="https://social.tifia.com/uploads/avatars/005/176/dea9c000aac675859d82a1655bcceb8d.jpeg">
                                            </div>
                                            <div class="login-info">
                                                <span>@AisyahFX</span><br>
                                                CLS-6182766
                                            </div>
                                            <div class="investors-info">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <p>Profitability</p>
                                                        <p><span>672.79 % / 244 USD</span></p>
                                                    </div>
                                                    <div class="col-3">
                                                        <p>Equity</p>
                                                        <p><span>99.95 USD</span></p>
                                                    </div>
                                                    <div class="col-3">
                                                        <p>Lifespan</p>
                                                        <p><span>101 days</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div></div>
                                <!-- Left and right controls -->
                                <a class="carousel-control-prev" href="#carousel-social" data-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </a>
                                <a class="carousel-control-next" href="#carousel-social" data-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </a>
                            </div>
                        </div>


                        <div class="calculator-result">
                            <div class="line">
                                <h4>Your profit</h4>
                                <span class="profit"></span>
                            </div>
                            <div class="line">
                                <h4>Profitability</h4>
                                <span class="profit-res"></span>
                            </div>
                        </div>
                    </div>
                    <div class="social-btn">
                        <a  class="btn btn-red" href="{{ route('login') }}" rel="nofollow">Join Crypto Assets Trading</a>
                    </div>
                </div>
            </section>
            <section class="section trading-account">
                <div class="container-fluid">
                    <h2>Choose your way to trade with Crypto Assets</h2>
                    <p>Open a trading account with ECN broker and earn with the lowest spreads and highest execution speed!</p>
                    <h3 class="only-mob">Open a trading account</h3>
                    <ul class="nav variant-menu trading-account-menu" role="tablist">
                        <li><a href="#start" aria-controls="start" role="tab" data-toggle="tab">Start (Micro)</a></li>
                        <li><a href="#classic" aria-controls="classic" role="tab" data-toggle="tab" class="active">ECN Classic</a></li>
                        <li><a href="#pro" aria-controls="pro" role="tab" data-toggle="tab">ECN Pro</a></li>
                    </ul>
                    <div class="trading-account-choose tab-content">
                        @foreach(\App\Models\Package::all() as $item)
                        <div class="tab-pane fadeIn animated active" id="classic">
                            <div class="account-type">
                                <h3 class="feather"><span>{{ $item->name }}</span></h3>
                                <p></p>
                            </div>
                            <ul class="account-info">
                                <li>
                                    <p>Minimum Deposit</p>
                                    <span>${{ $item->minimum_purchase }}</span>
                                </li>
                                <li>
                                    <p>Maximum Deposit</p>
                                    <span>${{ $item->maximum_purchase }}</span>
                                </li>
                            </ul>
                            <ul class="account-info-more">
                                <li>
                                    <p>Interval</p>
                                    <span>{{ $item->period }} Days</span>
                                </li>
                                <li>
                                    <p>Account base currency</p>
                                    <span>USD,GPD, EUR</span>
                                </li>
                            </ul>
                            <div class="account-info-line">
                                <p>Trading instruments</p>
                                <span>28 <i>Crypto</i>, {{ $item->id }} <i>Metals</i></span>
                            </div>
                            <div class="btn-acc">
                                <a class="btn btn-grey" href="{{ route('deposit.purchase', $item->id) }}">View details</a>
                                <a class="btn btn-grey" target="_blank" href="{{ route('deposit.purchase', $item->id) }}">Open trading account</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
            <section class="promotions-block-main">
                <div class="container-fluid">
                    <div class="container-block">
                        <h2>Crypto contests and deposit bonuses from Crypto Assets</h2>
                        <p>Crypto Assets provides Crypto bonuses on deposits and contests for traders and partners. We would like to make your work on Crypto incredibly interesting.</p>
                        <div class="btn-block">
                            <a class="btn btn-red" href="{{ route('login') }}">Learn more</a>
                        </div>

                    </div>
                </div>
            </section>

            <footer class="">
                <div class="container-fluid">
                    <ul class="payments">
                        <li><img alt="Mastercard logo" data-src="/images/new-site/footer-payments/mastercard.svg" class="lazy"></li>
                        <li><img alt="Visa logo" data-src="/images/new-site/footer-payments/visa.svg" class="lazy"></li>
                        <li><img alt="Bank Wire logo" data-src="/images/new-site/footer-payments/bankwire.svg" class="lazy"></li>
                        <li><img alt="Skrill logo" data-src="/images/new-site/footer-payments/skrill.svg" class="lazy"></li>
                        <li><img alt="Perfect Money logo" data-src="/images/new-site/footer-payments/pm.svg" class="lazy"></li>
                        <li><img alt="Neteller logo" data-src="/images/new-site/footer-payments/neteller.svg" class="lazy"></li>

                        <li><img alt="Fasapay logo" data-src="/images/new-site/footer-payments/fasapay.svg" class="lazy"></li>
                        <li><img alt="Bitcoin logo" data-src="/images/new-site/footer-payments/bitcoin.svg" class="lazy"></li>
                    </ul>
                </div>
                <div class="container-content">
                    <div class="container">
                        <ul class="footer-menu">
                            <li class="col-md-6">
                                <ul>
                                    <li>About us</li>
                                    <li><a href="{{ route('about') }}">Why us?</a></li>
                                </ul>
                            </li>
                            <li class="col-md-6">
                                <ul>
                                    <li>Contact us</li>
                                    <li><a href="#">Chat Us</a></li>
                                    <li><a href="{{ route('contact') }}">Contacts</a></li>
                                </ul>
                            </li>






                        </ul>
                    </div>
                    <ul class="copyright-text">
                        <li>
                            <div class="logo-footer">
                                <p>
                                    <a style="margin-top: -30px; color: white; line-height: 1px; font-size: 16px" href="{{ url('/') }}">
                                        <img  alt="Crypto Assets Markets Limited" height="70" src="/img/core-img/logo.png">
                                        <br>Crypto Assets</a>
                                </p>
                            </div>
                            <p>Copyright © 2011 - 2020<br>
                                Crypto Assets
                                <br>
                                Email: <a href="mailto:support@cryptoassest.com">support@cryptoassest.com/</a>
                            </p>
                        </li>
                        <li class="docs-main">
                            <ul>
                                <li><a href="#">Terms of use</a></li>
                                <li><a href="#">Privacy policy</a></li>>
                                <li><a href="#">Risk Disclosure</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="switch-footer">
                        <a href="#" class="rs-link" data-link-desktop="Switch to the desktop version"
                           data-link-responsive="Switch to the mobile version"></a>
                    </div>
                </div>
            </footer>
        </div>
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
<script src="/js/bodyScrollLock.min.js"></script></body>
</html>
