<?php

namespace App\Http\Livewire\Dashboard\Home;

use App\Models\Testimonial;
use Livewire\Component;

class Testimonials extends Component
{
    public mixed $testimonials;

    public $name;
    public $company;
    public $testimonial;
    public $profile_photo;

    public $updateMode = false;
    public array $fields = [
        [
            'type' => 'text',
            'name' => 'name',
            'label' => 'Nome',
        ],
        [
            'type' => 'text',
            'name' => 'company',
            'label' => 'Empresa',
        ],
        [
            'type' => 'text',
            'name' => 'testimonial',
            'label' => 'Depoimento',
        ],
        [
            'type' => 'text',
            'name' => 'profile_photo',
            'label' => 'Foto de perfil',
        ],
    ];
    public function render()
    {
        $this->testimonials = Testimonial::all();
        return view('livewire.dashboard.home.testimonials');
    }

    public function resetInputFields()
    {
        $this->name = '';
        $this->company = '';
        $this->testimonial = '';
        $this->profile_photo = '';
    }

    public function store()
    {
        Testimonial::create([
            'name' => $this->name,
            'company' => $this->company,
            'testimonial' => $this->testimonial,
            'profile_photo' => $this->profile_photo,
        ]);

        session()->flash('message', 'Testemunho criado com sucesso.');
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $testimonial = Testimonial::where('id', $id)->first();
        $this->name = $testimonial->name;
        $this->company = $testimonial->company;
        $this->testimonial = $testimonial->testimonial;
        $this->profile_photo = $testimonial->profile_photo;
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function update()
    {
        if ($this->testimonial_id) {
            $testimonial = Testimonial::find($this->testimonial_id);
            $testimonial->update([
                'name' => $this->name,
                'company' => $this->company,
                'testimonial' => $this->testimonial,
                'profile_photo' => $this->profile_photo,
            ]);

            $this->updateMode = false;
            session()->flash('message', 'Testemunho atualizado com sucesso.');
            $this->resetInputFields();
        }
    }

    public function delete($id)
    {
        if ($id) {
            Testimonial::where('id', $id)->delete();
            session()->flash('message', 'Testemunho deletado com sucesso.');
        }
    }
}
