<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DeleteButton extends Component
{

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public int $id,
        public $text = 'Delete',
        public $modal = 'DeleteModal',
        public $classBtn = 'delete_button',
    ){}

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.delete-button');
    }
}
