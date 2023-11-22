<?php

class Conta{
    public string $cpfTitular;
    //Pode-se definir o tipo de dado que o atributo irá receber
    public $nomeTitular;
    public $saldo = 0;

    public function sacar(float $valorASacar){
        if($valorASacar>$this->saldo){
            echo "Saldo indisponível";
        } else {
            $this->saldo -= $valorASacar;
            // $this é uma variável que aponta para o objeto que chamou o método
        }
    }

    public function depositar($valorADepositar){
        if($valorADepositar>0){
            $this->saldo += $valorADepositar;
        } else {
            echo "Valor inválido";
        }
    
    }
}

$primeiraConta = new Conta();

$primeiraConta->saldo = 100;
//Para acessar o valor de um atributo, usa-se o operador ->
$primeiraConta->cpfTitular = "123.456.789-00";
$primeiraConta->nomeTitular = "Lucas Franco";

var_dump($primeiraConta);

// echo $primeiraConta->nomeTitular.PHP_EOL;
// echo $primeiraConta->cpfTitular.PHP_EOL;
// echo $primeiraConta->saldo.PHP_EOL;

?>