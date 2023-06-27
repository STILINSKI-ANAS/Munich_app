<?php

namespace App\Http\Livewire\Admin\Courses;

use App\Models\Course;
use Livewire\Component;
use Illuminate\Support\Facades\File;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $showSubmitButton = 'hidden';
    public $courses = [];
    public $courseId;
    public function mount()
    {
        $this->courses = Course::all();
    }
    public function createButton($courseId)
    {
        $this->courseId = $courseId;
        $this->showSubmitButton = '';
    }

    public function hide_validation()
    {
        $this->courseId = 0;
        $this->showSubmitButton = 'hidden';
    }

    public function destroyCourse()
    {
        $course = Course::find($this->idLang);
        if ($course->Image) {
            $path = 'uploads/Course/' . $course->Image;
            File::delete($path);
        }
        $course->delete();
        $this->showSubmitButton = 'hidden';
        $this->mount();
    }
    public function render()
    {
        // $courses = Course::orderBy('id','DESC')->paginate(8);
        return view('livewire.admin.courses.index');
    }
}
