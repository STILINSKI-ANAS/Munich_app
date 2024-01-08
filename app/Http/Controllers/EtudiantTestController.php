<?php

namespace App\Http\Controllers;

use App\Http\Requests\EtudiantRequest;
use App\Mail\EmailService;
use App\Models\Etudiant;
use App\Models\EtudiantTest;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class EtudiantTestController extends Controller
{
    public function store(Request $request)
    {
        $rules = [
            'nom' => 'required',
            'prenom' => 'required',
//            'sexe' => 'required',
//            'dateNaissance' => 'required',
//            'tel' => 'required',
//            'email' => 'required|unique:etudiants',
//            'placeOfBirth' => 'required',
//            'countryOfBirth' => 'required',
//            'cin' => 'required',
//            'addresse' => 'required',
            'testId' => 'required',
        ];
        $validatedData = $request->validate($rules);

        $etudiant = Etudiant::create($validatedData);

        $etudiant->user_id = Auth::user()->id;
        $etudiant->save();
        $etudiantTest = EtudiantTest::create([
            'etudiant_id' => $etudiant->id, // Replace with the actual etudiant_id
            'test_id' => $request->testId,         // Replace with the actual test_id
        ]);

        $test = Test::findOrFail($request->testId);
        $amount = $test->price;
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

        return view('user.Paiement.test.index', [
            'etudTestId' => $etudiantTest->id,
            'etudiant' => $etudiant,
            'sub_total' => $sub_total,
            'course_inclue_price' => $course_inclue_price,
            'tax' => $tax,
            'total' => $total,
            'test' => $test,
        ]);
    }

    public function step2(Request $request)
    {
        $rules = [
//            'nom' => 'required',
//            'prenom' => 'required',
//            'sexe' => 'required',
//            'dateNaissance' => 'required',
            'tel' => 'required',
//            'email' => 'required|unique:etudiants',
//            'placeOfBirth' => 'required',
//            'countryOfBirth' => 'required',
            'cin' => 'required',
//            'addresse' => 'required',
            'EtudId' => 'required',
            // Add more rules for other attributes as needed
        ];
        $validatedData = $request->validate($rules);

        try {
            // Retrieve the Etudiant instance using findOrFail
            $etudiant = Etudiant::findOrFail($request->EtudId);

            // Update the attributes of the Etudiant model
            $etudiant->update($validatedData);

                return view('user.Paiement.index', ['EtudId' => $etudiant->id]);
//            return redirect(url('/inscriptionstep3'));
//            return dump($etudiant);
        } catch (\Exception $e) {
            return dump($e->getMessage());
        }

    }


    public function sendEmail($name, $level, $email)
    {
        Mail::to($email)->send(new EmailService($name, $level, 'test'));
    }
}
