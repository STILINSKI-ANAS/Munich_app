<?php

namespace App\Http\Livewire\Admin\Inscriptions\CoursInscriptions;

use App\Models\Course;
use App\Models\EtudiantCourse;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{



    public function render()
    {
        return view('livewire.admin.inscriptions.coursInscriptions.index');
    }


}
