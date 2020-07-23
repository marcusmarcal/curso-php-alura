<?php
# IMC do Dionei

$peso = 20; #kg
$altura = 1.2; #metros

$imc = round(($peso / $altura ** 2), 1);

echo "Meu IMC é $imc" . PHP_EOL;

echo "Você está ";
if($imc <= 18.5) {
    echo "abaixo do peso ideal";
} elseif($imc <= 24.9) {
    echo "com peso normal";
} elseif($imc <= 29.9) {
    echo "com sobrepeso";
} elseif($imc <= 34.9) {
    echo "com obesidade grau 1";
} elseif($imc <= 39.9) {
    echo "com obesidade grau 2";
} elseif($imc < 40) {
    echo "com obesidade grau 3";
} 