<?php

class Titular{
    
    private string $cpf;
    private string $nome;

    public function __construct(string $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    public function getNome():string
    {
        return $this->nome;
    }

    public function getCPF():string
    {
        return $this->cpf;
    }
    
    private function validaNomeTitular(string $nomeTitular)
    {
        if(strlen($nomeTitular)<5){
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
}
?>