<nav class="navbar navbar-expand-xl bg-black px-md-5">
    <div class="container-fluid">
        <div class="d-flex">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <x-ri-menu-line class="text-ebw-golden"/>
            </button>
            <a class="navbar-brand" href="{{route('home')}}">
                <img role="img" src="{{ asset('assets/svg/ebw-invest-color.svg') }}">
                <img role="img" src="{{ asset('assets/svg/xp-agent-color.svg') }}">
            </a>
        </div>
        <div class="w-100 w-md-auto">
            <div class="px-2 px-md-0 collapse navbar-collapse" id="navbarSupportedContent" style="">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('home')}}">HOME</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
