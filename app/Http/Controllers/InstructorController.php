<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstructorController extends Controller
{
    /**
     * Show the instructor registration form.
     */
    public function index()
    {
        return view('user.Instructor.register');
    }

    /**
     * Process the instructor registration form submission.
     */
    public function register(Request $request)
    {
        // Validate the form data
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'nationality' => 'required|string|max:255',
            'adresse' => 'required|string',
            'email' => 'required|email|unique:instructors|max:255',
            'phone' => 'required|string|max:20',
            'specialisation' => 'required|string|max:255',
            'description' => 'nullable|string',
            'cv_file' => 'nullable|mimes:pdf|max:2048', // Assuming PDF files for CV uploads with a maximum size of 2MB
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Assuming image uploads with a maximum size of 2MB
            'national_id' => 'nullable|string|max:255',
        ]);

        // Handle file uploads
        $cvPath = null;
        $imagePath = null;

        if ($request->hasFile('cv_file')) {
            $cvPath = $request->file('cv_file')->store('cv_files', 'public');
        }

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        // Create a new Instructor instance
        $instructor = new Instructor([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'nationality' => $request->input('nationality'),
            'adresse' => $request->input('adresse'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'specialisation' => $request->input('specialisation'),
            'description' => $request->input('description'),
            'cv_file' => $cvPath,
            'image' => $imagePath,
            'national_id' => $request->input('national_id'),
        ]);

        // Save the instructor record to the database
        $instructor->save();

        // Redirect to a success page or show a success message
        return redirect()->route('instructor.register')->with('success', 'Instructor registration successful!');
    }
}