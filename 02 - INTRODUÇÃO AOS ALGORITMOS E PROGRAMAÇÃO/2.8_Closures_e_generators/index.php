<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('2.8 - Closures e Generators');

/*
*
*/
PHPClassSession('CLOSURES', __LINE__);

$myAge = function ($year) {
    $age = date("Y") - $year;
    return "<h5> Você tem $age anos !</h5>";
};

echo $myAge(1986);

$priceBRL = function ($price) {
    return number_format($price, 2, ",", ".");
};

echo "<p> Os futuros projetos dos alunos do novos caminhos custarão R$ {$priceBRL(10000)}. Vamos Fechar ?</p>";

$myCart = [];
$myCart['totalPrice'] = 0;

$cardADD = function ($item, $qtd, $price) use (&$myCart) {
    $myCart[$item] = $qtd * $price;
    $myCart["totalPrice"] += $myCart[$item];
};

$cardADD("INFRA ESTRUTURA DO DESENVOLVIMENTO", 1, 600);
$cardADD("ALGORITMOS E PROGRAMAÇÃO", 2, 600);

var_dump($myCart);

PHPClassSession('GENERATORS', __LINE__);

$iterator = 400000;

function showDates($days)
{
    $saveDate = [];
    for ($day = 1; $day < $days; $day++) {
        $saveDate[] = date("d/m/Y", strtotime("+{$day}days"));
    }

    return $saveDate;
}

// echo "<div>";
// foreach (showDates($iterator) as $date) {
//     echo "<small class='tag'> {$date} </small>" . PHP_EOL;
// }
// echo "</div>";

function generatorDates($days)
{
    for ($day = 1; $day < $days; $day++) {
        yield date("d/m/Y", strtotime("+{$day}days"));
    }
}

echo "<div style='text-align: center'>";
foreach (generatorDates($iterator) as $date) {
    echo "<small class='tag'> {$date} </small>" . PHP_EOL;
}
echo "</div>";