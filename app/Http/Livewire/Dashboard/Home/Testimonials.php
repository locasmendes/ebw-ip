<?php

namespace App\Http\Livewire\Dashboard\Home;

use Livewire\Component;

class Testimonials extends Component
{
    public mixed $testimonials;

    public function mount($testimonials = [])
    {
        $this->testimonials = $testimonials;
    }
    public function render()
    {
        return view('livewire.dashboard.home.testimonials');
    }
}
