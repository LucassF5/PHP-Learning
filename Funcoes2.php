<?php
echo "Arquivo de funções\n\n";
function exibeMensagem($mensagem) {
    echo $mensagem . PHP_EOL;
}

function sacar($conta, $valor){
    if($valor > $conta["saldo"]){
        exibeMensagem($conta["titular"].", você não pode sacar");
        // exibeMensagem("Você não pode sacar");
    } else {
        $conta["saldo"] -= $valor;
    }
    return $conta;
};

function depositar($conta, float $valorDepositar){
    if($valorDepositar > 0){
        $conta['saldo'] = $conta['saldo'] + $valorDepositar;
        exibeMensagem("Está chegando aqui");
    } else {
        exibeMensagem($conta['titular'].' você não pode fazer depósitos negativos');
    }
    return $conta;
}

function titularComLetrasMaiusculas(array &$conta)
{
    $conta['titular'] = strtoupper($conta['titular']);

}

