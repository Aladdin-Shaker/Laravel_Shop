<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('asset/images/favicon.png') }}">

        <title>@yield('title')</title>

        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/lib/bootstrap/bootstrap.min.css') }}">

        <!-- Custom CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/lib/calendar2/semantic.ui.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/lib/calendar2/pignose.calendar.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/lib/owl.carousel.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/lib/owl.theme.default.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/helper.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/style.css') }}">

        <!-- Special style -->
        @yield('style')

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
        <!--[if lt IE 9]>
        <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>

    <body class="fix-header fix-sidebar">

        <!-- Preloader - style you can find in spinners.css -->
        <div class="preloader">
            <svg class="circular" viewBox="25 25 50 50">
    			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
        </div>

        <!-- Main wrapper  -->
        <div id="main-wrapper">

            <!-- header header  -->
            @include('admin.layouts.header')
            <!-- End header header -->

            <!-- Left Sidebar  -->
            @include('admin.layouts.left-sidebar')
            <!-- End Left Sidebar  -->

            <!-- Page wrapper  -->
            <div class="page-wrapper">

                <!-- Bread crumb -->
                @include('admin.layouts.breadCrumb')
                <!-- End Bread crumb -->

                <!-- Container fluid  -->
                <div class="container-fluid">

                    <!-- Start Page Content -->
                   
                        @yield('content')
                   
                    <!-- End PAge Content -->
                </div>
                <!-- End Container fluid  -->

                <!-- footer -->
                @include('admin.layouts.footer')
                <!-- End footer -->
            </div>
            <!-- End Page wrapper  -->

        </div>
        <!-- End Wrapper -->




        <!-- All Jquery -->
        <script type="text/javascript" src="{{ asset('asset/js/lib/jquery/jquery.min.js') }}"></script>

        <!-- Bootstrap tether Core JavaScript -->
        <script type="text/javascript" src="{{ asset('asset/js/lib/bootstrap/js/popper.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('asset/js/lib/bootstrap/js/bootstrap.min.js') }}"></script>

        <!-- slimscrollbar scrollbar JavaScript -->
        <script type="text/javascript" src="{{ asset('asset/js/jquery.slimscroll.js') }}"></script>

        <!--Menu sidebar -->
        <script type="text/javascript" src="{{ asset('asset/js/sidebarmenu.js') }}"></script>

        <!--stickey kit -->
        <script type="text/javascript" src="{{ asset('asset/js/lib/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>

        <!--Custom JavaScript -->
        <script type="text/javascript" src="{{ asset('asset/js/custom.min.js') }}"></script>

        <!-- Amchart -->
        <script type="text/javascript" src="{{ asset('asset/js/lib/morris-chart/raphael-min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('asset/js/lib/morris-chart/morris.js') }}"></script>
        <script type="text/javascript" src="{{ asset('asset/js/lib/morris-chart/dashboard1-init.js') }}"></script>
        <script type="text/javascript" src="{{ asset('asset/js/lib/calendar-2/moment.latest.min.js') }}"></script>

        <!-- scripit init-->
        <script type="text/javascript" src="{{ asset('asset/js/lib/calendar-2/semantic.ui.min.js') }}"></script>

        <!-- scripit init-->
        <script type="text/javascript" src="{{ asset('asset/js/lib/calendar-2/prism.min.js') }}"></script>

        <!-- scripit init-->
        <script type="text/javascript" src="{{ asset('asset/js/lib/calendar-2/pignose.calendar.min.js') }}"></script>

        <!-- scripit init-->
        <script type="text/javascript" src="{{ asset('asset/js/lib/calendar-2/pignose.init.js') }}"></script>
        <script type="text/javascript" src="{{ asset('asset/js/lib/owl-carousel/owl.carousel.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('asset/js/lib/owl-carousel/owl.carousel-init.js') }}"></script>
        <script type="text/javascript" src="{{ asset('asset/js/scripts.js') }}"></script>

        <!-- scripit init-->
        <script type="text/javascript" src="{{ asset('asset/js/custom.min.js') }}"></script>

        <!-- special script -->
        @yield('script')
    </body>
</html>