<?php
//imc = peso / (altura * altura) ou peso / altura ao quadrado
$alt = 1.83;
$peso = 81.7;
$imc = $peso / $alt ** 2;

echo "Sua altura é $alt, seu peso $peso e seu imc é $imc. ";
if($imc <= 18.5) {
    echo "Você está abaixo do peso!";
}
else if($imc < 25) {
    echo "Você está no peso ideal!";
}
else {
    echo "você está com sobrepeso!";
}