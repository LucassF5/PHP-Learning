<?php

// TIPOS PRIMITIVOS DE DADOS

$idade = 22; //Tipo Integer
var_dump($idade);
//var_dump informa o tipo de dado e seu valor
echo gettype($idade);
// gettype também informa o tipo de dado armazenado na variável

$float = 22.0; //float ou double

$str = "String, palavras ou frases"; //String

$bool = false;
$bool = true; //Booleanos

$null ; //Valor NULL, sem nenhum valor guardado
echo gettype($null);

?>