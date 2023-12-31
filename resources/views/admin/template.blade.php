<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <title>Hexzy - Responsive Admin Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="Admin Dashboard" name="description" />
    <meta content="ThemeDesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="{{url('assets/images/favicon.ico')}}">

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="{{url('assets/plugins/morris/morris.css')}}">

    <link href="{{url('assets/plugins/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('assets/plugins/datatables/fixedHeader.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('assets/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('assets/plugins/datatables/scroller.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{url('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('assets/css/style.css')}}" rel="stylesheet" type="text/css">    

    <script>
        var urlEditBerkas = `{{url('admin/edit/status/')}}`
        var urlEditAkun = `{{url('admin/modal_edit/akun/')}}`
    </script>
</head>

<body>

    <div class="header-bg">
        <!-- Navigation Bar-->
        <header id="topnav">
            @include('top_bar')
            <!-- end topbar-main -->

            <!-- MENU Start -->
            <div class="navbar-custom">
                <div class="container-fluid">

                    <div id="navigation">

                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">

                            <li class="has-submenu">
                                <a href="{{route('admin')}}"><i class="ti-home"></i> Berkas Pendaftaran</a>
                            </li>

                            <li class="has-submenu">
                                <a href="{{route('akun')}}"><i class="ti-briefcase"></i> Daftar Akun</a>                                
                            </li>
                            <li class="has-submenu">
                                <a href="{{route('laporan')}}"><i class="ti-briefcase"></i> Laporan PPDB <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                                <ul class="submenu">
                                    <li>
                                        <ul>
                                            <li><a href="{{route('laporan')}}">Laporan PPDB</a></li>
                                            <li><a href="{{route('cetak_laporan_ppdb')}}">Cetak Laporan PPDB</a></li>
                                            <li><a href="{{route('cetak_laporan_daftur')}}">Cetak Laporan Daftar Ulang</a></li>                                            
                                            <li><a href="{{route('cetak_laporan_lulus')}}">Cetak Laporan Lulus PPDB</a></li>
                                            <li><a href="{{route('rekapitulasi')}}">Cetak Rekapitulasi PPDB</a></li>
                                        </ul>
                                    </li>                                    
                                </ul>
                            </li>

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
        {{-- <script src="{{url('assets/js/jquery.min.js')}}"></script> --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>    
         <script src="{{url('assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{url('assets/js/modernizr.min.js')}}"></script>
        <script src="{{url('assets/js/detect.js')}}"></script>
        <script src="{{url('assets/js/fastclick.js')}}"></script>
        <script src="{{url('assets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{url('assets/js/jquery.blockUI.js')}}"></script>
        <script src="{{url('assets/js/waves.js')}}"></script>
        <script src="{{url('assets/js/wow.min.js')}}"></script>
        <script src="{{url('assets/js/jquery.nicescroll.js')}}"></script>
        <script src="{{url('assets/js/jquery.scrollTo.min.js')}}"></script>

        <!--Morris Chart-->
        <script src="{{url('assets/plugins/morris/morris.min.js')}}"></script>
        <script src="{{url('assets/plugins/raphael/raphael.min.js')}}"></script>

        <!-- Required datatable js-->
        <script src="{{url('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{url('assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>

        <!-- KNOB JS -->
        <script src="{{url('assets/plugins/jquery-knob/excanvas.js')}}"></script>
        <script src="{{url('assets/plugins/jquery-knob/jquery.knob.js')}}"></script>

        <script src="{{url('assets/plugins/flot-chart/jquery.flot.min.js')}}"></script>
        <script src="{{url('assets/plugins/flot-chart/jquery.flot.tooltip.min.js')}}"></script>
        <script src="{{url('assets/plugins/flot-chart/jquery.flot.resize.js')}}"></script>
        <script src="{{url('assets/plugins/flot-chart/jquery.flot.pie.js')}}"></script>
        <script src="{{url('assets/plugins/flot-chart/jquery.flot.selection.js')}}"></script>
        <script src="{{url('assets/plugins/flot-chart/jquery.flot.stack.js')}}"></script>
        <script src="{{url('assets/plugins/flot-chart/jquery.flot.crosshair.js')}}"></script>

        <!-- Responsive examples -->
        <script src="{{url('assets/plugins/datatables/dataTables.responsive.min.js')}}"></script>
        <script src="{{url('assets/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>

        <!-- Datatable init js -->
        <script src="{{url('assets/pages/datatables.init.js')}}"></script>

        <script src="{{url('assets/pages/dashboard.js')}}"></script>

        <script src="{{url('assets/js/app.js')}}"></script>

</body>

</html>