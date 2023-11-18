<?php
//          Guardando elementos de uma lista
//  Como desestruturar arrays em outras variáveis usando a funcionalidade "list"
require "funcoes2.php";

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.789-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];

unset ($contasCorrentes['123.456.789-10']);
// Usar unset apaga/remove o dado da lista 
//Também pode-se apagar peli index da lista


foreach ($contasCorrentes as $cpf => $conta) {

    // list ("titular" => $titular, "saldo" => $saldo) = $conta;
    // Forma antiga de usar list

    ["titular" => $titular, "saldo" => $saldo] = $conta;
    //Forma mais resumida
    
    exibeMensagem(
        // "$cpf {$conta['titular']} {$conta['saldo']}"
        "$cpf \t$titular => $saldo"
    );
}


?>