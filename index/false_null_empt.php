<!DOCTYPE html>
<html lang="en" lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php - Array pesquisas</title>

</head>

<body>

    <?php

    //false (true/false) - tipo de dado booleano
    //null e empty - valores especiais

    $funcionario1 = null;
    $funcionario2 = '';
    $funcionario3 = false;

    //valores null
    if (is_null($funcionario1)) {
        echo 'Funcionário 1 não existe.<br>';
    } else {
        echo 'Funcionário 1 existe.<br>';
    }

    echo '<br/>';

    if (is_null($funcionario2)) {
        echo 'Funcionário 1 não existe.<br>';
    } else {
        echo 'Funcionário 1 existe.<br>';
    }

    echo '<br/>';

    if (is_null($funcionario3)) {
        echo 'Funcionário 1 não existe.<br>';
    } else {
        echo 'Funcionário 1 existe.<br>';
    }

    echo '<hr/>';

    //valores vazios
    if (empty($funcionario1)) {
        echo 'Sim, a variável está vazia.<br>';
    } else {
        echo 'Não, a variável não está vazia.<br>';
    }

    echo '<br/>';

    if (empty($funcionario2)) {
        echo 'Sim, a variável está vazia.<br>';
    } else {
        echo 'Não, a variável não está vazia.<br>';
    }

    echo '<br/>';

    if (empty($funcionario3)) {
        echo 'Sim, a variável está vazia.<br>';
    } else {
        echo 'Não, a variável não está vazia.<br>';
    }

    ?>

</body>

</html>