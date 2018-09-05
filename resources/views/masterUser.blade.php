<html lang="vi">
    <head>
        <title> @yield('title') </title>
        <!-- Material Design fonts -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="{{ asset('bower_components/myBootstrap-design/lib/fonts/fontawesome/css/font1.min.css') }}">
        <!-- Bootstrap Material Design -->
         <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="{{ asset('css/styleregister.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/myBootstrap-design/lib/css/bootstrap-material-design.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/myBootstrap-design/lib/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/myBootstrap-design/lib/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/myBootstrap-design/lib/css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/myBootstrap-design/lib/css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/myBootstrap-design/lib/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/myBootstrap-design/lib/css/aos.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/myBootstrap-design/lib/css/aos.map') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/myBootstrap-design/lib/fonts/ionicons/css/ionicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/myBootstrap-design/lib/fonts/fontawesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/myBootstrap-design/lib/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/myBootstrap-design/lib/css/style1.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/myBootstrap-design/lib/css/main_styles.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/myBootstrap-design/lib/css/stylePlaylist.css') }}">
        <link rel="stylesheet" href="{{ asset('css/navbarLocation.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/myBootstrap-design/lib/css/responsive.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/myBootstrap-design/lib/css/locationPage.css') }}">
        
        
    </head>
    <body>
        @yield('navbar')
        @yield('playList')
        <div class="relative">
            @yield('LocationMap')
        </div>
        <div class="absolute">
            @yield('sliderLocation')
        </div>

        
         <script src="{{ asset('bower_components/myBootstrap-design/lib/js/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('bower_components/myBootstrap-design/lib/js/popper.js') }}"></script>
        <script src="{{ asset('bower_components/myBootstrap-design/lib/js/popper.min.js') }}"></script>
        <script src="{{ asset('bower_components/myBootstrap-design/lib/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('bower_components/myBootstrap-design/js/owl.carousel.js') }}"></script>
        <script src="{{ asset('bower_components/myBootstrap-design/js/easing.js') }}"></script>
        <script src="{{ asset('bower_components/myBootstrap-design/js/custom.js') }}"></script>
        <script src="{{ asset('bower_components/myBootstrap-design/lib/js/jquery-3.2.1.slim.min.js') }}"></script>
        @yield('js')
        

    </body>
</html>
