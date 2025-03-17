<?php

namespace App\View\Components\Cards;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BackgroundVideoCard extends Component
{
    public string $title;
    public string $description;
    public string $videoUrl;
    /**
     * Create a new component instance.
     */
    public function __construct(
        string $title = '',
        string $description = '',
        string $videoUrl = ''
    )
    {
        $this->title = $title;
        $this->description = $description;
        $this->videoUrl = $videoUrl;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cards.background-video-card');
    }
}
