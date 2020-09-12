<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('Aula 02 - Comandos de Saída');

PHPClassSession('linha de comando echo', __LINE__);

echo "<p>Olá world. Futuros desenvolvedores chegando rsssssss</p>";
echo 23 . PHP_EOL;

$hello = "Olá mundo";

echo $hello;
echo "<p> $hello </p>";
echo "<p> {$hello} </p>";

PHPClassSession('print_r', __LINE__);

$array = [
    "company" => "IFTO",
    "course" => "Programador WEB",
    "class" => "Comandos de Saída",
    "class2" => "testando classe nova e live server",
];

echo "<pre>";
print_r($array);
echo "</pre>";

PHPClassSession('var_dump', __LINE__);

$company = "IFTO";
var_dump($array, $hello, $company);