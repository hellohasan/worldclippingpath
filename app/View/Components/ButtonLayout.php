<?php

namespace App\View\Components;

use Illuminate\View\Component;
use phpDocumentor\Reflection\Types\Boolean;

class ButtonLayout extends Component
{

    public function __construct(
        public string $title,
        public string $icon = '',
        public string $btnText = '',
        public string $btnIcon = 'fas fa-list',
        public string $btnRoute = '',
        public string $btnClass = "success",
        public string $type = 'secondary',
        public string $btnAction = 'yes',
        public array $permissions = [],
    ){}

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button-layout');
    }
}
