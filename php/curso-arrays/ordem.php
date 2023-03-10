<?php

$notas = [
    'Renan' => 10,
    'Victor' => 9,
    'Tim' => 8,
    'Adolfo' => 5,
    'Marcus'=> 7
];
//krsort para decrescente e ksort para crescente -> key sort (ordem pela chave q neste caso são os nomes)
//rsort para decrescente e sort para crescent -> ordem pelo s números 
//asort é para mostrar com os nomes das chaves e arsort também porém em ordem decrescente
krsort($notas);
var_dump($notas);

if(is_array($notas)) {
    echo "\$notas É sim um array" . PHP_EOL;
}

echo PHP_EOL . "O array é uma lista? ";
var_dump(array_is_list($notas));

echo PHP_EOL . "Existe a chave Renan no array? ";
var_dump(array_key_exists('Renan', $notas));

echo PHP_EOL . "O Joao fez a prova? ";
var_dump(isset($notas['Joao']));

echo PHP_EOL . "Alguém tirou 10? ";
var_dump(in_array(10, $notas));

echo PHP_EOL . "Quem tirou 10? ";
echo array_search(10, $notas);
// array_key_exists = verifica se a chave existe
// in_array = verifica se o valor existe
// isset = verificar se a chave existes e não é nula