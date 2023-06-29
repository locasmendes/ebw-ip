@extends('layouts.dashboard')
@section('main-bg-color','white')
@section('main')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <header>
                    <h2>Página Sobre Nós</h2>
                </header>
                <hr>
                <div class="py-5">
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
                    <hr>
                    <section>
                        <h3>Quadro de Sócios</h3>
                        <livewire:dashboard.about.directors />
                    </section>
                    <hr>
                <form action="{{ route('dashboard.pages.about.save') }}" method="post">
                @csrf
                <section>
                        <h3>Outras seções</h3>
                        <hr>
                        <fieldset class="my-2 p-4 border rounded-3">
                            <legend>Cabeçalho</legend>
                            <div class="mb-3 row">
                                <label for="faixa1" class="col-sm-2 col-form-label">Título</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="faixa1" name="faixa1" value="{{$header->text}}">
                                </div>
                            </div>
                            <!-- Capa -->
                        </fieldset>

                        <fieldset class="my-2 p-4 border rounded-3">
                            <legend>Faixa 1</legend>
                            <div class="mb-3 row">
                                <label for="faixa1" class="col-sm-2 col-form-label">Texto</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="faixa1" name="faixa1" value="{{$faixa1->main}}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="faixa1" class="col-sm-2 col-form-label">Subtexto 1</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="faixa1" name="faixa1" value="{{$faixa1->sub1}}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="faixa1" class="col-sm-2 col-form-label">Subtexto 2</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="faixa1" name="faixa1" value="{{$faixa1->sub2}}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="faixa1" class="col-sm-2 col-form-label">Chamada para a ação</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="faixa1" name="faixa1" value="{{$faixa1->call_to_action}}">
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="my-2 p-4 border rounded-3">
                            <legend>Faixa 2</legend>
                            <div class="mb-3 row">
                                <label for="faixa2" class="col-sm-2 col-form-label">Título</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="faixa2" name="faixa2" value="{{$faixa2->main}}">
                                </div>
                            </div>
                            <hr>
                            <div class="mb-3 row">
                                <label for="faixa2" class="col-sm-2 col-form-label">Pilar 1</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="faixa2" name="faixa2" value="{{$faixa2->title_one}}">
                                </div>
                                <label for="faixa2" class="col-sm-2 col-form-label">Texto 1</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="faixa2" name="faixa3" rows="3">{{$faixa2->text_one}}</textarea>
                                </div>
                            </div>
                            <hr>
                            <div class="mb-3 row">
                                <label for="faixa2" class="col-sm-2 col-form-label">Pilar 2</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="faixa2" name="faixa2" value="{{$faixa2->title_two}}">
                                </div>
                                <label for="faixa2" class="col-sm-2 col-form-label">Texto 2</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="faixa2" name="faixa3" rows="3">{{$faixa2->text_two}}</textarea>
                                </div>
                            </div>
                            <hr>
                            <div class="mb-3 row">
                                <label for="faixa2" class="col-sm-2 col-form-label">Pilar 3</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="faixa2" name="faixa2" value="{{$faixa2->title_three}}">
                                </div>
                                <label for="faixa2" class="col-sm-2 col-form-label">Texto 3</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="faixa2" name="faixa3" rows="3">{{$faixa2->text_three}}</textarea>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="my-2 p-4 border rounded-3">
                            <legend>Missão, Visão e Valores</legend>
                            <div class="mb-3 row">
                                <label for="faixa3" class="col-sm-2 col-form-label">Missão</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="faixa3" name="faixa3" rows="3">{{$faixa3->mission}}</textarea>
                                </div>
                            </div>
                            <hr>
                            <div class="mb-3 row">
                                <label for="faixa3" class="col-sm-2 col-form-label">Visão</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="faixa3" name="faixa3" rows="3">{{$faixa3->vision}}</textarea>
                                </div>
                            </div>
                            <hr>
                            <div class="mb-3 row">
                                <label for="faixa3" class="col-sm-2 col-form-label">Valores</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="faixa3" name="faixa3" rows="3">{{$faixa3->values}}</textarea>
                                </div>
                            </div>
                    </section>
                </form>
            </div>
            </div>
        </div>
    </div>
@endsection
