<?php

namespace App\Http\Livewire\Admin\Tests;

use App\Models\Language;
use App\Models\Test;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $name;
    public $showSubmitButton = 'hidden';
    public $tests = [];
    public $test_id;

    public function mount()
    {
//        $this->tests = Test::orderBy('id','DESC')->paginate(8);
        $this->tests = Test::all();
//        dd($this->tests);
    }

    public function createButton($test_id)
    {
        $this->test_id = $test_id;
        $this->showSubmitButton = '';
    }

    public function hide_validation()
    {
        $this->test_id = 0;
        $this->showSubmitButton = 'hidden';
    }


    public function destroyTest()
    {
        try {
            $test = Test::find($this->test_id);
            if ($test->Image) {
                $path = 'uploads/language/' . $test->Image;
                File::delete($path);
            }
            $test->delete();
        } catch (\Throwable $th) {
            session()->flash('error', 'L\'examen ne peut pas être supprimé, car il est lié à d\'autres tables comme les inscriptions');
            return redirect()->back();
        }
        $this->showSubmitButton = 'hidden';
        $this->mount();
        session()->flash('success', 'L\'examen a été supprimé avec succès');
        return redirect()->back();
    }
//    public function deleteConfirmation($test_id)
//    {
//        $this->$test_id = $test_id;
//        $this->dispatchBrowserEvent('show-delete-confirmation');
//    }

    public function render()
    {
//        $tests = Test::orderBy('id','DESC')->paginate(8);
        return view('livewire.admin.tests.index');
    }
}
