<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormGroupButton extends Component
{
    /**
     * @var mixed
     */
    public $type;
    /**
     * @var mixed
     */
    public $col;
    /**
     * @var mixed
     */
    public $btnClass;
    /**
     * @var mixed
     */
    public $icon;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type = 'submit', $col = null, $btnClass = 'btn-primary', $icon = 'fas fa-paper-plane')
    {
        $this->type = $type;
        $this->col = $col;
        $this->btnClass = $btnClass;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form-group-button');
    }
}
