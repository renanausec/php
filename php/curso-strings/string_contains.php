<?php

$nome = 'Renan Ausec';
$ehDaMinhaFamilia = str_contains($nome, 'Ausec'); // resultado da true ou false

if($ehDaMinhaFamilia) {
    echo "$nome é da minha família";
} else {
    echo "$nome não é da minha família";
}