<html lang="vi">
    <head>
        <title> @yield('title') </title>
        <!-- Material Design fonts -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="{{ asset('bower_components/myBootstrap-design/lib/fonts/fontawesome/css/font1.min.css') }}">
        <!-- Bootstrap Material Design -->
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
        <link rel="stylesheet" href="{{ asset('bower_components/myBootstrap-design/lib/css/styleL.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/myBootstrap-design/lib/css/main_styles.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/myBootstrap-design/cssBookTour/css/style_show_tour .css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/myBootstrap-design/cssBookTour/css/style_slider_home .css') }}">
    </head>
    <body>
        @include('shared.header')
        @include('shared.superHeader')
        @yield('content')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="{{ asset('bower_components/myBootstrap-design/lib/js/popper.min.js') }}"></script>
        <script src="{{ asset('bower_components/myBootstrap-design/lib/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('bower_components/myBootstrap-design/js/application.min.js') }}"></script>
        
        <script src="{{ asset('bower_components/myBootstrap-design/jquery/dist/jquery.min.js') }}"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="{{ asset('bower_components/myBootstrap-design/lib/js/popper.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/css/swiper.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/js/swiper.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/css/swiper.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/js/swiper.min.js"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('bower_components/myBootstrap-design/js/custom.js') }}"></script>
        <script>
             var swiper = new Swiper('.swiper-container', {
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
                },
            });
        </script>
        @include('shared.footer')
    </body>
</html>
