<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class AppLayout extends Component
{
    public string $header;

    /**
     * Create a new component instance.
     *
     * @param string|null $header
     */
    public function __construct(?string $header = null)
    {
        $this->header = $header ?? 'Default Header'; // Puedes establecer un valor predeterminado
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('layouts.app');
    }
}
