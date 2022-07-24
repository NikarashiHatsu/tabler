<?php

namespace Shiroyuki\Tabler\App\Views\Components\Form;

use Illuminate\View\Component;

class Alerts extends Component {
    public function __construct(
        public ?string $errorTitle = null,
        public ?string $infoTitle = null,
        public ?string $successTitle = null,
        public ?string $warningTitle = null,
    ) {
        //
    }

    public function render() {
        return view('shiroyuki-tabler::form.alerts');
    }
}