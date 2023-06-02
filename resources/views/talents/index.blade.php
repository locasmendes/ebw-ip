@extends('layouts.main', ['pageTitle' => 'Trabalhe conosco'])
@section('main')
    <div class="jobs-page">
        <header class="page-header" style="background: url({{url('assets/webp/tc.webp')}});">
            <div class="wrapper">
                <div class="container text-center text-white">
                    <h1>Trabalhe Conosco</h1>
                </div>
            </div>
        </header>
        <section style="background: url({{url('assets/webp/trabalhe-conosco.webp')}});     background-size: cover;">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-7">
                        <div class="px-0 py-2 px-md-5 py-md-7">
                            <form class="card jobs-form px-4 py-5" action="">
                                <div class="card-header">
                                    <h3 class="fw-bold">Faça parte do nosso time!</h3>
                                    <p>Seja um assessor de investimentos</p>
                                </div>
                                <div class="card-body">
                                    <x-input type="text" name="fullName" placeholder="Nome Completo" required />
                                    <x-input type="email" name="email" placeholder="E-mail" required />
                                    <x-input type="tel" name="phone" placeholder="Celular" required />
                                    <div class="d-inline-flex gap-3">
                                        <x-input type="text" name="city" placeholder="Cidade" required />
                                        <x-input type="text" name="state" placeholder="Estado" required />
                                    </div>
                                    <select class="form-control" name="ancord">
                                        <option value="" disabled selected>Possui Ancord?</option>
                                        <option value="sim">Sim</option>
                                        <option value="nao">Não</option>
                                    </select>
                                    <x-input type="text" name="linkedin" placeholder="LinkedIn" />
                                    <div class="custom-file-input">
                                        <!-- file input that accepts documents like pdf and word-->
                                        <input type="file" name="cv" id="cv" accept=".pdf,.doc,.docx">
                                        <label for="file-input">
                                            <span>Anexar currículo (opcional)</span>
                                            <x-ri-attachment-line class="ms-2" />
                                        </label>
                                    </div>
                                    <div class="pt-3 pb-2">
                                        <button disabled type="submit" class="btn cta-btn rounded-pill border-ebw-golden text-black pe-5">ENVIAR >>> </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
