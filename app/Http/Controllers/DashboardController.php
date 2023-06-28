<?php

namespace App\Http\Controllers;

use App\Models\Director;
use App\Models\HeroSlide;
use App\Models\Page;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    // HOME PAGE
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
        return view('dashboard.pages.home', [
            'slug' => $page->slug,
            'content' => $content,
            'attributes' => $attributes
        ]
        );
    }

    public function saveHomePage(Request $request)
    {
        try {
            $page = Page::where('slug', 'home')->first();
            $content = json_decode($page->content);
            //format Slides
            $keys_start_with_slide = array_filter(array_keys($request->all()), function ($key) {
                return strpos($key, 'slide') === 0;
            });
            $keys_start_with_testimonial = array_filter(array_keys($request->all()), function ($key) {
                return strpos($key, 'testimonial') === 0;
            });
            $testimonial_keys = [
                'testimonial_company' => 'company',
                'testimonial_name' => 'name',
                'testimonial_profile_photo' => 'profile_photo',
                'testimonial_testimonial' => 'testimonial'
            ];
            $slides = [];
            $testimonials = [];
            foreach ($keys_start_with_slide as $key) {
                //transform the $key in the following structure example: slide-1-title => slide[0]['title'] = $request->input($key)
                $elements = explode('_', $key);
                $slide_key = $elements[1];
                $slide_attribute = $elements[2];
                $slides[$slide_key][$slide_attribute] = $request->input($key);
            }
            foreach ($slides as $key => $slide){
                $slides[$key] = (object) $slide;
                if ($slides[$key]->cover === 'ebw-4.webp'){
                    $slides[$key]->overlay = (object) ['url' => 'overlay.png', 'caption' => 'Conquistas'];
                }
                $slides[$key]->call_to_action = $slides[$key]->call;
                unset($slides[$key]->call);
            }
            foreach ($keys_start_with_testimonial as $key) {
                foreach ($testimonial_keys as $getter => $attribute){
                    if (strpos($key, $getter) !== false){
                        $elements = explode('_', $key);
                        $last_element = end($elements);
                        $testimonials[$last_element][$attribute] = $request->input($key);
                    }
                }
            }
            foreach ($testimonials as $key => $testimonial){
                $testimonials[$key] = (object) $testimonial;
            }
            $res = [];
            foreach ($testimonials as $testimonial){
                $model = new Testimonial();
                $model->name = $testimonial->name;
                $model->company = $testimonial->company;
                $model->profile_photo = $testimonial->profile_photo;
                $model->testimonial = $testimonial->testimonial;
                $model->save();
                $res[] = $model->id;
            }
            dd($res);

            $content->carousel = $slides;
            $content->depoimentos = $testimonials;
            $content->faixa1 = $request->input('faixa1');
            $content->faixa2 = new \stdClass();
            $content->faixa2->texto = $request->input('faixa2_texto');
            $content->faixa2->texto2 = $request->input('faixa2_texto2');
            $page->content = json_encode($content);
            dd($content->depoimentos, $request->all());
            $page->save();
            return redirect()->route('dashboard.pages.home')->with('success', 'Página salva com sucesso!');
        } catch (\Exception $e) {
            //redirect with error and form data
            return redirect()->route('dashboard.pages.home')->with('error', 'Erro ao salvar página!')->withInput();
        }
    }

    // SEO
    public function editSeoPage()
    {
        $page = Page::where('slug', 'seo')->first();
        $content = json_decode($page->content);
        $attributes = array_keys(get_object_vars($content));
        return view('dashboard.pages.seo', ['slug' => $page->slug, 'content' => $content, 'attributes' => $attributes]);
    }

    public function saveSeoPage(Request $request)
    {
        try {
            $page = Page::where('slug', 'seo')->first();
            $content = json_decode($page->content);
            $content->title = $request->input('title');
            $content->description = $request->input('description');
            $content->gtm_id = $request->input('gtm_id');
            $content->fb_id = $request->input('fb_id');
            $page->content = json_encode($content);
            $page->save();
            return redirect()->route('dashboard.pages.seo')->with('success', 'Página salva com sucesso!');
        } catch (\Exception $e) {
            return redirect()->route('dashboard.pages.seo')->with('error', 'Erro ao salvar página!');
        }
    }

    // FAQ
    public function editFaqPage()
    {
        $faqItems = DB::table('faq')->get();
        return view('dashboard.pages.faq', ['faqItems' => $faqItems]);
    }

    public function saveFaqPage(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);
        try {
            foreach ($data as $key => $item){
                $element = explode('_', $key);
                $id = $element[2];
                $attribute = $element[1];
                $value = $item;
                if ($attribute == 'visibility'){
                    $attribute = 'is_active';
                }
                DB::table('faq')->where('id', $id)->update([$attribute => $value]);
            }
            //TODO: tratar itens adicionados com o prefixo new e os itens já existentes com o prefixo old
            Artisan::call('page-cache:clear');
            return redirect()->route('dashboard.pages.faq')->with('success', 'Página salva com sucesso!');
        } catch (\Exception $e) {
            return redirect()->route('dashboard.pages.faq')->with('error', 'Erro ao salvar página!'.$e->getMessage());
        }
    }

    public function editAboutPage()
    {
        $directors = \App\Models\Director::all();
        $page = Page::where('slug', 'about-us')->first();
        $content = json_decode($page->content);
        $content = get_object_vars($content);
        $content['directors'] = $directors;
        return view('dashboard.pages.about', $content);
    }

    public function saveAboutPage()
    {
        dd('saveAboutPage');
    }
}
