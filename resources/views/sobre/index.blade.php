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
                    <p class="fs-1 fw-light">
                        O nosso principal objetivo é zelar pelo seu patrimônio, porque ele é o responsável pela realização dos seus sonhos e da sua família.
                    </p>
                    <p class="fs-2 fw-lighter">
                        A EBW Invest é Agente Autônomo de Investimentos credenciado à XP Investimentos. Ou seja, somos credenciados à maior corretora da América Latina há duas décadas.
                    </p>
                    <p class="fs-2 fw-lighter">
                        Estamos instalados no coração de São Paulo, uma região de fácil acesso, em um escritório pronto para receber nossos clientes, quando necessário
                    </p>
                </div>
                <div class="col-8 col-md-5 gap-4 photo-wrapper">
                    <div class="row g-0">
                        <div class="col-6">
                            <img src="{{url('assets/png/second-call/sc1.png')}}" alt="" class="img-fluid ratio" style="--bs-aspect-ratio: 150%;">
                        </div>
                        <div class="col-6">
                            <img src="{{url('assets/png/second-call/sc2.png')}}" alt="" class="img-fluid ratio" style="--bs-aspect-ratio: 150%;">
                        </div>
                    </div>
                    <div>
                        <a href="" class="btn border-ebw-golden rounded-pill text-uppercase">Conheça nossa equipe >>></a>
                    </div>
                </div>
            </div>
        </section>
        <section class=" bg-ebw-dark text-white d-flex flex-column about-pillars">
            <div class="wrapper p-5">
                <h2 class="fs-1 fw-bold px-9 py-6 text-center">Nossa assessoria integrativa é baseado em três pilares:</h2>
                <div class="row gap-4 px-9">
                    <div class="col">
                        <h3 class="fs-2 fw-bold text-uppercase"><i class="rounded-circle bg-ebw-golden p-1"><x-ri-check-fill /></i>Responsabilidade</h3>
                        <p class="fs-3 fw-lighter">
                            Temos o compromisso de, juntos, buscarmos as melhores opções de investimento para você e sua empresa, sempre levando em conta o seu perfil de investimento com foco nos seus objetivos a curto, médio e longo prazo.
                        </p>
                    </div>
                    <div class="col">
                        <h3 class="fs-2 fw-bold text-uppercase"><i class="rounded-circle bg-ebw-golden p-1"><x-ri-check-fill /></i>Transparência</h3>
                        <p class="fs-3 fw-lighter">
                            Nossos profissionais atuam há mais de três décadas no mercado financeiro garantindo o acompanhamento necessário e o repasse de todas as informações importantes. Enquanto a gente se preocupa em fazer o seu futuro acontecer, você aproveita a vida.
                        </p>
                    </div>
                    <div class="col">
                        <h3 class="fs-2 fw-bold text-uppercase"><i class="rounded-circle bg-ebw-golden p-1"><x-ri-check-fill /></i>Relacionamento</h3>
                        <p class="fs-3 fw-lighter">
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
                        <h1>Missão</h1>
                        <p>
                            Apoiar o investidor e zelar pelo seu patrimônio.
                        </p>
                    </div>
                </div>
                <div class="spec py-2 py-md-5 px-0 px-md-9">
                    <div class="content">
                        <h1>Visão</h1>
                        <p>
                            Olhar para o futuro e antecipá-lo com soluções que superem suas metas financeiras.
                        </p>
                    </div>
                </div>
                <div class="spec py-2 py-md-5 px-0 px-md-9">
                    <div class="content">
                        <h1>Valores</h1>
                        <p>
                            Acreditamos na excelência de dentro para fora. E, por isso, nossa relação com nossos investidores é regida pela ética e transparência. Estamos atentos às necessidades e não medimos esforços para o sucesso em conjunto.
                        </p>
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
                        'linkedin' => '',
                        'instagram' => '',
                        'facebook' => '',
                        'twitter' => ''
]
                ])
                @include('components.elements.person-card', [
                    'fullName' => 'Vitor Saad',
                    'position' => 'Sócio Fundador',
                    'description' => '20 anos atuando no segmento de customer success',
                    'quote' => '“Descomplicando o mercado financeiro com jeito fácil e inovador de investir”',
                    'img' => url('assets/jpg/socios/vs.jpg'),
                    'socialNetworks' => [
                        'linkedin' => '',
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
                        'linkedin' => '',
                        'instagram' => '',
                        'facebook' => '',
                        'twitter' => ''
]
                ])
            </div>
        </section>

    </div>
@endsection
