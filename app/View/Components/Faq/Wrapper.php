<?php

namespace App\View\Components\Faq;

use Illuminate\View\Component;

class Wrapper extends Component
{
    public mixed $items;

    public function __construct()
    {
        $this->items = \App\Models\Faq\Item::where('is_active', true)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.faq.wrapper');
    }
}
