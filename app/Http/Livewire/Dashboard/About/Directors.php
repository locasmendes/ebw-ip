<?php

namespace App\Http\Livewire\Dashboard\About;

use App\Models\Director;
use Livewire\Component;

class Directors extends Component
{
    public $directors;

    public $fullName;
    public $position;
    public $description;
    public $quote;
    public $img;
    public $linkedin;

    public $updateMode = false;
    public $director_id;
    public array $fields = [
        [
            'type' => 'text',
            'name' => 'fullName',
            'label' => 'Nome completo',
        ],
        [
            'type' => 'text',
            'name' => 'position',
            'label' => 'Cargo',
        ],
        [
            'type' => 'text',
            'name' => 'description',
            'label' => 'Descrição',
        ],
        [
            'type' => 'text',
            'name' => 'quote',
            'label' => 'Citação',
        ],
        [
            'type' => 'text',
            'name' => 'img',
            'label' => 'Imagem',
        ],
        [
            'type' => 'text',
            'name' => 'linkedin',
            'label' => 'Linkedin',
        ],
    ];

    public function render()
    {
        $this->directors = Director::all();
        return view('livewire.dashboard.about.directors');
    }

    public function resetInputFields()
    {
        $this->fullName = '';
        $this->position = '';
        $this->description = '';
        $this->quote = '';
        $this->img = '';
        $this->linkedin = '';
    }

    public function store()
    {
        Director::create([
            'fullName' => $this->fullName,
            'position' => $this->position,
            'description' => $this->description,
            'quote' => $this->quote,
            'img' => $this->img,
            'linkedin' => $this->linkedin,
        ]);

        session()->flash('message', 'Sócio adicionado com sucesso!');

        $this->resetInputFields();
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $director = Director::where('id', $id)->first();
        $this->fullName = $director->fullName;
        $this->position = $director->position;
        $this->description = $director->description;
        $this->quote = $director->quote;
        $this->img = $director->img;
        $this->linkedin = $director->linkedin;
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function update()
    {
        if ($this->director_id) {
            $director = Director::find($this->director_id);
            $director->update([
                'fullName' => $this->fullName,
                'position' => $this->position,
                'description' => $this->description,
                'quote' => $this->quote,
                'img' => $this->img,
                'linkedin' => $this->linkedin,
            ]);
            $this->updateMode = false;
            session()->flash('message', 'Sócio atualizado com sucesso!');
            $this->resetInputFields();
        }
    }

    public function delete($id)
    {
        if ($id) {
            Director::where('id', $id)->delete();
            session()->flash('message', 'Sócio deletado com sucesso!');
        }
    }
}
