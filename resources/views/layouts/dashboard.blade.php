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
    @livewireStyles
</head>
<body class="" style="	-webkit-font-smoothing: antialiased;-moz-osx-font-smoothing: grayscale;">
<div class="main" style="min-height: 100vh; background-color: @yield('main-bg-color','#000000');">

@include('layouts.partials.navbar-dashboard')
<!-- Page Content -->
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-3">
                    <aside>
                        <div class="flex-shrink-0 p-3 bg-white">
                            <a href="/" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
                                <span class="fs-5 fw-semibold">Dashboard</span>
                            </a>
                            <ul class="list-unstyled ps-0">
                                <li class="mb-1">
                                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
                                        Páginas
                                    </button>
                                    <div class="collapse" id="home-collapse" style="">
                                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                            <li><a href="{{route('dashboard.pages.home')}}" class="link-dark rounded">Home</a></li>
                                            <li><a href="{{route('dashboard.pages.about')}}" class="link-dark rounded" disabled>Sobre nós</a></li>
                                            <li><a href="#" class="link-dark rounded" disabled>Pra você</a></li>
                                            <li><a href="{{ route('dashboard.pages.faq') }}" class="link-dark rounded">Ajuda</a></li>
                                            <li><a href="{{route('dashboard.pages.applications')}}" class="link-dark rounded">Trabalhe conosco</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="mb-1">
                                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                                        Tráfego/SEO
                                    </button>
                                    <div class="collapse" id="dashboard-collapse">
                                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                            <li><a href="{{route('dashboard.pages.seo')}}" class="link-dark rounded">Dados de SEO/Tags</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div>
                <div class="col-9">
                    @yield('main')
                </div>
            </div>
        </div>
    </main>
</div>
@livewireScripts
</body>
</html>
