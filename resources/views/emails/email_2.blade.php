<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body
    style="font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; padding: 20px;">

<p>Chers candidats,</p>

<p>Nous espérons que ce message vous trouve bien.</p>

<p>Nous sommes heureux de vous informer que votre inscription aux examens Telc B1/B2 a été validée avec succès.
    Félicitations pour cette étape importante !</p>

<p>Afin de finaliser votre inscription, nous vous prions de procéder au paiement des frais d'examen et des frais de
    Vorbereitung dans un délai de 48 heures. Passé ce délai, votre candidature sera automatiquement transférée sur la
    liste d'attente, et nous ne pourrons garantir votre participation à la session d'examen.</p>

<p>Voici les détails nécessaires pour effectuer le paiement par virement bancaire :</p>

<ul>
    <li>Banque: Attijariwafa bank</li>
    <li>Titulaire du compte: CDLFC Institut-Munich</li>
    <li>RIB: 007010000798200000010641</li>
    <li>CODE SWIFT: BCMAMAMC</li>
    @if($data['course'] !== null)
        <li>Montant total à payer: {{ $data['amount'] }}Dh
        </li>
    @else
        <li>Montant total à payer: ${{ $data['amount'] }}Dh</li>
    @endif
</ul>

<p>Il est nécessaire et obligatoire d'envoyer le reçu du virement sur lequel le candidat mentionnera son nom et
    prénom.</p>

<p>Veuillez noter que votre place est réservée uniquement après réception du paiement. Assurez-vous de régler la
    totalité des frais avant la date limite mentionnée pour éviter toute complication.</p>

<p>Si vous rencontrez des problèmes ou avez des questions concernant la procédure de paiement, n'hésitez pas à nous
    contacter à <a href="mailto:info@institut-munich.ma">info@institut-munich.ma</a> ou par téléphone au <a
        href="tel:+212667869273">+212 667 869 273</a>.</p>

<p>Nous vous remercions de votre coopération et nous sommes impatients de vous accueillir lors de la session
    d'examen.</p>

<p>Cordialement,</p>

</body>

</html>
