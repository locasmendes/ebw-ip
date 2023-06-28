@extends('layouts.dashboard')
@section('main-bg-color','white')
@section('main')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <header>
                    <h2>Página Home</h2>
                </header>
                <hr>
                <form action="{{ route('dashboard.pages.home.save') }}" method="post" class="py-5">
                    <!-- Success Message -->
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Sucesso!</strong> {{session('success')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @elseif(session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Erro!</strong> {{session('error')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @csrf
                    <section>
                        <h3>Carrossel</h3>
                        <livewire:dashboard.home.carousel :carousels="$heroSlides" />
                    </section>
                    <hr>
                    <section>
                        <fieldset class="my-2 p-4 border rounded-3">
                            <legend>Seção 1</legend>
                            <div class="mb-3 row">
                                <label for="faixa1" class="col-sm-2 col-form-label">Texto</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="faixa1" name="faixa1" value="{{$content->faixa1}}">
                                </div>
                            </div>
                        </fieldset>
                    </section>
                    <section>
                        <fieldset class="my-2 p-4 border rounded-3">
                            <legend>Seção 2</legend>
                            <div class="mb-3 row">
                                <label for="faixa2_texto" class="col-sm-2 col-form-label">Texto 1</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="faixa2_texto" name="faixa2_texto" value="{{$content->faixa2->texto}}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="faixa2_texto2" class="col-sm-2 col-form-label">Texto 2</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="faixa2_texto2" name="faixa2_texto2" value="{{$content->faixa2->texto2}}">
                                </div>
                            </div>
                        </fieldset>
                    </section>
                    <section>
                        <livewire:dashboard.home.testimonials :testimonials="$content->depoimentos" />
                    </section>
                    <button type="submit" class="btn cta-btn border-ebw-dark text-black">Salvar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
