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
    //$lista_frutas = array('Banana', 'Maçã', 'Morango', 'Uva', 'Abacaxi');

    $lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva', 'Abacaxi'];

    $lista_frutas[] = 'Mamão';

    /*
    echo '<pre>';
    var_dump($lista_frutas);
    echo '</pre>';
    echo '<hr />';
    echo '<pre>';
    print_r($lista_frutas);
    echo '</pre>';
    */

    //echo $lista_frutas[4]; //retorna apenas o índice abacaxi

    //associativos
    $lista_frutas = [
        'a' => 'Banana',
        'b' => 'Maçã',
        'c' => 'Morango',
        '1' => 'Uva',
        '2' => 'Abacaxi'
    ];

    $lista_frutas['w'] = 'Mamão';

    echo '<pre>';
    var_dump($lista_frutas);
    echo '</pre>';

    echo $lista_frutas['w']; //retorna apenas o índice mamão

    ?>

</body>

</html>