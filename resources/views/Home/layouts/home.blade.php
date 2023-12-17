<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>صفحه خالی | کنترل پنل</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/home/css/bootstrap-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/home/css/rtl.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/home/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/home/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/home/css/AdminLTE.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/home/css/_all-skins.min.css') }}">
    <style>
        .navbar{
            display: block !important ;
        }
        .navbar-nav{
            flex-direction: initial !important;
        }
    </style>
    @yield('style')

    <!-- Google Font -->
    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> --}}
</head>

<body class="hold-transition skin-green sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

        @include('Home.sections.header')
        <!-- right side column. contains the logo and sidebar -->
       @include('Home.sections.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    @yield('title')
                    <small>@yield('subject')</small>
                </h1>

            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                @yield('content')
                <!-- /.box -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer text-left">
            <strong>Copyleft &copy; 2014-2017 <a href="https://adminlte.io">Almsaeed Studio</a> & <a
                    href="https://netcopy.ir">netcopy</a></strong>
        </footer>

        <!-- Control Sidebar -->

        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->

    <script src="{{asset('assets/home/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/home/js/bootstrap.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="{{asset('assets/home/js/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('assets/home/js/fastclick.js')}}"></script>
    <script src="{{asset('assets/home/js/adminlte.min.js')}}"></script>
    <script src="{{asset('assets/home/js/demo.js')}}"></script>


    <script>
        $(document).ready(function() {
            $('.sidebar-menu').tree()
        })
    </script>
    @include('sweetalert::alert')

    @yield('script')
</body>

</html>
