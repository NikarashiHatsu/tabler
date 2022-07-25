<?php

namespace HatsuShiroyuki\Tabler\App\Views\Components\Layouts;

use Illuminate\View\Component;

class Menu extends Component
{
    public function __construct(
        public string $title,
        public string $route,
        public ?string $icon = null,
        public ?string $type = Null,
        public bool $active = false,
    )
    {
        //
    }

    public function render()
    {
        return view('tabler::layouts.menu');
    }
}