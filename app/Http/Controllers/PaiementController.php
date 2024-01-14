<?php

namespace App\Http\Controllers;

use App\Mail\PayementMail;
use App\Mail\PayementValidation;
use App\Models\Course;
use App\Models\Etudiant;
use App\Models\EtudiantCourse;
use App\Models\EtudiantTest;
use App\Models\Language;
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
     * Telc Test Payment
     */
    public function showTestTelcPayment(Request $request)
    {
        // Fetch the testId from query parameters
        // Default to 1 if not provided
        $testId = $request->query('testId', 1);

        // Fetch the test details from the database
        $test = Test::findOrFail($testId);

        // Assume the price and other details are attributes of the Test model
        $amount = $test->price;
        $tax = 0;
        $total = $amount + $tax;

        // Dummy values for etudiant and etudTestId
        // Replace these with actual logic if needed
        $etudiant = ['id' => null]; // Use actual etudiant data if available
        $etudTestId = null; // Use actual etudTestId if available

        $course_inclue_price = 0;

        // check if test has course_id
        if ($test->course_id) {
            $course = $test->course;
            $course_inclue_price = $course->price;
            $amount += $course->price;
        }

        $sub_total = $amount;
        $tax = 0;
        $total = $amount + $tax;

        // Return the payment view with the test details
        return view('user.Paiement.test.static-test', [
            'tax' => $tax,
            'total' => $total,
            'test' => $test,
            'etudiant' => (object)$etudiant, // Casting array to object for consistency
            'etudTestId' => $etudTestId,
            'course_inclue_price' => $course_inclue_price,
        ]);
    }


    /**
     * Store Test Payment 1
     */
    public function testPayment(Request $request)
    {

        $validatedData = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'cin' => 'required',
            'email' => 'required',
            'date_naissance' => 'required',
            'lieu_naissance' => 'required',
            'langue_maternelle' => 'required',
            'sexe' => 'required',
            'ecrit_or_oral' => 'required',
            'niveau' => 'required',
            'pays_naissance' => 'required',
            'ville_residence' => 'required',
            'pays_residence' => 'required',
            'amount' => 'required',
            'EtudId' => 'sometimes|nullable',
            'EtudTestId' => 'sometimes|nullable',
            'test_id' => 'required',
        ]);


        // Handle Etudiant creation or update
        if (!empty($validatedData['EtudId'])) {
            $etudiant = Etudiant::findOrFail($validatedData['EtudId']);
            $etudiant->update([
                'nom' => $validatedData['nom'],
                'prenom' => $validatedData['prenom'],
                'cin' => $validatedData['cin'],
                'email' => $validatedData['email'],
                'dateNaissance' => $validatedData['date_naissance'],
                'lieuNaissance' => $validatedData['lieu_naissance'],
                'langueMaternelle' => $validatedData['langue_maternelle'],
                'sexe' => $validatedData['sexe'],
                'paysNaissance' => $validatedData['pays_naissance'],
                'villeResidence' => $validatedData['ville_residence'],
                'paysResidence' => $validatedData['pays_residence'],
            ]);
        } else {
            $etudiant = Etudiant::create([
                'nom' => $validatedData['nom'],
                'prenom' => $validatedData['prenom'],
                'cin' => $validatedData['cin'],
                'email' => $validatedData['email'],
                'dateNaissance' => $validatedData['date_naissance'],
                'lieuNaissance' => $validatedData['lieu_naissance'],
                'langueMaternelle' => $validatedData['langue_maternelle'],
                'sexe' => $validatedData['sexe'],
                'paysNaissance' => $validatedData['pays_naissance'],
                'villeResidence' => $validatedData['ville_residence'],
                'paysResidence' => $validatedData['pays_residence'],
            ]);
        }


        // Fetch or create the EtudiantTest
        if (!empty($validatedData['EtudTestId'])) {
            $etudiantTest = EtudiantTest::findOrFail($validatedData['EtudTestId']);
        } else {
            $etudiantTest = new EtudiantTest([
                'etudiant_id' => $etudiant->id,
                'test_id' => $validatedData['test_id'],
                'type' => $validatedData['ecrit_or_oral'],
                'niveau' => $validatedData['niveau'],
            ]);
            $etudiantTest->save();
        }
