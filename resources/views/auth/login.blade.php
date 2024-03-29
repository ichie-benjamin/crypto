
<!-- - var bodyCustom = 'bg-blue bg-lighten-2' // Use any color palette class--><!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="author" content="CRYPTOASSETS">
    <title>Account Login - Crypto Assets</title>
    <link rel="apple-touch-icon" href="/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="/app-assets/images/ico/favicon.ico">
    <link href="/../../../fonts.googleapis.com/cssc3c1.css?family=Muli:300,300i,400,400i,600,600i,700,700i|Comfortaa:300,400,500,700" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/forms/icheck/icheck.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/forms/icheck/custom.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/css/app.min.css">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/css/core/menu/menu-types/vertical-compact-menu.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/cryptocoins/cryptocoins.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/pages/account-login.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="/asset/css/style.css">
    <!-- END Custom CSS-->
</head>
<body class="vertical-layout vertical-compact-menu 1-column  bg-full-screen-image menu-expanded blank-page blank-page" data-open="click" data-menu="vertical-compact-menu" data-col="1-column">
<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- Demo options menu -->
            <!--/ Demo options menu -->
            <!-- Demo fullscreen-overlay -->
            <!--/ Demo fullscreen-overlay -->
            <section id="account-login" class="flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <!-- image -->
                    <div class="col-md-4 col-sm-5 col-12 p-0 text-center d-none d-md-block">
                        <div class="border-grey border-lighten-3 m-0 box-shadow-0 card-account-left height-400">
{{--                            <img src="/app-assets/images/pages/account-login.png" class="card-account-img width-200" alt="card-account-img">--}}

                            <div style="height:400px; background-color: #1D2330; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38;padding:1px;padding: 0px; margin: 0px; width: 100%;"><div style="height:400px; padding:0px; margin:0px; width: 100%;"><iframe  src="https://widget.coinlib.io/widget?type=chart&theme=dark&coin_id=859&pref_coin_id=1505" width="100%" height="400px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;line-height:14px;"></iframe></div><div style="color: #626B7F; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #626B7F; text-decoration:none; font-size:11px">Cryptocurrency Prices</a>&nbsp;by Crypto Assets</div></div>

                        </div>
                    </div>
                    <!-- login form -->
                    <div class="col-md-4 col-sm-5 col-12 p-0">
                        <div class="card border-grey border-lighten-3 m-0 box-shadow-0 card-account-right height-400">
                            <div class="card-content">

                                <div class="card-body p-3">
                                    <p class="text-center h5 text-capitalize">Welcome to Crypto Assets!</p>
                                    <p class="mb-3 text-center">Please enter your login details</p>
                                    @error('email')
                                    <div style="margin-bottom: 5px" class="invalid-feedbac " role="alert">
                                        <strong style="color: red">{{ $message }}</strong>
                                    </div>
                                    @enderror
                                    <form method="POST" class="form-horizontal form-signin" action="{{ route('login') }}">
                                        @csrf
                                        <fieldset class="form-label-group">
                                            <input type="email" name="email" class="form-control" id="user-name" placeholder="Your Email" required="" autofocus="">
                                            <label for="user-name">Email </label>
                                        </fieldset>

                                        <fieldset class="form-label-group">
                                            <input type="password" name="password" class="form-control" id="user-password" placeholder="Enter Password"  required="" autofocus="">
                                            <label for="user-password">Password</label>
                                        </fieldset>

                                        <div class="form-group row">
                                            <div class="col-md-6 col-12 text-center text-sm-left">
                                                <fieldset>
                                                    <input type="checkbox" id="remember-me" class="chk-remember">
                                                    <label for="remember-me"> Remember</label>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6 col-12 float-sm-left text-center text-sm-right"><a href="{{ route('password.request') }}" class="card-link">Forgot Password?</a></div>
                                        </div>
                                        <button type="submit" class="btn-gradient-primary btn-block my-1">Log In</button>
                                        <p class="text-center"><a href="{{ route('register') }}" class="card-link">Register</a></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->

<!-- BEGIN VENDOR JS-->
<script src="/app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->

<!-- BEGIN MODERN JS-->
<script src="/app-assets/js/core/app-menu.min.js" type="text/javascript"></script>
<script src="/app-assets/js/core/app.min.js" type="text/javascript"></script>
<script src="/app-assets/js/scripts/demo.min.js" type="text/javascript">//- For demo only</script>
<!-- END MODERN JS-->

</body>
</html>
