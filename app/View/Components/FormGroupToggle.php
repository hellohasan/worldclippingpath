<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormGroupToggle extends Component
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
     * @var mixed
     */
    public $value;
    /**
     * @var mixed
     */
    public $onText;
    /**
     * @var mixed
     */
    public $offText;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $label, $col = null, $value = false, $onText = "ACTIVE", $offText = "DEACTIVE")
    {
        $this->name = $name;
        $this->label = $label;
        $this->col = $col;
        $this->value = $value;
        $this->onText = $onText;
        $this->offText = $offText;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form-group-toggle');
    }
}
