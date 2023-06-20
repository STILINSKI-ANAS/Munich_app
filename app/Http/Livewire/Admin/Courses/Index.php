<?php

namespace App\Http\Livewire\Admin\Courses;

use App\Models\Course;
use App\Models\Language;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $course_id;
    public function destroyCourse($course_id)
    {
//        dd($language_id);

        $this->$course_id = $course_id;
    }
    public function render()
    {
        $courses = Course::orderBy('id','DESC')->paginate(10);
        return view('livewire.admin.courses.index',['courses'=>$courses]);
    }



}
