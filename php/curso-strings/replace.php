<?php

$texto = 'Texto com qualquer coisa poxa e caramba';

echo str_replace(
    ['poxa', 'caramba'],
    ['p***', 'c******'],
    $texto
) . PHP_EOL;

echo strtr($texto, 'poxa', '***@') . PHP_EOL; //muda cada letra p o x por * e a por @
echo strtr($texto, ['poxa' => 'p', 'caramba' => 'c']) . PHP_EOL; // muda apenas poxa pra p e caramba pra c

//exemplo da diferença entre strtr e str_replace

$trans = ["h" => "-", "hello" => "hi", "hi" => "hello"];
echo strtr("hi all, I said hello", $trans) . PHP_EOL; // com strtr substitui uma pela outra sem fzr novamente

echo str_replace(['hello', 'hi'], ['hi', 'hello'], 'hi all, I said hello') . PHP_EOL; // substitui uma pela outra e depois substiui denovo sempre pela ultima
