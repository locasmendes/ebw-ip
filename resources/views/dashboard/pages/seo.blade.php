@extends('layouts.dashboard')
@section('main-bg-color','white')
@section('main')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <header>
                    <h2>Dados de SEO</h2>
                </header>
                <hr>
                <form action="{{ route('dashboard.pages.seo.save') }}" method="post" class="py-5">
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
                        <fieldset class="my-2 p-4 border rounded-3">
                            <legend>Pixel</legend>
                            <div class="mb-3 row">
                                <label for="fb_id" class="col-sm-2 col-form-label">ID do pixel do Meta/Facebook</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="fb_id" name="fb_id" value="{{$content->fb_id}}">
                                </div>
                            </div>
                        </fieldset>
                    </section>
                    <section>
                        <fieldset class="my-2 p-4 border rounded-3">
                            <legend>Google Tag Manager</legend>
                            <div class="mb-3 row">
                                <label for="gtm_id" class="col-sm-2 col-form-label">ID do Google Tag Manager (GTM)</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="gtm_id" name="gtm_id" value="{{$content->gtm_id}}">
                                </div>
                            </div>
                        </fieldset>
                    </section>
                    <section>
                        <fieldset class="my-2 p-4 border rounded-3">
                            <legend>Meta tags</legend>
                            <div class="mb-3 row">
                                <label for="title" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="title" name="title" value="{{$content->title}}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="description" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="description" name="description" value="{{$content->description}}">
                                </div>
                            </div>
                        </fieldset>
                    </section>
                    <button type="submit" class="btn cta-btn border-ebw-dark text-black">Salvar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
