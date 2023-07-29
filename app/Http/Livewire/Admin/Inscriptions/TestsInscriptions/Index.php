<?php

namespace App\Http\Livewire\Admin\Inscriptions\TestsInscriptions;

use App\Models\Etudiant;
use Illuminate\Database\QueryException;
use Livewire\Component;

class Index extends Component
{
    public $search = '';
    public $etudiants;
    public $orderBy = 'created_at';
    public $status = 'All';
    public $language = 'English';

    public function render()
    {
        $this->etudiants = Etudiant::search($this->search, $this->language, 'tests')
            ->statusFilter($this->status)
            ->orderBy($this->orderBy, 'asc')
            ->get();

        return view('livewire.admin.inscriptions.tests-inscriptions.index');
    }
}
