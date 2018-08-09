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
        <link rel="stylesheet" href="{{ asset('bower_components/myBootstrap-design/lib/css/animateL.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/myBootstrap-design/lib/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/myBootstrap-design/lib/css/aos.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/myBootstrap-design/lib/css/aos.map') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/myBootstrap-design/lib/fonts/ionicons/css/ionicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/myBootstrap-design/lib/fonts/fontawesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/myBootstrap-design/lib/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/myBootstrap-design/lib/css/styleL.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/myBootstrap-design/lib/css/main_styles.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/myBootstrap-design/lib/css/main.css') }}">
    </head>
    <body>
        @include('shared.topBar')
        @yield('content1')
        @yield('content2')
        @include('shared.footer')
    </body>
</html>
