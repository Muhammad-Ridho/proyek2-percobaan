<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" type="image/png" href="{{asset('templateLogin')}}/images/icons/favicon.ico" />

        <link rel="stylesheet" type="text/css" href="{{asset('templateLogin')}}/vendor/bootstrap/css/bootstrap.min.css">

        <link rel="stylesheet" type="text/css" href="{{asset('templateLogin')}}/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" type="text/css" href="{{asset('templateLogin')}}/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

        <link rel="stylesheet" type="text/css" href="{{asset('templateLogin')}}/vendor/animate/animate.css">

        <link rel="stylesheet" type="text/css" href="{{asset('templateLogin')}}/vendor/css-hamburgers/hamburgers.min.css">

        <link rel="stylesheet" type="text/css" href="{{asset('templateLogin')}}/vendor/animsition/css/animsition.min.css">

        <link rel="stylesheet" type="text/css" href="{{asset('templateLogin')}}/vendor/select2/select2.min.css">

        <link rel="stylesheet" type="text/css" href="{{asset('templateLogin')}}/vendor/daterangepicker/daterangepicker.css">

        <link rel="stylesheet" type="text/css" href="{{asset('templateLogin')}}/css/util.css">
        <link rel="stylesheet" type="text/css" href="{{asset('templateLogin')}}/css/main.css">

        <meta name="robots" content="noindex, follow">
</head>
<body>
    
    @yield('content')
    
    <script src="{{asset('templateLogin')}}/vendor/jquery/jquery-3.2.1.min.js"></script>

        <script src="{{asset('templateLogin')}}/vendor/animsition/js/animsition.min.js"></script>

        <script src="{{asset('templateLogin')}}/vendor/bootstrap/js/popper.js"></script>
        <script src="{{asset('templateLogin')}}/vendor/bootstrap/js/bootstrap.min.js"></script>

        <script src="{{asset('templateLogin')}}/vendor/select2/select2.min.js"></script>

        <script src="{{asset('templateLogin')}}/vendor/daterangepicker/moment.min.js"></script>
        <script src="{{asset('templateLogin')}}/vendor/daterangepicker/daterangepicker.js"></script>

        <script src="{{asset('templateLogin')}}/vendor/countdowntime/countdowntime.js"></script>

        <script src="{{asset('templateLogin')}}/js/main.js"></script>

        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-23581568-13');
            </script>
        <script defer src="https://static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"69a5a60ce9904583","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.9.0","si":100}'></script>
</body>
</html>
