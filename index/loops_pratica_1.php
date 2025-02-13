<!DOCTYPE html>
<html lang="en" lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php - Loops prática</title>

</head>

<body>

    <?php

    // Loops na prática
    $registros = array(
        array('titulo' => 'Título notícia 1', 'conteudo' => 'Conteúdo notícia 1'),
        array('titulo' => 'Título notícia 2', 'conteudo' => 'Conteúdo notícia 2'),
        array('titulo' => 'Título notícia 3', 'conteudo' => 'Conteúdo notícia 3'),
        array('titulo' => 'Título notícia 4', 'conteudo' => 'Conteúdo notícia 4')
    );

    echo '<pre>';
    print_r($registros);
    echo '</pre>';

    echo '<br /><br /><br />';

    $idx = 0;

    echo 'O array possui: ' . count($registros) . ' registros ';
    echo '<br />';

    /*
    // Loop while
    while ($idx < count($registros)) {

        echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
        echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
        echo '<hr/>';

        $idx++;
    }
    */

    /*
    // Loop  do..while
    do {
        echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
        echo '<p>' . $registros[$idx]['conteudo'] . '</p>';

        echo '<hr/>';

        $idx++; 
    } while ($idx < count($registros));
     */

    // Loop for
    for ($idx = 0; $idx < count($registros); $idx++) {
        echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
        echo '<p>' . $registros[$idx]['conteudo'] . '</p>';

        echo '<hr/>';
    }

    ?>

</body>

</html>