<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pollo Admin</title>
    <link rel="shortcut icon" href="/dist/images/favicon.ico" />
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- START: Template CSS-->
    <link rel="stylesheet" href="/dist/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/dist/vendors/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="/dist/vendors/jquery-ui/jquery-ui.theme.min.css">
    <link rel="stylesheet" href="/dist/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="/dist/vendors/flags-icon/css/flag-icon.min.css">
    <link rel="stylesheet" href="/dist/vendors/flag-select/css/flags.css">
    <!-- END Template CSS-->

    <!-- START: Page CSS-->
    <link rel="stylesheet" href="/dist/vendors/morris/morris.css">
    <link rel="stylesheet" href="/dist/vendors/weather-icons/css/pe-icon-set-weather.min.css">
    <link rel="stylesheet" href="/dist/vendors/chartjs/Chart.min.css">
    <link rel="stylesheet" href="/dist/vendors/starrr/starrr.css">
    <link href="/dist/vendors/bootstrap-tour/css/bootstrap-tour-standalone.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/dist/vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="/dist/vendors/ionicons/css/ionicons.min.css">
    <!-- END: Page CSS-->

    <!-- START: Custom CSS-->
    <link rel="stylesheet" href="/dist/css/main.css">
    <!-- END: Custom CSS-->


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/css/iziModal.min.css" integrity="sha512-8vr9VoQNQkkCCHGX4BSjg63nI5CI4B+nZ8SF2xy4FMOIyH/2MT0r55V276ypsBFAgmLIGXKtRhbbJueVyYZXjA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .deposit-item-first {

        }

    </style>

    <style>
        #tradingview_3c684 {
            height: 620px;
        }
        p{
            font-size: 14px;
            font-weight: 300;
            line-height: 20px;
        }
    </style>
</head>
<!-- END Head-->

<!-- START: Body-->
<body id="main-container" class="default">
<!-- START: Pre Loader-->
<div class="se-pre-con">
    <img src="/dist/images/logo.png" alt="logo" width="23" class="img-fluid"/>
</div>
<!-- END: Pre Loader-->

