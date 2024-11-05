<!DOCTYPE html>
<html lang="en" lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php - Variáveis constantes</title>

</head>

<body>

    <?php
    // Variáveis constantes

    define('BD_URL', 'endereco_bd_dev');
    define('BD_USUARIO', 'usuario_dev');
    define('BD_SENHA', 'senha_dev');
    
    
    // Exibindo valores das variáveis constantes

    echo BD_URL . '<br/>';
    echo BD_USUARIO . '<br/>';
    echo BD_SENHA . '<br/>';

    ?>

</body>

</html>