@extends('layouts.dashboard')
@section('main-bg-color','white')
@section('main')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <header>
                    <h2>Página Ajuda</h2>
                </header>
                <hr>
                <form action="{{ route('dashboard.pages.faq.save') }}" method="post" class="py-5">
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
                        <fieldset class="my-2 p-2">
                            <legend>FAQ</legend>
                            @foreach($faqItems as $key => $faqItem)
                                <div class="edit-faq-item p-4 my-4 border rounded-3">
                                    <div class="mb-3 row">
                                        <label for="faq_question_{{$faqItem->id}}" class="col-sm-2 col-form-label">Pergunta #{{($faqItem->id)}}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="faq_question_{{$faqItem->id}}" name="faq_question_{{$faqItem->id}}" value="{{$faqItem->question}}">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="faq_answer_{{$faqItem->id}}" class="col-sm-2 col-form-label">Resposta #{{($faqItem->id)}}</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="faq_answer_{{$faqItem->id}}" name="faq_answer_{{$faqItem->id}}" rows="3">{{$faqItem->answer}}</textarea>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row flex-nowrap align-content-center justify-content-between align-items-center gap-5">
                                        <label for="faq_visibility_{{$faqItem->id}}">Visibilidade</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" id="faq_visibility_{{$faqItem->id}}" name="faq_visibility_{{$faqItem->id}}">
                                                <option value="1" @if($faqItem->is_active == 1) selected @endif>Visível</option>
                                                <option value="0" @if($faqItem->is_active == 0) selected @endif>Invisível</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </fieldset>
                    </section>
                    <button type="submit" class="btn cta-btn border-ebw-dark text-black">Salvar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
