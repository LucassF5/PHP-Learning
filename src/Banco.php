<?php

require_once "src/Conta.php";
require_once "src/Titular.php";

$primeiraConta = new Conta(new Titular("123.456.789-10", "Lucas"));
$primeiraConta = new Conta(new Titular("123.456.789-11", "Lucas"));
// $primeiraConta->nomeTitular = "Lucas";
// $primeiraConta->setNome("Lucas");
// $primeiraConta->setCPF("123.456.789-10");
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);
var_dump($primeiraConta);
echo $primeiraConta->getNomeTitular().PHP_EOL;
echo $primeiraConta->getCPFTitular().PHP_EOL;
echo $primeiraConta->getSaldo().PHP_EOL;
echo "O número total de contas é: ".self::getNumeroDeContas().PHP_EOL;

?>