<?php

namespace App\Http\Livewire\Admin\Inscriptions\TestsInscriptions;

use App\Models\Etudiant;
use App\Models\EtudiantTest;
use App\Models\paiement;
use Illuminate\Database\QueryException;
use Livewire\Component;

class Index extends Component
{
    public $search = '';
    public $etudiants;
    public $orderBy = 'created_at';
    public $status = 'All';
    public $language = 'Allemand';

    public function render()
    {
        $this->etudiants = Etudiant::search($this->search, $this->language, 'tests')
            ->statusFilter($this->status)
            ->orderBy($this->orderBy, 'asc')
            ->get();

        return view('livewire.admin.inscriptions.tests-inscriptions.index');
    }

    public function validerEtudiant($paiementId)
    {
        // Retrieve the Paiement model using the ID
        $paiement = Paiement::find($paiementId);

        // If the Paiement record exists
        if ($paiement) {
            // Update the paiement status to "confirme"
            $paiement->update(['status' => 'confirme']);
//            dump($paiement);
//            // Retrieve the Etudiant model using the EtudiantTest relationship
//            $this->etudiant = $paiement->etudiantTest->etudiant;
//
//            // Update the status of the last test to "confirme"
//            $lastTest = $this->etudiant->tests()->latest()->first();
//            if ($lastTest && $this->etudiant->status == "en attente") {
//                $lastTest->update(['status' => 'confirme']);
//                // You can add additional logic or emit events as needed
//            }

            // You can also emit events or perform additional logic here
        }
    }

    public function getEtudiantsWithTests()
    {

        $etudiantsWithTests = EtudiantTest::with(['etudiant', 'paiement'])->get();
        return $etudiantsWithTests;
        // Retrieve etudiants with their tests
//        return Etudiant::with('tests')->get();
    }


}
