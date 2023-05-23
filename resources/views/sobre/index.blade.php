@extends('layouts.main')
@section('main')
    <div class="about-page">
        <header class="page-header" style="background: url({{url('assets/jpg/headers/aboutus.jpg')}});">
            <div class="wrapper">
                <div class="container text-center text-white">
                    <h1>Um pouco sobre nós</h1>
                </div>
            </div>
        </header>
        <section class="second-call bg-white text-black">
            <div class="row g-0 justify-content-center py-5">
                <div class="col-8 col-md-5 d-flex flex-column justify-content-evenly">
                    <p class="fs-4 fw-light">
                        O nosso principal objetivo é zelar pelo seu patrimônio, porque ele é o responsável pela realização dos seus sonhos e da sua família.
                    </p>
                    <p class="fs-6 fw-lighter">
                        A EBW Invest é Agente Autônomo de Investimentos credenciado à XP Investimentos. Ou seja, somos credenciados à maior corretora da América Latina há duas décadas.
                    </p>
                    <p class="fs-6 fw-lighter">
                        Estamos instalados no coração de São Paulo, uma região de fácil acesso, em um escritório pronto para receber nossos clientes, quando necessário
                    </p>
                </div>
                <div class="d-none d-md-block col-8 col-md-5 gap-4 photo-wrapper">
                    <div class="row h-75 g-0">
                        <div class="col-6 h-100">
                            <img src="{{url('assets/png/second-call/sc1.png')}}" alt="" class="img-fluid h-100">
                        </div>
                        <div class="col-6 h-100">
                            <img src="{{url('assets/png/second-call/sc2.png')}}" alt="" class="img-fluid h-100">
                        </div>
                    </div>
                    <div>
                        <a href="{{route('cadastro')}}" class="btn border-ebw-golden cta-btn">Conheça nossa equipe >>></a>
                    </div>
                </div>
            </div>
        </section>
        <section class=" bg-ebw-dark text-white d-flex flex-column about-pillars">
            <div class="wrapper p-md-5">
                <h2 class="fw-bold px-md-9 py-6 text-center">Nossa assessoria integrativa é baseado em três pilares:</h2>
                <div class="row gap-4 px-md-9">
                    <div class="col">
                        <div class="d-flex flex-row flex-nowrap align-content-center gap-1 py-3 justify-content-start align-items-end">
                            <img role="img" src="{{ asset('assets/svg/tick-outline.svg') }}">

                            <h4 class="fw-bold text-uppercase m-0">
                                Responsabilidade
                            </h4>
                        </div>

                        <p class="fw-lighter">
                            Temos o compromisso de, juntos, buscarmos as melhores opções de investimento para você e sua empresa, sempre levando em conta o seu perfil de investimento com foco nos seus objetivos a curto, médio e longo prazo.
                        </p>
                    </div>
                    <div class="col">
                        <div class="d-flex flex-row flex-nowrap align-content-center gap-1 py-3 justify-content-start align-items-end">
                            <img role="img" src="{{ asset('assets/svg/tick-outline.svg') }}">

                            <h4 class="fw-bold text-uppercase m-0">
                                Transparência
                            </h4>
                        </div>

                        <p class="fw-lighter">
                            Nossos profissionais atuam há mais de três décadas no mercado financeiro garantindo o acompanhamento necessário e o repasse de todas as informações importantes. Enquanto a gente se preocupa em fazer o seu futuro acontecer, você aproveita a vida.
                        </p>
                    </div>
                    <div class="col">
                        <div class="d-flex flex-row flex-nowrap align-content-center gap-1 py-3 justify-content-start align-items-end">
                            <img role="img" src="{{ asset('assets/svg/tick-outline.svg') }}">
                            <h4 class="fw-bold text-uppercase m-0">
                                Relacionamento
                            </h4>
                        </div>
                        <p class="fw-lighter">
                            Seja pelo canal digital ou presencial, manter um atendimento humanizado e personalizado, para nós, é uma questão primordial.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="company-specs">
            <div class="vstack text-center text-white">
                <div class="spec py-2 py-md-5 px-0 px-md-9">
                    <div class="content">
                        <p>
                            Nossa <strong>Missão</strong> é apoiar o investidor e zelar pelo seu patrimônio
                        </p>
                    </div>
                </div>
                <div class="spec py-2 py-md-5 px-0 px-md-9">
                    <div class="content">
                        <p>
                            <strong>Visão</strong> sólida de olhar para o futuro e antecipá-lo com soluções que superem suas metas financeiras.
                        </p>
                    </div>
                </div>
                <div class="spec py-2 py-md-5 px-0 px-md-9">
                    <div class="content">
                        <p>
                            Acreditamos na excelência de dentro para fora. E, por isso, nossos <strong>valores</strong> e a relação com nossos investidores é regida pela <strong>ética</strong> e <strong>transparência</strong>. Estamos atentos às necessidades e não medimos esforços para o sucesso em conjunto.                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="p-5 bg-white">
            <div class="p-3 text-center">
                <h2>Conheça nossos sócios fundadores</h2>
            </div>
            <div class="person-wrapper">
                @include('components.elements.person-card', [
                    'fullName' => 'Marcelo Siqueira',
                    'position' => 'Sócio Fundador',
                    'description' => '30 anos de mercado, Profissional CFP®.',
                    'quote' => '“Revolucionar o mercado com a nossa metodologia”',
                    'img' => url('assets/jpg/socios/ms.jpg'),
                    'socialNetworks' => [
                        'linkedin' => 'https://www.linkedin.com/in/marcelo-siqueira-cfp%C2%AE-194bb923/',
                        'instagram' => '',
                        'facebook' => '',
                        'twitter' => ''
]
                ])
                @include('components.elements.person-card', [
                    'fullName' => 'Victor Saad',
                    'position' => 'Sócio Fundador',
                    'description' => '20 anos atuando no segmento de customer success',
                    'quote' => '“Descomplicando o mercado financeiro com jeito fácil e inovador de investir”',
                    'img' => url('assets/jpg/socios/vs.jpg'),
                    'socialNetworks' => [
                        'linkedin' => 'https://www.linkedin.com/in/victor-saad-4b513327/',
                        'instagram' => '',
                        'facebook' => '',
                        'twitter' => ''
]
                ])
                @include('components.elements.person-card', [
                    'fullName' => 'Marisa Simião',
                    'position' => 'Sócia Fundadora',
                    'description' => 'Expertise de 35 anos de mercado',
                    'quote' => '“Transformando sonhos em realidade”',
                    'img' => url('assets/jpg/socios/mas.jpg'),
                    'socialNetworks' => [
                        'linkedin' => 'https://www.linkedin.com/in/marisasimi%C3%A3o/',
                        'instagram' => '',
                        'facebook' => '',
                        'twitter' => ''
]
                ])
            </div>
        </section>

    </div>
@endsection
