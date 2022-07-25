<?php

namespace HatsuShiroyuki\Tabler\App\Views\Components\Layouts;

use Illuminate\View\Component;

class MenuDropdown extends Component
{
    public function __construct(
        public string $title,
        public ?string $icon,
        public bool $active = false,
    )
    {
        //
    }

    public function render()
    {
        return view('tabler::layouts.menu-dropdown');
    }
}