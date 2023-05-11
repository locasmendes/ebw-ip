@extends('layouts.main')
@push('scripts')
    <script>
        const videoSection = document.querySelector('#video-section');
        const myVideo = document.querySelector('#my-video');

        let seekoptions = {
            rootMargin: '0px',
            threshold: 0.5
        };

        let callback = (entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    myVideo.play();
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
                <x-home.hero-slider />
            </section>
            <section class="transition-section pb-5 pe-3 pe-md-5 ps-3 ps-md-5 pt-7 bg-white text-black">
                <div class="container text-center">
                    <p class="fs-4">Um portfólio completo para você investir, de acordo com o seu perfil e sua meta financeira.</p>
                    <img role="img" src="{{ asset('assets/svg/chevron-down.svg') }}" width="24">
                </div>
            </section>
            <section class="hero-calls d-flex flex-column flex-md-row justify-content-evenly text-white p-5 gap-4 gap-md-0" style="background: url({{url('assets/png/calls-specs/EBW2.png')}});">
                <div class="d-flex flex-column align-self-center align-self-md-auto flex-nowrap justify-content-end align-items-center col-12 col-md-3 gap-4">
                    <h2>Faça seu patrimônio crescer</h2>
                    <img class="img-fluid" src="{{url('assets/png/calls-specs/p1.png')}}" alt="">
                    <div>
                        <a href="{{route('cadastro')}}" class="btn border-ebw-golden text-white cta-btn">Saiba como investir >>></a>
                    </div>
                </div>
                <div class="d-flex flex-column align-self-center align-self-md-auto flex-nowrap justify-content-end align-items-center col-12 col-md-3 gap-4">
                    <h2>Invista na sua empresa</h2>
                    <img class="img-fluid" src="{{url('assets/png/calls-specs/p2.png')}}" alt="">
                    <div>
                        <a href="{{route('cadastro')}}" class="btn border-ebw-golden text-white cta-btn">Conheça as opções >>></a>
                    </div>
                </div>
            </section>
            <section class="how-stuff-works row g-0 bg-white text-black justify-content-center text-center py-5" id="video-section">
                <div class="col-12 col-md-8  flex-column gap-4">
                    <h2 class="fs-1">Assessoria Integrativa</h2>
                    <video id="my-video" class="w-100" muted style="aspect-ratio: 1/1; object-fit: cover; max-width: 992px;">
                        <source src="{{ asset('assets/video/ai.webm') }}" type="video/webm">
                    </video>
                    <img role="img" src="{{ asset('assets/svg/chevron-down.svg') }}" width="24">
                </div>
            </section>
            <section class="social-proof bg-white">
                <x-home.testimonials-slider />
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
                            Para investir a longo prazo com <mark>rentabilidade e baixo risco</mark> é preciso inteligência.
                        </p>
                        <p class="fs-5 fw-lighter">
                            <mark>Diversifique</mark> sua carteira de investimentos.
                        </p>
                        <div>
                            <a href="" class="btn border-ebw-golden text-white cta-btn">Conheça as opções >>></a>
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
