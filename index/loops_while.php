<!DOCTYPE html>
<html lang="en" lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php - Loops while</title>

</head>

<body>

    <?php

    $num = 1;
    // operadores de comparação / lógicos   
    echo '-- Início do loop -- <br/>';

    // operador de incremento / decremento
    while ($num < 10) {

        $num += 1; // critério de parada

        if ($num == 2 || $num == 6) {
            continue;
        }
        echo "$num <br/>";

        /*
        if ($num > 100) {
            break; // interrompe o loop
        }
        */
    }
    echo '-- Fim do loop -- <br/>'

    ?>

</body>

</html>