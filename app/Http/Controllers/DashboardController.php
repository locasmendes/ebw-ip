<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function editHomePage()
    {
        /*
         * $homePage = new Page();
        $pageContent = new \stdClass();


         * 1. Carousel [imagem, titulo, subtitulo, link]
         * 2. Faixa 1 [texto]
         * 3. Faixa 2 [texto, link, texto, link]
         * 4. Depoimentos [nome, foto, posição, texto, [texto, cta, link]]
         * 5. Faixa 3 [titulo, texto, cta, link, 1 ou 2 imagens]
         * transforme a lista acima numa estrutura json para ser salva no banco de dados
         *
         *

        $pageContent->carousel = [
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
        ];
        $pageContent->faixa1 = 'Um portfólio completo para você investir, de acordo com o seu perfil e sua meta financeira.';
        $pageContent->faixa2 = [
            'texto' => 'Faça seu patrimônio crescer',
            'texto2' => 'Invista na sua empresa',
        ];
        $pageContent->depoimentos = [
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
        ];
        $homePage->content = json_encode($pageContent);
        $homePage->save();
        dd($homePage->content);*/
        $page = Page::where('slug', 'home')->first();
        $content = json_decode($page->content);
        $attributes = array_keys(get_object_vars($content));
        return view('dashboard.pages.home', ['slug' => $page->slug, 'content' => $content, 'attributes' => $attributes]);
    }
}
