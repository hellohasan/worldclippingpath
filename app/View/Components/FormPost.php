<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormPost extends Component
{
    /**
     * @var mixed
     */
    public $action;
    /**
     * @var mixed
     */
    public $isPut;
    /**
     * @var mixed
     */
    public $enctype;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($action, $isPut = false, $enctype = false)
    {
        $this->action = $action;
        $this->isPut = $isPut;
        $this->enctype = $enctype;
    }

    public function getEnctype()
    {
        if ($this->enctype) {
            return 'multipart/form-data';
        }

        return '';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form-post');
    }
}
