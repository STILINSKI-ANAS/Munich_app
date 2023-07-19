<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Daf extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $niveau,public $price)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.daf');
    }
}
