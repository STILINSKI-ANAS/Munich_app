<?php

namespace App\Http\Livewire;

use App\Models\Course;
use Livewire\Component;

class SearchCourses extends Component
{
    public $searchTerm = '';

    public function render()
    {
        $courses = Course::where('level', 'like', '%' . $this->searchTerm . '%')
            ->orWhere('overview', 'like', '%' . $this->searchTerm . '%')
            ->get();

        return view('livewire.search-courses', compact('courses'));
    }
}
