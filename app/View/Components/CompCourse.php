<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CompCourse extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public $courseId,
        public $level,
        public $overview,
        public $content,
        public $time,
        public $image,
        public $price,
        public $language,
        public $maxPlacements,
        public $totalEtudiantsInscrits,
        public $updatedAt,
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.comp-course');
    }
}
