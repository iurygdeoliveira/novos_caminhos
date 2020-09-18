<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('Aula 10 - Trabalhando com funções');

require __DIR__ . '/functions.php';

PHPClassSession("functions", __LINE__);

var_dump(functionName("IFTO", "NOVOS CAMINHOS", 'PROGRAMADOR WEB'));
var_dump(functionName("Iury", "Pedrinha", 'Jade'));

// var_dump(calcIMC(86, 1.72));
// var_dump(calcIMC(90, 1.89));
// var_dump(calcIMC(100, 2));

PHPClassSession("global access", __LINE__);


$weight = 91;
$height = 1.90;

var_dump(calcIMC_Global());

PHPClassSession("static arguments", __LINE__);

$pay = payTotal(200);
$pay = payTotal(150);
$pay = payTotal(500);

var_dump($pay);

PHPClassSession("dinamic arguments", __LINE__);

var_dump(myTeam());
var_dump(myTeam("Fernando"));
var_dump(myTeam("Fernando", "Iury"));
var_dump(myTeam("Fernando", "Iury", "Daniel"));