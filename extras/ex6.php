<?php

$mes = 7;

switch ($mes) {
    case 1: echo "Janeiro" . PHP_EOL; break;
    case 2: echo "Fevereiro" . PHP_EOL; break;
    case 3: echo "Março" . PHP_EOL; break;
    case 4: echo "Abril" . PHP_EOL; break;
    case 5: echo "Maio" . PHP_EOL; break;
    case 6: echo "Junho" . PHP_EOL; break;
    case 7: echo "Julho" . PHP_EOL; break;
    case 8: echo "Agosto" . PHP_EOL; break;
    case 9: echo "Setembro" . PHP_EOL; break;
    case 10: echo "Outubro" . PHP_EOL; break;
    case 11: echo "Novembro" . PHP_EOL; break;
    case 12: echo "Dezembro" . PHP_EOL; break;
    default: echo "Não existe mês com número $mes..." . PHP_EOL; break;
}