<nav class="navbar navbar-expand-xl bg-light px-md-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img role="img" src="{{ asset('assets/svg/ebw-invest-color.svg') }}">
            <img role="img" src="{{ asset('assets/svg/xp-agent-color.svg') }}">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <x-ri-menu-line class="text-ebw-golden"/>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="max-width: max-content;">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('home')}}">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('sobre')}}">SOBRE NÓS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('para-voce')}}">PARA VOCÊ E PARA SUA EMPRESA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('cadastro')}}">ASSESSORIA INTEGRATIVA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('ajuda')}}">AJUDA</a>
                </li>
                <li class="nav-item">
                    <a class="p-0 m-0" href="{{route('cadastro')}}">
                        <button class="btn btn-ebw-golden rounded-pill text-white btn-nav-call h-auto">FALE COM A GENTE</button>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
