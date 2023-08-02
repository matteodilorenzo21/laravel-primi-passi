<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Primi Passi - Home</title>
    <style>
        h1 {
            font-size: 50px;
        }

        span {
            font-size: 35px;
        }
    </style>
</head>

<body>
    <h1>Bulbasaur</h1>
    <span><b>Tipo: </b>{{ $tipo }},</span><br>
    <span><b>Prima abilità: </b>{{ $primaAbilita }},</span><br>
    <span><b>Abilità speciale: </b>{{ $abilitaSpeciale }},</span><br>
    <span><b>Sesso: </b>{{ $sesso }},</span><br>
    <span><b>Altezza: </b>{{ $altezza }},</span><br>
    <span><b>Peso: </b>{{ $peso }},</span><br>
    <span><b>Tasso di cattura: </b>{{ $tassoDiCattura }}.</span>
</body>

</html>