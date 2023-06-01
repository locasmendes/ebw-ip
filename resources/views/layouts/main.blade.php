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
    <script src="{{url('js/jquery-3.6.4.min.js')}}" type="text/javascript"></script>
    <link rel="stylesheet" href="{{url('css/owl/owl.carousel.css')}}">
    <script src="{{url('js/owl/owl.carousel.min.js')}}" type="text/javascript"></script>
    {{--@vite('resources/plugins/owl/css/owl.carousel.css')
    @vite('resources/plugins/owl/js/owl.carousel.min.js')--}}
    @include('layouts.partials.trackers', ['gtm_id' => 'GTM-TESTE', 'fb_id' => 'TESTE'])
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
@stack('scripts')
</body>
</html>
