<?php
# Construir um algoritmo que leia 2 números e efetue a adição.
# Caso o valor somado seja maior que 20, este deverá ser apresentando somando-se a ele mais 8;
# caso o valor somado seja menor ou igual a 20, este deverá ser apresentado subtraindo-se 5

$n1 = 4;
$n2 = 10;

$ad1 = $n1 + $n2;

if($ad1 > 20){
    $ad2 = $ad1 + 8;
    echo $ad2;
} else {
    $ad2 = $ad1 - 5;
    echo $ad2;
}