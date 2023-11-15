<?php

$array = [
    1 => "a",
    //Definindo um elemento no index especificado
    // '1' => 'b', //A string "1" vai ser convertido pra inteiro e sebrescrever o primeiro valor
    // 1.5 => 'c', //O valor 1.5 seerá convertido para 1 e sobrescrever também
    // true => 'd' // A mesma coisa para o valor booleano true que vira 1
];

foreach ($array as $key=>$item) {
    echo "Chave $key\tValor $item".PHP_EOL;
    var_dump($item);
}

?>