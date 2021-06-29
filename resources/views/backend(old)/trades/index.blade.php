@extends('backend.layouts.master')

@section('content')

    <div class="content-body">
        <div class="container-fluid">
            <div class="row">

                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                    <div class="tradingview-widget-container__widget"></div>
                    <div class="tradingview-widget-copyright">
                    </div>
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                        {
                            "symbols": [
                            {
                                "proName": "FOREXCOM:SPXUSD",
                                "title": "S&P 500"
                            },
                            {
                                "proName": "FOREXCOM:NSXUSD",
                                "title": "Nasdaq 100"
                            },
                            {
                                "proName": "FX_IDC:EURUSD",
                                "title": "EUR/USD"
                            },
                            {
                                "proName": "BITSTAMP:BTCUSD",
                                "title": "BTC/USD"
                            },
                            {
                                "proName": "BITSTAMP:ETHUSD",
                                "title": "ETH/USD"
                            }
                        ],
                            "showSymbolLogo": false,
                            "colorTheme": "dark",
                            "isTransparent": true,
                            "displayMode": "adaptive",
                            "locale": "en"
                        }
                    </script>
                </div>
                <!-- TradingView Widget END -->

                @include('partials.menu')

            </div>

            <div class="row">






                <div class="col-xl-12 col-lg-12 col-sm-12">

                    <div style="margin-top: 10px" class="card">
                        <div class="card-header">
                            <h4 class="card-title">Your Trade History</h4>
                        </div>
                        <div class="card-body">
                            <div class="transaction-table">
                                <div class="table-responsive">
                                    @if (count($trades) > 0)
                                        <table class="table table-striped mb-0 table-responsive-sm">
                                            <thead>
                                            <tr>

                                                <td></td>
                                                <th>Currency</th>
                                                <th>Currency Pair</th>
                                                <th>Trade Time</th>
                                                <th>Amount</th>
                                                <th>Status</th>
                                                <th>Profit / Lose</th>
                                                <th>Opening Price</th>
                                                <th>Closing Price</th>

                                            </tr>
                                            </thead>
                                            <tbody>

                                            @foreach($trades as $item)
                                                <tr>
                                                    @if ($item->is_win)
                                                        <td><span class="buy-thumb"><i class="mdi mdi-arrow-up"></i></span>
                                                        </td>
                                                    @else
                                                        <td><span class="sold-thumb"><i class="mdi mdi-arrow-down"></i></span>
                                                        </td>
                                                    @endif

                                                    <td><img src="{{ optional($item->currency)->image }}" height="30" />
                                                    </td>
                                                    <td>{{ $item->currency_pair }}
                                                    </td>
                                                       <td>{{ $item->created_at }}
                                                    </td>
                                                        <td>${{ $item->traded_amount }}</td>


                                                    <td class="{{ $item->is_win ? 'text-success' : 'text-danger' }}">{{ $item->is_win ? 'Win' : 'Loss' }}</td>

                                                        <td>{{ $item->is_win ? '+' : '-' }}${{ $item->payout }}</td>
                                                        <td>{{ $item->o_price }}</td>
                                                        <td>{{ $item->c_price }}</td>
{{--                                                    <td>{{ $item->created_at }}</td>--}}
                                                </tr>

                                            @endforeach


                                            </tbody>
                                        </table>
                                    @endif


                                    @if (count($trades) < 1)
                                        <div class="text-center">
                                            <h3 class="text-center">No Trades, make a deposit to start trading</h3>

                                            <a class="btn text-center btn-success mt-4" href="{{ route('deposit.create') }}">Make Deposit</a>
                                        </div>

                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- TradingView Widget BEGIN -->
{{--                    <div class="tradingview-widget-container card">--}}
{{--                        <div id="tradingview_e8053"></div>--}}
{{--                    </div>--}}
                    <!-- TradingView Widget END -->
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div style="height:669px; background-color: #FFFFFF; overflow:hidden; box-sizing: border-box; border: 1px solid #56667F; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #56667F; padding: 0px; margin: 0px; width: 100%;"><div style="height:649px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=full_v2&theme=light&cnt=10&pref_coin_id=1505&graph=yes" width="100%" height="645px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div><div style="color: #FFFFFF; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #FFFFFF; text-decoration:none; font-size:11px">Cryptocurrency Prices</a>&nbsp;by Coinlib</div></div>

                </div>

                <div class="col-md-6">
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>
                        <div class="tradingview-widget-copyright"></div>
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                            {
                                "title": "Currencies",
                                "tabs": [
                                {
                                    "title": "Major",
                                    "title_raw": "Major",
                                    "symbols": [
                                        {
                                            "s": "FX_IDC:EURUSD"
                                        },
                                        {
                                            "s": "FX_IDC:USDJPY"
                                        },
                                        {
                                            "s": "FX_IDC:GBPUSD"
                                        },
                                        {
                                            "s": "FX_IDC:AUDUSD"
                                        },
                                        {
                                            "s": "FX_IDC:USDCAD"
                                        },
                                        {
                                            "s": "FX_IDC:USDCHF"
                                        }
                                    ],
                                    "quick_link": {
                                        "title": "More majors",
                                        "href": "/markets/currencies/rates-major/"
                                    }
                                },
                                {
                                    "title": "Minor",
                                    "title_raw": "Minor",
                                    "symbols": [
                                        {
                                            "s": "FX_IDC:EURGBP"
                                        },
                                        {
                                            "s": "FX_IDC:EURJPY"
                                        },
                                        {
                                            "s": "FX_IDC:GBPJPY"
                                        },
                                        {
                                            "s": "FX_IDC:CADJPY"
                                        },
                                        {
                                            "s": "FX_IDC:GBPCAD"
                                        },
                                        {
                                            "s": "FX_IDC:EURCAD"
                                        }
                                    ],
                                    "quick_link": {
                                        "title": "More minors",
                                        "href": "/markets/currencies/rates-minor/"
                                    }
                                },
                                {
                                    "title": "Exotic",
                                    "title_raw": "Exotic",
                                    "symbols": [
                                        {
                                            "s": "FX_IDC:USDSEK"
                                        },
                                        {
                                            "s": "FX_IDC:USDMXN"
                                        },
                                        {
                                            "s": "FX_IDC:USDZAR"
                                        },
                                        {
                                            "s": "FX_IDC:EURTRY"
                                        },
                                        {
                                            "s": "FX_IDC:EURNOK"
                                        },
                                        {
                                            "s": "FX_IDC:GBPPLN"
                                        }
                                    ],
                                    "quick_link": {
                                        "title": "More exotics",
                                        "href": "/markets/currencies/rates-exotic/"
                                    }
                                }
                            ],
                                "title_link": "/markets/currencies/rates-major/",
                                "width": "100%",
                                "height": 660,
                                "showChart": true,
                                "displayMode": "adaptive",
                                "locale": "en",
                                "plotLineColorGrowing": "rgba(33, 150, 243, 1)",
                                "plotLineColorFalling": "rgba(33, 150, 243, 1)",
                                "belowLineFillColorGrowing": "rgba(33, 150, 243, 0.12)",
                                "belowLineFillColorFalling": "rgba(33, 150, 243, 0.12)",
                                "gridLineColor": "#F0F3FA",
                                "scaleFontColor": "rgba(120, 123, 134, 1)",
                                "showSymbolLogo": true,
                                "symbolActiveColor": "rgba(33, 150, 243, 0.12)",
                                "colorTheme": "light"
                            }
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
                </div>

            </div>
            </div>
    </div>


@endsection

@section('jss')
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
@endsection
