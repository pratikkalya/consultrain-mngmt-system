<!doctype html>
<html class="no-js" lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CMS | | DASHBOARD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset("img/favicon1.ico") }}">
    <link rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("css/font-awesome.min.css") }}">
    <link rel="stylesheet" href="{{ asset("css/owl.carousel.css") }}">
    <link rel="stylesheet" href="{{ asset("css/owl.theme.css") }}">
    <link rel="stylesheet" href="{{ asset("css/owl.transitions.css") }}">

    <link rel="stylesheet" href="{{ asset("css/metisMenu/metisMenu-vertical.css") }}">

    <link rel="stylesheet" href="{{ asset("style.css") }}">

</head>

<body style="overflow-x:hidden;">

    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="/dashboard"><img class="main-logo" src="{{ asset("img/logo/logo.jpg") }}" alt="" /></a>

                <strong><img src="{{ asset("img/logo/logosn.html") }}" alt="" /></strong>
            </div>
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
                    <li class="">
                        <a title="Customers" class="has-arrow" href="#">
                            <img src="{{asset('img/sidebar/customer.png')}}" alt="Home" style="padding: 6px;"> <span
                                class="mini-click-non">Customers</span>
                        </a>
                        <ul class="submenu-angle" aria-expanded="true">
                            <li><a title="All Customers List" href="{{ route('customer.index') }}"><img src="{{asset('img/sidebar/customer_list.png')}}"
                                        alt="" style="padding: 8px;"><span class="mini-click-non">All Customers List</span></a></li>
                            <li><a title="Add Customer" href="{{ route('customer.create') }}"><img src="{{asset('img/sidebar/add-user.png')}}"
                                        alt="" style="padding: 8px;"><span class="mini-click-non">Add Customer</span></a></li>
                        </ul>
                    </li>
                    <li id="removable">
                        <a title="ISO Services" class="has-arrow" href="#" aria-expanded="false"><img src="{{asset('img/sidebar/home2.png')}}"
                                alt="" style="padding: 6px;"><span class="mini-click-non">ISO Services</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="ISO Service List" href="{{ route('products.index') }}"><img src="{{asset('img/sidebar/show-all-service.png')}}"
                                        alt="" style="padding: 8px;"><span class="mini-click-non">Show All Services</span></a></li>
                            <li><a title="Add New Service" href="{{ route('products.create') }}"><img src="{{asset('img/sidebar/add-new-service.png')}}"
                                        alt="" style="padding: 8px;"><span class="mini-click-non">Add New Services</span></a></li>
                        </ul>
                    </li>


                    <li id="removable">
                        <a title="Project Planning" class="has-arrow" href="#" aria-expanded="false"><img src="{{asset('img/sidebar/home5.png')}}"
                                alt="" style="padding: 6px;"><span class="mini-click-non">Project Planning</span></a>
                        <ul class="submenu-angle" aria-expanded="false">

                            <li><a title="Project Info" href="{{ route('projectmanagement.index') }}"><img src="{{asset('img/sidebar/show-all-audit.png')}}"
                                        alt="" style="padding: 8px;"><span class="mini-click-non">Project Info</span></a></li>
                            <li><a title="Add New Project" href="{{ route('projectmanagement.create') }}"><img src="{{asset('img/sidebar/add-new-service.png')}}"
                                        alt="" style="padding: 8px;"><span class="mini-click-non">Add New Project</span></a></li>

                        </ul>
                    </li>

                    <li id="removable">
                        <a title="AMC Orders" class="has-arrow" href="#" aria-expanded="false"><img src="{{asset('img/sidebar/choices.png')}}"
                                alt="" style="padding: 6px;"><span class="mini-click-non">AMC Orders</span></a>
                        <ul class="submenu-angle" aria-expanded="false">

                            <li><a title="AMC Lists" href="{{ route('amcs.complete') }}"><img src="{{asset('img/sidebar/list.png')}}"
                                        alt="" style="padding: 8px;"><span class="mini-click-non">AMC Lists</span></a></li>

                            <li><a title="AMC Order Lists" href="{{ route('projectmanagementamc.index') }}"><img src="{{asset('img/sidebar/list1.png')}}"
                                        alt="" style="padding: 8px;"><span class="mini-click-non">AMC Order Lists</span></a></li>
                        </ul>
                    </li>
                    
                    @if(Auth::user()->user_type == 'admin')
                    <li id="removable">
                        <a title="Users" class="has-arrow" href="#">
                            <img src="{{asset('img/sidebar/users.png')}}" alt="Home" style="padding: 6px;"> <span
                                class="mini-click-non">Users</span>
                        </a>
                        <ul class="submenu-angle" aria-expanded="true">
                            <li><a title="All User List" href="{{ route('users.index') }}"><img src="{{asset('img/sidebar/user_list.png')}}"
                                        alt="" style="padding: 8px;"><span class="mini-click-non">All Users List</span></a></li>
                            <li><a title="Add User" href="{{ route('users.create') }}"><img src="{{asset('img/sidebar/add_user.png')}}"
                                        alt="" style="padding: 8px;"><span class="mini-click-non">Add User</span></a></li>
                        </ul>
                    </li>
                    @endif
                </ul>
            </nav>
    </div>
    </nav>
    </div>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:28px 50px;min-height:calc(100vh-122px);">
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
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="min-height: calc(90vh - 60px);">
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

    <script src="{{ asset("js/vendor/jquery-1.11.3.min.js") }}"></script>
    <script src="{{ asset("js/bootstrap.min.js") }}"></script>
    <script src="{{ asset("js/jquery.meanmenu.js") }}"></script>
    <script src="{{ asset("js/jquery.sticky.js") }}"></script>
    <script src="{{ asset("js/metisMenu/metisMenu.min.js") }}"></script>
    <script src="{{ asset("js/metisMenu/metisMenu-active.js") }}"></script>
    <script src="{{ asset("js/main.js") }}"></script>
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
