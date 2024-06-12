<!DOCTYPE html>
<html>
<head>
    <title>Détails de l'inscription</title>
</head>
<body>
<h1>Détails de votre inscription</h1>
<p>Bonjour {{ $registration->first_name }},</p>
<p>Merci de vous être inscrit à notre examen. Voici les détails de votre inscription :</p>
<ul>
    <li><strong>Nom :</strong> {{ $registration->first_name }} {{ $registration->last_name }}</li>
    <li><strong>Email :</strong> {{ $registration->email }}</li>
    <li><strong>Téléphone :</strong> {{ $registration->phone }}</li>
    <li><strong>Modules :</strong>
        @php
            $modules = json_decode($registration->modules, true);
        @endphp
        {{ is_array($modules) ? implode(', ', $modules) : 'N/A' }}
    </li>
    <li><strong>Date de l'examen :</strong> {{ $registration->exam_date }}</li>
    <li><strong>Centre de l'examen :</strong> {{ $registration->exam_center }}</li>
    <li><strong>Frais d'inscription :</strong> {{ $registration->exam_fee }} MAD</li>
</ul>
<p>Veuillez suivre les instructions de paiement pour compléter votre inscription.</p>
<p>Merci,</p>
<p>L'équipe d'inscription</p>
</body>
</html>
