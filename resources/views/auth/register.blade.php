
<!DOCTYPE html>
<html lang="en" xml:lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Responsive Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- favicon & bookmark -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144"  href="images/bookmark.png" type="image/x-icon" />
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <!-- Font Family -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
    <!-- Website Title -->
    <title>Register - Binary 24 Trades</title>
    <!-- Stylesheets Start -->
    <link rel="stylesheet" href="/font-awesome/css/font-awesome.css" type="text/css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>
    <link rel="stylesheet" href="css/animate.css" type="text/css"/>
    <link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css"/>
    <link rel="stylesheet" href="/auth1/style.css" type="text/css"/>
    <link rel="stylesheet" href="/css/responsive.css" type="text/css"/>
    <style>
        .home-bg {
            background: url(/app-assets/images/backgrounds/bg-2.jpg) center center no-repeat fixed;
            -webkit-background-size: cover;
            background-size: cover;
        }
        .text-wrap:after {
            background-color: #121833;
            opacity: .99;
        }
        .vertical-stepper h3 {
            color: #f8f9fa;
        }
    </style>


</head>
<body class="home-bg">
<!--Main Wrapper Start-->
<div class="wrapper login-page style-2" id="top">
    <div class="cp-container">

        <div class="image-part">
            <img src="/auth1/images/about-img.png" alt="">
        </div>
        <div class="form-part">
            <div class="cp-header">
                <div class="logo">
                    <a href="#"><img class="light" src="/images/logo_1.png" alt="Binary24Trades"></a>
                </div>
            </div>
            <div class="cp-heading">
                <h5>Welcome to Binary 24 Trades</h5>
                <p>To keep connected with us please Sign up with your personal information.</p>
            </div>
            <div class="cp-body">
                @if ($errors->any())
                    <ul class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                <form method="POST" action="{{ route('register') }}" >
                    @csrf
                    <div class="form-group">
                        <input value="{{ old('first_name') }}" class="form-control" type="text" name="first_name" placeholder="First name" required="">
                    </div>
                    <div class="form-group">
                        <input value="{{ old('last_name') }}" class="form-control" type="text" name="last_name" placeholder="Last name" required="">
                    </div>
                    <div class="form-group">
                        <input value="{{ old('username') }}" name="username" class="form-control" type="text" placeholder="Username" required="">
                    </div>
                    <div class="form-group">
                        <input class="form-control" value="{{ old('email') }}" name="email" type="email" placeholder="Email Address" required="">
                    </div>
                    <div class="form-group">
                        <input class="form-control" value="{{ old('phone') }}" name="phone" type="text" placeholder="Phone" required="">
                    </div>
                    <div class="form-row">
                        <div class="col form-group">
                            <input class="form-control" name="password" type="password" placeholder="Password" required="">
                        </div>
                        <div class="col form-group">
                            <input class="form-control" name="password_confirmation" type="password" placeholder="Confirm Password" required="">
                        </div>

                    </div>
                    <div class="form-group">
                        <p class="text-left remember-me-checkbox"><label><input required type="checkbox" name="remember" value="0">I agree with the website's <a href="#">Terms and conditions</a></label></p>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn">Register Now</button>
                    </div>
                    <div class="form-group">
                        <p>Already a member? <a href="{{ route('login') }}">Sign in</a></p>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
</body>
</html>
