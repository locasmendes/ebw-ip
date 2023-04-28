<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class Register extends Component
{
    public array $fields;
    public string $formId = 'register-form';
    public string $submitText = 'Comece agora a sua jornada';
    public bool $showLabel = false;

    public function __construct()
    {
        $fields = [
            [
                'name' => 'name',
                'label' => 'Nome',
                'type' => 'text',
                'placeholder' => 'Nome',
                'required' => true,
            ],
            [
                'name' => 'email',
                'label' => 'E-mail',
                'type' => 'email',
                'placeholder' => 'E-mail',
                'required' => true,
            ],
            [
                'name' => 'phone',
                'label' => 'Telefone',
                'type' => 'text',
                'placeholder' => 'Telefone',
                'required' => true,
            ],
            [
                'name' => 'profession',
                'label' => 'Profissão',
                'type' => 'text',
                'placeholder' => 'Profissão',
                'required' => true,
            ],
            [
                'name' => 'age',
                'label' => 'Idade',
                'type' => 'text',
                'placeholder' => 'Idade',
                'required' => true,
            ],
            [
                'name' => 'value',
                'label' => 'Valor disponível para o investimento',
                'type' => 'text',
                'placeholder' => 'Valor disponível para o investimento',
                'required' => true,
            ],
        ];

        if ($this->showLabel === false){
            foreach ($fields as $key => $field) {
                unset($fields[$key]['label']);
            }
        }
        $this->fields = $fields;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.register');
    }
}
