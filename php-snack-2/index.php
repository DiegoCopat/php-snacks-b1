<?php 

?>


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
    
    <!-- 
    ISTRUZIONI PER IL PROGETTO

    ## Snack 2

    Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

     -->

    <!-- verifica che ci siano tutte le sezioni richieste -->
    <?php 
        
        if(empty($_GET["name"]) || empty($_GET["mail"]) || empty($_GET["age"])) {
    
    ?>

            <h1>E' presente un errore nei dati inseriti</h1>

    <?php 
    
        }

    
    // /verifica che ci siano tutte le sezioni richieste

    // verifica che il nome sia composto da almeno 3 caratteri
    
        
        elseif(strlen($_GET["name"]) < 3) {
    
    ?>

            <h1>ERRORE - La parola inserita è composta da meno di 3 caratteri</h1>

    <?php 
    
        }

    
    // /verifica che il nome sia composto da almeno 3 caratteri

    // verifica correttezza email
        
        elseif(strpos($_GET["mail"], ".") === false || strpos($_GET["mail"], "@") === false) {
    
    ?>

            <h1>ERRORE - E' stato evidenziato un errore nell'inserimento della mail. Assicurati che sia composta da un . e da una @</h1>

    <?php 
    
        }

    
    // /verifica correttezza email

    // verifica età
        
        elseif(!is_numeric($_GET["age"])) {
    
    ?>

            <h1>ERRORE - L'età inserita non è un valore numerico</h1>

    <?php 
    
        }

    // /verifica età
    
    // Accesso riuscito
        
        else {
    
    ?>

            <h1>SUCCESSO - Hai eseguito l'accesso.</h1>

    <?php 
    
        }

    ?>
    <!-- verifica età -->

</body>
</html>