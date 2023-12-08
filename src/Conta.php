<?php

class Conta{
    private string $cpfTitular;
    //Pode-se definir o tipo de dado que o atributo irá receber
    private $nomeTitular;
    private $saldo = 0;
    private static $numeroDeContas = 0;
    //Um atributo estático é da classe e não do objeto

    public function __construct(string $cpfTitular, string $nomeTitular)
    {
        echo"Criando nova conta".PHP_EOL;
        $this->cpfTitular = $cpfTitular;
        $this->validaNomeTitular($nomeTitular);
        $this->nomeTitular = $nomeTitular;
        $this->saldo = 0;

        self::$numeroDeContas++;
        //Usando self para dizer que é desta conta em específico
        //Utilizando o operador de resolução de escopo para acessar um atributo estático
        //O operador de resolução de escopo serve para acessar um atributo ou método estático

        //O método construtor é executado toda vez que um objeto é instanciado
    }
    //Inicializando um método construtor

    public function __destruct()
    {
        self::$numeroDeContas--;
    }
    //O método destrutor é executado toda vez que um objeto é destruído

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
    

    private function validaNomeTitular(string $nomeTitular)
    {
        if(strlen($nomeTitular)<5){
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }

    public static function getNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }

}

?>