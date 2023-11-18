<?php

// include "funcoes2.php";
// Usa-se include para importar arquivos de outro

require_once "funcoes2.php";
// require_once só inclui o arquivo um vez, ]
// impedindo de ser chamado novamente e gerar erros 

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


$contasCorrentes['123.456.789-10'] = sacar(
    $contasCorrentes['123.456.789-10'],
     500);

// $contasCorrentes['123.256.789-12'] = sacar($contasCorrentes['123.256.789-12'], 500);

$contasCorrentes['123.256.789-12'] = depositar(
    $contasCorrentes['123.256.789-12'],
     900);

titularComLetrasMaiusculas($contasCorrentes['123.456.789-10']);

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem(
        "$cpf {$conta['titular']} {$conta['saldo']}"
    );
    //Pode-se utilizar chaves para utilizar o array dentro das aspas$conta['titular']
}

?>