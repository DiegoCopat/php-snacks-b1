<?php 
$calendario = [
    [
        "squadraCasa" => "Arcense",
        "squadraOspite" => "Riva Del Garda",
        "puntiSquadraCasa" => "25",
        "puntiSquadraOspite" => "10"
    ],
    [
        "squadraCasa" => "Trento",
        "squadraOspite" => "Brescia",
        "puntiSquadraCasa" => "33",
        "puntiSquadraOspite" => "57"
    ],
    [
        "squadraCasa" => "Rovereto",
        "squadraOspite" => "Verona",
        "puntiSquadraCasa" => "40",
        "puntiSquadraOspite" => "41"
    ],
    [
        "squadraCasa" => "Bolzano",
        "squadraOspite" => "Brunico",
        "puntiSquadraCasa" => "45",
        "puntiSquadraOspite" => "37"
    ]
] 
?>


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 3</title>
</head>
<body>
    
    <!-- 
    ISTRUZIONI PER IL PROGETTO
    ## Snack 1

    Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
    
    Stampiamo a schermo tutte le partite con questo schema.
    Olimpia Milano - Cantù | 55-60
     -->
    
    <h1> 

    <?php 

    // var_dump($calendario);

    for ($i = 0; $i < count($calendario); $i++) {
        $sqCasa = $calendario[$i]['squadraCasa'];
        $sqOspite = $calendario[$i]['squadraOspite'];
        $puntiCasa = $calendario[$i]['puntiSquadraCasa'];
        $puntiOspite = $calendario[$i]['puntiSquadraOspite'];

        echo $sqCasa . " - " . $sqOspite . " | " . $puntiCasa . "-" . $puntiOspite . "<br>";
    }

    ?>

    </h1>
</body>
</html>