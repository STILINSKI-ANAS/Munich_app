<?php

namespace App\Http\Livewire\Admin\Tests;

use App\Models\Test;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $test_id;
    protected $listeners = ['deleteCofirmed' => 'delete'];
    
    public function deleteConfirmation($test_id)
    {
        $this->$test_id = $test_id;
        $this->dispatchBrowserEvent('show-delete-confirmation');
    }

    public function render()
    {
        $tests = Test::orderBy('id','DESC')->paginate(8);
        return view('livewire.admin.tests.index')->with([
            'tests' => $tests
        ]);
    }
}