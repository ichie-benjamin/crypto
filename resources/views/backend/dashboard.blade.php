@extends('backend.layouts.master')

@section('content')
    <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container">
        <div class="tradingview-widget-container__widget"></div>
        {{--        <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com" rel="noopener" target="_blank"><span class="blue-text">Ticker Tape</span></a> by TradingView</div>--}}
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


    <div class="content-body">
        <div class="container-fluid">


            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-danger">
                        <h3>Trading is Suspended</h3>
                        All Trading activities on this Account has been Suspended
                    </div>
                </div>
            </div>


            @include('partials.menu-top')

            <div class="row">
                @include('partials.menu')
            </div>

            <div class="row">

                <div class="col-xl-8 col-md-8 col-sm-12">

                    <div style="height:560px; background-color: #1D2330; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38;padding:1px;padding: 0px; margin: 0px; width: 100%;"><div style="height:540px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=chart&theme=dark&coin_id=859&pref_coin_id=1505" width="100%" height="536px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;line-height:14px;"></iframe></div><div style="color: #626B7F; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #626B7F; text-decoration:none; font-size:11px">Cryptocurrency Prices</a>&nbsp;by Coinlib</div></div>



                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container card" style="margin-top: 20px">
                        <div id="tradingview_e8053"></div>
                    </div>
                    <!-- TradingView Widget END -->
                </div>


                <div class="col-xl-4 col-md-4  col-sm-6">
                    <div style="height:669px; background-color: #FFFFFF; overflow:hidden; box-sizing: border-box; border: 1px solid #56667F; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #56667F; padding: 0px; margin: 0px; width: 100%;"><div style="height:649px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=full_v2&theme=light&cnt=10&pref_coin_id=1505&graph=yes" width="100%" height="645px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div><div style="color: #FFFFFF; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #FFFFFF; text-decoration:none; font-size:11px">Cryptocurrency Prices</a>&nbsp;by Coinlib</div></div>
                    <div style="margin-top: 10px" class="card">
                        <div class="card-header">
                            <h4 class="card-title">Transactions History</h4>
                        </div>
                        <div class="card-body">
                            <div class="transaction-table">
                                <div class="table-responsive">
                                    @if (count($deposits) > 0)
                                        <table class="table table-striped mb-0 table-responsive-sm">
                                            <thead>
                                            <tr>
                                                <th>Amount</th>
                                                <th>Plan</th>
                                                <th> Status</th>
                                                <th>Date </th>
                                                <th>View </th>


                                            </tr>
                                            </thead>
                                            <tbody>


                                            @foreach($deposits as $item)
                                                <tr>
                                                    <td>{{ $item->amount }} USD</td>
                                                    <td>{{ optional($item->plan)->name }}</td>
                                                    <td>
                                                        @if($item->status)
                                                            <p class="badge badge-success">Active</p>
                                                        @else
                                                            <p class="badge badge-warning">Pending</p>
                                                        @endif
                                                    </td>
                                                    <td>{{ $item->created_at->format('Y-m-d') }}</td>
                                                    <td><a class="btn btn-sm btn-success" href="{{ route('backend.deposit.view', $item->id) }}">details</a></td>
                                                    {{--<td>{{ $item-> }}</td>--}}

                                                    {{--<td>{{ $item-> }}</td>--}}
                                                    {{--<td>{{ $item-> }}</td>--}}
                                                    {{--<td>{{ $item->}}</td>--}}

                                                </tr>
                                            @endforeach

                                            </tbody>
                                        </table>
                                    @endif


                                    @if (count($deposits) < 1)
                                        <div class="text-center">
                                            <h3 class="text-center">No Trades, make a deposit to start trading</h3>

                                            <a class="btn text-center btn-success mt-4" href="{{ route('deposit.create') }}">Make Deposit</a>
                                        </div>

                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                    @section('hide')
                <div class="col-xl-2 col-lg-2 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Order Book</h4>
                        </div>
                        <div class="card-body order-book">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Price (USD)</th>
                                    <th scope="col">Price (BTC)</th>
                                    <th scope="col">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="text-danger">10393.50</td>
                                    <td>0.010</td>
                                    <td>14.109</td>
                                </tr>
                                <tr>
                                    <td class="text-danger">10393.50</td>
                                    <td>0.010</td>
                                    <td>14.109</td>
                                </tr>
                                <tr>
                                    <td class="text-danger">10393.50</td>
                                    <td>0.010</td>
                                    <td>14.109</td>
                                </tr>
                                <tr>
                                    <td class="text-danger">10393.50</td>
                                    <td>0.010</td>
                                    <td>14.109</td>
                                </tr>
                                <tr>
                                    <td class="text-danger">10393.50</td>
                                    <td>0.010</td>
                                    <td>14.109</td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-4 col-md-6 col-xxl-4">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Trade History</h4>
                                </div>
                                <div class="card-body trade-history">
                                    <div class="table-responsive">
                                        <table class="table table-borderless">
                                            <thead>
                                            <tr>
                                                <th scope="col">Price</th>
                                                <th scope="col">Size</th>
                                                <th scope="col">Time</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="text-danger">10393.50</td>
                                                <td>0.010</td>
                                                <td>14.109</td>
                                            </tr>
                                            <tr>
                                                <td class="text-danger">10393.50</td>
                                                <td>0.010</td>
                                                <td>14.109</td>
                                            </tr>
                                            <tr>
                                                <td class="text-danger">10393.50</td>
                                                <td>0.010</td>
                                                <td>14.109</td>
                                            </tr>
                                            <tr>
                                                <td class="text-danger">10393.50</td>
                                                <td>0.010</td>
                                                <td>14.109</td>
                                            </tr>
                                            <tr>
                                                <td class="text-danger">10393.50</td>
                                                <td>0.010</td>
                                                <td>14.109</td>
                                            </tr>
                                            <tr>
                                                <td class="text-danger">10393.50</td>
                                                <td>0.010</td>
                                                <td>14.109</td>
                                            </tr>
                                            <tr>
                                                <td class="text-danger">10393.50</td>
                                                <td>0.010</td>
                                                <td>14.109</td>
                                            </tr>
                                            <tr>
                                                <td class="text-danger">10393.50</td>
                                                <td>0.010</td>
                                                <td>14.109</td>
                                            </tr>
                                            <tr>
                                                <td class="text-danger">10393.50</td>
                                                <td>0.010</td>
                                                <td>14.109</td>
                                            </tr>
                                            <tr>
                                                <td class="text-danger">10393.50</td>
                                                <td>0.010</td>
                                                <td>14.109</td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                    <div class="col-lg-7 col-sm-12 col-md-7">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Depth Chart</h4>
                            </div>
                            <div class="card-body">
                                <div id="chartdiv"></div>
                            </div>
                        </div>
                    </div>

                @endsection




            </div>
        </div>

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
@endsection
