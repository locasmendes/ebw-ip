<?php

namespace App\Http\Controllers;

use App\Classes\Utils\Utils;
use App\Models\Application;
use App\Models\HeroSlide;
use App\Models\Page;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $page = Page::where('slug', 'about-us')->first();
        $content = json_decode($page->content);
        $content = get_object_vars($content);
        $content['directors'] = $directors;
        return view('sobre.index', $content);
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

    public function registerResume(Request $request)
    {
        try {
            $resume = new Application();
            $resume->fullName = $request->fullName;
            $resume->email = $request->email;
            $resume->mobile = $request->phone;
            $resume->city = $request->city;
            $resume->state = $request->state;
            $resume->hasAncord = (bool)$request->ancord;
            $resume->linkedin = $request->linkedin;
            $file = $request->file('cv');
            $resumeUrl = $this->uploadResumeAndGetUrl($file);
            $resume->resumeUrl = $resumeUrl;
            $resume->save();
            return redirect()->route('trabalhe-conosco')->with('message', 'Seu currículo foi enviado com sucesso!');
        } catch (\Throwable $th) {
            return redirect()->route('trabalhe-conosco')->with('message', 'Ocorreu um erro ao enviar seu currículo!');
        }
 }

    public function uploadResumeAndGetUrl($file)
    {
        try {
            $fileName = $file->getClientOriginalName();
            //sanitize file name
            $fileName = str_replace(' ', '_', $fileName);
            $file->storeAs('public/resumes', $fileName);
            $resumeUrl = Storage::url("public/resumes/{$fileName}");
            return $resumeUrl;
        } catch (\Throwable $th) {
            return null;
        }
    }
}