<!-- START: Header-->
<div id="header-fix" class="header fixed-top">
    <nav class="navbar navbar-expand-lg  p-0">
        <div class="navbar-header h4 mb-0 align-self-center d-flex">
            <a href="#l" class="horizontal-logo align-self-center d-flex d-lg-none">
                <img src="/dist/images/logo.png" alt="logo" width="23" class="img-fluid"/> <span class="h5 align-self-center mb-0 ">BITRS</span>
            </a>
            <a href="#" class="sidebarCollapse ml-2" id="collapse"><i class="icon-menu body-color"></i></a>
        </div>
        <div class="d-inline-block position-relative">
            <button  data-izimodal-open="#deposit" data-izimodal-transitionin="fadeInDown" class="btn btn-primary p-2  mx-3 h6 mb-0 line-height-1 d-none d-lg-block">
                <span class="text-white font-weight-bold h6">+ DEPOSIT</span></button>
        </div>

        <div id="app">
            <div id="deposit"   data-iziModal-title="Fund Your Wallet"  data-iziModal-subtitle="Make a deposit"  data-iziModal-icon="icon-refund" >
                <!-- Modal content -->
                <div class="row">

                    <div class="col-12">
                        <deposit></deposit>
                    </div>
                </div>
            </div>
        </div>


        <form class="float-left d-none d-lg-block search-form">
            <div class="form-group mb-0 position-relative">
                <input type="text" class="form-control border-0 rounded bg-search pl-5" placeholder="Search anything...">
                <div class="btn-search position-absolute top-0">
                    <a href="#"><i class="h5 icon-magnifier body-color"></i></a>
                </div>
                <a href="#" class="position-absolute close-button mobilesearch d-lg-none" data-toggle="dropdown" aria-expanded="false"><i class="icon-close h5"></i>
                </a>

            </div>
        </form>
        <div class="navbar-right ml-auto">
            <ul class="ml-auto p-0 m-0 list-unstyled d-flex">
                <li class="mr-1 d-inline-block my-auto d-block d-lg-none">
                    <a href="#" class="nav-link px-2 mobilesearch" data-toggle="dropdown" aria-expanded="false"><i class="icon-magnifier h4"></i>
                    </a>
                </li>
                <li class="mr-1 d-inline-block my-auto">
                    <div id="options" data-input-name="country2"  data-selected-country="US"></div>
                </li>
                <li class="dropdown align-self-center mr-1">
                    <a href="/" class="nav-link px-2" data-toggle="dropdown" aria-expanded="false"><i class="icon-reload h4"></i>
                        <span class="badge badge-default"> <span class="ring">
                                    </span><span class="ring-point">
                                    </span> </span>
                    </a>
                </li>
                <li class="dropdown align-self-center mr-1 d-inline-block">
                    <a href="#" class="nav-link px-2" data-toggle="dropdown" aria-expanded="false"><i class="icon-bell h4"></i>
                        <span class="badge badge-default"> <span class="ring">
                                    </span><span class="ring-point">
                                    </span> </span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right border   py-0">
                        <li><a class="dropdown-item text-center py-2" href="#"> <strong>No Notification </strong></a></li>
                    </ul>
                </li>
                <li class="dropdown user-profile d-inline-block py-1 mr-2">
                    <a href="#" class="nav-link px-2 py-0" data-toggle="dropdown" aria-expanded="false">
                        <div class="media">
                            <div class="media-body align-self-center d-none d-sm-block mr-2">
                                <p class="mb-0 text-uppercase line-height-1 text-capitalize"><b>{{ auth()->user()->username }}</b><br/><span> {{ auth()->user()->plan }} </span></p>

                            </div>
                            <img src="/dist/images/author.jpg" alt="" class="d-flex img-fluid rounded-circle" width="45">

                        </div>
                    </a>

                    <div class="dropdown-menu  dropdown-menu-right p-0">
                        <a href="#" class="dropdown-item px-2 align-self-center d-flex">
                            <span class="icon-pencil mr-2 h6 mb-0"></span> Edit Profile</a>
                        <a href="#" class="dropdown-item px-2 align-self-center d-flex">
                            <span class="icon-user mr-2 h6 mb-0"></span> View Profile</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item px-2 align-self-center d-flex">
                            <span class="icon-support mr-2 h6  mb-0"></span> Help Center</a>
                        <a href="#" class="dropdown-item px-2 align-self-center d-flex">
                            <span class="icon-settings mr-2 h6 mb-0"></span> Account Settings</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item px-2 text-danger align-self-center d-flex">
                            <span class="icon-logout mr-2 h6  mb-0"></span> Sign Out</a>
                    </div>

                </li>

            </ul>
        </div>
    </nav>
</div>
<!-- END: Header-->

<!-- START: Main Menu-->
<div class="sidebar">
    <a href="#" class="sidebarCollapse float-right h6 dropdown-menu-right mr-2 mt-2 position-absolute d-block d-lg-none">
        <i class="icon-close"></i>
    </a>
    <!-- START: Logo-->
    <a href="#" class="sidebar-logo d-flex">
        <img src="/dist/images/logo.png" alt="logo" width="25" class="img-fluid mr-2"/>
        <span class="h5 align-self-center mb-0">BITRS</span>
    </a>
    <!-- END: Logo-->

    <!-- START: Menu-->
    <ul id="side-menu" class="sidebar-menu">
        <li class="active"><a href="#"><i class="icon-speedometer"></i>Dashboard</a></li>
        <li class=""><a href="#"><i class="icon-grid"></i>Board</a></li>
        <li class=""><a href="#"><i class="icon-film"></i>Market</a></li>
        <li class=""><a href="#"><i class="icon-chart"></i>Trades</a></li>
        <li class=""><a href="#"><i class="icon-support"></i>News</a></li>
        <li class=""><a href="#"><i class="icon-envelope"></i>Notifications</a></li>


        <li class="dropdown"><a href="#"><i class="icon-user"></i>Overview</a>
            <div>
                <ul>
                    <li><a href="#"><i class="icon-people"></i> Profile </a></li>
                    <li><a href="#"><i class="icon-cursor-move"></i> Security Setting</a></li>
                    <li><a href="#"><i class="icon-user"></i> Account Plan</a></li>

                </ul>
            </div>
        </li>

    </ul>
    <!-- END: Menu-->
