<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Registration;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //
    public function form()
    {
        return view('user.payment.form');
    }

    public function submit(Request $request)
    {
        // Validate the request input
        $request->validate([
            'registration_reference' => 'required|string',
            'payment_reference' => 'required|string',
            'payment_date' => 'required|date',
            'payment_receipt' => 'nullable|file|mimes:jpeg,png,pdf'
        ]);

        $payment = new Payment();
        $registration = Registration::where('cin', $request->registration_reference)
            ->where('payment_ref', $request->payment_reference)
            ->first();

        if ($registration) {
            $payment->registration_id = $registration->id;
            $payment->payment_reference = $request->payment_reference;
            $payment->payment_date = $request->payment_date;

            if ($request->hasFile('payment_receipt')) {
                $payment->payment_receipt = $request->file('payment_receipt')->store('payment_receipts', 'private');
            }

            $payment->save();

            // Store the registration ID in the session
            session(['registration_id' => $registration->id]);

            return redirect()->route('payment.confirm')->with('success', 'Payment submitted successfully!');
        }

        return redirect()->route('payment.form')->with('error', 'Invalid registration reference or payment reference!');
    }


    public function confirm(Request $request)
    {
        // Get registration_id from session or request
        $registration_id = session('registration_id', $request->registration_id);
        $registration = Registration::find($registration_id);

        if ($registration) {
            return view('user.payment.confirm', compact('registration'));
        }

        return redirect()->route('payment.form')->with('error', 'Registration not found!');
    }
    public function prepayement(){

        return view('user.payment.prepayement');
    }
}
