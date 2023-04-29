<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
</head>
<body class="" style="	-webkit-font-smoothing: antialiased;-moz-osx-font-smoothing: grayscale;">
<div class="main" style="min-height: 100vh; background-color: @yield('main-bg-color','#000000');">

@include('layouts.partials.navbar')
<!-- Page Content -->
    <main>
        @yield('main')
    </main>
</div>
@include('layouts.partials.footer')
</body>
</html>
