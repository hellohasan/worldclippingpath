<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormGroupSelect extends Component
{/**
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
    public $options;
    /**
     * @var mixed
     */
    public $selected;
    /**
     * @var mixed
     */
    public $col;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $name, string $label, string $selected = null, string $col = null, $options)
    {
        $this->name = $name;
        $this->label = $label;
        $this->col = $col;
        $this->options = $options;
        $this->selected = old($name, $selected);
    }

    /**
     * @param string $optionName
     * @return mixed
     */
    public function isSelected(string $optionName): bool
    {
        return $optionName === $this->selected;
    }

    public function render()
    {
        return view('components.form-group-select');
    }
}
