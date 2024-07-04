<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Respira') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Vendor CSS Files -->
    <link href="{{ URL::asset('build/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('build/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />

    <!-- Vendor JS Files -->
    <script src="{{ URL::asset('build/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <!-- Template Main CSS File -->
    <link href="{{ URL::asset('build/assets/css/style.css') }}" rel="stylesheet" />

</head>

<body>
    <div id="app">
        @include('components.admnav')

        <main class="py-4" style="margin-top: 100px">
            @yield('admcontent')
        </main>
    </div>
</body>

</html>
