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
        $validated = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
        ]);

        $etudiant = Etudiant::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
        ]);

        $etudiant->courses()->attach($request->courseId);

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

        // get latest etudiant course id
        $etudCourseId = EtudiantCourse::latest()->first()->id;

        return view('user.Paiement.course.index', [
            'etudCourseId' => $etudCourseId,
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
