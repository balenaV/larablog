<!DOCTYPE html>
<html>

<head>


    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>@yield('pageTitle')</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('back/vendors/images/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('back/vendors/images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('back/vendors/images/favicon-16x16.png') }}">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('back/vendors/styles/core.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('back/vendors/styles/icon-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('back/vendors/styles/style.css') }}">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-119386393-1');
    </script>
</head>

<body class="login-page">
    @yield('content')
    <!-- js -->
    <script src="{{ asset('back/vendors/scripts/core.js') }}"></script>
    <script src="{{ asset('back/vendors/scripts/script.min.js') }}"></script>
    <script src="{{ asset('back/vendors/scripts/process.js') }}"></script>
    @stack('scripts')
    <script src="{{ asset('back/vendors/scripts/layout-settings.js') }}"></script>
</body>

</html>
