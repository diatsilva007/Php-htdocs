<?php

// variável que verifica se a  autenticação foi realizada
$usuario_autenticado = false;

// usuários do sistema
$usuarios_app = array(
    array('email' => 'admin@example.com', 'senha' => '123456'),
    array('email' => 'user@example.com', 'senha' => 'abcd'),
);

/*
echo '<pre>';
print_r($usuarios_app);
echo '</pre>';
*/

foreach ($usuarios_app as $user) {

    if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
        $usuario_autenticado = true;
    }
}

if ($usuario_autenticado) {
    echo 'Login realizado com sucesso!';
} else {
    header('Location: index.php?login=erro');
}

/*
    print_r($_GET);

    echo '<br />';

    echo $_GET['email'];
    echo '<br />';
    echo $_GET['senha']
    */
/*
print_r($_POST);

echo '<br />';

echo $_POST['email'];
echo '<br />';
echo $_POST['senha']
*/

?>