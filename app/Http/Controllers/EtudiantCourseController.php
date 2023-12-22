<?php

namespace App\Http\Controllers;

use App\Mail\EmailService;
use App\Models\Course;
use App\Models\Etudiant;
use App\Models\EtudiantCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
            'courseId' => 'required',
        ]);

        $etudiant = Etudiant::create($validator->validated());
        $etudiant->courses()->attach($request->courseId);

        $this->sendEmail($etudiant->nom, Course::find($request->courseId)->level, $etudiant->email);

        $etudiant->user_id = Auth::user()->id;
        $etudiant->save();
        $etudiantCourse = EtudiantCourse::create([
            'etudiant_id' => $etudiant->id,
            'course_id' => $request->courseId,
        ]);

        $course = Course::findOrFail($request->courseId);
        $amount = $course->price;
        $sub_total = $amount;
        $tax = 0;
        $total = $amount + $tax;
        return view('user.Paiement.course.index', [
            'etudCourseId' => $etudiantCourse->id,
            'etudiant' => $etudiant,
            'sub_total' => $sub_total,
            'tax' => $tax,
            'total' => $total,
            'course' => $course,
        ]);
    }

    public function sendEmail($name, $level, $email)
    {
        Mail::to($email)->send(new EmailService($name, $level, 'course'));
    }
}
