<?php

$nome = 'Renan Rossi Ausec';
$email = 'renanausec@gmail.com';
$senha = '123#@êâ1';

//$tamanhoDaSenha = strlen($senha)  => tamanho em bites e não em caracteres...
$tamanhoDaSenha = mb_strlen($senha); //tamanho em caracteres pois usa biblioteca mb = multibite

if($tamanhoDaSenha < 8) {
    echo "$tamanhoDaSenha, Senha insegura!" . PHP_EOL;
} else {
    echo "$tamanhoDaSenha, Senha segura!" . PHP_EOL;
}

$posicaoDoArroba = strpos($email, '@');

echo substr($email, 0, $posicaoDoArroba) . PHP_EOL; // substr($variavel, posicao inicial, posicao final)
echo substr($email, $posicaoDoArroba) . PHP_EOL;

list($nome, $nomemeio, $sobrenome) = explode(' ',$nome); //usando um separador, separar minha string e transformar em array

echo "Nome: $nome" . PHP_EOL;
echo "Nome do meio: $nomemeio" . PHP_EOL;
echo "Sobrenome: $sobrenome" . PHP_EOL;