<?php

class Conta{
    private string $cpfTitular;
    //Pode-se definir o tipo de dado que o atributo irá receber
    private $nomeTitular;
    private $saldo = 0;

    public function sacar(float $valorASacar){
        if($valorASacar>$this->saldo){
            echo "Saldo indisponível";
        }

         $this->saldo -= $valorASacar;
        // $this é uma variável que aponta para o objeto que chamou o método
    }
    //Utilizando Early Return, evita-se o uso de else

    public function depositar($valorADepositar){
        if($valorADepositar>0){
            $this->saldo += $valorADepositar;
            return;
        } 

        echo "Valor inválido";
    
    }
    //Utilizando Early Return, evita-se o uso de else

    public function transferir(float $valorATransferir, Conta $conta):void 
    {
        if($valorATransferir> $this->saldo){
            echo "Valor indisponível";
            return;
        } 

        $this->sacar($valorATransferir);
        $this->depositar($valorATransferir);
    }
    //Utilizando Early Return, evita-se o uso de else

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function getCPF(): string
    {
        return $this->cpfTitular;
    }

    public function getNome(): string
    {
        return $this->nomeTitular;
    }
    
    public function setNome(string $nome): void
    {
        $this->nomeTitular = $nome;
    }
    
    public function setCPF(string $cpf): void
    {
        $this->cpfTitular = $cpf;
    }

}

// $primeiraConta = new Conta();

// $primeiraConta->saldo = 100;
// //Para acessar o valor de um atributo, usa-se o operador ->
// $primeiraConta->cpfTitular = "123.456.789-00";
// $primeiraConta->nomeTitular = "Lucas Franco";

// var_dump($primeiraConta);

// echo $primeiraConta->nomeTitular.PHP_EOL;
// echo $primeiraConta->cpfTitular.PHP_EOL;
// echo $primeiraConta->saldo.PHP_EOL;

?>