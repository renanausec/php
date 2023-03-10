<?php

$contasCorrentes = [
    48554191221 => [
        'titular' => 'Maria',
        'saldo' => 5000
    ],
    12345678910 => [
        'titular' => 'José',
        'saldo' => 3200
    ],
    12345678911 => [
        'titular' => 'Renan',
        'saldo' => 10000
    ]
];

//adicionar um item em um array associativo
$contasCorrentes[12345677910] = [
    'titular' => 'Vanessa',
    'saldo' => 4000
];


//para cada contaCorrente como $conta...
foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " é o cpf de " . $conta['titular'] . PHP_EOL;
}