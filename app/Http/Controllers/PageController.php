<?php

namespace App\Http\Controllers;

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
}
