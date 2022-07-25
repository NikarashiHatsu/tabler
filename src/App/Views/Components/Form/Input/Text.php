<?php

namespace HatsuShiroyuki\Tabler\App\Views\Components\Form\Input;

use Illuminate\View\Component;

class Text extends Component {
    public function __construct(
        public string $name,
        public ?string $label = null,
        public ?string $placeholder = null,
        public ?string $value = null,
    )
    {
        //
    }

    public function render()
    {
        return view('tabler::form.input.text');
    }
}