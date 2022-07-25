<?php

namespace HatsuShiroyuki\Tabler\App\Views\Components\Alerts;

use Illuminate\View\Component;

class Success extends Component {
    public function __construct(
        public ?string $title = null,
    )
    {
        //
    }

    public function render()
    {
        return view('tabler::alerts.success');
    }
}