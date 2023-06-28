<?php

namespace App\Http\Controllers;

use App\Classes\Utils\Utils;
use App\Models\HeroSlide;
use App\Models\Page;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $page = Page::where('slug', 'home')->first();
        $heroSlides = HeroSlide::all();
        $testimonials = Testimonial::all();
        $content = json_decode($page->content);
        return view('home.index',
            [
                'content' => $content,
                'heroSlides' => $heroSlides,
                'testimonials' => $testimonials,
                ]
        );
    }

    public function about()
    {
        $directors = \App\Models\Director::all();
        return view('sobre.index', ['directors' => $directors]);
    }

    public function cadastrar(Request $request)
    {
        //sanitize request->phone
        $request->validate([
            'captcha' => 'hiddencaptcha',
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'profession' => 'required',
            'age' => 'required',
            'value' => 'required',
        ]);

        $params = new \stdClass();

        $params->name = $request->name;
        $params->email = $request->email;
        $params->mobile = str_replace([' ', '(', ')', '-'], '', $request->phone);
        $params->profession = $request->profession;
        $params->age = $request->age;
        $params->value = $request->value;
        $params->whatsappOptIn = $request->whatsappOptIn;
        $params->emailOptIn = $request->emailOptIn;
        $params->rulerId = Utils::getRulerId();

        //transform $params to array
        $params = (array) $params;

        $client = new \GuzzleHttp\Client();
        $headers = [
            'Content-Type' => 'application/x-www-form-urlencoded',
            'Authorization' => Utils::getBearerToken(),
        ];

        $response = $client->request('POST', Utils::getApiUrl(), [
            'headers' => $headers,
            'form_params' => $params
        ]);

        $response = json_decode($response->getBody()->getContents());

        return redirect()->route('cadastro')->with('success', 'Seu cadastro foi realizado com sucesso!');
    }
}
