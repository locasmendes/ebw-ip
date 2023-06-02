<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;

class HeroSlider extends Component
{
    public mixed $slides;

    public function __construct($carousel)
    {
        $slides = [];
        /*$slides = [
            [
                'cover' => 'EBW_Invest_home.webp',
                'title' => 'Sua jornada de investimentos começa agora!',
                'description' => "Nós pensamos no seu futuro, enquanto você vive o presente.",
                'call_to_action' => 'Abra sua conta',
                'link' => route('cadastro')
            ],
            [
                'cover' => 'EBW_2.webp',
                'title' => 'O melhor momento para investir é o seu!',
                'description' => "Quando o assunto é investimento, não há fórmulas prontas.
                \n Atue de maneira mais ativa nas decisões do seu futuro e seu patrimônio",
                'call_to_action' => 'Atinja suas metas financeiras',
                'link' => route('cadastro')
            ],
            [
                'cover' => 'EBW_3.webp',
                'title' => 'Invista com isenção de Imposto de Renda.',
                'description' => "Há vários investimentos que são isentos de recolhimento de impostos.",
                'call_to_action' => 'Saiba como investir',
                'link' => route('cadastro')
            ],
            [
                'cover' => 'ebw-4.webp',
                'overlay' => ['url' => 'overlay.png', 'caption' => 'Conquistas'],
                'title' => 'EBW Invest',
                'description' => "Aqui sua assessoria é personalizada, porque para nós você é único.",
                'call_to_action' => 'Fale com o time da EBW Invest',
                'link' => route('cadastro')
            ]
        ];*/
        foreach ($carousel as $item) {
            //transform the object into an array recursively
            $slides[] = json_decode(json_encode($item), true);
        }

        $this->slides = $slides;
    }

    public function render()
    {
        return view('components.home.hero-slider');
    }
}
