<?php

namespace HatsuShiroyuki\Tabler\App\Views\Components\Form\Input;

use Illuminate\View\Component;

class Select extends Component {
    public function __construct(
        public string $name,
        public ?string $label = null,
    )
    {
        //
    }

    public function render()
    {
        return view('tabler::form.input.select');
    }
}