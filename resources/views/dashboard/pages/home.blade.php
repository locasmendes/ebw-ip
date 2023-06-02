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
                <form class="py-5">
                    <section>
                        <h3>Carrossel</h3>
                        @foreach($content->carousel as $key => $slide)
                            <fieldset class="my-2 p-4 border rounded-3">
                                <legend>Slide #{{($key + 1)}}</legend>
                                <hr>
                                <div class="mb-3 row">
                                    <label for="slide_{{$key}}_title" class="col-sm-2 col-form-label">Título</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="slide_{{$key}}_title" name="slide_{{$key}}_title" value="{{$slide->title}}">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="slide_{{$key}}_description" class="col-sm-2 col-form-label">Descrição</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="slide_{{$key}}_description" id="slide_{{$key}}_description" cols="30" rows="10">{{$slide->description}}</textarea>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="slide_{{$key}}_cover" class="col-sm-2 col-form-label">Imagem</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="slide_{{$key}}_cover" name="slide_{{$key}}_cover" value="{{$slide->cover}}">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="slide_{{$key}}_link" class="col-sm-2 col-form-label">Link</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="slide_{{$key}}_link" name="slide_{{$key}}_link" value="{{$slide->link}}">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="slide_{{$key}}_call_to_action" class="col-sm-2 col-form-label">Call to Action</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="slide_{{$key}}_call_to_action" name="slide_{{$key}}_call_to_action" value="{{$slide->call_to_action}}">
                                    </div>
                                </div>
                            </fieldset>
                        @endforeach
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
                        <h3>Depoimentos</h3>
                        <p>{{--$content->depoimentos--}}</p>
                    </section>
                    <button type="submit" class="btn cta-btn border-ebw-dark text-black">Salvar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
