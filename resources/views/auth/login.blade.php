@extends('layouts.main')
@section('main')
    <div class="container text-white"
         style="
    min-height: 30rem;
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-content: center;
    justify-content: center;
    align-items: center;
"
    >
        <section class="mt-auto">
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{route('login')}}">
            @csrf

            <!-- Email Address -->
                <div class="mb-3">
                    <x-label for="email" :value="__('Email')" />

                    <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <x-label for="password" :value="__('Password')" />

                    <x-input id="password" class="form-control"
                             type="password"
                             name="password"
                             required autocomplete="current-password" />
                </div>

                <!-- Remember Me -->
                <div class="">
                    <label for="remember_me" class="d-inline-flex align-items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-secondary text-ebw-golden shadow-sm" name="remember">
                        <span class="ms-2 fs-5 text-white-50">Lembrar de mim</span>
                    </label>
                </div>

                <div class="d-flex align-items-center justify-content-end mt-4">
                    <x-button class="ms-3 bg-ebw-golden text-ebw-dark">
                        Entrar
                    </x-button>
                </div>
            </form>
        </section>
    </div>
@endsection
