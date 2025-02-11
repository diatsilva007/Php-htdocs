<!DOCTYPE html>
<html lang="en" lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php - Funções arrays</title>

</head>

<body>

    <?php

    // Funções para arrays
    $array = array('Notebook', 'Teclado', 'Mouse', 'HD Externo'); //array simples
    $retorno = is_array($array); //verifica se é um array

    if ($retorno) {
        echo 'Sim, é um array'; //retorna true
    } else {
        echo 'Não, é um array'; //retorna false
    }

    ?>

</body>

</html>