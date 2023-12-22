<?php

namespace App\Http\Controllers;

use App\Mail\PayementMail;
use App\Models\Course;
use App\Models\Etudiant;
use App\Models\EtudiantCourse;
use App\Models\EtudiantTest;
use App\Models\paiement;
use App\Models\Test;
use App\Notifications\ExamInvoiceNotification;
use Combindma\Cmi\Cmi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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
            'cin' => 'required',
            'email' => 'required|unique:etudiants',
            'date_naissance' => 'required',
            'lieu_naissance' => 'required',
            'langue_maternelle' => 'required',
            'sexe' => 'required',
            'pays_naissance' => 'required',
            'ville_residence' => 'required',
            'pays_residence' => 'required',
            'amount' => 'required',
            'EtudId' => 'required',
            'EtudTestId' => 'required',
            'test_id' => 'required',
        ]);

        $etudiant = Etudiant::findOrFail($validatedData['EtudId']);

        $etudiant->update([
            'nom' => $validatedData['nom'],
            'prenom' => $validatedData['prenom'],
            'cin' => $validatedData['cin'],
            'dateNaissance' => $validatedData['date_naissance'],
            'lieuNaissance' => $validatedData['lieu_naissance'],
            'langueMaternelle' => $validatedData['langue_maternelle'],
            'sexe' => $validatedData['sexe'],
            'paysNaissance' => $validatedData['pays_naissance'],
            'villeResidence' => $validatedData['ville_residence'],
            'paysResidence' => $validatedData['pays_residence'],
        ]);
        $test = Test::findOrFail($validatedData['test_id']);

        return $this->savePayment($validatedData, $etudiant, $test, null);
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
            'cin' => 'required',
            'date_naissance' => 'required',
            'lieu_naissance' => 'required',
            'langue_maternelle' => 'required',
            'sexe' => 'required',
            'pays_naissance' => 'required',
            'ville_residence' => 'required',
            'pays_residence' => 'required',
            'amount' => 'required',
            'EtudId' => 'required',
            'EtudCourseId' => 'required',
            'course_id' => 'required',
        ]);

        $etudiant = Etudiant::findOrFail($validatedData['EtudId']);

        $etudiant->update([
            'nom' => $validatedData['nom'],
            'prenom' => $validatedData['prenom'],
            'cin' => $validatedData['cin'],
            'dateNaissance' => $validatedData['date_naissance'],
            'lieuNaissance' => $validatedData['lieu_naissance'],
            'langueMaternelle' => $validatedData['langue_maternelle'],
            'sexe' => $validatedData['sexe'],
            'paysNaissance' => $validatedData['pays_naissance'],
            'villeResidence' => $validatedData['ville_residence'],
            'paysResidence' => $validatedData['pays_residence'],
        ]);

        $course = Course::findOrFail($validatedData['course_id']);

        return $this->savePayment($validatedData, $etudiant, null, $course);
    }

    /**
     * Save New Paiement Method (can be test or course) so dynamic
     */
    protected function savePayment(array $validatedData, $etudiant, $test, $course)
    {
        $date = now();

        // Get last paiement id
        $last_paiement = paiement::latest('id')->firstOr(function () {
            return new paiement(['id' => 1]);
        });

        $last_paiement_id = $last_paiement->id;

        // Determine the oid based on whether it's a test or course payment
        $oid = 'FC-' . $etudiant->id . '-' . date('Y') . '-';
        $description = '';

        if ($test) {
            $oid .= $test->id . '-';
            $description = 'Inscription au test avec succès';
        } elseif ($course) {
            $oid .= $course->id . '-';
            $description = 'Inscription au cours avec succès';
        }

        $oid .= $last_paiement_id;

//        $paiement = paiement::create([
//            'oid' => $oid,
//            'status' => 'en attente',
//            'amount' => $validatedData['amount'],
//            'date' => $date,
//            'etudiant_id' => $etudiant->id,
//            'test_id' => $test ? $test->id : null,
//            'course_id' => $course ? $course->id : null,
//        ]);

        $paiementData = [
            'oid' => $oid,
            'status' => 'en attente',
            'amount' => $validatedData['amount'],
            'date' => $date,
            'etudiant_id' => $etudiant->id,
        ];

        if ($test) {
            $paiementData['paymentable_id'] = $test->id;
            $paiementData['paymentable_type'] = EtudiantTest::class;
        } elseif ($course) {
            $paiementData['paymentable_id'] = $course->id;
            $paiementData['paymentable_type'] = EtudiantCourse::class;
        }

        $paiement = Paiement::create($paiementData);

        $etudiantTest = EtudiantTest::find($validatedData['EtudTestId']);

        $etudiantTest->update(['paiement_id' => $paiement->id]);

        $data = [
            'to_name' => $validatedData['nom'] . ' ' . $validatedData['prenom'],
            'to_email' => $validatedData['email'],
            'subject' => $test ? 'Inscription au test' : 'Inscription au cours',
            'body' => $description,
            'amount' => $validatedData['amount'],
            'date' => $date,
            'test' => $test,
            'course' => $course,
            'oid' => $oid,
        ];
        Mail::to($validatedData['email'])->send(new PayementMail($data));

        return view('user.Paiement.ok');
//        dd($paiement);
//        $this->requestPayment($cmiClient, $data);

//        try {
//            $cmiClient = new Cmi();
//            $cmiClient->setOid($oid);
//            $cmiClient->setAmount($validatedData['amount']);
//            $cmiClient->setBillToName($validatedData['nom'] . ' ' . $validatedData['prenom']);
//            $cmiClient->setEmail($validatedData['email']);
//            $cmiClient->setTel('212600000000');
//            $cmiClient->setCurrency('504');
//            $cmiClient->setDescription('ceci est un exemple à utiliser');
//
//            // TODO: save the payment in the database if the payment is successful
//            $paiement = paiement::create([
//                'oid' => $oid,
//                'status' => 'confirmé',
//                'amount' => $validatedData['amount'],
//                'date' => $date,
//                'etudiant_id' => $etudiant->id,
//                'test_id' => $test ? $test->id : null,
//                'course_id' => $course ? $course->id : null,
//            ]);
//
//            // TODO: update etudiant status to 'confirmé' if the payment is successful
//            $etudiant->update([
//                'status' => 'confirmé',
//            ]);
//
//            // TODO: send an invoice to the etudiant if the payment is successful via email
//            $data = [
//                'to_name' => $validatedData['nom'] . ' ' . $validatedData['prenom'],
//                'to_email' => $validatedData['email'],
//                'subject' => $test ? 'Inscription au test' : 'Inscription au cours',
//                'body' => $description,
//                'amount' => $validatedData['amount'],
//                'date' => $date,
//                'test' => $test,
//                'course' => $course,
//                'oid' => $oid,
//            ];
//
//            return $this->requestPayment($cmiClient, $data);
//        } catch (\Exception $e) {
//            return $e->getMessage();
//        }
    }

    /**
     * Ok response from cmi
     */
    public function okUrl(Request $request)
    {
        // Retrieve the oid from the request (you need to adapt this part based on your request structure)
        $oid = $request->input('oid');

        // Find the corresponding paiement
        $paiement = paiement::where('oid', $oid)->first();

        if ($paiement) {
            // Payment is successful, update the student's status to 'confirmé'
            $paiement->etudiant->update(['status' => 'confirmé']);

            // You can add any additional logic or views here as needed
            dump($request->all());

            // Send the email notification
            $data = [
                'to_name' => $paiement->etudiant->nom . ' ' . $paiement->etudiant->prenom,
                'to_email' => $paiement->etudiant->email,
                'subject' => $paiement->test ? 'Inscription au test' : 'Inscription au cours',
                'body' => $paiement->test ? 'Inscription au test avec succès' : 'Inscription au cours avec succès',
                'amount' => $paiement->amount,
                'date' => $paiement->date,
                'test' => $paiement->test,
                'course' => $paiement->course,
                'oid' => $oid,
            ];
        };

        Notification::route('mail', $data['to_email'])->notify(new ExamInvoiceNotification($data));
        return view('user.Paiement.ok');
    }

    /**
     * Fail response from cmi
     */
    public function failUrl(Request $request)
    {
        // Retrieve the oid from the request (you need to adapt this part based on your request structure)
        $oid = $request->input('oid');

        // Find the corresponding paiement
        $paiement = paiement::where('oid', $oid)->first();

        if ($paiement) {
            // Update the paiement status to 'échoué'
            $paiement->update(['status' => 'échoué']);

            // Update the student's status to 'échoué'
            $paiement->etudiant->update(['status' => 'échoué']);
        }

        // You can add any additional logic or views here as needed
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
}
