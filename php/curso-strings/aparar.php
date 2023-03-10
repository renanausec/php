<?php

$csv = ',.Renan Ausec,32,.,,,.';

echo trim($csv, ',.') .PHP_EOL;
echo ltrim($csv, ',.') .PHP_EOL; //left
echo rtrim($csv, ',.') .PHP_EOL; //right
