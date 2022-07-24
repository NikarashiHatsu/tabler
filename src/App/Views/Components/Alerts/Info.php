<?php

namespace Shiroyuki\Tabler\App\Views\Components\Alerts;

use Illuminate\View\Component;

class Info extends Component {
    public function __construct(
        public ?string $title = null,
    )
    {
        //
    }

    public function render() {
        return view('shiroyuki-tabler::alerts.info');
    }
}