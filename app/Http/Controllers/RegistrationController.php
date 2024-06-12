<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class RegistrationController extends Controller
{
    //
    public function step1(Request $request)
    {
        $request->session()->put('exam_id', $request->exam_id);
        return view('user.registration.step1');
    }

    public function postStep1(Request $request)
    {
        $request->session()->put('cin', $request->cin);
        return redirect()->route('registration.step2');
    }

    public function step2()
    {
        return view('user.registration.step2');
    }

    public function postStep2(Request $request)
    {
        $registration = new Registration();
        $registration->cin = $request->session()->get('cin');
        $registration->first_name = $request->first_name;
        $registration->last_name = $request->last_name;
        $registration->gender = $request->gender;
        $registration->birth_date = $request->birth_date;
        $registration->phone = $request->phone;
        $registration->email = $request->email;
        $registration->birth_place = $request->birth_place;
        $registration->birth_country = $request->birth_country;
        $registration->modules = json_encode($request->modules);
//        $registration->exam_id = $request->exam_id; // Associer l'inscription à un examen
        $registration->exam_id = $request->session()->get('exam_id'); // Associer l'inscription à un examen

        if ($request->hasFile('photo')) {
            $registration->photo_path = $request->photo->store('photos');
        }

        if ($request->hasFile('cin_document')) {
            $registration->cin_path = $request->cin_document->store('cin_documents');
        }

        $token = Str::random(32);
        $registration->email_validation_token = $token;
        $registration->save();

        // Send validation email
        Mail::send('emails.validate', ['token' => $token], function ($message) use ($registration) {
            $message->to($registration->email);
            $message->subject('Validate your email');
        });

        return redirect()->route('exams')->with('success', 'Registration completed successfully! Please check your email to validate it.');
    }


    public function validateEmail($token)
    {
        $registration = Registration::where('email_validation_token', $token)->first();
        if ($registration) {
            $registration->email_verified = true;
            $registration->email_validation_token = null;
            $registration->save();

            // Send details email
            Mail::send('emails.details', ['registration' => $registration], function ($message) use ($registration) {
                $message->to($registration->email);
                $message->subject('Registration Details');
            });

            return redirect()->route('exams')->with('success', 'Email validated successfully!');
        }

        return redirect()->route('exams')->with('error', 'Invalid token!');
    }
}
