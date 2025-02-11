<!DOCTYPE html>
<html lang="en" lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php - Array Multidimensional</title>

</head>

<body>

    <?php

        //$listas_coisas = array();
        $listas_coisas = [];

        $listas_coisas['frutas'] = array(1 =>'Banana', 2 => 'Maçã', 3 => 'Morango', 4 => 'Uva');
        $listas_coisas['pessoas'] = array(1 => 'Diogo', 2 => 'José', 3 => 'Solange');

        echo '<pre>';
        print_r($listas_coisas);
        echo '</pre>';

    ?>

</body>

</html>