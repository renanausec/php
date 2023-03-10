<?php
$dados = [
    'nome' => 'Renan',
    'idade' => 32,
    'nota' => 10
];

extract($dados);
echo "Oi $nome, sua idade é $idade e sua nota é $nota" . PHP_EOL;
//var_dump($nome, $idade, $nota);

var_dump(compact('nome', 'idade', 'nota')); 