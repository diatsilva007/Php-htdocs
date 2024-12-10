<!DOCTYPE html>
<html lang="en" lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php - Casting de tipos</title>

</head>

<body>

    <?php

    // Casting de tipos

    // gettype() => retorna o tipo da variável
    $valor = true;
    //$valor2 = (float) $valor; // retorna o tipo da variável: floa, double.
    //$valor2 = (string) $valor;

    //valor2 = (int) $valor; // retorna o tipo da variável: int.
    //$valor2 = (string) $valor;

    //
    //$valor2 = (boolean) $valor; // retorna o tipo da variável: bool ou boolean

    //$valor2 = (int) $valor;
    $valor2 = (string) $valor;
    $valor3 = (int) $valor2;
    

    echo $valor . ' ' . gettype($valor);
    echo '<br>';
    echo $valor2 . ' ' . gettype($valor2);
    echo '<br>';
    echo $valor3 . ' ' . gettype($valor3);

    ?>

</body>

</html>