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
    public $course_id;
    public function deleteConfirmation($course_id)
    {
        dd($course_id);
        $this->$course_id = $course_id;
        $this->dispatchBrowserEvent('show-delete-confirmation');
        // $course = Course::find($this->course_id);
        // $path = 'uploads/language/'. $course->image;
        // if (File::exists($path)){
        //     File::delete($path);
        // }
        // $course->delete();
        // session()->flash('message','Course deleted');
    }
    public function render()
    {
        $courses = Course::orderBy('id','DESC')->paginate(8);
        return view('livewire.admin.courses.index',['courses'=>$courses]);
    }



}
