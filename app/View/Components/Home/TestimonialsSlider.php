<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;

class TestimonialsSlider extends Component
{

    public array $testimonials = [];
    public array $chunks = [];

    public function __construct()
    {
        $testimonials = [
            [
                'name' => 'Roberto Williams',
                'profile_photo' => url('assets/jpg/testimonials/i4.jpg'),
                'company' => 'Empresa X',
                'testimonial' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor.'
            ],
            [
                'name' => 'Dan Torres',
                'profile_photo' => url('assets/jpg/testimonials/i3.jpg'),
                'company' => 'Empresa Y',
                'testimonial' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor.'
            ],
            [
                'name' => 'Evelyn Martinez',
                'profile_photo' => url('assets/jpg/testimonials/i5.jpg'),
                'company' => 'Empresa Z',
                'testimonial' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor.'
            ],
            [
                'name' => 'Roberto Torres',
                'profile_photo' => url('assets/jpg/testimonials/i4.jpg'),
                'company' => 'Empresa X',
                'testimonial' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor.'
            ],
            [
                'name' => 'Dan Martinez',
                'profile_photo' => url('assets/jpg/testimonials/i3.jpg'),
                'company' => 'Empresa Y',
                'testimonial' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor.'
            ],
            [
                'name' => 'Evelyn Williams',
                'profile_photo' => url('assets/jpg/testimonials/i5.jpg'),
                'company' => 'Empresa Z',
                'testimonial' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor.'
            ],
        ];

        $chunks = array_chunk($testimonials, 3);

        $this->testimonials = $testimonials;
        $this->chunks = $chunks;
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
