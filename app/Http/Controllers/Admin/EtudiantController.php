<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EtudiantRequest;
use App\Models\Course;
use App\Models\Etudiant;
use App\Models\Language;
use App\Models\paiement;
use App\Models\Test;

class EtudiantController extends Controller
{
    //
    public function index()
    {
        return view('admin.Etudiant.index');
    }
    public function create()
    {
        return view('admin.Etudiant.create');
    }
    public function store(EtudiantRequest $request)
    {
//        dd($request);
        $validatedData = $request->validated();
//        dd($validatedData);
        if ($validatedData['Cours_options'] != "autre"){
            $validatedData['Cours'] = $validatedData['Cours_options'];
        }
        if ($validatedData['langue_options'] != "autre"){
            $validatedData['langue'] = $validatedData['langue_options'];
        }
        if ($validatedData['referral_options'] != "autre"){
            $validatedData['referral'] = $validatedData['referral_options'];
        }

//        dd($validatedData);
        $Etudiant = Etudiant::create($validatedData);
//        dd($Etudiant);

//        $Paiement = paiement::create(array_merge(
//            ['methode' => 'none'],
//            ['status' => 'en attente'],
//            ['amount' => 0],
//            ['reference' => 'none'],
//            ['inscription_id' => $Etudiant->id],
//        ));
//        dd($Paiement);
        return redirect('/admin/Etudiant')->with('message','Etudiant added');
    }

    public function edit()
    {
        return view('admin.Etudiant.edit');
    }
    public function update(EtudiantRequest $request, $etudiant)
    {
//        dd($request);
        $Etudiant = Etudiant::findOrFail($etudiant);
        $validatedData = $request->validated();
        $validatedData['Cours'] = $validatedData['Cours_options'];
        $validatedData['langue'] = $validatedData['langue_options'];
        $validatedData['referral'] = $validatedData['referral_options'];
//        dd($validatedData);
//        $Etudiant->nom = $validatedData['nom'];
//        $Etudiant->prenom = $validatedData['prenom'];
//        $Etudiant->cin = $validatedData['cin'];
//        $Etudiant->tel = $validatedData['tel'];
//        $Etudiant->addresse = $validatedData['addresse'];
//        $Etudiant->dateNaissance = $validatedData['dateNaissance'];
        $Etudiant->update($validatedData);
//        dd($Etudiant);
        return redirect('/admin/Etudiant')->with('message','Etudiant added');
//        return dd($request->all());
    }
}
