<!DOCTYPE html>
<html lang="en" lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php - Loops foreach</title>

</head>

<body>

    <?php

    // Loops foreach
    $items = array('sofá', 'mesa', 'cadeira', 'fogão', 'geladeira');

    echo '<pre>';
    print_r($items);
    echo '</pre>';

    foreach ($items as $item) {
        echo "$item";

        if ($item == 'mesa') {
            echo ' (*Compre uma mesa e ganhe 25% de desconto na compra de 4 cadeiras).';
        }

        echo '<br>';
    }

    ?>

</body>

</html>