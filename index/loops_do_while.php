<!DOCTYPE html>
<html lang="en" lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php - Loops do while</title>

</head>

<body>

    <?php

    // Loops do while

    $x = 1;

    do {

        echo "x = $x <br/>"; // critério de parada

        $x++; // critério de parada

    } while ($x < 9);

    // O código acima irá imprimir "Entrou no while" uma vez, mesmo que a condição seja falsa.
    // O loop do while verifica a condição antes de entrar no bloco de código.
    // Para garantir que o bloco de código seja executado pelo menos uma vez, você pode usar um bloco de código de inicialização (o código que você deseja executar antes do loop).

    // continue
    // O continue é usado para pular a iteração atual e continuar com a próxima iteração do loop.
    // break
    // O break é usado para sair do loop imediatamente, mesmo se a condição for verdadeira.

    // Exemplo de uso do continue
    /*
    echo "<br/>";
    while ($x < 9) {
        echo "Entrou no while <br/>";
    }
    */

    ?>

</body>

</html>