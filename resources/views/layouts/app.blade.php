<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from colorlib.com/polygon/jeweler/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Dec 2018 09:22:59 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CMS | | DASHBOARD</title>
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
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset("css/meanmenu.min.css") }}">
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
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset("style.css") }}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset("css/responsive.css") }}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{ asset("js/vendor/modernizr-2.8.3.min.js") }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body style="overflow-x:hidden;">

    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="/dashboard"><img class="main-logo" src="{{ asset("img/logo/logo.jpg") }}" alt="" /></a>

                <strong><img src="{{ asset("img/logo/logosn.html") }}" alt="" /></strong>
            </div>
            <!-- End Logo -->
            <!-- Sidebar Area
        <div class="left-custom-menu-adp-wrap comment-scrollbar">-->
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
                    <li class="">
                        <a class="has-arrow" href="#">
                            <img src="{{asset('img/sidebar/home1.png')}}" alt="Home" style="padding: 6px;"> <span class="mini-click-non">Customer</span>
                        </a>
                        <ul class="submenu-angle" aria-expanded="true">
                            <li><a title="Customer List" href="{{ route('customer.index') }}"><img src="{{asset('img/sidebar/users.png')}}"
                                        alt="" style="padding: 8px;"><span class="mini-click-non">List of all customers</span></a></li>
                            <li><a title="Add Customer" href="{{ route('customer.create') }}"><img src="{{asset('img/sidebar/add-user.png')}}"
                                        alt="" style="padding: 8px;"><span class="mini-click-non">Add New Customer</span></a></li>
                        </ul>
                    </li>
                    <li id="removable">
                        <a class="has-arrow" href="#" aria-expanded="false"><img src="{{asset('img/sidebar/home2.png')}}"
                                alt="" style="padding: 6px;"><span class="mini-click-non">ISO Services</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="ISO Service List" href="{{ route('products.index') }}"><img src="{{asset('img/sidebar/show-all-service.png')}}"
                                        alt="" style="padding: 8px;"><span class="mini-click-non">Show All Services</span></a></li>
                            <li><a title="Add New Service" href="{{ route('products.create') }}"><img src="{{asset('img/sidebar/add-new-service.png')}}"
                                        alt="" style="padding: 8px;"><span class="mini-click-non">Add New Services</span></a></li>
                        </ul>
                    </li>


                    <li id="removable">
                        <a class="has-arrow" href="#" aria-expanded="false"><img src="{{asset('img/sidebar/home5.png')}}"
                                alt="" style="padding: 6px;"><span class="mini-click-non">Project Planning</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <!-- <li><a title="ISO Service List" href="{{ route('projectmanagement.index') }}"><img src="{{asset('img/sidebar/show-all-service.png')}}" alt="" style="padding: 8px;"><span class="mini-click-non">Show All Projects</span></a></li> -->
                            <li><a title="Add New Project" href="{{ route('projectmanagement.create') }}"><img src="{{asset('img/sidebar/add-new-service.png')}}"
                                        alt="" style="padding: 8px;"><span class="mini-click-non">Add New Project</span></a></li>
                            <li><a title="Add New Project" href="{{ route('projectmanagement.index') }}"><img src="{{asset('img/sidebar/show-all-audit.png')}}"
                                        alt="" style="padding: 8px;"><span class="mini-click-non">Project Info</span></a></li>
                        </ul>
                    </li>
                    <!-- <li><a title="Landing Page" href="#" aria-expanded="false"><i class="fa fa-bookmark icon-wrap sub-icon-mg" aria-hidden="true"></i> <span class="mini-click-non">Landing Page</span></a></li> -->


                    <li id="removable">
                        <a class="has-arrow" href="#" aria-expanded="false"><img src="{{asset('img/sidebar/choices.png')}}"
                                alt="" style="padding: 6px;"><span class="mini-click-non">AMC Orders</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <!-- <li><a title="ISO Service List" href="{{ route('projectmanagement.index') }}"><img src="{{asset('img/sidebar/show-all-service.png')}}" alt="" style="padding: 8px;"><span class="mini-click-non">Show All Projects</span></a></li> -->
                            <li><a title="Add New Project" href="{{ route('amcs.complete') }}"><img src="{{asset('img/sidebar/list.png')}}"
                                        alt="" style="padding: 8px;"><span class="mini-click-non">Show AMC Lists</span></a></li>

                            <li><a title="Add New Project" href="{{ route('projectmanagementamc.index') }}"><img src="{{asset('img/sidebar/list1.png')}}"
                                        alt="" style="padding: 8px;"><span class="mini-click-non">Show AMC Order Lists</span></a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
    </div>
    </nav>
    </div>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:30px 50px;min-height:calc(100vh-122px);">
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                <i class="fa fa-bars"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-11 col-md-11 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item dropdown">

                                                    <div role="menu" class="notification-author dropdown-menu animated zoomIn">

                                                        <ul class="notification-menu">

                                                        </ul>
                                                        <div class="notification-view">
                                                            <a href="#">View All Notification</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
                                                        class="nav-link dropdown-toggle">
                                                        <i class="fa fa-user adminpro-user-rounded header-riht-inf"
                                                            aria-hidden="true"></i>
                                                        <span class="admin-name">{{ Auth::user()->name }}</span>
                                                        <i class="fa fa-angle-down adminpro-icon adminpro-down-arrow"></i>
                                                    </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">

                                                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();"><i
                                                                    class="fa fa-power-off"></i> Logout</a></li>
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                            style="display: none;">
                                                            {{ csrf_field() }}
                                                        </form>
                                                    </ul>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="breadcome-area" style="background: #aaaaaa;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 30px 50px;min-height: calc(100vh - 62px);">
                            <!--<div class="breadcome-list">-->
                            <!--    <div class="row">-->
                            <!--        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->

                            <!--        </div>-->


                            <!--    </div>-->
                            <!--</div>-->
                            @yield('content')
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright &copy;
                                <?php echo date("Y") ?> <a href=""></a> All Rights
                                Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- <script>
        $(function(){
        $('#sidebar').hover(function(){
            $(this).animate({width:'300px'},500);
        },function(){
            $(this).animate({width:'220px'},500);
        }).trigger('mouseleave');
        });
    </script> -->

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
    <!-- morrisjs JS
    ============================================ -->
    <script src="{{ asset("js/morrisjs/raphael-min.js") }}"></script>
    <script src="{{ asset("js/morrisjs/morris.js") }}"></script>
    <script src="{{ asset("js/morrisjs/morris-active.js") }}"></script>
    <!-- morrisjs JS
    ============================================ -->
    <script src="{{ asset("js/sparkline/jquery.sparkline.min.js") }}"></script>
    <script src="{{ asset("js/sparkline/jquery.charts-sparkline.js") }}"></script>
    <!-- calendar JS
    ============================================ -->
    <script src="{{ asset("js/calendar/moment.min.js") }}"></script>
    <script src="{{ asset("js/calendar/fullcalendar.min.js") }}"></script>
    <script src="{{ asset("js/calendar/fullcalendar-active.js") }}"></script>
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
    @stack('scripts')
</body>

</html>
