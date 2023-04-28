@extends('layouts.main')
@section('main')
    <div class="home-page">
        <div class="d-flex flex-column">
            <section class="hero-section">
                <x-home.hero-slider />
            </section>
            <section class="transition-section p-md-5 bg-white text-black">
                <div class="container text-center">
                    <p class="fs-1">Um portfólio completo para você investir, de acordo com o seu perfil e sua meta financeira.</p>
                    <img role="img" src="{{ asset('assets/svg/chevron-down.svg') }}" width="24">
                </div>
            </section>
            <section class="hero-calls d-flex flex-row justify-content-evenly text-white p-5" style="background: url({{url('assets/png/calls-specs/EBW2.png')}});">
                <div class="d-flex flex-column col-7 col-md-3 gap-4 h-100">
                    <h2>Faça seu patrimônio crescer</h2>
                    <img class="img-fluid" src="{{url('assets/png/calls-specs/p1.png')}}" alt="">
                    <div>
                        <a href="" class="btn border-ebw-golden rounded-pill text-white text-uppercase">Saiba como investir >>></a>
                    </div>
                </div>
                <div class="d-flex flex-column col-7 col-md-3 gap-4 h-100">
                    <h2>Invista na sua empresa</h2>
                    <img class="img-fluid" src="{{url('assets/png/calls-specs/p2.png')}}" alt="">
                    <div>
                        <a href="" class="btn border-ebw-golden rounded-pill text-white text-uppercase">Conheça as opções >>></a>
                    </div>
                </div>
            </section>
            <section class="how-stuff-works row g-0 bg-white text-black justify-content-center text-center py-5">
                <div class="col-10 col-md-8  flex-column gap-4">
                    <h2 class="fs-1">Assessoria Integrativa</h2>
                    <img class="img-fluid" src="{{url('assets/png/calls-specs/hsw.png')}}" alt="">
                    <p class="pb-2 fw-lighter fs-3">
                        Acho que aqui vale acrescentar um texto de apoio, explicando com mais clareza o que é a assessoria Integrativa.
                    </p>
                    <img role="img" src="{{ asset('assets/svg/chevron-down.svg') }}" width="24">
                </div>
            </section>
            <section class="social-proof bg-white">
                <x-home.testimonials-slider />
            </section>
            <section class="second-call bg-black text-white" id="home_page_second_call">
                <div class="row g-0 justify-content-center wrapper py-5">
                    <div class="col-8 col-md-5 d-flex flex-column justify-content-evenly">
                        <h2 class="fs-1">Invista em quem você ama!</h2>
                        <p class="fs-2 fw-lighter">
                            Investir é coisa de quem <mark>pensa no futuro</mark>.

                            É para quem faz o <mark>futuro acontecer</mark>.

                            Para investir a longo prazo com <mark>rentabilidade e baixo risco</mark> é preciso inteligência.

                                    <mark>Diversifique</mark> sua carteira de investimentos.
                        </p>
                        <div>
                            <a href="" class="btn border-ebw-golden rounded-pill text-white text-uppercase">Conheça as opções >>></a>
                        </div>
                    </div>
                    <div class="col-8 col-md-5 gap-4">
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
