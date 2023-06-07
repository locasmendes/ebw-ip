<?php

namespace App\Http\Controllers;

use App\Classes\Utils\Utils;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $page = Page::where('slug', 'home')->first();
        $content = json_decode($page->content);
        return view('home.index', ['content' => $content, $pageTitle = 'Home']);
    }

    public function cadastrar(Request $request)
    {
        $request->validate([
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
        $params->mobile = $request->phone;
        $params->profession = $request->profession;
        $params->age = $request->age;
        $params->value = $request->value;
        $params->whatsappOptIn = 'yes';
        $params->emailOptIn = 'yes';
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
        dd($response);

        return redirect()->route('cadastro');
    }
}