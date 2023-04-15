<nav class="navbar navbar-expand-lg bg-light position-absolute w-100" style="z-index: 2;">
    <div class="container-fluid">
        <div class="brands">
            <a class="navbar-brand" href="#">
                <img role="img" src="{{ asset('assets/svg/ebw-invest-color.svg') }}" width="256">
            </a>
            <a class="navbar-brand" href="#">
                <img role="img" src="{{ asset('assets/svg/xp-agent-color.svg') }}" width="288">
            </a>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-grow-0" id="navbarNav">
            <ul class="navbar-nav">
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
                    <a class="nav-link" href="#">ASSESSORIA INTEGRATIVA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">AJUDA</a>
                </li>
                <li class="nav-item ps-5">
                    <a class="p-0 m-0" href="#">
                        <button class="btn btn-ebw-golden rounded-pill text-white btn-nav-call">FALE COM A GENTE</button>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
