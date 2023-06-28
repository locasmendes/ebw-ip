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
                <form action="{{ route('dashboard.pages.about.save') }}" method="post" class="py-5">
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
                    <section>
                        <h3>Outras seções</h3>
                        <hr>

                    </section>
                </form>
            </div>
        </div>
    </div>
@endsection
