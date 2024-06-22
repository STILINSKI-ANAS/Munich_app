<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Détails de l'inscription</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .header-image {
            width: 100%;
            max-width: 300px;
            margin: 0 auto 20px;
            display: block;
        }
        .btn-custom {
            background-color: #4CAF50;
            color: #ffffff;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            border-radius: 5px;
            margin: 20px 0;
        }
        .btn-custom:hover {
            background-color: #45a049;
        }
        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 14px;
            color: #999;
        }
    </style>


</head>
<body>
<div class="container">
    <img src="http://institut-munich.com/wp-content/uploads/2019/09/cropped-logo.jpg" class="header-image" alt="Institut Munich Logo">
    <h1 class="text-success">Détails de votre inscription</h1>
    <p>Bonjour {{ $registration->first_name }} {{ $registration->last_name }},</p>
    <p>Merci de vous être inscrit à notre examen. Voici les détails de votre inscription :</p>
    <ul class="list-unstyled">
        <li><strong class="text-success">Nom :</strong> {{ $registration->first_name }} {{ $registration->last_name }}</li>
        <li><strong class="text-success">Email :</strong> {{ $registration->email }}</li>
        <li><strong class="text-success">Téléphone :</strong> {{ $registration->phone }}</li>
        <li><strong class="text-success">Modules :</strong>
            @php
                $modules = json_decode($registration->modules, true);
            @endphp
            {{ is_array($modules) ? implode(', ', $modules) : 'N/A' }}
        </li>
        <li><strong class="text-success">Date de l'examen :</strong> {{ $registration->exam_date }}</li>
        <li><strong class="text-success">Centre de l'examen :</strong> {{ $registration->exam_center }}</li>
        <li><strong class="text-success">Frais d'inscription :</strong> {{ $registration->exam_fee }} MAD</li>
    </ul>

    <p>Afin de finaliser votre inscription, nous vous prions de procéder au paiement des frais d'examen et des frais de Vorbereitung dans un délai de 48 heures. Passé ce délai, votre candidature sera automatiquement transférée sur la liste d'attente, et nous ne pourrons garantir votre participation à la session d'examen.</p>

    <p>Voici les détails nécessaires pour effectuer le paiement par virement bancaire :</p>

    <ul class="list-unstyled">
        <li><strong class="text-success">Banque:</strong> Attijariwafa bank</li>
        <li><strong class="text-success">Titulaire du compte:</strong> CDLFC Institut-Munich</li>
        <li><strong class="text-success">RIB:</strong> 007010000798200000010641</li>
        <li><strong class="text-success">CODE SWIFT:</strong> BCMAMAMC</li>
        <li><strong class="text-success">Montant total à payer:</strong> {{ $registration->exam_fee }} MAD</li>
    </ul>

    <p>Il est nécessaire et obligatoire d'envoyer le reçu du virement sur lequel le candidat mentionnera son nom et prénom.</p>

    <p>Veuillez noter que votre place est réservée uniquement après réception du paiement. Assurez-vous de régler la totalité des frais avant la date limite mentionnée pour éviter toute complication.</p>

    <p>Si vous rencontrez des problèmes ou avez des questions concernant la procédure de paiement, n'hésitez pas à nous contacter à <a href="mailto:info@institut-munich.ma">info@institut-munich.ma</a> ou par téléphone au <a href="tel:+212667869273">+212 667 869 273</a>.</p>

    <p>Nous vous remercions de votre coopération et nous sommes impatients de vous accueillir lors de la session d'examen.</p>

    <p>Merci,</p>
    <p>L'équipe d'inscription</p>
    <div class="footer">
        &copy; {{ date('Y') }} L'équipe d'inscription. Tous droits réservés.
    </div>
</div>
</body>
</html>
