<?php

namespace App\Http\Controllers;

use App\Models\Convocation;
use App\Models\Registration;
use App\Models\Result;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    //
    public function showCinForm()
    {
        return view('user.results.enter_cin');
    }

    public function searchResults(Request $request)
    {
        $request->validate([
            'cin' => 'required|string',
        ]);

        $registration = Registration::where('cin', $request->cin)->first();

        if (!$registration) {
            return redirect()->back()->withErrors(['cin' => 'CIN non trouvé.']);
        }

        $results = Result::whereHas('convocation', function ($query) use ($registration) {
            $query->where('registration_id', $registration->id);
        })->with('convocation.exam')->get();

        return view('user.results.index', compact('results'));
    }

    public function show($id)
    {
        $result = Result::with('convocation')->findOrFail($id);
        return view('user.results.show', compact('result'));
    }
}
