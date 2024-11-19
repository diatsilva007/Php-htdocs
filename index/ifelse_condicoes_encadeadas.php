<!DOCTYPE html>
<html lang="en" lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php - If/Else operadores lógicos, condições encadeadas</title>

</head>

<body>

    <!-- Condições If / Else -->

    <?php

    //
    $usuario_possui_cartao_loja = false;
    $valor_compra = 725;

    $valor_frete = 50;
    $recebeu_desconto_frete = true;

    if ($usuario_possui_cartao_loja && $valor_compra >= 400) {
        $valor_frete = 0;
    } else if ($usuario_possui_cartao_loja && $valor_compra >= 300) {
        $valor_frete = 10;
    } else if ($usuario_possui_cartao_loja && $valor_compra >= 100) {
        $valor_frete = 25;
    } else {
        $recebeu_desconto_frete = false;
    }

    ?>

    <h1>Detalhes do pedido</h1>

    <p>Possui cartão da loja?
        <?php
        if ($usuario_possui_cartao_loja) {
            echo 'Sim';
        } else {
            echo 'Não';
        }
        ?>
    </p>

    <p>Valor da compra: <?= $valor_compra ?></p>

    <p>Recebeu desconto do frete?
        <?php
        if ($recebeu_desconto_frete) {
            echo 'Sim';
        } else {
            echo 'Não';
        }
        ?>
    </p>

    <p>Valor do frete: <?= $valor_frete ?></p>


</body>

</html>