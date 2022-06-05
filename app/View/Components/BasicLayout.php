<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BasicLayout extends Component
{
    /**
     * @var mixed
     */
    public $title;
    /**
     * @var mixed
     */
    public $type;
    /**
     * @var mixed
     */
    public $icon;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $type = 'secondary', $icon = null)
    {
        $this->title = $title;
        $this->type = $type;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.basic-layout');
    }
}
