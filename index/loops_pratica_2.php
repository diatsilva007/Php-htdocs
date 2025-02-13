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

    $funcionarios = array(
        array('nome' => 'Diogo', 'salário' => 20000, 'data_nascimento' => '22/11/1993'),
        array('nome' => 'José', 'salário' => 5000),
        array('nome' => 'Solange', 'salário' => 8000)
    );

    echo '<pre>';
    print_r($funcionarios);
    echo '</pre>';


    foreach ($funcionarios as $idx => $funcionario) {
        foreach ($funcionario as $idx2 => $valor) {
            echo "$idx2 - $valor <br />";
        }

        echo '<hr />';
    }

    ?>

</body>

</html>