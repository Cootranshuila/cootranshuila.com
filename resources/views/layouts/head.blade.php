<head>
    <meta charset="utf-8" />
    <title>@yield('title') - Cootranshuila LTDA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Oficial Web Page Cootranshuila LTDA." />
    <meta name="keywords" content="Cootranshuila, Huila, Colombia, Transporte, Turismo, Pasajeros, Viajes" />
    <meta name="author" content="Cootranshuila Devs Team" />
    <meta name="email" content="sistemas@cootranshuila.com" />
    <meta name="website" content="https://www.cootranshuila.com" />
    <meta name="Version" content="v1" />
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <!-- Bootstrap -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link href="{{ asset('assets/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <!-- Magnific -->
    <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet" type="text/css" />
    <!-- Slider -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}"/>
    <!-- Date picker -->
    <link rel="stylesheet" href="{{ asset('assets/css/flatpickr.min.css') }}">

    @yield('PluginStyles')

    <!-- Main Css -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" id="theme-opt" />
    <link href="{{ asset('assets/css/colors/default.css') }}" rel="stylesheet" id="color-opt">

    @yield('MyStyles')
</head>
