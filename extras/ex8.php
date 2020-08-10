<?php
# Criar um algoritmos que leia um número e imprima todos os número de 1 até ele e o seu produto.
$n = 120;
# com while:
/*$i = 1;
while ($i <= $n){
    $produto = $i * $n;
    echo "Número é: " . $i . " e o produto de $i X $n é: " . $produto . PHP_EOL;
    $i++;
}
*/
# com for

for ($i = 1; $i <= $n; $i++){
    $produto = $i * $n;
    echo "Número é: " . $i . " e o produto de $i X $n é: " . $produto . PHP_EOL;
}
