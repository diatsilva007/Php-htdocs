<!DOCTYPE html>
<html lang="en" lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php - Exercício simulando sorteio da mega sena</title>

</head>

<body>

    <?php

    // Lógica para simulação do sorteio da mega sena
    $numeros = array();

    // Gera 6 números aleatórios entre 1 e 60
    while (count($numeros) <= 5) {
        $numeroAleatorio = mt_rand(1, 60);
        if (!in_array($numeroAleatorio, $numeros)) {
            $numeros[] = $numeroAleatorio;
        }
    }

    // Ordena os números para melhor legibilidade
    sort($numeros);

    // Imprime os números de forma legível
    echo '<p>Números sorteados: ' . implode(', ', $numeros) . '</p>';

    /*
    echo '<pre>';
    print_r($numeros);
    echo '</pre>';
    */

    ?>

</body>

</html>