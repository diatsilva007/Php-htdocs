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

    /*
    // recuperação da data atual / data corrente
    echo date('d/m/Y H:i'); // d = dia, m = mês, Y = ano, H = hora, i = minuto

    //
    echo '<br/>';
    echo date_default_timezone_get(); // recupera o fuso horário padrão
    echo '<br/>';
    date_default_timezone_set('America/Sao_Paulo'); // altera o fuso horário padrão
    echo date('d/m/Y H:i');
    */

    $data_inicial = '2025-01-07'; // Y-m-d
    $data_final = '2025-02-07'; // Y-m-d

    // timestamp
    $timestamp_inicial = strtotime($data_inicial); // converte a data para timestamp
    echo $data_inicial . ' - ' . $timestamp_inicial;
    $timestamp_final = strtotime($data_final); // converte a data para timestamp
    echo '<br/>'; // quebra de linha
    echo $data_final . ' - ' . $timestamp_final; // exibe a data final e o timestamp final

    // diferença entre as datas
    $diferenca_timestamp = $timestamp_final - $timestamp_inicial; // diferença entre as datas
    echo '<br/>'; // quebra de linha
    echo 'A diferença de segundos entre a data inicial e a data final é: ' . $diferenca_timestamp; // exibe a diferença entre as datas
    // converter segundos para dias, horas, minutos e segundos
    $segundos_existem_dia = 24 * 60 * 60; // quantidade de segundos em um dia
    $dias = floor($diferenca_timestamp / $segundos_existem_dia); // cálculo de dias
    echo '<br/>'; // quebra de linha
    echo 'A diferença em dias é: ' . $dias; // exibe a diferença em dias
    $diferenca_timestamp -= $dias * $segundos_existem_dia; // subtrai a diferença em dias do timestamp
    $horas = floor($diferenca_timestamp / (60 * 60)); // cálculo de horas
    echo '<br/>'; // quebra de linha
    echo 'A diferença em horas é: ' . $horas; // exibe a diferença em horas
    $diferenca_timestamp -= $horas * (60 * 60); // subtrai a diferença em horas do timestamp
    $minutos = floor($diferenca_timestamp / 60); // cálculo de minutos
    echo '<br/>'; // quebra de linha
    echo 'A diferença em minutos é: ' . $minutos; // exibe a diferença em minutos
    $segundos = $diferenca_timestamp; // cálculo de segundos
    echo '<br/>'; // quebra de linha
    echo 'A diferença em segundos é: ' . $segundos; // exibe a diferença em segundos
    
    ?>

</body>

</html>