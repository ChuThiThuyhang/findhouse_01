<!DOCTYPE html>
<html lang="vi">
    <head>
        <title> @yield('title') </title>
        <!-- Material Design fonts -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link rel="stylesheet" href="{{ asset('bower_components/myBootstrap-design/lib/fonts/fontawesome/css/font1.min.css') }}">
        <!-- Bootstrap Material Design -->
        <link rel="stylesheet" href="{{ asset('bower_components/myBootstrap-design/lib/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/myBootstrap-design/lib/fonts/ionicons/css/ionicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/myBootstrap-design/lib/fonts/fontawesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/myBootstrap-design/lib/css/main_styles.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/myBootstrap-design/cssBookTour/css/info1.css') }}">
    </head>
    <body>
    
        @include('shared.topBar')
        @yield('infoTour')
        @include('shared.footer')
    </body>
    <script src="{{ asset('bower_components/myBootstrap-design/lib/headerTour/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('bower_components/myBootstrap-design/lib/headerTour/styles/bootstrap4/popper.js') }}"></script>
    <script src="{{ asset('bower_components/myBootstrap-design/lib/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('bower_components/myBootstrap-design/lib/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('bower_components/myBootstrap-design/lib/js/offers_custom.js') }}"></script>
    <script src="{{ asset('bower_components/myBootstrap-design/lib/headerTour/js/custom.js') }}"></script>
    <script src="{{ asset('bower_components/myBootstrap-design/lib/headerTour/plugins/easing/easing.js') }}"></script>
    <script src="{{ asset('bower_components/myBootstrap-design/lib/headerTour/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }} "></script>
    
    @yield('js')
</html>
