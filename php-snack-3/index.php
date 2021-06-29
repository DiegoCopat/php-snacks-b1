<?php

    

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

    ## Snack 3
    Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
    
     -->
    
    <h1> 

        <?php 
            $numeriCasuali = [];
            while (count($numeriCasuali) < 15) {
                
                $numCasuale = rand(1, 100);

                if (!in_array($numeriCasuali, $numCasuale)) {
                    array_push($numeriCasuali, $numCasuale);
                    echo $numCasuale;
                }
                
            }
        ?>

    </h1>
</body>
</html>