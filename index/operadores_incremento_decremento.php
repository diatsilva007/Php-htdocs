<!DOCTYPE html>
<html lang="en" lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php - Operadores de incremento e decremento</title>

</head>

<body>

    <h3>Pós-incremento</h3>

    <?php

    // Operadores de incremento e decremento

    $a = 7; // Incre

    echo "O valor contido em a é: $a <br/>";
    echo 'O valor contido em a após o incremento é: ' . $a++ . ' <br/>';
    echo "O valor atualizado é: $a "; // Increment


    ?>

    <h3>Pré-incremento</h3>

    <?php

    // Operadores de incremento e decremento

    $a = 7; // Incre

    echo "O valor contido em a é: $a <br/>";
    echo 'O valor contido em a pré o incremento é: ' . ++$a . ' <br/>'; // Pre increment
    echo "O valor atualizado é: $a "; // Pre increment


    ?>

    <h3>Pós-decremento</h3>

    <?php

    // Operadores de incremento e decremento

    $a = 7; // Incre

    echo "O valor contido em a é: $a <br/>";
    echo 'O valor contido em a após o decremento é: ' . $a-- . ' <br/>';
    echo "O valor atualizado é: $a "; // Increment


    ?>

    <h3>Pré-decremento</h3>

    <?php

    // Operadores de incremento e decremento

    $a = 7; // Incre

    echo "O valor contido em a é: $a <br/>";
    echo 'O valor contido em a após o pré deremento é: ' . --$a . ' <br/>';
    echo "O valor atualizado é: $a "; // Increment


    ?>

</body>

</html>