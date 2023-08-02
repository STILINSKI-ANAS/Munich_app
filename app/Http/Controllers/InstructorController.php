<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Instructor;
use App\Models\Language;
use App\Models\Test;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    /**
     * Show the instructor registration form.
     */
    public function index()
    {

        $languages = Language::all();
        $tests = Test::all();
        $categories = Category::all();
        return view('user.Instructor.register')->with([
            'languages' => $languages,
            'tests' => $tests,
            'categories'=>$categories
        ]);
    }

    /**
     * Process the instructor registration form submission.
     */
    public function store(Request $request)
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
        if ($instructor->save()) {
            // Move the uploaded files to the instructor's folder
            if ($cvPath) {
                $cvPath = $request->file('cv_file')->store('uploads/Instructor/' . $instructor->id . '/cv/' . rand(10, 99), 'public');
                $instructor->cv_file = $cvPath;
            }

            if ($imagePath) {
                $imagePath = $request->file('image')->store('uploads/Instructor/' . $instructor->id . '/image/' . rand(10, 99), 'public');
                $instructor->image = $imagePath;
            }

            // Update the instructor record with the new file paths
            $instructor->save();

            // Redirect to a success page or show a success message
            return redirect()->route('instructor.register')->with('success', 'Instructor registration successful!');
        } else {
            // If there was an error, display it to identify the issue
            dd("Error: Unable to save instructor record.");
        }


    }
}
