<?php

namespace App\View\Components\Cards;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CableCardComponent extends Component
{
    public string $imagePosition;
    public string $imageUrl;

    public string $title;

    public string $description;
    /**
     * Create a new component instance.
     */
    public function __construct(
        string $imagePosition = 'left',
        string $imageUrl = '',
        string $title = '',
        string $description = ''
    )
    {
        $this->imagePosition = $imagePosition;
        $this->imageUrl = $imageUrl;
        $this->title = $title;
        $this->description = $description;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cards.cable-card-component');
    }
}
