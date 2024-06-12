<!DOCTYPE html>
<html>
<head>
    <title>Validez votre email</title>
</head>
<body>
<h1>Validez votre email</h1>
<p>Merci de vous être préinscrit à nos examens. Veuillez cliquer sur le lien ci-dessous pour valider votre adresse email :</p>
<a href="{{ url('registration/validate-email/'.$token) }}">Valider mon email</a>
<p>Si vous n'avez pas initié cette demande, veuillez ignorer cet email.</p>
</body>
</html>
