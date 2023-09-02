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
    public function __construct(public $title, public $description,public $content, public $features,public $course, public $langue, public $image, public $price, public $testId)
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
