<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NiveauA1 extends Component
{
//    public $Niveau;
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
        return view('components.niveau-a1');
    }
}
