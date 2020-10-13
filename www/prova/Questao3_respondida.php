<?php

// Questão 3
// Dado um vetor de inteiros, encontre o par de elementos
// adjacentes que possui o maior produto
// e depois retorne o valor desse produto.

//Exemplo

//Pois inputArray = [3, 6, -2, -5, 7, 3], 
// o valor de retorno deve ser 21.
// pois 7 e 3 produz o maior produto.

// Retorno o maior produto
//O maior produto de elementos adjacentes.

$vetor = [1, 2, -5, 37, 10];

function adjacentElementsProduct($inputArray)
{

    $tamanho = count($inputArray);
    $produto = [];

    for ($i = 0; $i < $tamanho - 1; $i++) {

        $produto[$i] = $inputArray[$i] * $inputArray[$i + 1];
    }

    return max($produto);
}
