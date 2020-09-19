<?php

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
}

function calcIMC($weight, $height)
{
    return $weight / ($height * $height);
}

function calcIMC_Global()
{
    global $weight;
    global $height;
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