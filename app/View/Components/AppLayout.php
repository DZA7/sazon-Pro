<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class AppLayout extends Component
{
    public $header;

    /**
     * Create a new component instance.
     *
     * @param string|null $header
     */
    public function __construct($header = null)
    {
        $this->header = $header;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('layouts.app');
    }
}
