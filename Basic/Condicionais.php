<?php

$idade = 22;
$nome = "Lucas";
$numDeLetras = strlen($nome);

if ($idade > 18 and $numDeLetras>6){
    echo"Você tem mais de 18 anos" . PHP_EOL;
    echo "Você tem $idade anos";
    echo "E seu nome tem $numDeLetras de letras";
} else if($idade > 18 or $nome == "Lucas"){
    echo"Você tem mais de 18 anos" . PHP_EOL;
    echo "Você tem $idade anos" . PHP_EOL;
    echo "Seu nome é $nome". PHP_EOL;
} else if( $idade == 18){
    echo "Você tem 18 anos" . PHP_EOL;
    echo "Você tem $idade anos";
} else {
    echo "Você tem menos de 18 anos" . PHP_EOL;
    echo "Você tem $idade anos";
}
?>