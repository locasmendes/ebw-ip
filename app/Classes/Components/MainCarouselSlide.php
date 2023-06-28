<?php

namespace App\Classes\Components;

class MainCarouselSlide
{
    public mixed $title;
    public mixed $description;
    public mixed $cover;
    public mixed $link;
    public mixed $call_to_action;
    public mixed $overlay;
    public mixed $overlay_url;
    public mixed $overlay_caption;

    //create a constructor with optional overlay
    public function __construct(string $title = null, string $description = null, string $cover = null, string $link = null, string $call_to_action = null, $overlay = null)
    {
        $this->title = $title;
        $this->description = $description;
        $this->cover = $cover;
        $this->link = $link;
        $this->call_to_action = $call_to_action;
        if (empty($overlay)){
            $this->overlay = new \stdClass();
            $this->overlay->url = null;
            $this->overlay->caption = null;
        }else {
            $this->overlay = $overlay;
        }
    }

}
