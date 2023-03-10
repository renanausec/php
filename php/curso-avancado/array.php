<?php

$conta1 = [
    'titular' => 'Renan',
    'saldo' => 10000
];

$conta2 = [
    'titular' => 'José',
    'saldo' => 3200
];

$conta3 = [
    'titular' => 'Maria',
    'saldo' => 5000
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['titular'] . " tem: R$ " . $contasCorrentes[$i]['saldo'] . PHP_EOL;
}