<?php

namespace App\View\Components;

use App\Models\Course;
use App\Models\Test;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Widaf extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $niveau,public $price,public $testId)
    {

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $courses = Course::all(); // This assumes you have a 'Course' model representing your courses
        $tests = Test::all(); // This assumes you have a 'Course' model representing your courses
        return view('components.widaf', compact('courses','tests'));
    }
}
