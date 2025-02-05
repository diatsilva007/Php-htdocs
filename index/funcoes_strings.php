<!DOCTYPE html>
<html lang="en" lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php - Funções Strings</title>

</head>

<body>

    <?php

    $texto = 'Curso completo de PHP';

    //String to lower
    echo $texto . '<br>';
    echo strtolower($texto) . '<br>';

    echo '<hr/>';
    //String to upper
    echo $texto . '<br>';
    echo strtoupper($texto) . '<br>';

    echo '<hr/>';
    //Upper case first 
    echo $texto . '<br>';
    echo ucfirst($texto) . '<br>';

    echo '<hr/>';
    //String to uper
    echo $texto . '<br>';
    echo strlen($texto) . '<br>';

    echo '<hr/>';
    //String replace
    echo $texto . '<br>';
    echo str_replace('PHP', 'JavaScript', $texto) . '<br>';

    echo '<hr/>';
    //String substr
    echo $texto . '<br>';
    // ''Curso Completo de PHP'
    // 0,1,2,3,4,5 ... 20
    echo substr($texto, 0, 14) . '...', '<br>';

    ?>

</body>

</html>