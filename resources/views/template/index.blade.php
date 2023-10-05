<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <title>Hexzy - Responsive Admin Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="Admin Dashboard" name="description" />
    <meta content="ThemeDesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="assets/plugins/morris/morris.css">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div class="header-bg">
        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">

                    <!-- Logo-->
                    <div>
                        <a href="index.html" class="logo">
                             <img src="assets/images/logo-light.png" class="logo-lg" alt="" height="26">
                            <img src="assets/images/logo-sm.png" class="logo-sm" alt="" height="28">
                        </a>
                    </div>
                    <!-- End Logo-->

                    <div class="menu-extras topbar-custom navbar p-0">
                        <ul class="list-inline d-none d-lg-block mb-0">
                            
                                <li class="hide-phone app-search float-left">
                                    <form role="search" class="navbar-form">
                                        <input type="text" placeholder="Search..." class="form-control search-bar">
                                        <a href=""><i class="fa fa-search"></i></a>
                                    </form>
                                </li>
                        </ul>

                        <ul class="mb-0 nav navbar-right ml-auto list-inline">
                            <li class="list-inline-item dropdown notification-list">
                                <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light notification-icon-box" data-toggle="dropdown" aria-expanded="true">
                                    <i class="fa fa-bell"></i> <span class="badge badge-xs badge-danger"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-lg">
                                    <li class="text-center notifi-title">Notification <span class="badge badge-xs badge-success">3</span></li>
                                    <li class="list-group">
                                        <a href="javascript:void(0);" class="dropdown-item notify-item mt-2">
                                            <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                            <p class="notify-details">Your order is placed<span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                        </a>
                                        <!-- item-->

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-info"><i class="mdi mdi-glass-cocktail"></i></div>
                                            <p class="notify-details">Your item is shipped<span class="text-muted">It is a long established fact that a reader will</span></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item mb-2">
                                            <div class="notify-icon bg-danger"><i class="mdi mdi-message-text-outline"></i></div>
                                            <p class="notify-details">New Message received<span class="text-muted">You have 87 unread messages</span></p>
                                        </a>

                                        <!-- last list item -->
                                        <a href="javascript:void(0);" class="list-group-item text-center">
                                            <small class="text-primary mb-0">View all </small>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="list-inline-item notification-list d-none d-sm-inline-block">
                                <a href="#" id="btn-fullscreen" class="waves-effect waves-light notification-icon-box"><i class="fas fa-expand"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                    <img src="assets/images/users/avatar-1.jpg" alt="user-img" class="rounded-circle">
                                    <span class="profile-username">
                                                                Kenny <span class="mdi mdi-chevron-down font-15"></span>
                                    </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)" class="dropdown-item"> Profile</a></li>
                                    <li><a href="javascript:void(0)" class="dropdown-item"><span class="badge badge-success float-right">5</span> Settings </a></li>
                                    <li><a href="javascript:void(0)" class="dropdown-item"> Lock screen</a></li>
                                    <li class="dropdown-divider"></li>
                                    <li><a href="javascript:void(0)" class="dropdown-item"> Logout</a></li>
                                </ul>
                            </li>

                            <li class="menu-item dropdown notification-list list-inline-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>

                        </ul>

                    </div>
                    <!-- end menu-extras -->

                    <div class="clearfix"></div>

                </div>
                <!-- end container -->
            </div>
            <!-- end topbar-main -->

            <!-- MENU Start -->
            <div class="navbar-custom">
                <div class="container-fluid">

                    <div id="navigation">

                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">

                            <li class="has-submenu">
                                <a href="index.html"><i class="ti-home"></i> Dashboard</a>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="ti-briefcase"></i> User Interface <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="ui-buttons.html">Buttons</a></li>
                                            <li><a href="ui-cards.html">Cards</a></li>
                                            <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a></li>
                                            <li><a href="ui-modals.html">Modals</a></li>
                                            <li><a href="ui-components.html">Components</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="ui-progressbars.html">Progress Bars</a></li>
                                            <li><a href="ui-alerts.html">Alerts</a></li>
                                            <li><a href="ui-sweet-alert.html">Sweet-Alert</a></li>
                                            <li><a href="ui-grid.html">Grid</a></li>
                                            <li><a href="typography.html">Typography</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="ti-harddrives"></i> Components <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                                <ul class="submenu">
                                    <li class="has-submenu">
                                        <a href="#">Icons</a>
                                        <ul class="submenu">
                                            <li><a href="icons-material.html">Material Design</a></li>
                                            <li><a href="icons-ion.html">Ion Icons</a></li>
                                            <li><a href="icons-fontawesome.html">Font Awesome</a></li>
                                            <li><a href="icons-themify.html">Themify Icons</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#">Forms</a>
                                        <ul class="submenu">
                                            <li><a href="form-elements.html">General Elements</a></li>
                                            <li><a href="form-validation.html">Form Validation</a></li>
                                            <li><a href="form-advanced.html">Advanced Form</a></li>
                                            <li><a href="form-wysiwyg.html">WYSIWYG Editor</a></li>
                                            <li><a href="form-uploads.html">Multiple File Upload</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="calendar.html">Calendar </a>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#">Tables </a>
                                        <ul class="submenu">
                                            <li><a href="tables-basic.html">Basic Tables</a></li>
                                            <li><a href="tables-datatable.html">Data Table</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#">Charts </a>
                                        <ul class="submenu">
                                            <li><a href="charts-morris.html">Morris Chart</a></li>
                                            <li><a href="charts-chartjs.html">Chartjs</a></li>
                                            <li><a href="charts-flot.html">Flot Chart</a></li>
                                            <li><a href="charts-other.html">Other Chart</a></li>
                                        </ul>
                                    </li>

                                    <li class="has-submenu">
                                        <a href="#">Maps</a>
                                        <ul class="submenu">
                                            <li><a href="maps-google.html"> Google Map</a></li>
                                            <li><a href="maps-vector.html"> Vector Map</a></li>
                                        </ul>
                                    </li>

                                </ul>
                            </li>

                            

                            <li class="has-submenu">
                                <a href="#"><i class="ti-files"></i> Pages <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                                <ul class="submenu megamenu">

                                    <li>
                                        <ul>
                                            <li><a href="pages-timeline.html">Timeline</a></li>
                                            <li><a href="pages-invoice.html">Invoice</a></li>
                                            <li><a href="pages-directory.html">Directory</a></li>
                                            <li><a href="pages-login.html">Login</a></li>
                                            <li><a href="pages-register.html">Register</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="pages-recoverpw.html">Recover Password</a></li>
                                            <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                                            <li><a href="pages-blank.html">Blank Page</a></li>
                                            <li><a href="pages-404.html">Error 404</a></li>
                                            <li><a href="pages-500.html">Error 500</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                        <!-- End navigation menu -->
                    </div>
                    <!-- end #navigation -->
                </div>
                <!-- end container -->
            </div>
            <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->

    </div>
    <!-- header-bg -->

    <div class="wrapper">
        <div class="container-fluid">           
            @yield('content')
        </div>
        <!-- end wrapper -->

        <!-- Footer -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        © 2019 - 2020 Hexzy <span class="d-none d-md-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign.</span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->



        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
         <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/modernizr.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!--Morris Chart-->
        <script src="assets/plugins/morris/morris.min.js"></script>
        <script src="assets/plugins/raphael/raphael.min.js"></script>

        <!-- KNOB JS -->
        <script src="assets/plugins/jquery-knob/excanvas.js"></script>
        <script src="assets/plugins/jquery-knob/jquery.knob.js"></script>

        <script src="assets/plugins/flot-chart/jquery.flot.min.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.resize.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.pie.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.selection.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.stack.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.crosshair.js"></script>

        <script src="assets/pages/dashboard.js"></script>

        <script src="assets/js/app.js"></script>

</body>

</html>