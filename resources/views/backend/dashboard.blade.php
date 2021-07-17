@extends('backend.layouts.backend')

@section('content')

    <div class="container-fluid">
        <!-- START: Breadcrumbs-->
        <div class="row">
            <div class="col-12  align-self-center">
                <div class="sub-header mt-3 py-3 px-3 align-self-center d-sm-flex w-100 rounded">
                    <div class="w-sm-100 mr-auto"><h4 class="mb-0">Dashboard</h4> <b class=" text-capitalize">Welcome {{ auth()->user()->name }}</b></div>

                    <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- END: Breadcrumbs-->



        <!-- START: Card Data-->
        <div class="row">
            <div class="col-12 col-sm-6 col-xl-3 mt-3">
                <div class="card">
                    <div class="card-body">
                        <img src="/dist/images/wallet.png" alt="account balance" class="float-right" />
                        <h6 class="card-title font-weight-bold">ACCOUNT BALANCE</h6>
{{--                        <h6 class="card-subtitle mb-2 text-muted">Today</h6>--}}
                        <h2>${{ Auth()->user()->total() }}</h2>
                        <span class="text-success"><i class="ion ion-android-arrow-dropup"></i> ${{ Auth()->user()->withdrawable }} Withdrawable</span> balance
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-3 mt-3">
                <div class="card">
                    <div class="card-body">
                        <img src="/dist/21/bonus1.png" alt="cart" class="float-right" />
                        <h6 class="card-title font-weight-bold">BONUS BALANCE</h6>
                        <h2>${{ Auth()->user()->bonus }}</h2>
                        <span class="text-success"><i class="ion ion-android-arrow-dropdown"></i> 100% Withdrawable</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-3 mt-3">
                <div class="card">
                    <div class="card-body">
                        <img src="/dist/images/money.png" alt="money" class="float-right" />
                        <h6 class="card-title font-weight-bold">ACCOUNT PLAN</h6>
                        <h2>{{ auth()->user()->plan }}</h2>
                        <span class="text-success"><i class="ion ion-android-arrow-dropup"></i> Current active</span> plan
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-3 mt-3">
                <div class="card">
                    <div class="card-body">
                        <img src="/dist/21/verified.png" alt="wallet" class="float-right" />
                        <h6 class="card-title font-weight-bold">ACCOUNT STATUS</h6>
                        @if (auth()->user()->is_active)
                            <h2 class="text-success">Verified </h2>
                            <span class="text-success"><i class="ion ion-android-arrow-dropdown"></i>Your account is verified and active</span>
                        @else
                            <h2 class="text-danger">Unverified </h2>
                            <span class="text-danger"><i class="ion ion-android-arrow-dropdown"></i>Unverified account has limited features</span>
                        @endif


                    </div>
                </div>
            </div>
            <div class="col-12  col-md-8 col-xl-8 mt-3">
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container" style="min-height: 620px">
                    <div id="tradingview_3c684"></div>
                    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/BTCUSD/?exchange=BITBAY" rel="noopener" target="_blank"><span class="blue-text">BTCUSD Chart</span></a> by TradingView</div>
                    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                    <script type="text/javascript">
                        new TradingView.widget(
                            {
                                "autosize" : true,
                                "symbol": "BITBAY:BTCUSD",
                                "interval": "1",
                                "timezone": "Etc/UTC",
                                "theme": "{{ $theme }}",
                                "style": "0",
                                "locale": "en",
                                "toolbar_bg": "#f1f3f6",
                                "enable_publishing": false,
                                "withdateranges": true,
                                "allow_symbol_change": true,
                                "watchlist": [
                                    "BITBAY:BTCUSD",
                                    "COINBASE:ETHUSD",
                                    "BINANCE:BNBUSD",
                                    "BITTREX:DOGEUSD",
                                    "BINANCE:TROYUSD",
                                    "KRAKEN:USDTUSD",
                                    "COINBASE:MATICUSD"
                                ],
                                "details": true,
                                "hotlist": true,
                                "container_id": "tradingview_3c684"
                            }
                        );
                    </script>
                </div>
                <!-- TradingView Widget END -->
            </div>
            <div class="col-12  col-md-4 mt-3">
                <div style="height:620px; background-color: #FFFFFF; overflow:hidden; box-sizing: border-box; border: 1px solid #56667F; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #56667F; padding: 0px; margin: 0px; width: 100%;"><div style="height:620px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=full_v2&theme={{ $theme }}&cnt=10&pref_coin_id=1505&graph=yes" width="100%" height="645px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div><div style="color: #FFFFFF; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"></div></div>





                @section('hide')
                    <div class="twitter-gradient p-5 text-center">
                        <div id="demo" class="carousel slide" data-ride="carousel">
                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <div class="carousel-item py-3 active">
                                    <i class="icon-social-twitter p-3 border-white border rounded-circle h1 mb-4 mx-auto d-table"></i>
                                    In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.
                                    <br/><small>24 January, 2018</small><br/><br/>
                                    <div class="love px-2 py-1 d-inline-block"><i class="ion ion-heart"></i> 200   <i class="ml-3 ion ion-chatboxes"></i> 192</div>
                                </div>
                                <div class="carousel-item py-3">
                                    <i class="icon-social-twitter p-3 border-white border rounded-circle h1 mb-4 mx-auto d-table"></i>
                                    In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.
                                    <br/><small>24 January, 2018</small><br/><br/>
                                    <div class="love px-2 py-1 d-inline-block"><i class="ion ion-heart"></i> 200   <i class="ml-3 ion ion-chatboxes"></i> 192</div>
                                </div>
                                <div class="carousel-item py-3">
                                    <i class="icon-social-twitter p-3 border-white border rounded-circle h1 mb-4 mx-auto d-table"></i>
                                    In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.
                                    <br/><small>24 January, 2018</small><br/><br/>
                                    <div class="love px-2 py-1 d-inline-block"><i class="ion ion-heart"></i> 200   <i class="ml-3 ion ion-chatboxes"></i> 192</div>
                                </div>

                            </div>
                            <!-- Indicators -->
                            <ul class="carousel-indicators position-relative mb-0">
                                <li data-target="#demo" data-slide-to="0" class="active"></li>
                                <li data-target="#demo" data-slide-to="1"></li>
                                <li data-target="#demo" data-slide-to="2"></li>
                            </ul>
                        </div>
                    </div>
                @endsection

            </div>

            <div class="col-12 col-md-7 col-xl-7 mt-3">
                <div class="card">
                    <div class="card-content">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title">Trade History</h4>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table mb-0 text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>@lang('Opened at')</th>
                                        <th>@lang('Crypto Currency')</th>
                                        <th>@lang('Closed at')</th>
                                        <th>@lang('Amount')</th>
                                        <th>@lang('Qty')</th>
                                        <th>@lang('Closed Value')</th>
                                        <th>@lang('Direction')</th>
                                        <th>@lang('P/L')</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($trades as $item)
                                        <tr>
                                            <td>{{  $item->new_date }}</td>
                                            <td>{{  optional($item->crypto)->symbol }}/USD</td>
                                            <td>{{  $item->in_time }}</td>
                                            <td data-label="@lang("Amount")">{{ $item->amount }}</td>
                                            <td data-label="@lang("coin")">{{  $item->coin_value }} {{  optional($item->crypto)->symbol }}</td>
                                            <td data-label="@lang("closed_value")">{{  $item->coin_closed_at }} {{  optional($item->crypto)->symbol }}</td>
                                            <td data-label="@lang("High/Low")">
                                                @if ($item->hilow === 1)
                                                    <span class="badge badge-success">@lang('BUY')</span>
                                                @else
                                                    <span class="badge badge-danger">@lang('SELL')</span>
                                                @endif
                                            </td>

                                            <td>{{ $item->pl }} USD</td>
                                            {{--                                        <td data-label="@lang("Date")">{{showDateTime($practice->created_at, 'd M, Y h:i:s')}}</td>--}}
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="100%"> @lang('No results found')!</td>
                                        </tr>
                                    @endforelse

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12  col-lg-5 mt-3">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title">Recent Activities</h4>

                    </div>
                    <div class="card-content">
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-12">
                                    <ul class="activities mt-4 mb-2">
                                        <li class="activity py-2 px-2 border-left">
                                            <label class="bg-primary"></label>
                                            <span>11:30 PM</span><br/>
                                            <p class="mt-3"> <b>Add New User</b><br/>Orci eget eros faucibus tincidunt. Sed fringilla mauris sit amet nibh. Donec sodales
                                                sagittis magna sed consequat leo eget bibendum sodales, augue.</p>
                                        </li>
                                        <li class="activity py-2 px-2 border-left">
                                            <label class="bg-success"></label>
                                            <span>12:15 PM</span><br/>
                                            <p class="mt-3"> <b>Write Comment</b><br/>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
                                        </li>
                                        <li class="activity py-2 px-2 border-left">
                                            <label class="bg-danger"></label>
                                            <span>13:30 PM</span><br/>
                                            <p class="mt-3"> <b>Add New User</b><br/>Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Sed fringilla
                                                mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc.</p>
                                        </li>
                                        <li class="activity py-2 px-2 border-left">
                                            <label class="bg-warning"></label>
                                            <span>14:30 PM</span><br/>
                                            <p class="mt-3"> <b>Write Comment</b><br/>Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                                                nascetur ridiculus mus. Nulla consequat massa quis enim.</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
        <!-- END: Card DATA-->
    </div>
