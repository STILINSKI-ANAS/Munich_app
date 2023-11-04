<?php

namespace App\Http\Controllers;

use CMI\CmiClient;
use Illuminate\Http\Request;

class PaiementController extends Controller
{
    //
    public function store(Request $request)
    {
        try {
            $client = new CmiClient([
                'storekey' => 'asdsasada21', // STOREKEY
                'clientid' => 'asdsad12321', // CLIENTID
                'oid' => '135ABC', // COMMAND ID IT MUST BE UNIQUE
                'shopurl' => 'http://127.0.0.1:8000/', // SHOP URL FOR REDIRECTION
                'okUrl' => 'http://127.0.0.1:8000/payementProcess', // REDIRECTION AFTER SUCCEFFUL PAYMENT
                'failUrl' => 'http://127.0.0.1:8000/payementProcess', // REDIRECTION AFTER FAILED PAYMENT
                'email' => 'mehdi.rochdi@gmail.com', // YOUR EMAIL APPEAR IN CMI PLATEFORM
                'BillToName' => 'mehdi rochdi', // YOUR NAME APPEAR IN CMI PLATEFORM
                'BillToCompany' => 'company name', // YOUR COMPANY NAME APPEAR IN CMI PLATEFORM
                'amount' => "1900", // RETRIEVE AMOUNT WITH METHOD POST
                'CallbackURL' => 'http://127.0.0.1:8000/payementProcess', // CALLBACK
            ]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }

        $client->redirect_post(); // CREATE INPUTS

        return view('user.payement')->with([
            'client' => $client
        ]);
    }
}
