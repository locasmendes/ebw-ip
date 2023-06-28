<?php

namespace App\Http\Livewire\Dashboard\Home;

use App\Classes\Components\MainCarouselSlide;
use App\Models\HeroSlide;
use Livewire\Component;

class Carousel extends Component
{
    public mixed $carousels;

    public $title;
    public $description;
    public $link;
    public $cover;
    public $call_to_action;
    public $overlay_url;
    public $overlay_caption;

    //$fields array with type, name and label
    public array $fields = [
        [
            'type' => 'text',
            'name' => 'title',
            'label' => 'Título',
        ],
        [
            'type' => 'text',
            'name' => 'description',
            'label' => 'Descrição',
        ],
        [
            'type' => 'text',
            'name' => 'link',
            'label' => 'Link',
        ],
        [
            'type' => 'text',
            'name' => 'cover',
            'label' => 'Capa',
        ],
        [
            'type' => 'text',
            'name' => 'call_to_action',
            'label' => 'Call to Action',
        ],
        [
            'type' => 'text',
            'name' => 'overlay_url',
            'label' => 'Overlay URL',
        ],
        [
            'type' => 'text',
            'name' => 'overlay_caption',
            'label' => 'Overlay Caption',
        ],
    ];
    public $updateMode = false;




    public function render()
    {
        $this->carousels = HeroSlide::all();

        return view('livewire.dashboard.home.carousel');
    }

    public function resetInputFields()
    {
        $this->title = '';
        $this->description = '';
        $this->link = '';
        $this->cover = '';
        $this->call_to_action = '';
        $this->overlay_url = '';
        $this->overlay_caption = '';
    }

    public function store()
    {
        $slide = new HeroSlide();
        $slide->title = $this->title;
        $slide->description = $this->description;
        $slide->link = $this->link;
        $slide->cover = $this->cover;
        $slide->call_to_action = $this->call_to_action;
        $slide->overlay_url = $this->overlay_url;
        $slide->overlay_caption = $this->overlay_caption;
        $slide->save();

        session()->flash('message', 'Slide criado com sucesso.');
        $this->resetInputFields();
    }

    public function edit($id){
        $this->updateMode = true;
        $slide = HeroSlide::where('id', $id)->first();
        $this->slide_id = $id;
        $this->title = $slide->title;
        $this->description = $slide->description;
        $this->link = $slide->link;
        $this->cover = $slide->cover;
        $this->call_to_action = $slide->call_to_action;
        $this->overlay_url = $slide->overlay_url;
        $this->overlay_caption = $slide->overlay_caption;
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function update()
    {
        if ($this->slide_id) {
            $slide = HeroSlide::find($this->slide_id);
            $slide->update([
                'title' => $this->title,
                'description' => $this->description,
                'link' => $this->link,
                'cover' => $this->cover,
                'call_to_action' => $this->call_to_action,
                'overlay_url' => $this->overlay_url,
                'overlay_caption' => $this->overlay_caption,
            ]);

            $this->updateMode = false;
            session()->flash('message', 'Slide atualizado com sucesso.');
            $this->resetInputFields();
        }
    }

    public function delete($id)
    {
        if ($id) {
            HeroSlide::where('id', $id)->delete();
            session()->flash('message', 'Slide deletado com sucesso.');
        }
    }
}
