<?php

    $busca = '2';

    switch ($busca) {
        case '1':
            $retornoSwitch = 'Encontrou';
            break;
        case '2':
            $retornoSwitch = 'Encontrou';
            break;
        default:
            $retornoSwitch = 'Não encontrou';
    }

    echo "Resultado switch: " .$retornoSwitch;
    echo "<hr>";

?>