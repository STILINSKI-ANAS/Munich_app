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
        <h4>Preparation C1 en ligne:</h4>
        <ul>
            <li>20 lessons + 10LMS</li>
            <li>Cours : 1200dh</li>
            <li>Examen : 2000dh</li>
        </ul>
    </div>

    <!-- Second Column -->
    <div>
        <h4>Preparation C2 en ligne:</h4>
        <ul>
            <li>20 lessons + 10LMS</li>
            <li>Cours : 1200dh</li>
            <li>Examen : 2000dh</li>
        </ul>
    </div>
</div>
</body>
</html>
