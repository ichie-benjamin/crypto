<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tradio </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="/back/vendor/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="/back/vendor/waves/waves.min.css">
    <link rel="stylesheet" href="/back/vendor/toastr/toastr.min.css">
    <link rel="stylesheet" href="/back/css/style.css">
    @yield('styles')
</head>

<body id="dashboard">

<div id="preloader">
    <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
    </div>
</div>

<div id="main-wrapper">

    <div class="header dashboard">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <nav class="navbar navbar-expand-lg navbar-light px-0 justify-content-between">
                        <a class="navbar-brand" href="{{ route('backend.dashboard') }}"><img src="/back/images/logo.png" alt=""></a>

                        <div class="header-right d-flex my-2 align-items-center">
                            <div class="language">
                                <div class="dropdown">
                                    <div class="icon">

                                        <span>{{ auth()->user()->name }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard_log">
                                <div class="profile_log dropdown">
                                    <div class="user" data-toggle="dropdown">
                                        <span class="thumb"><i class="mdi mdi-account"></i></span>
                                        <span class="arrow"><i class="la la-angle-down"></i></span>
                                    </div>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <div class="user-email">
                                            <div class="user">
                                                <span class="thumb"><i class="mdi mdi-account"></i></span>
                                                <div class="user-info">
                                                    <h6>{{ auth()->user()->name }}</h6>
                                                    <span>{{ auth()->user()->name }}</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="user-balance">
                                            <div class="available">
                                                <p>Balance</p>
                                                <span>{{ auth()->user()->balance() }}</span>
                                            </div>
                                            <div class="total">
                                                <p>Deposit</p>
                                                <span>0.00 USD</span>
                                            </div>
                                        </div>
                                        <a href="{{ route('backend.account.overview') }}" class="dropdown-item">
                                            <i class="mdi mdi-account"></i> Account
                                        </a>
                                        <a href="{{ route('backend.trades.index') }}" class="dropdown-item">
                                            <i class="mdi mdi-history"></i> Trades
                                        </a>
                                        <a href="{{ route('backend.profile.edit') }}" class="dropdown-item">
                                            <i class="mdi mdi-settings"></i> Setting
                                        </a>
                                        <a  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" href="{{ route('logout') }}" class="dropdown-item logout">
                                            <i class="mdi mdi-logout"></i> Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    {{--    @section('hide')--}}

    <div class="sidebar">
        <div class="menu">
            <ul>
                <li>
                    <a href="{{ route('backend.dashboard') }}" data-toggle="tooltip" data-placement="right" title="dashboard">
                        <span><i class="mdi mdi-view-dashboard"></i></span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('backend.account.overview') }}" data-toggle="tooltip" data-placement="right" title="Overview">
                        <span><i class="mdi mdi-bullseye"></i></span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('deposit.create') }}" data-toggle="tooltip" data-placement="right" title="Deposit">
                        <span><i class="mdi mdi-tumblr-reblog"></i></span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('backend.profile.edit') }}" data-toggle="tooltip" data-placement="right" title="Edit Account">
                        <span><i class="mdi mdi-face-profile"></i></span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('backend.trades.index') }}" data-toggle="tooltip" data-placement="right" title="Trades">
                        <span><i class="mdi mdi-database"></i></span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('backend.withdrawals.index') }}" data-toggle="tooltip" data-placement="right" title="Withdrawals">
                        <span><i class="mdi mdi-pentagon"></i></span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('backend.account.security') }}" data-toggle="tooltip" data-placement="right" title="Security Setting">
                        <span><i class="mdi mdi-settings"></i></span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('backend.user.login.logins') }}" data-toggle="tooltip" data-placement="right" title="login login">
                        <span><i class="mdi mdi-diamond"></i></span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('backend.transactions') }}" data-toggle="tooltip" data-placement="right" title="Transaction History">
                        <span><i class="mdi mdi-history"></i></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    {{--    @endsection--}}

    @yield('content')


    @section('hide')
        <div class="footer dashboard">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-8 col-12">
                        <div class="copyright">
                            <p>© Copyright 2020 <a href="https://themeforest.net/user/quixlab/portfolio">Quixlab</a> I
                                All Rights Reserved</p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-12">
                        <div class="footer-social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</div>



<script src="/back/js/global.js"></script>

<script src="/back/vendor/amchart/amcharts.js"></script>
<script src="/back/vendor/amchart/serial.js"></script>
<script src="/back/vendor/amchart/dataloader.min.js"></script>
<script src="/back/vendor/amchart/dark.js"></script>
<script src="/back/js/plugins/amchart-init.js"></script>

<script src="/back/vendor/toastr/toastr.min.js"></script>
{{--<script src="/back/vendor/toastr/toastr-init.js"></script>--}}

<script>

    @if (session('failure'))
    toastr.success("{{ session('failure') }}", "Warning", {
        // timeOut: 500000,
        closeButton: !0,
        debug: !1,
        newestOnTop: !0,
        progressBar: !0,
        positionClass: "toast-top-right demo_rtl_class",
        preventDuplicates: !0,
        onclick: null,
        showDuration: "300",
        hideDuration: "1000",
        extendedTimeOut: "1000",
        showEasing: "swing",
        hideEasing: "linear",
        showMethod: "fadeIn",
        hideMethod: "fadeOut",
        tapToDismiss: !1,
        closeHtml: '<div class="circle_progress"></div><span class="progress_count"></span> <i class="la la-close"></i> <a href="#">Continue</a>'
    });
    @endif

    @if (session('success'))
    toastr.success("{{ session('success') }}", "Success", {
        // timeOut: 500000,
        closeButton: !0,
        debug: !1,
        newestOnTop: !0,
        progressBar: !0,
        positionClass: "toast-top-right demo_rtl_class",
        preventDuplicates: !0,
        onclick: null,
        showDuration: "300",
        hideDuration: "1000",
        extendedTimeOut: "1000",
        showEasing: "swing",
        hideEasing: "linear",
        showMethod: "fadeIn",
        hideMethod: "fadeOut",
        tapToDismiss: !1,
        closeHtml: '<div class="circle_progress"></div><span class="progress_count"></span> <i class="la la-close"></i> <a href="#">Continue</a>'
    });
    @endif
</script>

<script src="/back/vendor/circle-progress/circle-progress.min.js"></script>
<script src="/back/vendor/circle-progress/circle-progress-init.js"></script>


<!--  flot-chart js -->
<script src="/back/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="/back/vendor/apexchart/apexchart-init.js"></script>


<!-- <script src="./js/dashboard.js"></script> -->

<script src="/back/js/dashboard.js"></script>
<script src="/back/js/scripts.js"></script>


<script src="/back/js/settings.js"></script>
<script src="/back/js/quixnav-init.js"></script>
<script src="/back/js/styleSwitcher.js"></script>
<script src="https://s3.tradingview.com/tv.js"></script>


<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>

@yield('js')




</body>
</html>

