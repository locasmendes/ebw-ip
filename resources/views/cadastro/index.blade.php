@extends('layouts.main', ['pageTitle' => 'Cadastro'])
@section('main-bg-color','white')
@section('main')
    <div class="register-page">
        <header class="page-header" style="background: url({{url('assets/jpg/headers/crm-cc.jpg')}});">
           <div class="wrapper">
               <div class="container text-center text-white">
                   <h1>Formulário Cadastral</h1>
               </div>
           </div>
        </header>
        <section class="container">
            <div class="row g-0">
                <div class="col-12 col-md-6 py-5">
                    <x-forms.register />
                </div>
                <div class="col-12 col-md-6"></div>
            </div>
        </section>
    </div>
@endsection