//        dd($etudiant, $etudiantTest);

        // Fetch the Test
        $test = Test::findOrFail($validatedData['test_id']);

        // Proceed with the payment process
        return $this->savePayment($validatedData, $etudiant, $test, null, $etudiantTest, null);
    }

    /**
     * Store Course Payment
     */
    public function coursePayment(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'cin' => 'required',
            'date_naissance' => 'required',
            'lieu_naissance' => 'required',
            'langue_maternelle' => 'required',
            'sexe' => 'required',
            'ecrit_or_oral' => 'required',
            'pays_naissance' => 'required',
            'ville_residence' => 'required',
            'pays_residence' => 'required',
            'amount' => 'required',
            'EtudId' => 'required',
            'EtudCourseId' => '',
            'course_id' => 'required',
        ]);

        $etudiant = Etudiant::findOrFail($validatedData['EtudId']);

        $etudiantCourse = EtudiantCourse::findOrFail($validatedData['EtudCourseId']);
        if ($etudiantCourse) {
            $etudiantCourse->update([
                'type' => $validatedData['ecrit_or_oral'],
            ]);
        }

        // update etudiant
        $etudiant->update([
            'nom' => $validatedData['nom'],
            'prenom' => $validatedData['prenom'],
            'cin' => $validatedData['cin'],
            'email' => $validatedData['email'],
            'dateNaissance' => $validatedData['date_naissance'],
            'lieuNaissance' => $validatedData['lieu_naissance'],
            'langueMaternelle' => $validatedData['langue_maternelle'],
            'sexe' => $validatedData['sexe'],
            'paysNaissance' => $validatedData['pays_naissance'],
            'villeResidence' => $validatedData['ville_residence'],
            'paysResidence' => $validatedData['pays_residence'],
        ]);

        $course = Course::findOrFail($validatedData['course_id']);

        return $this->savePayment($validatedData, $etudiant, null, $course, null, $etudiantCourse);
    }

    /**
     * Valier Course Payment 1
     */
    public function validerCoursePayment1(Request $request)
    {
        $etudiant = Etudiant::findOrFail($request->idEtudiant);
        $user = $etudiant->user;

        // Fetching the payment details
        $etudiantCourse = EtudiantCourse::where('etudiant_id', $request->idEtudiant)
            ->where('course_id', $request->idCourse)
            ->firstOrFail();
        $payment = paiement::findOrFail($etudiantCourse->paiement_id);
        $amount = $payment->amount;

        $data = [
            'to_name' => $etudiant->nom . ' ' . $etudiant->prenom,
            'to_email' => $request->email,
            'subject' => 'Confirmation de paiement et validation de votre inscription aux cours',
            'body' => 'Inscription au cours avec succès',
            'oid' => $request->oid,
            'amount' => $amount,
        ];

        // change status of etudiant to 'confirmé'
        $etudiant->update(['status_1' => 'confirmé']);

        Mail::to($user->email)->send(new PayementValidation($data, 'emails.email_2'));

        return view('admin.inscriptions.cours-inscriptions.index');
    }

    /**
     * Valier Course Payment 2
     */
    public function validerCoursePayment2(Request $request)
    {
        $etudiant = Etudiant::findOrFail($request->idEtudiant);
        $user = $etudiant->user;

        // Fetching the payment details
        $etudiantCourse = EtudiantCourse::where('etudiant_id', $request->idEtudiant)
            ->where('course_id', $request->idCourse)
            ->firstOrFail();
        $payment = paiement::findOrFail($etudiantCourse->paiement_id);
        $amount = $payment->amount;

        $data = [
            'to_name' => $etudiant->nom . ' ' . $etudiant->prenom,
            'to_email' => $request->email,
            'subject' => 'Confirmation de paiement et validation de votre inscription aux cours',
            'body' => 'Inscription au cours avec succès',
            'oid' => $request->oid,
            'amount' => $amount,
        ];

        // change status of etudiant to 'confirmé'
        $etudiant->update(['status_2' => 'confirmé']);

        Mail::to($user->email)->send(new PayementValidation($data, 'emails.email_3_course'));

        return view('admin.inscriptions.cours-inscriptions.index');
    }

    /**
     * Valider Test Payment 1
     */
    public function validerTestPayment1(Request $request)
    {
        $etudiant = Etudiant::findOrFail($request->idEtudiant);
        $user = $etudiant->user;

        // Fetching the payment details
        $etudiantTest = EtudiantTest::findOrFail($request->etudiantTest);
        $payment = paiement::findOrFail($etudiantTest->paiement_id);
        $amount = $payment->amount;

        $data = [
            'to_name' => $etudiant->nom . ' ' . $etudiant->prenom,
            'to_email' => $request->email,
            'subject' => 'Confirmation de paiement et validation de votre inscription aux tests',
            'body' => 'Inscription au test avec succès',
            'oid' => $request->oid,
            'amount' => $amount,
        ];

        // change status of payment of etudiantTest to 'confirmé'
        $etudiantTest = EtudiantTest::findOrFail($request->etudiantTest);
        $payment = paiement::findOrFail($etudiantTest->paiement_id);
        $payment->update(['status_1' => 'confirmé']);

        Mail::to($etudiant->email)->send(new PayementValidation($data, 'emails.email_2'));

        return view('admin.inscriptions.tests-inscriptions.index');
    }

    /**
     * Valider Test Payment 2
     */
    public function validerTestPayment2(Request $request)
    {
        $etudiant = Etudiant::findOrFail($request->idEtudiant);
        $user = $etudiant->user;

        // Fetching the payment details
        $etudiantTest = EtudiantTest::findOrFail($request->etudiantTest);
        $payment = paiement::findOrFail($etudiantTest->paiement_id);
        $amount = $payment->amount;

        $data = [
            'to_name' => $etudiant->nom . ' ' . $etudiant->prenom,
            'to_email' => $request->email,
            'subject' => 'Confirmation de paiement et validation de votre inscription aux tests',
            'body' => 'Inscription au test avec succès',
            'oid' => $request->oid,
            'amount' => $amount,
        ];

        // change status of payment of etudiantTest to 'confirmé'
        $etudiantTest = EtudiantTest::findOrFail($request->etudiantTest);
        $payment = paiement::findOrFail($etudiantTest->paiement_id);
        $payment->update(['status_2' => 'confirmé']);

        Mail::to($etudiant->email)->send(new PayementValidation($data, 'emails.email_3_test'));

        return view('admin.inscriptions.tests-inscriptions.index');
    }

    /**
     * Save New Paiement Method (can be test or course) so dynamic
     */
    protected function savePayment(array $validatedData, $etudiant, $test, $course, $etudiantTest = null, $etudiantCourse = null)
    {
        $date = now();

        // Get last payment id
        $lastPaiement = paiement::latest('id')->firstOr(function () {
            return new paiement(['id' => 1]);
        });
        // dd($lastPaiement);

        $lastPaiementId = $lastPaiement->id;

        // Determine the oid based on whether it's a test or course payment
        $oid = 'FC-' . $etudiant->id . '-' . date('Y') . '-';
        $description = '';

        if ($test) {
            $oid .= $test->id . '-';
            $description = 'Inscription au test avec succès';
        }

        $oid .= $lastPaiementId;

        $paiementData = [
            'oid' => $oid,
            'status' => 'en attente',
            'amount' => $validatedData['amount'],
            'date' => $date,
            'etudiant_id' => $etudiant->id,
        ];

        $paiement = Paiement::create($paiementData);
        if ($etudiantTest != null) {
            $etudiantTest->update(['paiement_id' => $paiement->id]);
        }
//        dd($etudiantTest);


        $data = [
            'to_name' => $validatedData['nom'] . ' ' . $validatedData['prenom'],
            'to_email' => $validatedData['email'],
            'subject' => $test ? 'Inscription au test' : 'Inscription au cours',
            'body' => $description,
            'amount' => $validatedData['amount'],
            'date' => $date,
            'test' => $test,
            'course' => $course,
            'oid' => $oid
        ];

        Mail::to($validatedData['email'])->send(new PayementMail($data, 'emails.email_1'));

        $languages = Language::all();

        return redirect()->route('paymentSuccess', ['oid' => $oid, 'languages' => $languages]);
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
        $languages = Language::all();
        return view('user.Paiement.ok')->with(['languages' => $languages]);
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
