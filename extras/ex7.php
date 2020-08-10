<?php
$nomeLivro = "PHP: A Bíblia";
$tipoUsuario = "professor";

if($tipoUsuario != "aluno") {
    $prazo = 10;
} else {
    $prazo = 3;
}

echo "RECIBO" . PHP_EOL .
    "Tipo de usuario: $tipoUsuario" . PHP_EOL .
    "Livro $nomeLivro emprestado por $prazo dias!";
