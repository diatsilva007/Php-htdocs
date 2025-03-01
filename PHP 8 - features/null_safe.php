<?php

/*
    $objeto = null;

    if (isset($objeto) && $objeto != null) {
        $objeto->total();
    }

    $objeto ?-> total();
    */

class Funcionario
{
    public function __construct(
        private string $nome = "",
        private float $salario = 0
    ) {}
    public function info()
    {
        return "Nome: $this->nome - Salário: $this->salario";
    }
}

class FolhaPagamento
{

    private $funcionarios = null;

    public function __construct()
    {
        $this->funcionarios = [
            new Funcionario("Diogo", 15000),
            new Funcionario("José", 8000),
            new Funcionario("Solange", 5500)
        ];
    }
    public function getTotalFuncionarios()
    {
        return count($this->funcionarios);
    }

    public function getFuncionario()
    {
        return $this->funcionarios[0];
    }
}

$folhaPagamento = new FolhaPagamento();
//$folhaPagamento = null;

//if ($folhaPagamento !== null && isset($folhaPagamento))

echo $folhaPagamento?->getTotalFuncionarios();
echo "<br>";
print_r($folhaPagamento?->getFuncionario()?->info());

?>