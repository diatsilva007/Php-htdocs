<!DOCTYPE html>
<html lang="en" lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php - Variáveis</title>

</head>

<body>

    <?php

        // String
        $nome = 'Diogo Ataide';

        // Int
        $idade = 29;

        // Float
        $peso = 99.9; 

        // Boolean
        $fumante_sn = false; // (true = 1) or (false = 0)   

        // Lógica

        $idade = '30';
        
    ?>

    <h1>Ficha cadastral</h1> <br>
    <p>Nome: <?= $nome ?></p>
    <p>Idade: <?= $idade ?></p>
    <p>Peso: <?= $peso ?></p>
    <p>Fumante: <?= $fumante_sn ?></p>


</body>

</html>