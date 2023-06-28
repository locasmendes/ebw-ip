<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;

class TestimonialsSlider extends Component
{

    public mixed $testimonials = [];
    public bool $noPhoto;

    public function __construct($testimonials, $noPhoto = false)
    {
        $this->testimonials = $testimonials;
        $this->noPhoto = $noPhoto;
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
