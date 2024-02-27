


<?php 
    // variabile che prende tramite GET e il name il testo inserito
    $testo_inserito = $_POST['paragrafo'];

    // variabile che prende tramite GET e il name la parola da censurare
    $parola_da_censurare = $_POST['censura'];

    // variabile che prende la parola da censurare e il testo inserito e gli applica la censura
    $testo_censurato = str_replace($parola_da_censurare, 'xxx' ,$testo_inserito);

?>



<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>DBadWors Result</title>

</head>

<body>

    <!-- testo intero con controllo della lunghezza -->
    <h1>Il testo che hai inserito è:</h1>

    <p><?php echo $testo_inserito ?></p>

    <p>e ha una lunghezza di <?php echo strlen($testo_inserito);  ?></p>


    <!-- testo censurtato con coltrollo della lunghezza -->
    <h1>Il testo con la censura è:</h1>

    <p><?php echo $testo_censurato ?></p>
        
    <p>e ha una lunghezza di <?php echo strlen($testo_censurato);  ?></p>   
        
</body>
</html>

<!-- terminato esercizio -->