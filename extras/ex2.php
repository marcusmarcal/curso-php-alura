<?php
# Entrar com um número e informar se ele é divisível por 10, por 5, por 2 ou se não é divisível por nenhum destes
$n = 130;

$d1 = 10;
$d2 = 5;
$d3 = 2;

echo "O número é $n" . PHP_EOL;
if ($n % $d1 == 0) echo "$n é divisível por $d1" . PHP_EOL; else echo "$n não é divisível por $d1" . PHP_EOL;
if ($n % $d2 == 0) echo "$n é divisível por $d2" . PHP_EOL; else echo "$n não é divisível por $d2" . PHP_EOL;
if ($n % $d3 == 0) echo "$n é divisível por $d3" . PHP_EOL; else echo "$n não é divisível por $d3" . PHP_EOL;
if ($n % $d1 != 0 and $n % $d2 != 0 and $n % $d3 != 0) echo "$n não é divisível nem por $d1, nem por $d2, nem por $d3... número maluco" . PHP_EOL;