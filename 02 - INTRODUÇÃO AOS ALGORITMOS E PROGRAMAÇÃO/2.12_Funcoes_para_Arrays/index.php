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

// array_shift($index);//REMOVE O PRIMEIRO ELEMETO DO ARRAY
// array_shift($assoc);

// array_pop($index);// REMOVE O ULTIMO ELEMENTO DO ARRAY
// array_pop($assoc);

var_dump($index, $assoc);

PHPClassSession('Ordenação', __LINE__);

$index = array_reverse($index);
$assoc = array_reverse($assoc);

echo "Array_reverse" . PHP_EOL;
var_dump($index, $assoc);


asort($index); //ORDENA DE ACORDO COM O VALOR
asort($assoc); //ORDENA DE ACORDO COM O VALOR

echo "asort" . PHP_EOL;
var_dump($index, $assoc);

ksort($index); // ORDENA DE ACORDO COM O INDICE
ksort($assoc); // ORDENA DE ACORDO COM O INDICE

echo "ksort" . PHP_EOL;
var_dump($index, $assoc);

sort($index); // ORDENA DE ACORDO COM O VALOR
// sort($assoc); // ORDENA DE ACORDO COM O VALOR, OBSERVACAO QUE ESSE METODO REMOVEU OS
// INDICES DO ASSOC E PASSOU PARA 0, 1, 2, 3... NO LUGAR DE "DEV1", "DEV2", "DEV3"...

echo "sort" . PHP_EOL;
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

$arrToString = implode(", ", $assoc); // PEGA O VETOR E CRIA UMA STRING COM OS VALORES SEPARADOS POR ', ' COMO MOSTRA O PRIMEIRO PARAMETRO
echo "<p> Eu sou {$arrToString} !</p>";
echo "<p>{$arrToString}</p>";

var_dump(explode(", ", $arrToString)); // RETORNANDO AO ESTADO ORIGINAL DO ARRAY A PARTIR DA STRING

PHPClassSession('Exemplo Prático', __LINE__);

$profile = [
    "name" => "Thiago Sartori",
    "company" => "IFTO",
    "mail" => "thiagosartori@live.com"
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