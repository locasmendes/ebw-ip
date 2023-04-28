@extends('layouts.main')
@section('main-bg-color','white')
@section('main')
    <div class="help-page">
        <header class="page-header py-5 px-5 text-center text-white" style="background: url({{url('assets/png/for-you/for-you.png')}});">
            <div class="container">
                <h1>Ajuda</h1>
            </div>
        </header>
        <section class="py-5">
            <x-faq.wrapper />
        </section>
    </div>
@endsection
