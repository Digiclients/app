<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name', 'LautoPrix') }}</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @env('local')
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @endenv
    @production
        <link rel="stylesheet" href="{{ asset('build/assets/app-56d27ad2.css') }}">
        <script src="{{ asset('build/assets/app-33903afe.js') }}"></script>
    @endproduction

    @stack('third_party_stylesheets')
    @stack('page_css')
</head>

<body>

    @yield('_content')
    @stack('third_party_scripts')
    @stack('page_scripts')
</body>

</html>
