@extends('layouts.dashboard')
@section('main-bg-color','white')
@section('main')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <header>
                    <h2>Candidaturas</h2>
                </header>
                <hr>
                <div class="py-5">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Nome Completo</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th>Cidade</th>
                            <th>Estado</th>
                            <th>Tem Ancord</th>
                            <th>LinkedIn</th>
                            <th>Currículo</th>
                            <th>Enviado em</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($applications as $application)
                            <tr>
                                <td>{{ $application->fullName }}</td>
                                <td>{{ $application->email }}</td>
                                <td>{{ $application->mobile }}</td>
                                <td>{{ $application->city }}</td>
                                <td>{{ $application->state }}</td>
                                <td>{{ $application->hasAncord ? 'Sim' : 'Não' }}</td>
                                <td>{{ $application->linkedin }}</td>
                                <td>
                                    @if ($application->resumeUrl)
                                        <a href="{{ $application->resumeUrl }}" target="_blank">Ver currículo</a>
                                    @else
                                        N/A
                                    @endif
                                </td>
                                <td>{{ $application->created_at }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <hr>
            </div>
        </div>
    </div>
@endsection
