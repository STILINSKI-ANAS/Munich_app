<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Etudiant;
use App\Models\paiement;
use App\Models\Test;
use App\Notifications\ExamInvoiceNotification;
use Combindma\Cmi\Cmi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class PaiementController extends Controller
{
    use \Combindma\Cmi\Traits\CmiGateway;

    /**
     * Store Test Payment
     */
    public function testPayment(Request $request)
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
        $last_paiement = paiement::latest('id')->firstOr(function () {
            // Return a default paiement model with id 1
            return new paiement(['id' => 1]);
        });

        $last_paiement_id = $last_paiement->id;

        // Generate unique oid (FC-ID-YEAR-TEST_ID-PAIEMENT_ID)
        $oid = 'FC-' . $etudiant->id . '-' . date('Y') . '-' . $test->id . '-' . $last_paiement_id;

        try {
            $cmiClient = new Cmi();
            $cmiClient->setOid($oid);
            $cmiClient->setAmount($validatedData['amount']);
            $cmiClient->setBillToName($validatedData['nom'] . ' ' . $validatedData['prenom']);
            $cmiClient->setEmail($validatedData['email']);
            $cmiClient->setTel('212600000000');
            $cmiClient->setCurrency('504');
            $cmiClient->setDescription('ceci est un exemple à utiliser');

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
                'course' => null,
                'oid' => $oid,
            ];

            Notification::route('mail', $data['to_email'])->notify(new ExamInvoiceNotification($data));

            return $this->requestPayment($cmiClient, $data);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Store Course Payment
     */
    public function coursePayment(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|unique:etudiants',
            'amount' => 'required',
            'EtudId' => 'required',
            'course_id' => 'required',
        ]);

        $date = now();
        $etudiant = Etudiant::findOrFail($validatedData['EtudId']);
        $course = Course::findOrFail($validatedData['course_id']);

        // Get last paiement id
        $last_paiement = paiement::latest()->first();
        $last_paiement_id = $last_paiement ? $last_paiement->id : 1;

        // Generate unique oid (FC-ID-YEAR-TEST_ID-PAIEMENT_ID)
        $oid = 'FC-' . $etudiant->id . '-' . date('Y') . '-' . $course->id . '-' . $last_paiement_id;

        try {
            $cmiClient = new Cmi();
            $cmiClient->setOid($oid);
            $cmiClient->setAmount($validatedData['amount']);
            $cmiClient->setBillToName($validatedData['nom'] . ' ' . $validatedData['prenom']);
            $cmiClient->setEmail($validatedData['email']);
            $cmiClient->setTel('212600000000');
            $cmiClient->setCurrency('504');
            $cmiClient->setDescription('ceci est un exemple à utiliser');

            // TODO: save the payment in database if the payment is successful
            paiement::create([
                'status' => 'confirmé',
                'amount' => $validatedData['amount'],
                'date' => $date,
                'etudiant_id' => $validatedData['EtudId'],
                'test_id' => null,
                'course_id' => $validatedData['course_id'],
            ]);

            // TODO: update etudiant status to 'confirmé' if the payment is successful
            $etudiant->update([
                'status' => 'confirmé',
            ]);

            // TODO: send invoice to etudiant if the payment is successful in email
            $data = [
                'to_name' => $validatedData['nom'] . ' ' . $validatedData['prenom'],
                'to_email' => $validatedData['email'],
                'subject' => 'Inscription au cours',
                'body' => 'Vous avez effectué une inscription au test avec succès',
                'amount' => $validatedData['amount'],
                'date' => $date,
                'test' => null,
                'course' => $course,
                'oid' => $oid,
            ];

            Notification::route('mail', $data['to_email'])->notify(new ExamInvoiceNotification($data));

            return $this->requestPayment($cmiClient, $data);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Ok response from cmi
     */
    public function okUrl(Request $request)
    {
        dump($request->all());

        return view('user.Paiement.ok');
    }

    /**
     * Fail response from cmi
     */
    public function failUrl(Request $request)
    {
        dump($request->all());

        return view('user.Paiement.fail');
    }

    /**
     * Callback response from cmi
     */
    public function callback(Request $request)
    {
        dump($request->all());
    }

    /**
     * Save New Paiement Method (can be test or course) so dynamic
     */
}
