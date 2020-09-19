<?php

<<<<<<< HEAD
/* O QUE ESTÁ AQUI. Quer dizer, as variáveis criadas fora da função
não serão enxergadas pelas funções. Se você criar uma variável dentro
da function só estará utilizável dentro do functions */
function functionName($arg1, $arg2, $arg3)
{
    $body = [$arg1, $arg2, $arg3];  //argumentos são valores passados pra 
    return $body;                   //dentro da função.
=======
//O QUE ESTÁ AQUI
$a = 0;

function functionName($arg1, $arg2, $arg3)
{
    // NÃO VAI ESTAR AQUI
    // LOGO A VARIAVEL $a CRIADA ACIMA NÃO EXISTE AQUI
    // ENTÃO EU TENHO UM ISOLAMENTO DE CODIGO
    // O QUE ESTA DENTRO DA FUNCTION, SÓ EXISTE DENTRO DA FUNCTION
    // E O QUE ESTA FORA DELA, ESTA SOMENTE FORA, NÃO SENDO ACESSIVEL
    // DENTRO DA FUNCTION

    $body = [$arg1, $arg2, $arg3];
    return $body;
>>>>>>> upstream/master
}

function calcIMC($weight, $height)
{
    return $weight / ($height * $height);
}

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
    return "<p>O total a pagar é R$" . number_format($total, 2, ",", ".") . "</p>";
}

function myTeam()
{
    $teamName = func_get_args();
    $teamCount = func_num_args();

    return ["members" => $teamName, "count" => $teamCount];
}