<?php

namespace App\View\Components\Elements;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Video extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $src,
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.elements.video');
    }
}
