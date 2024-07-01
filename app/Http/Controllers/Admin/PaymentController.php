<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(Request $request)
    {
        $query = Payment::with('registration.exam');

        if ($request->has('verified') && $request->verified !== '') {
            $query->where('verified', $request->verified);
        }

        $payments = $query->paginate(10);

        return view('admin.payments.index', compact('payments'));
    }

    public function show($id)
    {
        $payment = Payment::with('registration.exam')->findOrFail($id);
        return view('admin.payments.show', compact('payment'));
    }

    public function verify($id)
    {
        $payment = Payment::findOrFail($id);
        $registration = $payment->registration;
        $exam = $registration->exam;

        // Decrement max_placements if the payment is not already verified
        if (!$payment->verified) {
            $exam->max_placements -= 1;
            $exam->save();
        }

        $payment->verified = true;
        $payment->save();

        return redirect()->route('admin.payments.index')->with('success', 'Payment verified successfully.');
    }

    public function showReceipt(Payment $payment)
    {
//        if (!auth()->user()->isAdmin()) {
//            abort(403);
//        }

        $path = storage_path('app/private/' . $payment->payment_receipt);
//        dd($path);
        if (!file_exists($path)) {
            abort(404);
        }

        return response()->file($path);
    }

}
