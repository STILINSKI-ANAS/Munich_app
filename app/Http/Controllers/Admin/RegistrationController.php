<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index(Request $request)
    {
        $query = Registration::with('exam');

        if ($request->has('name') && !empty($request->name)) {
            $query->where(function ($q) use ($request) {
                $q->where('first_name', 'like', '%' . $request->name . '%')
                    ->orWhere('last_name', 'like', '%' . $request->name . '%');
            });
        }

        if ($request->has('exam_title') && !empty($request->exam_title)) {
            $query->whereHas('exam', function ($q) use ($request) {
                $q->where('title', 'like', '%' . $request->exam_title . '%');
            });
        }

        if ($request->has('exam_date') && !empty($request->exam_date)) {
            $query->whereHas('exam', function ($q) use ($request) {
                $q->whereDate('exam_date', $request->exam_date);
            });
        }

        if ($request->has('email_verified') && $request->email_verified !== '') {
            $query->where('email_verified', $request->email_verified);
        }

        $registrations = $query->paginate(10);

        return view('admin.registrations.index', compact('registrations'));
    }
    public function edit(Registration $registration)
    {
        return view('admin.registrations.edit', compact('registration'));
    }

    public function update(Request $request, Registration $registration)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'phone' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'birth_place' => 'required|string|max:255',
            'birth_country' => 'required|string|max:255',
            'modules' => 'required|array',
            'modules.*' => 'string|max:255',
            'exam_id' => 'required|integer|exists:exams,id',
        ]);

        $registration->update([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'gender' => $request->input('gender'),
            'birth_date' => $request->input('birth_date'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'birth_place' => $request->input('birth_place'),
            'birth_country' => $request->input('birth_country'),
            'modules' => json_encode($request->input('modules')),
            'exam_id' => $request->input('exam_id'),
        ]);

        return redirect()->route('admin.registrations.index')->with('success', 'Registration updated successfully.');
    }
}
