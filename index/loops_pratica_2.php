<!DOCTYPE html>
<html lang="en" lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php - Loops na prática 2</title>

</head>

<body>

    <?php

    // Loops na prática 2    

    $funcionarios = array('Diogo', 'José', 'Solange');

    echo '<pre>';
    print_r($funcionarios);
    echo '</pre>';

    foreach ($funcionarios as $funcionario) {
        echo $funcionario . '<br>';
    }

    ?>

</body>

</html>