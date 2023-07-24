<?php

namespace App\Http\Controllers;

use App\Http\Requests\EtudiantRequest;
use App\Models\Etudiant;
use App\Models\EtudiantTest;
use Illuminate\Http\Request;
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
            'email' => 'required',
            'placeOfBirth' => 'required',
            'countryOfBirth' => 'required',
            'cin' => 'required',
            'addresse' => 'required',
            'testId' => 'required',
        ]);
        
        $etudiant = Etudiant::create($validator->validated());
        $etudiant->tests()->attach($request->testId);
        return redirect('/');
    }
}
