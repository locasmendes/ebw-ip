<?php

namespace App\View\Components\ForYou;

use Illuminate\View\Component;

class OptionsSlider extends Component
{
    public array $options = [];
    public array $chunks = [];

    public function __construct()
    {
        $this->options = [
            'CDB, LCI e LCA',
            'Fundos de investimento multimercado',
            'Aplicações em juros',
            'Ações',
            'Fundos de investimento em ações',
            'Outra opção',
            'Mais uma opção',
            'Fundos de investimento em renda fixa',
        ];

        $this->chunks = array_chunk($this->options, 4);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.for-you.options-slider');
    }
}
