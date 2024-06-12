@extends('layouts.user')

@section('content')
    <div class="container">
        <div class="alert alert-success" role="alert">
            Votre paiement a été soumis avec succès!
        </div>
        <div class="card">
            <div class="card-header">
                Détails de l'examen
            </div>
            <div class="card-body">
                <h5 class="card-title">Date de l'examen</h5>
                <p class="card-text">{{ $registration->exam->exam_date }}</p>
                <h5 class="card-title">Centre de l'examen</h5>
                <p class="card-text">{{ $registration->exam->exam_center }}</p>
                <h5 class="card-title">Frais d'inscription</h5>
                <p class="card-text">{{ $registration->exam->exam_fee }} MAD</p>
            </div>
        </div>
    </div>
@endsection
