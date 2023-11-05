<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EtudiantRequest;
use App\Models\Course;
use App\Models\Etudiant;
use App\Models\Language;
use App\Models\paiement;
use App\Models\Test;
use App\Models\User;

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
        $validatedData = $request->validated();
        if ($validatedData['Cours_options'] != "autre") {
            $validatedData['Cours'] = $validatedData['Cours_options'];
        }
        if ($validatedData['langue_options'] != "autre") {
            $validatedData['langue'] = $validatedData['langue_options'];
        }
        if ($validatedData['referral_options'] != "autre") {
            $validatedData['referral'] = $validatedData['referral_options'];
        }

        $Etudiant = Etudiant::create($validatedData);

//        $Paiement = paiement::create([
//            'status' => 'en attente',
//            'amount' => 0,
//            'date' => date('Y-m-d'),
//            'etudiant_id' => $Etudiant->id,
//            'test_id' => 1,
//        ]);
        return redirect('/admin/Etudiant')->with('message', 'Etudiant added');
    }

    public function edit()
    {
        return view('admin.Etudiant.edit');
    }

    public function update(EtudiantRequest $request, $etudiant)
    {
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
        return redirect('/admin/Etudiant')->with('message', 'Etudiant added');
//        return dd($request->all());
    }

    public function createAndAttachUser($etudiantId)
    {
        // Create a new user
        $user = new User();
        $user->name = 'New User'; // Set the user's name as needed
        $user->email = 'user@example.com'; // Set the user's email as needed
        $user->password = bcrypt('password'); // Set the user's password as needed
        $user->save();

        // Attach the user to the etudiant with ID 4
        $etudiant = Etudiant::find($etudiantId);
        if ($etudiant) {
            $etudiant->user_id = $user->id;
            $etudiant->save();
        }

        return response()->json(['message' => 'User created and attached successfully']);
    }

    public function getUserAndAttachedEtudiant($userId)
    {
        // Find the user by ID
        $user = User::find($userId);

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        // Get the attached etudiant data
        $etudiant = $user->etudiant;

        return response()->json([
            'user' => $user,
            'etudiant' => $etudiant->nom,
        ]);
    }

}
