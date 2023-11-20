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

$alunos2024 = [...$alunos2023, ...$novosAlunos];
array_push($alunos2024, "Joaquim", "Lineuzinho", "Ingrid");
//array_push() adiciona um ou mais elementos no final do array
//Recebe um array como referência e retorna o número de elementos do array

$alunos2024[] = "Bebel";
//Adiciona um elemento no final do array

array_unshift($alunos2024, "Gabriel", "Cristiane");
//array_unshift() adiciona um ou mais elementos no início do array

array_shift($alunos2024);
//array_shift() remove o primeiro elemento do array

array_pop($alunos2024);
//array_pop() remove o último elemento do array

var_dump($alunos2024);


?>