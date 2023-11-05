<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CompTest extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public $title,
        public $testId,
        public $description,
        public $content,
        public $features,
        public $course,
        public $maxPlacements,
        public $totalEtudiantsInscrits,
        public $image,
        public $price,
        public $langue,
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.comp-test');
    }
}
