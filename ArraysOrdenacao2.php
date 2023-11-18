<?php

$notas =[
    [
        "aluno" => "Lucas",
        'nota'=> 10,
    ],
    [
        "aluno" => "Maria",
        'nota'=> 8,
    ],
    [
        "aluno" => "Fm",
        'nota'=> 9,
    ]
];

function ordenaNotas(array $nota1, array $nota2): int
{   
    return $nota1["nota"] <=> $nota2["nota"];
    //Operador de nave espacial
    //Faz a mesma coisa que a função abaixo, mas ordena por ordem crescente

//------------------------------------------

    // if ($nota1["nota"]>$nota2["nota"]){
    //     return -1;
    // } else if ($nota1["nota"]<$nota2["nota"]){
    //     return 1;
    // }

    // return 0;
}

usort($notas,"ordenaNotas");
// Método de ordenação que espera um array(que vai ser ordenado) 
// e uma função, para especificar como ele deve ordenar, que retorna um inteiro
//1(se for maior/precisar vir antes), === 0(se forem iguais), -1(se for menor/precisar vir depois)

// Como o método usort espera uma função como parâmetro, 
// logo pode-se só colocar o nome da função entre aspas

var_dump($notas);
//Ordenou 

?>