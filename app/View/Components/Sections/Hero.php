<?php

namespace App\View\Components\Sections;

use Illuminate\View\Component;

class Hero extends Component
{
    public string $title, $content, $ctaText, $bgUrl, $ctaUrl, $bgColor;
    public array $images;

    public function __construct($title, $content, $ctaText, $bgUrl = null, $bgColor = 'default', $ctaUrl = null, $images = [])
    {
        $this->title = $title;
        $this->content = $content;
        $this->ctaText = $ctaText;
        $this->bgUrl = $bgUrl;
        $this->ctaUrl = $ctaUrl;
        $this->images = $images;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sections.hero');
    }
}
