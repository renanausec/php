<?php

require_once 'conta.php';

$conta1 = new Conta();

$conta1->deposita(500);
$conta1->saca(300);

$conta1->defineNomeTitular('Renan');
$conta1->defineCpfTitular('123.456.789-10');

echo $conta1->mostraSaldo() . PHP_EOL;
echo $conta1->mostraTitular() . PHP_EOL;
echo $conta1->mostraCPF() . PHP_EOL;