@endsection

@section('styles')
{{--    <link rel="stylesheet" href="/back/vendor/waves/waves.min.css">--}}
@endsection

@section('js')



    <script src="/back/vendor/amchart/amcharts.js"></script>
    <script src="/back/vendor/amchart/serial.js"></script>
    <script src="/back/vendor/amchart/dataloader.min.js"></script>
    <script src="/back/vendor/amchart/dark.js"></script>
    <script src="/back/js/plugins/amchart-init.js"></script>

{{--    <script src="/back/vendor/apexchart/apexchart-init.js"></script>--}}


    <script src="/back/js/dashboard.js"></script>
    <script src="https://s3.tradingview.com/tv.js"></script>
    <script>
        new TradingView.widget(
            {
                "width": "100%",
                "height": 460,
                "symbol": "BITSTAMP:BTCUSD",
                "interval": "D",
                "timezone": "Etc/UTC",
                "theme": "Dark",
                "style": "1",
                "locale": "en",
                "toolbar_bg": "#f1f3f6",
                "enable_publishing": false,
                "withdateranges": true,
                "hide_side_toolbar": false,
                "allow_symbol_change": true,
                "show_popup_button": true,
                "popup_width": "1000",
                "popup_height": "650",
                "container_id": "tradingview_e8053"
            }

        );

    </script>

    <script>
        jQuery(document).ready( function() {
            // $("#modal").iziModal();
            $("#modal").iziModal({
                title: '',
                subtitle: '',
                headerColor: '#000000',
                width: 500,
                top: null,
                bottom: null,
                // borderBottom: true,
                padding: 0,
                radius: 0,
                iframeURL: null,
                focusInput: true,
                group: '',
                loop: false,
                arrowKeys: true,
                navigateCaption: true,
                navigateArrows: true, // Boolean, 'closeToModal', 'closeScreenEdge'
                history: false,
                restoreDefaultContent: false,
                autoOpen: 0, // Boolean, Number
                fullscreen: false,
                openFullscreen: false,
                closeOnEscape: true,
                closeButton: true,
                appendTo: 'body', // or false
                appendToOverlay: 'body', // or false
                overlay: true,
                overlayClose: true,
                overlayColor: 'rgba(0, 0, 0, 0.4)',
                pauseOnHover: false,
                timeoutProgressbarColor: 'rgba(255,255,255,0.5)',
                transitionIn: 'comingIn',
                transitionOut: 'comingOut',
                transitionInOverlay: 'fadeIn',
                transitionOutOverlay: 'fadeOut',
                onFullscreen: function(){},
                onResize: function(){},
                onOpening: function(){},
                onOpened: function(){},
                onClosing: function(){},
                onClosed: function(){},
                afterRender: function(){}
            });

        })
    </script>
@endsection
