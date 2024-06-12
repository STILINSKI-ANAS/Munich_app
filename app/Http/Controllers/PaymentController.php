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
        $payment = new Payment();
        $registration = Registration::where('cin', $request->registration_reference)->first();

        if ($registration) {
            $payment->registration_id = $registration->id;
            $payment->payment_reference = $request->payment_reference;
            $payment->payment_date = $request->payment_date;

            if ($request->hasFile('payment_receipt')) {
                $payment->payment_receipt = $request->payment_receipt->store('payment_receipts');
            }

            $payment->save();
            // Store the registration ID in the session
            session(['registration_id' => $registration->id]);
            return redirect()->route('payment.confirm')->with('success', 'Payment submitted successfully!');
        }

        return redirect()->route('payment.form')->with('error', 'Invalid registration reference!');
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
}
