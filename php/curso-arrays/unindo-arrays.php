<?php

$alunos = [
    'Renan',
    'Victor',
    'Joseph',
    'Adolfo',
    'Marcus'
];

$alunos2 = [
    'Luana',
    'Josefa',
    'Tatiane',
    'Luiz',
    'Nicolas',
    'Fabio'
];

// une os 2 arrays adicionando o segundo com as chaves a partir da próxima após a ultima que parou no primeiro array.
// $alunos2023 = array_merge($alunos, $alunos2);
//ainda no array_merge() se forem itens com índices strings, ele substituirá aquele que for um que já existe

// une 2 arrays porém não sobreescreve qualquer item de chaves já existentes. Neste caso adicionará apenas Fabio
//$alunos2023 = $alunos + $alunos2;

//array unpacking (utilizando (...)) Ele pega todos de cada array e soma como o merge, porém podemos colocar algo a mais
$alunos2023 = [...$alunos, 'Renoviski', ...$alunos2];
array_push($alunos2023, 'Leandro', 'Paula'); // adiciona mais elementos no array
//ou adicionar um apenas 
$alunos2023[] = 'Gustavo';

//adicionar um elemento no inicio do array
array_unshift( $alunos2023, 'Stefanie', 'Beth'); // estes serao o 0 e 1 do array

echo array_shift($alunos2023) . PHP_EOL; // tira o primeiro da lista
echo array_pop($alunos2023) . PHP_EOL; // tira o ultimo da lista

var_dump($alunos2023);
