<?php

namespace App\Http\Livewire\Admin\Etudiant;

use App\Models\Etudiant;
use Livewire\Component;

class Index extends Component
{
    public $name;
    public $showSubmitButton = 'hidden';
    public $etudiants = [];
    public $idIns;
    public function mount()
    {
        $this->etudiants = Etudiant::all();
    }
    public function createButton($idIns){
        $this->idIns = $idIns;
        $this->showSubmitButton = '';
    }

    public function hide_validation()
    {
        $this->idIns = 0;
        $this->showSubmitButton = 'hidden';
    }

    public function destroyLanguage()
    {
        $etudiant = Etudiant::find($this->idIns);
        dd($etudiant);
        $etudiant->delete();
        $this->showSubmitButton = 'hidden';
        $this->mount();
    }
    public function render()
    {
        return view('livewire.admin.etudiant.index');
    }
}
