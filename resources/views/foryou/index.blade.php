@extends('layouts.main', ['pageTitle' => 'Para você e sua empresa'])
@section('main')
    <div class="for-you-page">
        <header class="page-header" style="background: url({{url('assets/png/for-you/for-you.png')}});">
            <div class="wrapper">
                <div class="container text-center text-white">
                    <h1>Para você e para sua empresa</h1>
                </div>
            </div>
        </header>
        <section class="hero-section bg-white text-black">
            <div class="row g-0 justify-content-center">
                <div class="col-10 col-md-7 py-3 p-md-9 text-center">
                    <h2>Invista em você!</h2>
                    <p>
                        Não importa o seu perfil. O que importa é que temos opções de investimento para você. Porque o sucesso de sua jornada depende de um investimento consciente.
                    </p>
                </div>
            </div>
        </section>
        <section class="options-carousel">
            <x-for-you.options-slider />
        </section>
        <section class="call-section bg-white text-black">
            <div class="row g-0 justify-content-center">
                <div class="col-10 col-md-7 py-3 p-md-9 text-center">
                    <p>
                        Há várias opções de investimento disponíveis para o seu perfil de investimento. Estamos prontos para entregar 100% do nosso conhecimento.
                    </p>
                    <a href="{{route('cadastro')}}" class="btn border-ebw-golden text-black cta-btn">Comece agora a sua jornada >>></a>
                </div>
            </div>
        </section>
        <section class="call-section dark bg-dark text-white">
            <div class="row g-0 justify-content-center">
                <div class="d-flex flex-column col-10 gap-5 col-md-7 py-3 p-md-9 text-center">
                    <div>
                        <h2>
                            Faça a sua empresa crescer, de forma inteligente.
                        </h2>
                    </div>
                    <div>
                        <p class="fs-5">
                            Aumentar capital de giro
                        </p>
                        <p class="fs-5">
                            Comprar equipamentos novos
                        </p>
                        <p class="fs-5">
                            Triplicar a produção
                        </p>
                        <p class="fs-5">
                            Mudar para uma sede maior
                        </p>
                        <p class="fs-5">
                            Não importa a meta da sua empresa: se a curto, médio ou longo prazo. Nós podemos ajudar você a alcançá-la!
                        </p>
                    </div>
                    <div>
                        <a href="{{route('cadastro')}}" class="btn py-2 border-ebw-golden text-white cta-btn">Agende seu horário com a nossa equipe>>></a>
                    </div>
                </div>
            </div>
        </section>
        <section class="second-call bg-white text-black">
            <div class="row g-0 justify-content-center py-3 py-md-5">
                <div class="col-10 col-md-5 d-flex flex-column justify-content-evenly">
                    <h2>Invista em quem você ama!</h2>
                    <p>
                        Investir é coisa de quem pensa no futuro.

                        É para quem faz o futuro acontecer.

                        Para investir a longo prazo com rentabilidade e baixo risco é preciso inteligência.

                        Diversifique sua carteira de investimentos.
                    </p>
                    <div>
                        <a href="{{route('cadastro')}}" class="btn border-ebw-golden cta-btn">Conheça as opções >>></a>
                    </div>
                </div>
                <div class="d-none d-md-block col-10 col-md-5 gap-4">
                    <div class="row g-0 justify-content-center g-0">
                        <div class="col-6">
                            <img src="{{url('assets/png/for-you/fy3.png')}}" alt="" class="img-fluid ratio" style="--bs-aspect-ratio: 150%;">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
