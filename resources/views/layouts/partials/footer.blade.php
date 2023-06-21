<footer id="footer" class="bg-ebw-dark text-white">
    <div class="d-flex flex-column pt-7">
        <div class="bg-ebw-golden py-3">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="brands-container d-flex align-items-center w-auto">
                        <div class="ebw-brand">
                            <img role="img" class="img-fluid" src="{{ asset('assets/svg/ebw-invest-logo.svg') }}">
                        </div>
                        <div class="xp-brand">
                            <img role="img" class="img-fluid" src="{{ asset('assets/svg/xp-agent-logo.svg') }}">
                        </div>
                    </div>

                    <div class="sn-container gap-4 d-flex align-items-center w-100 w-md-auto justify-content-center">
                        <a href="https://www.facebook.com/ebwinvest" target="_blank">
                            <img role="img" class="" src="{{ asset('assets/svg/fb-icon.svg') }}" width="24">
                        </a>
                        <a href="https://www.instagram.com/ebwinvest/" target="_blank">
                            <img role="img" class="" src="{{ asset('assets/svg/ig-icon.svg') }}" width="24">
                        </a>
                        <a href="https://www.linkedin.com/showcase/ebwinvest/" target="_blank">
                            <img role="img" class="" src="{{ asset('assets/svg/linkedin-icon.svg') }}" width="24">
                        </a>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-between py-9">
                <div class="col-12 col-md-5 text-center text-md-start">
                    <div>
                        <h6 class="fw-bold">Agente autônomo da XP Investimentos</h6>
                        <h6 class="d-inline-flex align-items-center">Ouvidoria XP: <a class="nav-link py-0 pe-0" href="tel:+5508007223710">0800-722-3710</a></h6>
                    </div>
                    <div class="contact">
                        <h6 class="fw-bold">Atendimento</h6>
                        <a class="nav-link p-0" href="tel:+08007223730">0800–722–3730</a>
                        <a class="nav-link p-0" href="mailto:contato@ebwinvest.com.br">contato@ebwinvest.com.br</a>
                        <span>De segunda a sexta-feira</span>
                        <span><i></i>das 8h às 18h</span>
                    </div>
                </div>
                <div class="col-12 col-md-2">
                    <!--Links Menu-->
                    <div class="footer-menu-links h-100">
                        <ul>
                            <li><a class="nav-link" href="{{route('home')}}">HOME</a></li>
                            <li><a class="nav-link" href="{{route('sobre')}}">SOBRE</a></li>
                            <li><a class="nav-link" href="{{route('para-voce')}}">SERVIÇOS</a></li>
                            <li><a class="nav-link" href="{{route('trabalhe-conosco')}}">TRABALHE CONOSCO</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-4 text-center">
                    <h6 class="fw-bold">Deixe sua mensagem!</h6>
                    <p>Nossa equipe está pronta para atender você.</p>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Seu melhor email" aria-label="Seu melhor email" aria-describedby="basic-addon2">
                        <button class="input-group-text btn btn-ebw-golden px-4" id="basic-addon2">
                            <img role="img" class="" src="{{ asset('assets/svg/envelope.svg') }}" width="32">
                        </button>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a class="nav-link text-ebw-golden" href="{{route('politica-de-privacidade')}}" style="font-size: medium;">Política de Privacidade</a>
                        </div>
                        <div class="col">
                            <a class="nav-link text-ebw-golden" href="{{route('termos-de-uso')}}" style="font-size: medium;">Termos de Uso</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex flex-md-row flex-column justify-content-center text-center">
            <small class="text-center" style="font-size: 9px;color: #ffffff8c;">
                <p>
                    EBW invest – Agente Autônomo de Investimentos Ltda é uma empresa de agentes autônomos de investimento devidamente registrada na Comissão de Valores Mobiliários (CVM), na forma da Resolução CVM nº 178/2023.
                    EBW invest Agente Autônomo de Investimentos Ltda atua no mercado financeiro credenciada à XP Investimentos CCTVM S/A, Agente Autônomo de Investimentos.
                    Para reclamações, favor contatar a Ouvidoria da XP Investimentos no telefone nº 0800–722–3730
                </p>
            </small>
            @auth
                <small class="px-5">
                    <p>
                        <a class="" href="{{route('dashboard')}}">Dashboard</a>
                    </p>
                </small>
            @endauth
        </div>
    </div>
</footer>
