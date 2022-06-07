<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CustomLayout extends Component
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
     * @var mixed
     */
    public $btn;
    /**
     * @var mixed
     */
    public $btnText;
    /**
     * @var mixed
     */
    public $btnIcon;
    /**
     * @var mixed
     */
    public $route;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $type = 'primary', $icon = null, $btn = 'secondary', $route, $btnText, $btnIcon)
    {
        $this->title = $title;
        $this->type = $type;
        $this->icon = $icon;
        $this->btn = $btn;
        $this->route = $route;
        $this->btnText = $btnText;
        $this->btnIcon = $btnIcon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.custom-layout');
    }
}
