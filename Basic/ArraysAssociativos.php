<?php
        // Arrays Associativos

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

$Lista = [$conta1, $conta2, $conta3];


for ($i = 0; $i < count($Lista); $i++) {
    echo $Lista[$i] ['titular']." => ";
    echo $Lista[$i] ['saldo'].PHP_EOL;
}
?>