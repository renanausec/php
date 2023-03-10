<?php
$num = 5;
echo "A tabuada do $num é:" . PHP_EOL . PHP_EOL;
for($i = 1; $i <= 10; $i++) {
    $resultado = $i * $num;
    echo "$i x $num = $resultado" . PHP_EOL;
}