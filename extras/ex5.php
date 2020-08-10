<?php
# Ler 3 números, os possíveis lados de um triângulo, e imprimir a classificação de acordo com tamanho dos lados

$n1 = 16;
$n2 = 40;
$n3 = 12;

$arr = array($n1, $n2, $n3);
rsort($arr);

echo "Hipotenusa: " . $arr[0] . PHP_EOL;
echo "Cateto maior: " . $arr[1] . PHP_EOL;
echo "Cateto menor: " . $arr[2] . PHP_EOL;

