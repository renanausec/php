<?php

$url = 'https://londrinaseo.com.br';

//starts with
if(str_starts_with($url, 'https')) {
    echo "É uma URL segura!" . PHP_EOL;
} else {
    echo "Não é uma URL segura" . PHP_EOL;
}

//ends with
if(str_ends_with($url, '.br')) {
    echo "É um domínio do Brasil!" . PHP_EOL;
} else {
    echo "Não é um domínio do Brasil!" . PHP_EOL;
}