<?php
# Entrar com nome, sexo e idade de uma pessoa.
# Se a pessoa for do sexo feminino e tiver menos que 25 anos,
# imprimir nome e a a mensagem: ACEITA.
# Caso contrário, imprimir nome e a mensagem: NÃO ACEITA.

$nome = "Dioneia da Silva";
$sexo = "Feminino";
$idade = 24;

if($sexo == "Feminino" and $idade < 25) {
    echo "$nome ACEITA" . PHP_EOL;
} else {
    echo "Não aceita";
}
