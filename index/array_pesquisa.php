<!DOCTYPE html>
<html lang="en" lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php - Array pesquisas</title>

</head>

<body>

    <?php

    //in_array(); -> true ou false para a existência do que está sendo procurado
    //array_search(); -> retorna o índice do valor pesquisado, caso ele exista

    $lista_frutas = [1 => 'Banana', 2 => 'Maçã', 3 => 'Morango', 4 => 'Uva'];

    echo '<pre>';
    print_r($lista_frutas);
    echo '</pre>';

    //$existe = in_array('Uva', $lista_frutas);
    $existe = array_search('Laranja', $lista_frutas);
    //null

    if ($existe != null) { //true / false
        echo 'Sim, o valor pesquisado existe no array.';
    } else {
        echo 'Não, o valor pesquisado não existe no array.';
    }

    echo '<hr>';

    $listas_coisas = [
        'frutas' => $lista_frutas,
        'pessoas' => [1 => 'Diogo', 2 => 'José', 3 => 'Solange']
    ];

    echo '<pre>';
    print_r($listas_coisas);
    echo '</pre>';

    echo in_array('Uva', $listas_coisas['frutas']);

    ?>

</body>

</html>