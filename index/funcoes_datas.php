<!DOCTYPE html>
<html lang="en" lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php - Funções datas</title>

</head>

<body>

    <?php

    // Função date

    // recuperação da data atual / data corrente
    echo date('d/m/Y H:i'); // d = dia, m = mês, Y = ano, H = hora, i = minuto

    //
    echo '<br/>';
    echo date_default_timezone_get(); // recupera o fuso horário padrão
    echo '<br/>';
    date_default_timezone_set('America/Sao_Paulo'); // altera o fuso horário padrão
    echo date('d/m/Y H:i');

    ?>

</body>

</html>