<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ButtonLayout extends Component
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
    public $btnText;
    /**
     * @var mixed
     */
    public $btnIcon;
    /**
     * @var mixed
     */
    public $btnRoute;
    /**
     * @var mixed
     */
    public $btnClass;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $btnText, $btnIcon, $btnRoute, $btnClass = "success", $type = 'secondary', $icon = null)
    {
        $this->title = $title;
        $this->type = $type;
        $this->icon = $icon;
        $this->btnText = $btnText;
        $this->btnIcon = $btnIcon;
        $this->btnClass = $btnClass;
        $this->btnRoute = $btnRoute;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button-layout');
    }
}
