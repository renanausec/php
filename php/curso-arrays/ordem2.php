<?php

$notas = [
    [
    'aluno' => 'Maria',
    'nota' => '8',
    ],
    [
    'aluno' => 'João',
    'nota' => '9',
    ],
    [
    'aluno' => 'Luiza',
    'nota' => '7',
    ],
    [
    'aluno' => 'Renan',
    'nota' => '10',
    ],
];

function ordenaNotas(array $nota1, array $nota2): int 
{
    return $nota1['nota'] <=> $nota2['nota']; // forma crescente
    // return $nota2['nota'] <=> $nota1['nota']; forma decrescente
}

usort($notas, 'ordenaNotas'); // a funcao usort pega um array que ele vai ordenar e depois da virgula uma funcao que vai ensinar como ela deve ordenar
var_dump($notas);