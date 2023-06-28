<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;

class HeroSlider extends Component
{
    public mixed $slides;

    public function __construct($carousel)
    {
        $this->slides = $carousel;
    }

    public function render()
    {
        return view('components.home.hero-slider');
    }
}
