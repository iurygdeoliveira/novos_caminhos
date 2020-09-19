<?php

/* O QUE ESTÁ AQUI. Quer dizer, as variáveis criadas fora da função
não serão enxergadas pelas funções. Se você criar uma variável dentro
da function só estará utilizável dentro do functions */
function functionName($arg1, $arg2, $arg3)
{
    $body = [$arg1, $arg2, $arg3];  //argumentos são valores passados pra 
    return $body;                   //dentro da função.
}

// function calcIMC($weight, $height)
// {
//     return $weight / ($height * $height);
// }

function calcIMC_Global()
{
    global $weight;         //a definição global significa que essa 
    global $height;         //variável será vista em qualquer parte do código
    return $weight / ($height * $height);
}

function payTotal($price)
{
    static $total;
    $total += $price;
    return  "<p> O total a pagar é R$" . number_format($total, "2", ",", ".") . "</p>";
}

function myTeam()
{
    $teamName = func_get_args();
    $teamCount = func_num_args();

    return ["members" => $teamName, "count" => $teamCount];
}