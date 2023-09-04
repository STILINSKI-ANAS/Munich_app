<?php

namespace App\Http\Livewire\Admin\Etudiant;

use App\Models\Etudiant;
use Illuminate\Database\QueryException;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $name;
    public $showSubmitButton = 'hidden';
    public $etudiants = [];
    public $idIns;
    public $errorMessage;

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
        $this->errorMessage = null;
    }

    public function destroyEtudiant()
    {
        try {
            $etudiant = Etudiant::find($this->idIns);
//        dd($etudiant);
            $etudiant->delete();
            $this->showSubmitButton = 'hidden';
            $this->mount();
        }catch (QueryException $exception){
            $errorCode = $exception->getCode();

            if ($errorCode == 23000) {
                $this->errorMessage = "enable to delete (L'etudiant a acheter un cours ou un test)";
            } else {
                $this->errorMessage = "An error occurred while deleting the student record.";
            }
        }

    }
    public function render()
    {
        return view('livewire.admin.etudiant.index');
    }
}
