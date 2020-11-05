<?php

// Questão 10

// Escreva uma função que inverta os caracteres
// entre parênteses (possivelmente aninhados)
// na string de entrada.

// As strings de entrada sempre serão bem
// formadas com ()s correspondentes .

// Exemplo

// Para inputString = "(bar)", a saída deve ser "rab"
// Para inputString = "foo(bar)baz", a saída deve ser "foorabbaz"

// Para inputString = "foo(bar)baz(blim)",
// a saída deve ser "foorabbazmilb"

function reverseInParentheses($inputString)
{
    $inversions = substr_count($inputString, '(') + 1;
    while ($inversions) {
        $inversions--;
        $open = strrpos($inputString, '(');
        $close = (strpos($inputString, ')', $open)) - $open + 1;
        $invert = str_replace(['(', ')'], '', strrev(substr($inputString, $open, $close)));
        $inputString = substr_replace($inputString, $invert, $open, $close);
    }
    return $inputString;
}
