<?php

$notas =[
    10, 
    8, 
    7, 
    9
];

rsort($notas);
// rsort ordena na ordem inversa dos valores

var_dump($notas);


$notas2 =[
    "Lucas"=>10, 
    "João"=>8,
    "Maria"=>7,
    "Pedro"=>9
];

ksort($notas2);
// krsort ordena pelas chaves. key sort
var_dump($notas2);

asort($notas2);
// asort associa os valores aos indices, a de associativo
// asort ordena na ordem dos valores mantendo os indices

arsort($notas2);
// arsort associa os valores aos indices, a de associativo e ordena na ordem inversa dos valores

?>