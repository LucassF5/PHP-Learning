<?php

$dados = ["Lucas", 10, 22];

// list($nome, $nota, $idade) = $dados;
[$nome, $nota, $idade]= $dados;
//list() atribui valores de um array para variáveis
//list() recebe um array como parâmetro e retorna um array contendo os valores atribuídos às variáveis

var_dump($nome, $nota, $idade);

$dados = [
    "nome" => "Lucas",
    "nota" => 10,
    "idade" => 22
];

["nome"=>$nome, "nota"=>$nota, "idade"=>$idade]= $dados;

var_dump($nome, $nota, $idade);

$dados = [
    "nome" => "Lucas",
    "nota" => 10,
    "idade" => 22
];

extract($dados);
//extract() recebe um array como parâmetro e retorna as chaves do array como variáveis 
// e os valores do array como valores das variáveis
var_dump($nome, $nota, $idade);

$arrayCompact = compact("nome", "nota", "idade");
//compact() recebe uma lista de variáveis como parâmetro e retorna um array contendo as variáveis e seus valores
var_dump($arrayCompact);

?>