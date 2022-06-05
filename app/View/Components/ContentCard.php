<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ContentCard extends Component
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
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $type = 'secondary')
    {
        $this->title = $title;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.content-card');
    }
}
