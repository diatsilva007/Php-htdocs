<!DOCTYPE html>
<html lang="en" lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php - Array Básico</title>

</head>

<body>

    <?php

    // Array básico    

    //sequenciais (numéricos)
    //$lista_frutas = array('Banana', 'Maçã', 'Morango', 'Uva', 'Abacaxi'); //forma tradicional

    $lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva', 'Abacaxi']; //forma mais moderna

    $lista_frutas[] = 'Mamão'; //adiciona um novo elemento ao array

    /*
    echo '<pre>'; //tag para exibir o array de forma organizada
    var_dump($lista_frutas); //exibe o array de forma organizada
    echo '</pre>'; //tag para exibir o array de forma organizada
    echo '<hr />'; //tag para exibir uma linha horizontal
    echo '<pre>'; //tag para exibir o array de forma organizada
    print_r($lista_frutas); //exibe o array de forma organizada
    echo '</pre>'; //tag para exibir o array de forma organizada
    */

    //echo $lista_frutas[4]; //retorna apenas o índice abacaxi

    //associativos
    $lista_frutas = [
        'a' => 'Banana',
        'b' => 'Maçã',
        'c' => 'Morango',
        '1' => 'Uva',
        '2' => 'Abacaxi'
    ]; //forma mais moderna

    $lista_frutas['w'] = 'Mamão'; //adiciona um novo elemento ao array

    echo '<pre>'; //tag para exibir o array de forma organizada
    var_dump($lista_frutas); //exibe o array de forma organizada
    echo '</pre>'; //tag para exibir o array de forma organizada

    echo $lista_frutas['w']; //retorna apenas o índice mamão

    ?>

</body>

</html>