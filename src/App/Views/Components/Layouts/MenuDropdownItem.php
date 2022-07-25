<?php

namespace HatsuShiroyuki\Tabler\App\Views\Components\Layouts;

use Illuminate\View\Component;

class MenuDropdownItem extends Component
{
    public function __construct(
        public string $title,
        public string $route,
        public bool $active = false,
    )
    {
        //
    }

    public function render()
    {
        return view('tabler::layouts.menu-dropdown-item');
    }
}