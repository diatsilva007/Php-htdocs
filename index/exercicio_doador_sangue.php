<!DOCTYPE html>
<html lang="en" lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php - Exercício doador de sangue</title>

</head>

<body>

    <!-- Exercício para identificar doador de sangue e se atende aos requisitos -->

    <?php

        $idade = 31;
        $peso = 100;

        if ( ($idade >= 16 && $idade <= 69) && $peso >= 50) {
            echo "Atende aos requisitos";
        } else {
            echo "Não atende aos requisitos";
        } 

    ?>

</body>

</html>