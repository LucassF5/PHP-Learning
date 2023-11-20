<?php

$alunos2023 =[
    "Lucas", 
    "João",
    "Maria",
    "Pedro",
    "José"
];

$novosAlunos =[
    "Paulo",
    "Carlos",
    "Mario",
    "Júlio",
    "Agostinho",
    "Carrara",
];

$alunos2024 = array_merge($alunos2023, $novosAlunos);
// array_merge() retorna um array com os valores dos arrays passados como parâmetro unidos
// Os arrays passados como parâmetro são somados e viram um novo array
// Se tiver as mesmas chaves strings, sobrescreve o valor do array que está sendo somado
var_dump($alunos2024);

//SOMANDO ARRAYS USANDO DESEMPACOTAMENTO / ARRAY UNPACKING
$alunos2024 = [...$alunos2023, ...$novosAlunos];
//                  ...$array é o desempacotamento do array
// Desempacotando pode-se adicionar elementos no array


?>