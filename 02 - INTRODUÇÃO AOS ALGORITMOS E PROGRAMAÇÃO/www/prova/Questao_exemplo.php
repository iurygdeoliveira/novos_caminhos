<?php

// Questão 1
// Some A + B

$resultado = Soma(2, 3);

echo "O resultado na tela é: $resultado";

function Soma(float $A, float $B)
{

    $Soma = $A + $B;
    return $Soma;
}