<?php

namespace App\Http\Livewire\Admin\Inscriptions\CoursInscriptions;

use App\Models\Etudiant;
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
        $this->etudiants = Etudiant::search($this->search, $this->language, 'courses')
            ->statusFilter($this->status)
            ->orderBy($this->orderBy, 'asc')
            ->get();

        return view('livewire.admin.inscriptions.cours-inscriptions.index');
    }
}
