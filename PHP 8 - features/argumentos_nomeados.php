<?php

function sendMail($destinatarios = "", $cc = "", $assunto = "", $mensagem = "")
{
    echo "Destinatários: $destinatarios <br>";
    echo "CC: $cc <br>";
    echo "Assunto: $assunto <br>";
    echo "Mensagem: $mensagem <br>";
}

sendMail(
    assunto: "Argumentos nomeados",
    destinatarios: "diogo.ataidee@gmail.com",
    mensagem: "Dominando a feature de argumentos nomeados do PHP 8",
);

echo "<hr>";

// convencional -> respeitando a ordem dos parametros

sendMail(
    "diogo.ataidee@gmail.com",
    "teste@teste.com",
    "Argumentos nomeados",
    "Dominando a feature de argumentos nomeados do PHP 8",
);

echo "<hr>";

sendMail(
    "diogo.ataidee@gmail.com",
    "Argumentos nomeados",
    "Dominando a feature de argumentos nomeados do PHP 8",
)

?>