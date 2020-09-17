<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('Aula 10 - Trabalhando com funções');


PHPClassSession('functions', __LINE__);

require __DIR__ . '/functions.php';

var_dump(functionName("Thiago Sartori", "Developer", "Programador WEB"));

var_dump(calcIMC(90, 1.93));
var_dump(calcIMC(100, 1.93));
var_dump(calcIMC(113, 1.93));

PHPClassSession('global access', __LINE__);

$weight = 90;
$height = 1.93;

var_dump(calcIMC_Global());

PHPClassSession('static arguments', __LINE__);

$pay = payTotal(470);
$pay = payTotal(150);
$pay = payTotal(500);

var_dump($pay);
print_r($pay);
// O valor retornado será de 1120 pois a variável static não perde o
// valor quando o método é chamado novamente, ou seja, a variável não
// perde o valor depois que o método foi completamente executado,
// e quando ele é executado novamente, a variável já está com um valor
// armazenado de execuções anteriores.

PHPClassSession('dinamic arguments', __LINE__);

var_dump(myTeam());
var_dump(myTeam("Thiago"));
var_dump(myTeam("Iury", "Daniel", "Chupa-Cabra"));