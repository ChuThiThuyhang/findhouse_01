<!doctype html>
<html>
    <head>
        <title> @yield('tittle') </title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />
        <link rel="icon" type="image/png" href="{{ asset('admin/img/favicon.ico') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/myBootstrap-design/lib/fonts/fontawesome/css/font1.min.css') }}">
            <!-- Bootstrap Material Design -->
        <link rel="stylesheet" href="{{ asset('bower_components/myBootstrap-design/lib/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/myBootstrap-design/lib/css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/myBootstrap-design/lib/css/aos.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/myBootstrap-design/lib/fonts/ionicons/css/ionicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/myBootstrap-design/lib/fonts/fontawesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/css/pe-icon-7-stroke.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/myBootstrap-design/lib/css/light-bootstrap-dashboard.css') }}">
    </head>
    <body>
        <div class="wrapper">
           @include("adminLayout.slideBar")
            <div class="main-panel">
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                        <!-- @yield("content") -->
                        </div>
                    </div>
                </div>
               @include("adminLayout.footer")
            </div>
        </div>
        <script src="{{ asset('bower_components/myBootstrap-design/lib/js/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('bower_components/myBootstrap-design/lib/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <!--  Charts Plugin -->
        <script src="{{ asset('bower_components/myBootstrap-design/lib/js/chartist.min.js') }}"></script>
        <script src="{{ asset('bower_components/myBootstrap-design/lib/js/bootstrap-notify.js') }}"></script>
        <script src="{{ asset('bower_components/myBootstrap-design/lib/js/light-bootstrap-dashboard.js') }}"></script>
        <script src="{{ asset('bower_components/myBootstrap-design/lib/js/demo.js') }}"></script>
</html>
