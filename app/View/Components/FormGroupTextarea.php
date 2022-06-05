<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormGroupTextarea extends Component
{
    /**
     * @var mixed
     */
    public $name;
    /**
     * @var mixed
     */
    public $type;
    /**
     * @var mixed
     */
    public $label;
    /**
     * @var mixed
     */
    public $value;
    /**
     * @var mixed
     */
    public $col;
    /**
     * @var mixed
     */
    public $required;
    /**
     * @var mixed
     */
    public $readonly;
    /**
     * @var mixed
     */
    public $rows;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $label, $type = null, $value = null, $rows = 3, $col = null, $required = true, $readonly = false)
    {
        $this->name = $name;
        $this->label = $label;
        $this->type = $type;
        $this->value = $value;
        $this->col = $col;
        $this->required = $required;
        $this->readonly = $readonly;
        $this->rows = $rows;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        if ($this->value == null) {
            return old($this->name);
        }

        return $this->value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form-group-textarea');
    }
}
