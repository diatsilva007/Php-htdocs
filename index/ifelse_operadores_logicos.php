<!DOCTYPE html>
<html lang="en" lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php - If/Else operadores lógicos</title>

</head>

<body>

    <!-- Condições If / Else -->

    <?php

    // Operadores de comparação/condicionais.

    //==
    //===
    //!= ou <>
    //!==
    //<
    //<=
    //>
    //>=

    //Operadores lógicos
    //E: && ou AND -> retorna verdadeiro se todos os resultados da expressões forem verdadeiros.
    //OU: || ou OR -> retorna verdadeiro se pelo menos um dos resultados das expressões forem verdadeiros.
    //XOR: XOR -> retorna verdadeiro se uma das expressões for verdadeira e a outra falsa, ou vice-versa.
    //! -> inverte o resultado retornado pela expressão.

    //() estabelecer precedência
    // (v e v) = v ou f = v
    if ((22  == 22 && 3 == 3) || 5 != 5) {
        echo 'Verdadeiro'; //true
    } else {
        echo 'Falso'; //false
    }

    ?>

</body>

</html>