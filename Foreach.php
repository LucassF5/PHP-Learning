<?php
        //USANDO FOREACH
$conta1 = [
    'titular' => "Lucas",
    "saldo"=> "10000",
];

$conta2 = [
    "titular"=> "Maria",
    "saldo"=> "5000",
];

$conta3 = [
    "titular"=> "Silvia",
    "saldo"=> "50100"
];

$Lista = [
    $conta1, 
    $conta2, 
    $conta3
];

// foreach ($Lista as $conta){ //Assim vai mostrar apenas os resultados
//     //chamando cada elemento da Lista de "conta"
//     echo $conta["titular"].PHP_EOL;
// };

foreach ($Lista as $valor=>$conta){ //Vai enumerar os valores da lista
    //chamando cada elemento da Lista de "conta"
    echo "$valor($conta[titular])".PHP_EOL;
}

?>