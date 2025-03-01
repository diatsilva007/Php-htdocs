<?php

$busca = 10;

switch ($busca) {
    case '1':
        $retornoSwitch = 'Encontrou o texto 1';
        break;
    case 2:
        $retornoSwitch = 'Encontrou o número 2';
        break;
    default:
        $retornoSwitch = 'Não encontrou';
}

echo "Resultado switch: " . $retornoSwitch;
echo "<hr>";

/*
$retornoMatch = match ($busca) {
    '1' => 'Encontrou o texto 1',
    1 => 'Encontrou o número 1',
    5, '8', 12, 'x' => 'Encontrou o valor 5 ou 12 ou os textos 8 ou x', 
    default => 'Não encontrou',
};
*/

// Match com condicionais e operações lógicas
$retornoMatch = match (true) {
    $busca === 1 => 'Encontrou o número 1',
    $busca === 2 => 'Encontrou o número 2',
    $busca >= 3 && $busca <= 10 => 'Encontrou um número entre 3 e 10',
    default => 'Não encontrou',
};

echo "Resultado match: " . $retornoMatch;

?>
