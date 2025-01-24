<!DOCTYPE html>
<html lang="en" lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php - Operadores de incremento e decremento</title>

</head>

<body>

    <?php

    // Função void (sem retorno)
    function exibirBoasVindas()
    {
        echo "Seja bem-vindo ao curso de PHP! <br/>";
    }

    exibirBoasVindas();

    // Função com retorno
    function calcularAreaTerreno($largura, $comprimento)
    {
        $area = $largura * $comprimento;
        return $area;
    }

    $resultado = calcularAreaTerreno(10, 20);
    echo $resultado;
    
    ?>

</body>

</html>