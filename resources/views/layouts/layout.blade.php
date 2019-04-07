
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>@yield('title')</title>
    <!-- Icons-->
    <!--<link href="/coreui/src/css/coreui-icons.min.css" rel="stylesheet">-->
   
    
    <link href="{{ url('assets/css/coreui-icons.min.css') }}" rel="stylesheet">
    <!--<link href="/coreui/src/css/flag-icon.min.css" rel="stylesheet">-->
    <link href="{{ url('assets/css/flag-icon.min.css') }}" rel="stylesheet">
    <!--<link href="/coreui/src/css/font-awesome.min.css" rel="stylesheet">-->
    <link href="{{ url('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <!--<link href="/coreui/src/css/simple-line-icons.css" rel="stylesheet">-->
    <link href="{{ url('assets/css/simple-line-icons.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ ('assets/vendor/pace-progress/css/pace.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/node_modules/loader/css/jquery.loadingModal.css') }}" rel="stylesheet">
    <link href="{{ url('assets/node_modules/loader/css/jquery.loadingModal.min.css') }}" rel="stylesheet">
    <script src="{{ url('assets/js/sweetalert-master/dist/sweetalert.min.js') }}"></script> 
    <link rel="stylesheet" type="text/css" href="{{ url('assets/js/sweetalert-master/dist/sweetalert.css') }}">
    
</head>
<body class="@yield('bodyclassname')">
     @include('layouts/header')
     @include('layouts/navbar')
     @yield('content')
     @include('layouts/footer')
     @include('partials/jscripts')   
</body>
</html>