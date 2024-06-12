@extends('layouts.user')

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('payment.submit') }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="registration_id" value="{{ session('registration_id') }}">
            <div class="form-group">
                <label for="registration_reference">Référence d'inscription</label>
                <input type="text" class="form-control" id="registration_reference" name="registration_reference" required>
            </div>
            <div class="form-group">
                <label for="payment_reference">Référence de paiement</label>
                <input type="text" class="form-control" id="payment_reference" name="payment_reference" required>
            </div>
            <div class="form-group">
                <label for="payment_date">Date de paiement</label>
                <input type="date" class="form-control" id="payment_date" name="payment_date" required>
            </div>
            <div class="form-group">
                <label for="payment_receipt">Reçu de paiement</label>
                <input type="file" class="form-control" id="payment_receipt" name="payment_receipt" required>
            </div>
            <button type="submit" class="btn btn-primary">Soumettre</button>
        </form>
    </div>
@endsection
