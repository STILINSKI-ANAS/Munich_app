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
    public $name;
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
        try {
            $course = Course::find($this->courseId);
            if ($course->Image) {
                $path = 'uploads/Course/' . $course->Image;
                File::delete($path);
            }
            $course->delete();
        } catch (\Throwable $th) {
            session()->flash('error', 'Le cours ne peut pas être supprimé, car il est lié à d\'autres tables comme les inscriptions');
            return redirect()->back();
        }

        $this->showSubmitButton = 'hidden';
        $this->mount();
        session()->flash('success', 'Le cours a été supprimé avec succès');
        return redirect()->back();
    }

    public function render()
    {
        // $courses = Course::orderBy('id','DESC')->paginate(8);
        return view('livewire.admin.courses.index');
    }
}
