<?php

namespace App\Http\Controllers;

use CMI\CmiClient;
use Illuminate\Http\Request;

class PaiementController extends Controller
{
    //
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|unique:etudiants',
            'amount' => 'required',
        ]);

        dump($validatedData);
        try {
            $client = new CmiClient([
                'storekey' => '902742', // STOREKEY
                'clientid' => '600001579', // CLIENTID
                'oid' => '135ABC', // COMMAND ID IT MUST BE UNIQUE
                'shopurl' => 'http://127.0.0.1:8000/', // SHOP URL FOR REDIRECTION
                'okUrl' => 'http://127.0.0.1:8000/payementProcess', // REDIRECTION AFTER SUCCEFFUL PAYMENT
                'failUrl' => 'http://127.0.0.1:8000/payementProcess', // REDIRECTION AFTER FAILED PAYMENT
                'email' => $validatedData['email'], // EMAIL OF CLIENT
                'BillToName' => $validatedData['nom'] . ' ' . $validatedData['prenom'], // NAME OF CLIENT
                'BillToCompany' => 'CMI', // COMPANY OF CLIENT
                'amount' => $validatedData['amount'], // AMOUNT OF PAYMENT
                'CallbackURL' => 'http://127.0.0.1:8000/payementProcess', // CALLBACK
            ]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }

        $client->redirect_post(); // CREATE INPUTS

        return true;
    }
}
