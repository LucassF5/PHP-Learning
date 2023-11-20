<?php

$arrayList = array(1,2,3,4,5,6); //forma antiga de declarar arrays
// echo "$arrayList[2]".PHP_EOL;

$newArray = [1,2,3,4,5,6];
// echo "$newArray[0]".PHP_EOL;

// count($arrayList) Vai contar todos os elementos no array
// sizeof($arrayList) também vai fazer a mesma coisa que count
// sizeof e count são duas funções que fazem a mesma coisa

for ($i = 0; $i < count($newArray); $i++) {
    // echo $newArray[$i].PHP_EOL; 
    //Vai mostrar todos os elementos do Array, por índice
}
$newArray[] = 7; //Adicionadno novo valor ao final do array
foreach($newArray as $array){
    echo $array.PHP_EOL;
}

?>