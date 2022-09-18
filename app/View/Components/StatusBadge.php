<?php

namespace App\View\Components;

use Illuminate\View\Component;

class StatusBadge extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public $value,
        public string $successText = 'Activated',
        public string $successClass = 'success',
        public string $failText = 'Deactivated',
        public string $failClass = 'danger',
    )
    {}

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.status-badge');
    }
}
