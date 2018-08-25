<!DOCTYPE html>
<html lang="vi">
    <head>
        <title> @yield('title') </title>
        <!-- Material Design fonts -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="{{ asset('bower_components/myBootstrap-design/lib/fonts/fontawesome/css/font1.min.css') }}">
        <!-- Bootstrap Material Design -->
        <link rel="stylesheet" href="{{ asset('bower_components/myBootstrap-design/lib/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/myBootstrap-design/lib/fonts/ionicons/css/ionicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/myBootstrap-design/lib/fonts/fontawesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/myBootstrap-design/lib/css/main_styles.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/myBootstrap-design/lib/css/offers_styles.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/myBootstrap-design/lib/headerTour/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/css/swiper.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/js/swiper.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/css/swiper.min.css">


    </head>
    <body>
        @include('shared.topBar')
        @yield('content1')
        @yield('content2')
        <script src="{{ asset('bower_components/myBootstrap-design/lib/headerTour/styles/bootstrap4/popper.js') }}"></script>
        <script src="{{ asset('bower_components/myBootstrap-design/lib/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('bower_components/myBootstrap-design/lib/js/offers_custom.js') }}"></script>
        <script src="{{ asset('bower_components/myBootstrap-design/lib/headerTour/js/custom.js') }}"></script>
        <script src="{{ asset('bower_components/myBootstrap-design/lib/headerTour/plugins/easing/easing.js') }}"></script>
        <script src="{{ asset('bower_components/myBootstrap-design/lib/headerTour/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }} "></script>
        <script src="{{ asset('bower_components/myBootstrap-design/lib/headerTour/styles/bootstrap4/bootstrap.min.js') }}"></script>
        <script src="{{ asset('bower_components/myBootstrap-design/lib/headerTour/js/jquery-3.2.1.min.js') }}"></script>

        <script src="{{ asset('bower_components/myBootstrap-design/js/application.min.js') }}"></script>
        <script src="{{ asset('bower_components/myBootstrap-design/js/product.js') }}"></script>
        <script src="{{ asset('bower_components/myBootstrap-design/js/jquery.min.js') }}"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/js/swiper.min.js"></script>
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
