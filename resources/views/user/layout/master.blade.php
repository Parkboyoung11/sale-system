<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{config('sales.default_system_name')}} | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="/user/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/user/css/font-awesome.min.css">
    <!-- Ionicons -->

    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="/user/images/favicon.png"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/user/fonts/themify-icons.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/user/fonts/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/user/fonts/style.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/user/css/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/user/css/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/user/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/user/css/select2.min.css">
    @yield('customCss')
    <link rel="stylesheet" type="text/css" href="/user/css/util.min.css">
    <link rel="stylesheet" type="text/css" href="/user/css/main.min.css">
    <!--===============================================================================================-->


    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
</head>
<body class="animsition">
@include('user.layout._header')
@yield('content')
@include('user.layout._footer')
<script src="/user/js/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/user/js/bootstrap.bundle.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="/user/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="/user/js/popper.js"></script>
<script type="text/javascript" src="/user/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="/user/js/select2.min.js"></script>

@yield('customJs')

<!--===============================================================================================-->
<script src="/user/js/main.min.js"></script>
<script src={{ mix('user/js/app.js') }}></script>
<!-- iCheck -->

</body>
</html>