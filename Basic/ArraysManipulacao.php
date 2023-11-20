<?php

$notasBimestre1 =[
    "Lucas"=>10, 
    "João"=>8,
    "Maria"=>7,
    "Pedro"=>9,
    "Paulo"=>6,
    "José"=>8
];

$notasBimestre2 =[
    "Lucas"=>9, 
    "João"=>10,
    "Maria"=>8,
    "Pedro"=>7
];

var_dump(array_diff($notasBimestre1, $notasBimestre2));
// array_diff() retorna um array com os valores que não estão no segundo array
//Não faz a diferença pelos indices/chaves, mas sim pelos valores

var_dump(array_diff_key($notasBimestre1, $notasBimestre2));
// array_diff_key() retorna um array com as chaves que não estão no segundo array
// Retorna as chaves que não estão no segundo array

var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2));
// array_diff_assoc() retorna um array com as chaves e valores que não estão no segundo array
// Retorna as chaves que são diferentes e os valores que são diferentes/ sofreram alteração

$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);
$nomesAlunos = array_keys($alunosFaltantes);
var_dump(array_keys($alunosFaltantes));
// array_keys() retorna um novo array com as chaves do array passado como parâmetro
//Pega só as chaves
$notasAlunos = array_values($alunosFaltantes);
var_dump(array_values($alunosFaltantes));
// array_values() retorna um novo array com os valores do array passado como parâmetro
// Pega só os valores

var_dump(array_combine($notasAlunos, $nomesAlunos));
// array_combine() retorna um array com as chaves e valores passados como parâmetro
// OS dois arrays devem ter o mesmo tamanho

var_dump(array_flip($alunosFaltantes));
// array_flip() retorna um array com as chaves e valores invertidos do array passado como parâmetro

?>