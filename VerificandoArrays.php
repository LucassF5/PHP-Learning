<?php

$notas =[
    10, 
    8, 
    7, 
    9
];

// if (is_array($notas)) {
//     echo "É um array";
// } else {
//     echo "Não é um array";
// }
// is_array() verifica se é um array ou não

echo "É um array?".PHP_EOL;
var_dump(array_is_list($notas));
// array_is_list() verifica se é um array e se é sequencial
// (se seus indices são numeros inteiros e positivos)

$notas2 =[
    "Lucas"=>10, 
    "João"=>8,
    "Maria"=>7,
    "Pedro"=>9
];

echo "Lucas tem nota na prova?".PHP_EOL;
var_dump(array_key_exists("Lucas", $notas2));

echo "Lucas fez a prova?".PHP_EOL;
var_dump(isset($notas2["Lucas"]));
// isset() verifica se o indice existe no array e não é null

echo"Alguém tirou 10 na prova?".PHP_EOL;
var_dump(in_array(10, $notas2, false));
//O tercerio parametro é para verificar se o tipo é estritamente igual(===)

// array_key_exists() verifica se a chave existe
// in_array() verifica se o valor existe
// isset() verifica se o indice existe e não é null

echo "Quem tirou 10 na prova?".PHP_EOL;
echo array_search(10, $notas2, true);
// array_search() retorna o indice do valor procurado

?>