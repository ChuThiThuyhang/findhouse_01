<html lang="vi">
    <head>
        <title> @yield('title') </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script type="application/x-javascript">addEventListener("load", function(){ setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }</script>
        <link href="{{ asset('css/styleregister.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link rel="stylesheet" href="{{ asset('bower_components/myBootstrap-design/lib/fonts/ionicons/css/ionicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/myBootstrap-design/lib/fonts/fontawesome/css/font-awesome.min.css') }}">
    </head>
    <body>
        @yield('content')
    </body>
</html>
