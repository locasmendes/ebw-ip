<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;

class HeroSlider extends Component
{
    public mixed $slides;

    public function __construct()
    {
        $slides = [
            [
                'cover' => 'EBW_Invest_home.png',
                'title' => 'Sua jornada de investimentos começa agora!',
                'description' => "Nós pensamos no seu futuro, enquanto você vive o presente.",
                'call_to_action' => 'Abra sua conta',
                'link' => route('cadastro')
            ],
            [
                'cover' => 'EBW_2.png',
                'title' => 'O melhor momento para investir é o seu!',
                'description' => "Quando o assunto é investimento, não há fórmulas prontas.
                \n Atue de maneira mais ativa nas decisões do seu futuro e seu patrimônio",
                'call_to_action' => 'Atinja suas metas financeiras',
                'link' => route('cadastro')
            ],
            [
                'cover' => 'EBW_3.png',
                'title' => 'Invista com isenção de Imposto de Renda.',
                'description' => "Há vários investimentos que são isentos de recolhimento de impostos.",
                'call_to_action' => 'Saiba como investir',
                'link' => route('cadastro')
            ],
            [
                'cover' => 'ebw-4.jpg',
                'overlay' => ['url' => 'overlay.png', 'caption' => 'Conquistas'],
                'title' => 'EBW Invest',
                'description' => "Aqui sua assessoria é personalizada, porque para nós você é único.",
                'call_to_action' => 'Fale com o time da EBW Invest',
                'link' => route('cadastro')
            ]
        ];

        //transform the array into a collection of objects
       /* $slides = collect($slides);
        //transform each item of collection to object
        $slides = $slides->map(function ($item) {
            return (object) $item;
        });*/
        $this->slides = $slides;
        //dd($slides, $original);
    }

    public function render()
    {
        return view('components.home.hero-slider');
    }
}
