<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('concept/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ asset('concept/vendor/fonts/circular-std/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('concept/libs/css/style.css') }}">
    <link rel="stylesheet" href=" {{ asset('concept/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">

    <link rel="stylesheet" href="{{ asset('concept/vendor/charts/chartist-bundle/chartist.css') }}" >
    <link rel="stylesheet" href="{{ asset('concept/vendor/charts/morris-bundle/morris.css') }}">
    <link rel="stylesheet" href="{{ asset('concept/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('concept/vendor/charts/c3charts/c3.css') }}">
    <link rel="stylesheet" href="{{ asset('concept/vendor/fonts/flag-icon-css/flag-icon.min.css') }} ">

</head>
<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

  <script src="{{ asset('concept/vendor/jquery/jquery-3.3.1.min.js ') }}"></script>
  <script src="{{ asset('concept/vendor/bootstrap/js/bootstrap.bundle.js ') }}"></script>

  <!-- slimscroll js -->
  <script src="{{ asset('concept/vendor/slimscroll/jquery.slimscroll.js  ') }}"></script>
  <!-- main js -->
  <script src="{{ asset('concept/libs/js/main-js.js  ') }}"></script>
  <!-- chart chartist js -->
  <script src="{{ asset('concept/vendor/charts/chartist-bundle/chartist.min.js') }}"></script>
  <!-- sparkline js -->
  <script src="{{ asset('concept/vendor/charts/sparkline/jquery.sparkline.js ') }}"></script>
  <!-- morris js -->
  <script src="{{ asset('concept/vendor/charts/morris-bundle/raphael.min.js') }}"></script>
  <script src="{{ asset('concept/vendor/charts/morris-bundle/morris.js') }}"></script>
  <!-- chart c3 js -->
  <script src="{{ asset('concept/vendor/charts/c3charts/c3.min.js') }}"></script>
  <script src="{{ asset('concept/vendor/charts/c3charts/d3-5.4.0.min.js') }}"></script>
  <script src="{{ asset('concept/vendor/charts/c3charts/C3chartjs.js') }}"></script>
  <script src="{{ asset('concept/libs/js/dashboard-ecommerce.js') }}"></script>

</html>
