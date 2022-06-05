<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormGroupPhoto extends Component
{
    /**
     * @var mixed
     */
    public $name;
    /**
     * @var mixed
     */
    public $label;
    /**
     * @var mixed
     */
    public $col;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $label, $col = null)
    {
        $this->name = $name;
        $this->label = $label;
        $this->col = $col;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form-group-photo');
    }
}
