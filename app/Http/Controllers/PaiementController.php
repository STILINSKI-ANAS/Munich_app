<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\paiement;
use App\Models\Test;
use App\Notifications\ExamInvoiceNotification;
use CMI\CmiClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class PaiementController extends Controller
{
    //
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|unique:etudiants',
            'amount' => 'required',
            'EtudId' => 'required',
            'EtudTestId' => 'required',
            'test_id' => 'required',
        ]);

        $date = now();
        $etudiant = Etudiant::findOrFail($validatedData['EtudId']);
        $test = Test::findOrFail($validatedData['test_id']);

        // Get last paiement id
        $last_paiement = paiement::latest()->first();
        $last_paiement_id = $last_paiement ? $last_paiement->id : 1;

        // Generate unique oid (FC-ID-YEAR-TEST_ID-PAIEMENT_ID)
        $oid = 'FC-' . $etudiant->id . '-' . date('Y') . '-' . $test->id . '-' . $last_paiement_id;

        try {
            $client = new CmiClient([
                'storekey' => '902742', // STOREKEY
                'clientid' => '600001579', // CLIENTID
                'oid' => $oid, // COMMAND ID IT MUST BE UNIQUE
                'shopurl' => 'http://127.0.0.1:8000/', // SHOP URL FOR REDIRECTION
                'okUrl' => 'http://127.0.0.1:8000/payementProcess', // REDIRECTION AFTER SUCCEFFUL PAYMENT
                'failUrl' => 'http://127.0.0.1:8000/payementProcess', // REDIRECTION AFTER FAILED PAYMENT
                'email' => $validatedData['email'], // EMAIL OF CLIENT
                'BillToName' => $validatedData['nom'] . ' ' . $validatedData['prenom'], // NAME OF CLIENT
                'BillToCompany' => 'CMI', // COMPANY OF CLIENT
                'amount' => $validatedData['amount'], // AMOUNT OF PAYMENT
                'CallbackURL' => 'http://127.0.0.1:8000/payementProcess', // CALLBACK
            ]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }

        // CREATE INPUTS
        $client->redirect_post();

        // TODO: save the payment in database if the payment is successful
        paiement::create([
            'status' => 'confirmé',
            'amount' => $validatedData['amount'],
            'date' => $date,
            'etudiant_id' => $validatedData['EtudId'],
            'test_id' => $validatedData['test_id'],
        ]);

        // TODO: update etudiant status to 'confirmé' if the payment is successful
        $etudiant->update([
            'status' => 'confirmé',
        ]);

        // TODO: send invoice to etudiant if the payment is successful in email
        $data = [
            'to_name' => $validatedData['nom'] . ' ' . $validatedData['prenom'],
            'to_email' => $validatedData['email'],
            'subject' => 'Inscription au test',
            'body' => 'Vous avez effectué une inscription au test avec succès',
            'amount' => $validatedData['amount'],
            'date' => $date,
            'test' => $test,
            'oid' => $oid,
        ];

        Notification::route('mail', $data['to_email'])->notify(new ExamInvoiceNotification($data));
        return true;
    }
}
