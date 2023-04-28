@extends('layouts.main')
@section('main-bg-color','white')
@section('main')
    <div class="register-page">
        <header class="page-header py-5 px-5 text-center text-white" style="background: url({{url('assets/png/for-you/for-you.png')}});">
            <div class="container">
                <h1>Formulário Cadastral</h1>
            </div>
        </header>
        <section class="container">
            <div class="row g-0">
                <div class="col-12 col-md-6">
                    <x-forms.register />
                </div>
                <div class="col-12 col-md-6"></div>
            </div>
        </section>
    </div>
@endsection
