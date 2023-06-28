@extends('layouts.main', ['pageTitle' => 'Sobre nós'])
@section('main')
    <div class="about-page">
        <header class="page-header" style="background: url({{$header->cover}});">
            <div class="wrapper">
                <div class="container text-center text-white">
                    <h1>{{$header->text}}</h1>
                </div>
            </div>
        </header>
        <section class="second-call bg-white text-black">
            <div class="row g-0 justify-content-center py-5">
                <div class="col-8 col-md-5 d-flex flex-column justify-content-evenly">
                    <p class="fs-4 fw-light">
                        {{$faixa1->main}}
                    </p>
                    <p class="fs-6 fw-lighter">
                        {{$faixa1->sub1}}
                    </p>
                    <p class="fs-6 fw-lighter">
                        {{$faixa1->sub2}}
                    </p>
                </div>
                <div class="d-none d-md-block col-8 col-md-5 gap-4 photo-wrapper">
                    <div class="row h-75 g-0">
                        <div class="col-6 h-100">
                            <img src="{{url('assets/png/second-call/sc1.png')}}" alt="" class="img-fluid h-100">
                        </div>
                        <div class="col-6 h-100">
                            <img src="{{url('assets/png/second-call/sc2.png')}}" alt="" class="img-fluid h-100">
                        </div>
                    </div>
                    <div>
                        <a href="{{route('cadastro')}}" class="btn border-ebw-golden cta-btn">{{$faixa1->call_to_action}} >>></a>
                    </div>
                </div>
            </div>
        </section>
        <section class=" bg-ebw-dark text-white d-flex flex-column about-pillars">
            <div class="wrapper p-md-5">
                <h2 class="fw-bold px-md-9 py-6 text-center">{{$faixa2->main}}</h2>
                <div class="row gap-4 px-md-9">
                    <div class="col">
                        <div class="d-flex flex-row flex-nowrap align-content-center gap-1 py-3 justify-content-start align-items-end">
                            <img role="img" src="{{ asset('assets/svg/tick-outline.svg') }}">

                            <h4 class="fw-bold text-uppercase m-0">
                                {{$faixa2->title_one}}
                            </h4>
                        </div>

                        <p class="fw-lighter">
                            {{$faixa2->text_one}}
                        </p>
                    </div>
                    <div class="col">
                        <div class="d-flex flex-row flex-nowrap align-content-center gap-1 py-3 justify-content-start align-items-end">
                            <img role="img" src="{{ asset('assets/svg/tick-outline.svg') }}">

                            <h4 class="fw-bold text-uppercase m-0">
                                {{$faixa2->title_two}}
                            </h4>
                        </div>

                        <p class="fw-lighter">
                            {{$faixa2->text_two}}
                        </p>
                    </div>
                    <div class="col">
                        <div class="d-flex flex-row flex-nowrap align-content-center gap-1 py-3 justify-content-start align-items-end">
                            <img role="img" src="{{ asset('assets/svg/tick-outline.svg') }}">
                            <h4 class="fw-bold text-uppercase m-0">
                                {{$faixa2->title_three}}
                            </h4>
                        </div>
                        <p class="fw-lighter">
                            {{$faixa2->text_three}}
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="company-specs">
            <div class="vstack text-center text-white">
                <div class="spec py-2 py-md-5 px-0 px-md-9">
                    <div class="content">
                        <p>
                            {!! $faixa3->mission !!}
                        </p>
                    </div>
                </div>
                <div class="spec py-2 py-md-5 px-0 px-md-9">
                    <div class="content">
                        <p>
                            {!! $faixa3->vision !!}
                        </p>
                    </div>
                </div>
                <div class="spec py-2 py-md-5 px-0 px-md-9">
                    <div class="content">
                        <p>
                            {!! $faixa3->values !!}
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="p-5 bg-white">
            <div class="p-3 text-center">
                <h2>Conheça nossos sócios fundadores</h2>
            </div>
            <div class="person-wrapper">
                @forelse($directors as $director)
                    @include('components.elements.person-card', [
                        'fullName' => $director->fullName,
                        'position' => $director->position,
                        'description' => $director->description,
                        'quote' => $director->quote,
                        'img' => $director->img,
                        'socialNetworks' => [
                            'linkedin' => $director->linkedin,
                            'instagram' => '',
                            'facebook' => '',
                            'twitter' => ''
                    ]
                    ])
                @empty
                @endforelse
            </div>
        </section>

    </div>
@endsection
