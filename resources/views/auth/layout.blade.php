<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>صفحه خالی | کنترل پنل</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('assets/home/css/bootstrap-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/home/css/rtl.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/home/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/home/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/home/css/AdminLTE.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/home/css/blue.css') }}">
    @yield('style')


    <!-- Google Font -->
    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> --}}
</head>

<body class="hold-transition register-page">
    @yield('content')
    <!-- /.register-box -->

    <script src="{{ asset('assets/home/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/home/js/bootstrap.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/home/js/icheck.min.js') }}"></script>

    <script>
        $(function() {
            $('input').iCheck({

                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script> --}}
</body>

</html>
