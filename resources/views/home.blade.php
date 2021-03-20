@extends('layouts.master')

@section('content')
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


            <section class="section trading-account">
                <div class="container-fluid">
                    <h2>How It Works</h2>
                    <p>Get instant results by following these 3 simple steps.</p>
                    <h3 class="only-mob">Open a trading account</h3>

                    <div class="trading-account-choose tab-content">

                        <div class="tab-pane fadeIn animated active" id="classic">
                            <div class="account-type">
                                <h3 class="feathe"><span>SIGN UP</span></h3>
                                <p></p>
                            </div>

{{--                            <h3 class="text-center">Seamless</h3>--}}
                            {{--                                </ul>--}}

                            <div class="account-info-line">
                                Register using our registration link. Enter valid details in the form fields and click the "Submit" button.
                            </div>
                            <div class="btn-acc">
                                <a class="btn btn-grey" href="{{ route('register') }}">View details</a>
                                <a class="btn btn-grey" target="_blank" href="{{ route('register') }}">Open trading account</a>
                            </div>
                        </div>

                        <div class="tab-pane fadeIn animated active" id="classic">
                            <div class="account-type">
                                <h3 class="feathe"><span>FUND ACCOUNT</span></h3>
                                <p></p>
                            </div>

{{--                            <h3 class="text-center">Automatic--}}
{{--                            </h3>--}}
                            {{--                                </ul>--}}

                            <div class="account-info-line">
                                After verifying your account information,  deposit funds into your account. This will enable your account for trading
                            </div>
                            <div class="btn-acc">
                                <a class="btn btn-grey" href="{{ route('deposit.create') }}">Make Deposit</a>
                                <a class="btn btn-grey" target="_blank" href="{{ route('deposit.create') }}">Make Deposit</a>
                            </div>
                        </div>

                        <div class="tab-pane fadeIn animated active" id="classic">
                            <div class="account-type">
                                <h3 class="feathe"><span>                                    START EARNING
</span></h3>
                                <p></p>
                            </div>

{{--                            <h3 class="text-center">Fast and Easy to Earn</h3>--}}
                            {{--                                </ul>--}}

                            <div class="account-info-line">
                                Its  Fast and Easy to Earn more investing in a suitable plan on our platform,
                                you can also earn extra cash through referrals.
                            </div>
                            <div class="btn-acc">
                                <a class="btn btn-grey" href="{{ route('backend.dashboard') }}">Dashboard</a>
                                <a class="btn btn-grey" target="_blank" href="{{ route('backend.dashboard') }}">Dashboard</a>
                            </div>
                        </div>

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
                        @foreach($all_plans as $item)
                            <div class="tab-pane fadeIn animated active" id="classic">
                                <div class="account-type">
                                    <h3 class="feather"><span>{{ $item['name'] }}</span></h3>
                                    <p></p>
                                </div>
                                <ul class="account-info">
                                    <li>
                                        <p>Minimum Deposit</p>
                                        <span>${{ $item['min'] }}</span>
                                    </li>
                                    <li>
                                        <p>Maximum Deposit</p>
                                        <span>${{ $item['max'] }}</span>
                                    </li>
                                </ul>
                                <ul class="account-info-more">
                                    <li>
                                        <p>Interval</p>
                                        <span>{{ $item['days'] }} Days</span>
                                    </li>
                                    <li>
                                        <p>Account base currency</p>
                                        <span>USD,GPD, EUR</span>
                                    </li>
                                </ul>
                                <div class="account-info-line">
                                    <p>Trading instruments</p>
                                    <span>28 <i>Crypto</i>, {{ $item['c'] }} <i>Metals</i></span>
                                </div>
                                <div class="btn-acc">
                                    <a class="btn btn-grey" href="{{ route('backend.dashboard') }}">View details</a>
                                    <a class="btn btn-grey" target="_blank" href="{{ route('backend.dashboard') }}">Dashboard</a>
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
                        <p>Crypto Assets offers crypto bonuses for deposits and contests for traders and partners.
                            We want to make your Crypto Assets trading experience incredibly interesting.</p>
                        <div class="btn-block">
                            <a class="btn btn-red" href="{{ route('login') }}">Learn more</a>
                        </div>

                    </div>
                </div>
            </section>

            <section class="promotions-block-main">

                <div  style="margin-top: 20px">
                    <div style="height:433px; background-color: #1D2330; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38; padding: 0px; margin: 0px; width: 100%;"><div style="height:413px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=full_v2&theme=dark&cnt=6&pref_coin_id=1505&graph=yes" width="100%" height="409px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div><div style="color: #626B7F; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #626B7F; text-decoration:none; font-size:11px">Cryptocurrency Prices</a>&nbsp;by Coinlib</div></div>
                </div>
            </section>


            {{--//footer--}}
            @include('layouts.partials.footer')
        </div>
    </div>

@endsection
