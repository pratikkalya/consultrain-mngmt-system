<!doctype html>
<html class="no-js" lang="en">
<!-- Mirrored from colorlib.com/polygon/jeweler/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Dec 2018 09:24:18 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login | | CMS </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset("img/favicon.ico") }}">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset("css/font-awesome.min.css") }}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset("css/owl.carousel.css") }}">
    <link rel="stylesheet" href="{{ asset("css/owl.theme.css") }}">
    <link rel="stylesheet" href="{{ asset("css/owl.transitions.css") }}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset("css/animate.css") }}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset("css/normalize.css") }}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset("css/main.css") }}">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset("css/morrisjs/morris.css") }}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset("css/scrollbar/jquery.mCustomScrollbar.min.css") }}">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset("css/metisMenu/metisMenu.min.css") }}">
    <link rel="stylesheet" href="{{ asset("css/metisMenu/metisMenu-vertical.css") }}">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset("css/calendar/fullcalendar.min.css") }}">
    <link rel="stylesheet" href="{{ asset("css/calendar/fullcalendar.print.min.css") }}">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset("css/form/all-type-forms.css") }}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset("style.css") }}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset("css/responsive.css") }}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{ asset("css/bootstrap.min.css") }}js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body style="background:#80d4ff">
    <!-- <div class="color-line"></div> -->
    <br>
    <div class="text-center">
        <a href="#"><img class="main-logo" src="{{ asset("img/logo/logo.jpg") }}" alt="" /></a>
    </div>
    <br><br><br><br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-md-4 col-md-4 col-sm-4 col-xs-12">
                <div class="text-center m-b-md custom-login">
                    <h3>LOGIN</h3>
                    <!-- {{--<p>This is the best app ever!</p>--}} -->
                </div>
                <div class="hpanel">
                    <div class="panel-body">
                        <form action="{{ route('login') }}" method="POST" id="loginForm">
                            @csrf
                            <div class="form-group">
                                <label class="control-label" for="username">Username</label>
                                <input type="text" placeholder="example@gmail.com" title="Please enter you username"
                                    required name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}">
                                <span class="help-block small">Your unique username to app</span>
                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" placeholder="******" required
                                    name="password" id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}">
                                <span class="help-block small">Your strong password</span>
                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>

                            <button type="submit" class="btn btn-success btn-block loginbtn">LOGIN</button>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
        </div>
        <div class="row">
            <div class="col-md-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <p>Copyright &copy; <?php echo date("Y") ?><a href="#"></a> All rights reserved.</p>
            </div>
        </div>
    </div>

    <!-- jquery
    ============================================ -->
    <script src="{{ asset("js/vendor/jquery-1.11.3.min.js") }}"></script>
    <!-- bootstrap JS
    ============================================ -->
    <script src="{{ asset("js/bootstrap.min.js") }}"></script>
    <!-- wow JS
    ============================================ -->
    <script src="{{ asset("js/wow.min.js") }}"></script>
    <!-- price-slider JS
    ============================================ -->
    <script src="{{ asset("js/jquery-price-slider.js") }}"></script>
    <!-- meanmenu JS
    ============================================ -->
    <script src="{{ asset("js/jquery.meanmenu.js") }}"></script>
    <!-- owl.carousel JS
    ============================================ -->
    <script src="{{ asset("js/owl.carousel.min.js") }}"></script>
    <!-- sticky JS
    ============================================ -->
    <script src="{{ asset("js/jquery.sticky.js") }}"></script>
    <!-- scrollUp JS
    ============================================ -->
    <script src="{{ asset("js/jquery.scrollUp.min.js") }}"></script>
    <!-- mCustomScrollbar JS
    ============================================ -->
    <script src="{{ asset("js/scrollbar/jquery.mCustomScrollbar.concat.min.js") }}"></script>
    <script src="{{ asset("js/scrollbar/mCustomScrollbar-active.js") }}"></script>
    <!-- metisMenu JS
    ============================================ -->
    <script src="{{ asset("js/metisMenu/metisMenu.min.js") }}"></script>
    <script src="{{ asset("js/metisMenu/metisMenu-active.js") }}"></script>
    <!-- tab JS
    ============================================ -->
    <script src="{{ asset("js/tab.js") }}"></script>
    <!-- icheck JS
    ============================================ -->
    <script src="{{ asset("js/icheck/icheck.min.js") }}"></script>
    <script src="{{ asset("js/icheck/icheck-active.js") }}"></script>
    <!-- plugins JS
    ============================================ -->
    <script src="{{ asset("js/plugins.js") }}"></script>
    <!-- main JS
    ============================================ -->
    <script src="{{ asset("js/main.js") }}"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');

    </script>
</body>
<!-- Mirrored from colorlib.com/polygon/jeweler/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Dec 2018 09:24:18 GMT -->
</html>
