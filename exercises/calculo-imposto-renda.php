<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício - Cálculo de imposto de renda</title>

</head>

<body>

    <?php

    // Cálculo de imposto de renda

    $salario = 2000;
    $imposto = 0;

    if ($salario <= 1903.98) {
        $imposto = 0;
    } elseif ($salario <= 2826.65) {
        $imposto = ($salario * 7.5) / 100;
    } elseif ($salario <= 3751.05) {
        $imposto = ($salario * 15) / 100;
    } elseif ($salario <= 4664.68) {
        $imposto = ($salario * 22.5) / 100;
    } else {
        $imposto = ($salario * 27.5) / 100;
    }

    echo "Salário: $salario <br>";
    echo "Imposto: $imposto <br>";

    $salario -= $imposto;

    echo "Salário líquido: $salario <br>";

    ?>

</body>

</html>