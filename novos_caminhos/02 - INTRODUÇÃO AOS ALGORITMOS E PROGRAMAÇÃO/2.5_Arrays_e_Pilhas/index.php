<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('Aula 2.5 - Arrays');


PHPClassSession('INDEX ARRAY', __LINE__);

$arrA = array(1, 2, 3);
var_dump($arrA);

$arrB = [0, 1, 2, 3];
var_dump($arrB);

$arrayIndex = [
    "Iury",
    "Daniel",
    "Luciano"
];

$arrayIndex[] = "Fernando";
$arrayIndex[] = "José roberto";

var_dump($arrayIndex);

PHPClassSession('ASSOCIATIVE ARRAY', __LINE__);

$arrayAssoc = [
    "docente" => "Iury Gomes",
    "tutor1" => "Fernando",
    "tutor2" => "Daniel",
    "tutor3" => "Luciano"
];

$arrayAssoc["Supervisor"] = "José Roberto";
$arrayAssoc["Class"] = "Programador WEB Novos Caminhos";

var_dump($arrayAssoc);

PHPClassSession('MULTIDIMENSIONAL ARRAY', __LINE__);

$coordenacao = [
    "Coordenação" => [
        "Coordenação Administrativa" => "Pedrinha",
        "Coordenação de Extensão" => "Jade",
    ]
];

$team = [
    $coordenacao,
    $arrayAssoc,
];

var_dump($coordenacao, $team);

PHPClassSession('ARRAY ACCESS', __LINE__);

$team = [
    "docente" => "Iury",
    "tutor1" => "Fernando",
    "tutor2" => "Daniel",
    "tutor3" => "Luciano",
    "Supervisor" => "José Roberto"
];

echo "Equipe Programador WEB" . PHP_EOL;

foreach ($team as $item) {

    echo "<p>$item</p>";
}

echo "Equipe Programador WEB" . PHP_EOL;

foreach ($team as $key => $value) {

    echo "<p>$value é o $key do time!</p>";
}