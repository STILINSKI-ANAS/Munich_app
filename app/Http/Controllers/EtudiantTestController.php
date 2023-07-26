<?php

namespace App\Http\Controllers;

use App\Http\Requests\EtudiantRequest;
use App\Mail\EmailService;
use App\Models\Etudiant;
use App\Models\EtudiantTest;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class EtudiantTestController extends Controller
{

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nom' => 'required',
            'prenom' => 'required',
            'sexe' => 'required',
            'dateNaissance' => 'required',
            'tel' => 'required',
            'email' => 'required|unique:etudiants',
            'placeOfBirth' => 'required',
            'countryOfBirth' => 'required',
            'cin' => 'required',
            'addresse' => 'required',
            'testId' => 'required',
        ]);
        
        $etudiant = Etudiant::create($validator->validated());
        $etudiant->tests()->attach($request->testId);

        $this->sendEmail($etudiant->nom, Test::find($request->testId)->level, $etudiant->email);
        
        return redirect('/');
    }
    
    public function sendEmail($name, $level, $email)
    {
        Mail::to($email)->send(new EmailService($name, $level));
    }

   
}
