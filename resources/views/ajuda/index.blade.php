@extends('layouts.main')
@section('main-bg-color','white')
@section('main')
    <div class="help-page">
        <header class="page-header" style="background: url({{url('assets/jpg/headers/callcenter.jpg')}});">
            <div class="wrapper">
                <div class="container text-center text-white">
                    <h1>Ajuda</h1>
                </div>
            </div>
        </header>
        <section class="py-5">
            <x-faq.wrapper />
        </section>
    </div>
@endsection
