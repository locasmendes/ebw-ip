@extends('layouts.main', ['pageTitle' => 'Home'])
@push('scripts')
    <script>
        const videoSection = document.querySelector('#video-section');
        const myVideo = document.querySelector('#assessoria-integrativa');

        let seekoptions = {
            rootMargin: '0px',
            threshold: 0.5
        };

        let callback = (entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    myVideo.play();
                    myVideo.currentTime = 1;
                } else {
                    myVideo.pause();
                }
            });
        };

        let observer = new IntersectionObserver(callback, seekoptions);
        observer.observe(videoSection);
    </script>
@endpush
@section('main')
    <div class="home-page">
        <div class="d-flex flex-column">
            <section class="hero-section">
                <x-home.hero-slider :carousel="$content->carousel"/>
            </section>
            <section class="transition-section pb-5 pe-3 pe-md-5 ps-3 ps-md-5 pt-7 bg-white text-black">
                <div class="container text-center">
                    <p class="fs-4">{{$content->faixa1}}</p>
                    <img role="img" src="{{ asset('assets/svg/chevron-down.svg') }}" width="24">
                </div>
            </section>
            <section class="hero-calls d-flex flex-column flex-md-row justify-content-evenly text-white p-5 gap-4 gap-md-0" style="background: url({{url('assets/png/calls-specs/EBW2.png')}});">
                <div class="d-flex flex-column align-self-center align-self-md-auto flex-nowrap justify-content-end align-items-center col-12 col-md-3 gap-4">
                    <h2>{{$content->faixa2->texto}}</h2>
                    <img class="img-fluid" src="{{url('assets/webp/Faca_seu_Patrimonio_crescer.webp')}}" alt="">
                    <div>
                        <a href="{{route('cadastro')}}" class="btn border-ebw-golden text-white cta-btn">Saiba como investir >>></a>
                    </div>
                </div>
                <div class="d-flex flex-column align-self-center align-self-md-auto flex-nowrap justify-content-end align-items-center col-12 col-md-3 gap-4">
                    <h2>{{$content->faixa2->texto2}}</h2>
                    <img class="img-fluid" src="{{url('assets/webp/Invista_na_sua_Empresa.webp')}}" alt="">
                    <div>
                        <a href="{{route('cadastro')}}" class="btn border-ebw-golden text-white cta-btn">Conheça as opções >>></a>
                    </div>
                </div>
            </section>
            <section class="how-stuff-works row g-0 bg-white text-black justify-content-center text-center py-5" id="video-section">
                <div class="col-12 col-md-8 d-flex flex-column flex-nowrap justify-content-center align-items-center gap-4">
                    <h2 class="fs-1">Assessoria Integrativa</h2>
                    <video preload="none" id="assessoria-integrativa" class="" muted style="object-fit: cover;bottom: 1rem;    position: relative;">
                        <source src="{{ asset('assets/video/ai.webm') }}" type="video/webm">
                    </video>
                    <img role="img" src="{{ asset('assets/svg/chevron-down.svg') }}" width="24">
                </div>
            </section>
            <section class="social-proof bg-white">
                <x-home.testimonials-slider :testimonials="$content->depoimentos" />
            </section>
            <section class="second-call bg-black text-white" id="home_page_second_call">
                <div class="row g-0 justify-content-center wrapper py-5">
                    <div class="col-10 col-md-5 d-flex flex-column justify-content-evenly">
                        <h1 class="fw-bold">Invista em quem você ama!</h1>
                        <p class="fs-5 fw-lighter">
                            Investir é coisa de quem <mark>pensa no futuro</mark>.
                        </p>
                        <p class="fs-5 fw-lighter">
                            É para quem faz o <mark>futuro acontecer</mark>.
                        </p>
                        <p class="fs-5 fw-lighter">
                            Para investir a longo prazo com <mark>rentabilidade e baixo risco</mark>, é preciso inteligência.
                        </p>
                        <p class="fs-5 fw-lighter">
                            <mark>Diversifique</mark> sua carteira de investimentos.
                        </p>
                        <div>
                            <a href="{{route('cadastro')}}" class="btn border-ebw-golden text-white cta-btn">Conheça as opções >>></a>
                        </div>
                    </div>
                    <div class="d-none d-md-block col-8 col-md-5 gap-4">
                        <div class="row g-0">
                            <div class="col-6">
                                <img src="{{url('assets/png/second-call/sc1.png')}}" alt="" class="img-fluid ratio p-4" style="--bs-aspect-ratio: 150%;">
                            </div>
                            <div class="col-6">
                                <img src="{{url('assets/png/second-call/sc2.png')}}" alt="" class="img-fluid ratio p-4" style="--bs-aspect-ratio: 150%;">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
