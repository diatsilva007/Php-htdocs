<!DOCTYPE html>
<html lang="en" lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php - Switch na prática</title>

</head>

<body>

    <?php

    $parametro = false;

    // Exemplo de uso de switch
    switch ($parametro) {
        case 1:
            echo 'Entrou no case 1';
            break;

        case 'abc':
            echo 'Entrou no case 2';
            break;

        case false:
            echo 'Entrou no case false';
            break;

        default: // Se nenhum parâmetro dos cases forem executados cairá no break do default
            echo 'Entrou no default';
            break;
    }

    ?>

</body>

</html> 