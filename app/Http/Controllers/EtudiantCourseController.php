<?php

namespace App\Http\Controllers;

use App\Mail\EmailService;
use App\Models\Course;
use App\Models\Etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;


class EtudiantCourseController extends Controller
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
        $etudiant->courses()->attach($request->courseId);

        $this->sendEmail($etudiant->nom, Course::find($request->courseId)->level, $etudiant->email);
        
        return redirect('/');
    }

    public function sendEmail($name, $level, $email)
    {
        Mail::to($email)->send(new EmailService($name, $level, 'course'));
    }
}
