<?php

namespace App\View\Components\Layout;

use App\Models\Page;
use Illuminate\View\Component;

class MetaData extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $content;

    public function __construct($page = '')
    {
        $data = Page::where('slug', 'seo')->first();
        $content = json_decode($data->content);
        $content->title = $content->title.' | '.$page;
        $this->content = $content;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layout.meta-data');
    }
}
