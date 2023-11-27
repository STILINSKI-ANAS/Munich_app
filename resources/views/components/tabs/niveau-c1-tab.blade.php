<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .content {
            display: flex;
            justify-content: space-between;
            gap: 2rem;
        }

        .content > div {
            width: 100%; /* Make both columns take up the full width initially */
        }

        @media (max-width: 768px) {
            .content {
                flex-direction: column; /* Switch to column layout on screens smaller than 768px */
            }

            .content > div {
                width: auto; /* Allow each div to take its own width in column layout */
            }
        }
    </style>
</head>
<body>
<div class="content"
     style="display: flex; justify-content: space-between; gap: 2rem; padding: 2rem;">
    <!-- First Column -->
    <div>
        <h4>En général</h4>
        <div class="d-flex flex-column gap-4">
            <div>
                telc signifie « The European Langage Certificates » – les certificats de langues européens. Le
                développement et l'organisation du système internationalement reconnu de tests de langues européens
                standardisés sont assurés par l'organisation à but non lucratif telc – Langage Tests.
            </div>
            <div style="margin-bottom: 1rem;">
                Que vous travailliez dans une entreprise internationale ou à l'étranger, la connaissance d'une langue
                étrangère est toujours un plus. Les responsables des ressources humaines peuvent voir sur votre
                certificat
                telc le niveau auquel vous parlez une langue, ce qui augmentera certainement vos chances dans l'emploi.
            </div>
        </div>

        <h4>Centre d'examen telc agréé</h4>
        <div>
            Allez à l'Académie ! En tant que centre de tests et d'examens reconnu pour des examens de langues
            internationalement reconnus, Düsseldorf offre la possibilité de se préparer spécifiquement aux examens puis,
            avec des compétences linguistiques appropriées, de les acquérir à Düsseldorf ou dans nos écoles partenaires
            à l'étranger.
        </div>
    </div>

    <!-- Second Column -->
    <div>
        <h4>Certificat</h4>
        <div class="d-flex flex-column gap-4">
            <div>
                La preuve de compétences en langues étrangères dans des institutions universitaires ou gouvernementales
                nécessite généralement un examen de langue officiellement reconnu.
            </div>
            <div>
                Dans notre école de langues à Düsseldorf, il est possible, entre autres, de participer aux certificats
                de
                langue telc suivants :
            </div>
            <ul>
                <li>telc allemand A1</li>
                <li>telc allemand A2</li>
                <li>telc allemand B1/certificat allemand</li>
                <li>telc allemand B2</li>
                <li>telc German C1 General (teste les compétences générales en allemand à un niveau très avancé).</li>
                <li>
                    telc German C1 University (teste les compétences en allemand liées à l'université à un niveau très
                    avancé).
                </li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>
