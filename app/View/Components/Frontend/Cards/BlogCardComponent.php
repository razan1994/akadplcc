<?php

namespace App\View\Components\Frontend\Cards;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BlogCardComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public $new
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.frontend.cards.blog-card-component');
    }
}
