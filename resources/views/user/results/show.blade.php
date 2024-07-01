@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Détails du Résultat</h1>
        <div class="card">
            <div class="card-header">
                Résultat pour {{ $result->convocation->registration->first_name }} {{ $result->convocation->registration->last_name }}
            </div>
            <div class="card-body">
                <p><strong>Nom:</strong> {{ $result->convocation->registration->last_name }}</p>
                <p><strong>Prénom:</strong> {{ $result->convocation->registration->first_name }}</p>
                <p><strong>CIN:</strong> {{ $result->convocation->registration->cin }}</p>
                <p><strong>Examen:</strong> {{ $result->convocation->exam->title }}</p>
                <p><strong>Date de l'Examen:</strong> {{ $result->convocation->exam->exam_date }}</p>
                <p><strong>Écrit:</strong> {{ $result->ecrit }} ({{ $result->note_ecrit }})</p>
                <p><strong>Orale:</strong> {{ $result->orale }} ({{ $result->note_orale }})</p>
                <p><strong>Résultats:</strong> {{ $result->resultats }}</p>
            </div>
        </div>
    </div>
@endsection
