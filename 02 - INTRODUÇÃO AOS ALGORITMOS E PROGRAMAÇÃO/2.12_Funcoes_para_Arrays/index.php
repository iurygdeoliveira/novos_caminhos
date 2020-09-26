<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('2.12 - Manipulando Vetores');


PHPClassSession('Manipulação', __LINE__);

$index = [
    "FRONT END DEVELOPER",
    "BACK END DEVELOPER",
    "FULL STACK DEVELOPER",
];

$assoc = [
    "dev1" => "FRONT END DEVELOPER",
    "dev2" => "BACK END DEVELOPER",
    "dev3" => "FULL STACK DEVELOPER",
];

array_unshift($index, "", "FULL CYCLE DEVELOPER");
$assoc = ["dev4" => "FULL CYCLE DEVELOPER"] + $assoc;

array_push($index, "DEVOPS");
$assoc = $assoc + ["dev5" => "DEVOPS"];

// array_shift($index);
// array_shift($assoc);

// array_pop($index);
// array_pop($assoc);

// var_dump($index, $assoc);

PHPClassSession('Ordenação', __LINE__);

$index = array_reverse($index);
$assoc = array_reverse($assoc);

asort($index);
asort($assoc);

ksort($index);
ksort($assoc);

sort($index);

var_dump($index, $assoc);

PHPClassSession('Verificação', __LINE__);

var_dump(
    [
        array_keys($assoc),
        array_values($assoc),
    ]
);

if (in_array("FRONT END DEVELOPER", $assoc)) {
    echo "<p> Existe um developer</p>";
}

$arrToString = implode(", ", $assoc);
echo "<p> Eu sou {$arrToString} !</p>";
echo "<p>{$arrToString}</p>";

var_dump(explode(", ", $arrToString));

PHPClassSession('Exemplo Prático', __LINE__);

$profile = [
    "name" => "Iury",
    "company" => "IFTO",
    "mail" => "iury.oliveira@ifto.edu.br"
];

$template = <<<TPL
<article>
    <h1>{{name}}</h1>
    <p>{{company}}<br>
        <a href="mailto{{mail}}"> Enviar para mail </a>
    </p>
</article>
TPL;

echo $template;

echo str_replace(
    array_keys($profile),
    array_values($profile),
    $template
);

$replaces = "{{" . implode("}}&{{", array_keys($profile)) . "}}";

var_dump(explode("&", $replaces));

echo str_replace(
    explode("&", $replaces),
    array_values($profile),
    $template
);