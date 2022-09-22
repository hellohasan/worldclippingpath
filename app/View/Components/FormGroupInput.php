<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormGroupInput extends Component
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
    public $step;
    /**
     * @var mixed
     */
    public $readonly;
    /**
     * @var mixed
     */
    public $message;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $label, $type = null, $value = null, $col = null, $message = null, $step = '', $required = true, $readonly = false)
    {
        $this->name = $name;
        $this->label = $label;
        $this->type = $type;
        $this->value = old($name, $value);
        $this->col = $col;
        $this->step = $step;
        $this->required = $required;
        $this->readonly = $readonly;
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        if ($this->type == null) {
            return 'text';
        }

        return $this->type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form-group-input');
    }
}
