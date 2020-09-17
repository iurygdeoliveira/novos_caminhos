<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('2.7 - Estruturas de Repeticao');

/*
*
*/
PHPClassSession('while, do while', __LINE__);

$looping = 1;
$while = [];

while ($looping <= 10) {

    $while[] = $looping;
    $looping++;
}

var_dump($while);

$looping = 10;

do {
    $while[] = $looping;
    $looping--;
} while ($looping >= 0);

var_dump($while);

PHPClassSession('for', __LINE__);

for ($i = 0; $i < 10; $i++) {
    echo "<p> $i </p>";
}

PHPClassSession('break, continue', __LINE__);

$payment = "credit_card";

for ($c = 0; $c < 10; $c++) {

    if ($c % 2 == 1) {
        continue;
    }

    if ($c >= 10) {
        break;
    }

    echo "<p>Pulou + 2 :: {$c}</p>";
}


PHPClassSession('foreach', __LINE__);

$array = [];

for ($i = 0; $i < 10; $i++) {
    $array[] = $i . "a";
}

foreach ($array as $key => $val) {

    var_dump("$key = $val");
}

var_dump($array);