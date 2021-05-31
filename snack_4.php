<?php 
/*Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta*/
$totalNumber = 15;

$newArray = [];

for ($i = 0; $i < $totalNumber; $i++) {
    $num[$i] = rand(0, 100);

    if (in_array($num[$i], $newArray)) {
        $i--;
    } else {
        $newArray[] = $num[$i];
    }
}

var_dump($newArray);

?>