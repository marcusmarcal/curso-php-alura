<?php
#Entrar com 3 números e imprimi-los em ordem decrescente (suponha números diferentes)

$n1 = 16;
$n2 = 4;
$n3 = 12;

$arr = array($n1, $n2, $n3);
rsort($arr);

foreach ($arr as $linha) echo $linha . PHP_EOL;
