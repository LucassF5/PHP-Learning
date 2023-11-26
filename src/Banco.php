<?php

require_once "src/Conta.php";

$primeiraConta = new Conta("123.456.789-10", "Lucas");
// $primeiraConta->nomeTitular = "Lucas";
// $primeiraConta->setNome("Lucas");
// $primeiraConta->setCPF("123.456.789-10");
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);
var_dump($primeiraConta);
echo $primeiraConta->getNome().PHP_EOL;
echo $primeiraConta->getCPF().PHP_EOL;
echo $primeiraConta->getSaldo().PHP_EOL;

?>