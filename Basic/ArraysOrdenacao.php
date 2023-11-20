<?php

$notas =[
    10, 
    8, 
    7, 
    9
];

$notasOrdenadas = $notas;

sort($notasOrdenadas);
// sort é um método para ordenar arrays, 
// colocando em ordem crescente(números)
// ou em ordem alfabética(letras/palavras)

echo "Desordenadas:";
var_dump($notas);

echo"Ordenadas:";
var_dump($notasOrdenadas);

?>