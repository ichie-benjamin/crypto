@extends('backend.layouts.master')

@section('content')

    <div class="content-body">
        <div class="container">
            <div class="row">

                @include('partials.menu')

            </div>

            <div class="row">




                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                    <div style="height:669px; background-color: #FFFFFF; overflow:hidden; box-sizing: border-box; border: 1px solid #56667F; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #56667F; padding: 0px; margin: 0px; width: 100%;"><div style="height:649px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=full_v2&theme=light&cnt=10&pref_coin_id=1505&graph=yes" width="100%" height="645px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div><div style="color: #FFFFFF; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #FFFFFF; text-decoration:none; font-size:11px">Cryptocurrency Prices</a>&nbsp;by Coinlib</div></div>

                </div>

                <div class="col-xl-9 col-lg-9 col-sm-12">

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

                                                <th>Currency Pair</th>
                                                <th>Traded Amount</th>
                                                <th>Duration</th>
                                                <th>Percent Profit / Loss</th>
                                                <th>Predicted Trade as</th>
                                                <th>Opening Price</th>
                                                <th>Closing Price</th>

                                            </tr>
                                            </thead>
                                            <tbody>


                                            @foreach($trades as $trade)
                                                <tr>
                                                    <td>{{ $trade->currency_pair }}</td>
                                                    <td>{{ $trade->traded_amount }} USD</td>
                                                    <td>{{ $trade->duration }}Sec</td>
                                                    <td>{{ $trade->profit }} %</td>
                                                    <td>{{ $trade->is_win ? 'Win' : 'Loss' }}</td>
                                                    <td>{{ $trade->opening_price }}</td>
                                                    <td>{{ $trade->closing_price }}</td>
                                                    {{--<td>{{ $item-> }}</td>--}}

                                                    {{--<td>{{ $item-> }}</td>--}}
                                                    {{--<td>{{ $item-> }}</td>--}}
                                                    {{--<td>{{ $item->}}</td>--}}

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