</div>
<!-- END: Main Menu-->

<!-- START: Main Content-->
<main>
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

    @yield('content')




</main>
<!-- END: Content-->

<!-- START: Footer-->
<footer class="site-footer">© 2017 - {{ date('Y') }} {{ env('APP_NAME') }}.</footer>
<!-- END: Footer-->

<!-- START: Back to top-->
<a href="#" class="scrollup text-center">
    <i class="icon-arrow-up"></i>
</a>
<!-- END: Back to top-->


<!-- START: Template JS-->
<script src="/dist/vendors/jquery/jquery-3.3.1.min.js"></script>
<script src="/dist/vendors/jquery-ui/jquery-ui.min.js"></script>
<script src="/dist/vendors/moment/moment.js"></script>
<script src="/dist/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/dist/vendors/slimscroll/jquery.slimscroll.min.js"></script>
<script src="/dist/vendors/flag-select/js/jquery.flagstrap.min.js"></script>
<!-- END: Template JS-->

<!-- START: APP JS-->
<script src="/dist/js/app.js"></script>
<!-- END: APP JS-->

<!-- START: Page Vendor JS-->
<script src="/dist/vendors/raphael/raphael.min.js"></script>
<script src="/dist/vendors/morris/morris.min.js"></script>
<script src="/dist/vendors/chartjs/Chart.min.js"></script>
<script src="/dist/vendors/starrr/starrr.js"></script>
<script src="/dist/vendors/jquery-flot/jquery.canvaswrapper.js"></script>
<script src="/dist/vendors/jquery-flot/jquery.colorhelpers.js"></script>
<script src="/dist/vendors/jquery-flot/jquery.flot.js"></script>
<script src="/dist/vendors/jquery-flot/jquery.flot.saturated.js"></script>
<script src="/dist/vendors/jquery-flot/jquery.flot.browser.js"></script>
<script src="/dist/vendors/jquery-flot/jquery.flot.drawSeries.js"></script>
<script src="/dist/vendors/jquery-flot/jquery.flot.uiConstants.js"></script>
<script src="/dist/vendors/jquery-flot/jquery.flot.legend.js"></script>
<script src="/dist/vendors/jquery-flot/jquery.flot.pie.js"></script>
<script src="/dist/vendors/bootstrap-tour/js/bootstrap-tour-standalone.min.js"></script>
<!-- END: Page Vendor JS-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/js/iziModal.min.js" integrity="sha512-8aOKv+WECF2OZvOoJWZQMx7+VYNxqokDKTGJqkEYlqpsSuKXoocijXQNip3oT4OEkFfafyluI6Bm6oWZjFXR0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- START: Page JS-->
<script src="/dist/js/home.script.js"></script>
<script src="/js/app.js"></script>
<!-- END: Page JS-->

<script>
    jQuery(document).ready( function() {
        // $("#modal").iziModal();
        $("#deposit").iziModal({
            title: '',
            subtitle: '',
            headerColor: '#000000',
            width: 700,
            top: null,
            bottom: null,
            // borderBottom: true,
            padding: 0,
            radius: 5,
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
            overlayColor: 'rgba(10,8,8,0.4)',
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
</body>
<!-- END: Body-->

</html>
