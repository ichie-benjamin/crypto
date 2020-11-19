@extends('backend.layouts.master')

@section('content')

    <div class="content-body">
        <div class="container">
            <div class="row">

                @include('partials.menu')

            </div>

            <div class="row">


                <div class="col-xl-9 col-lg-9 col-sm-12">
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container card">
                        <div id="tradingview_e8053"></div>
                    </div>
                    <!-- TradingView Widget END -->
                </div>

                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
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


            </div>
            </div>
    </div>


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
