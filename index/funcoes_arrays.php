<!DOCTYPE html>
<html lang="en" lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php - Funções arrays</title>

</head>

<body>

    <?php

    // ia_array
    /*
    $array = array('Notebook', 'Teclado', 'Mouse', 'HD Externo'); //array simples
    $retorno = is_array($array); //verifica se é um array

    if ($retorno) {
        echo 'Sim, é um array'; //retorna true
    } else {
        echo 'Não, é um array'; //retorna false
    }
    */

    // array_keys
    /*
    $array = [1 => 'a', 7 => 'b', 18 => 'c']; //array associativo
    echo '<pre>';
    var_dump($array); //exibe o array de forma organizada
    print_r($array);
    echo '</pre>';

    $chaves_array = array_keys($array); //retorna as chaves do array
    echo '<pre>';
    print_r($chaves_array);
    echo '</pre>';
    */

    // sort
    /*
    $array = array('Notebook', 'Teclado', 'Mouse', 'HD Externo'); //array simples
    echo '<pre>';
    print_r($array);
    echo '</pre>';

    sort($array); //ordena o array
    echo '<pre>';
    print_r($array);
    echo '</pre>';
    */

    // asort
    /*
    $array = array('Notebook', 'Teclado', 'Mouse', 'HD Externo'); //array simples
    echo '<pre>';
    print_r($array); //exibe o array de forma organizada
    echo '</pre>';

    asort($array); //ordena o array mantendo a associação
    echo '<pre>';
    print_r($array); //ordena o array mantendo a associação
    echo '</pre>';
    */

    // count
    /*
    $array = array('Notebook', 'Teclado', 'Mouse', 'HD Externo'); //array simples
    echo '<pre>';
    print_r($array);
    echo '</pre>';

    count($array); //conta a quantidade de elementos do array
    echo '<pre>';
    print_r($array);
    echo '</pre>';
    */

    // array_merge
    $array = ['Notebook', 'Teclado', 'Mouse', 'HD Externo']; //array simples
    $array2 = ['Monitor', 'Cadeira', 'Roteador']; //array simples
    $array_merge = array_merge($array, $array2); //junta os arrays
    echo '<pre>';
    print_r($array_merge);
    echo '</pre>';

    ?>

</body>

</html>