<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;

class TestimonialsSlider extends Component
{

    public array $testimonials = [];
    public array $chunks = [];

    public function __construct($testimonials)
    {
        foreach ($testimonials as $key => $testimonial) {
            //transform to array recursively
            $testimonials[$key] = json_decode(json_encode($testimonial), true);
        }
        /*$testimonials = [
            [
                'name' => 'Claudio J C França',
                'profile_photo' => url('assets/jpg/testimonials/testimonial1.jpg'),
                'company' => 'Slow Juice',
                'testimonial' => 'Atendimento de excelência assessoria voltada única e exclusivamente para o cliente superou nossas expectativas, recomendo 110%.'
            ],
            [
                'name' => 'Osvaldo Paiva',
                'profile_photo' => url('assets/jpg/testimonials/testimonial2.jpg'),
                'company' => 'EVORA GROUP',
                'testimonial' => 'A Marisa é uma profissional diferenciada. Por estar em linha ao mercado brasileiro assim como o internacional, suas análises e orientações nos propícia sempre muita segurança, assertividade e sensatez atrelado a ótimos resultados em nossa carteira que está sob sua gestão. É o equilíbrio ideal entre o cuidado e performance.'
            ],
            [
                'name' => 'Júlia Araújo Zaccaria',
                'profile_photo' => url('assets/jpg/testimonials/testimonial3.jpg'),
                'company' => 'JVZ Holding',
                'testimonial' => 'Excelente profissional e muito comprometida. Procura entender as minhas necessidades, adequando e ajustando ao meu perfil de investidor. Sempre procura equilibrar riscos e resultados me dando tranquilidade sobre o capital investido.'
            ]
        ];*/

        $chunks = array_chunk($testimonials, 3);

        $this->testimonials = $testimonials;
        $this->chunks = $chunks;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.testimonials-slider');
    }
}
