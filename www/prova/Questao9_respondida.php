<?php

// Questão 9

// Algumas pessoas estão em uma fila no parque.
// As pessoas e as arvores no parque serão representadas
// por um vetor.

// O valor -1 representa uma árvore
// valor positivo representa a altura de uma pessoa

// Existem árvores entre as pessoas e as árvores 
// não não podem ser movidas.

// Sua tarefa é reorganizar as pessoas por suas alturas
// em uma ordem não decrescente, sem mover as árvores.

// Considere que as pessoas podem ser muito altas!

//Exemplo

//Se $a = [-1, 150, 190, 170, -1, -1, 160, 180], 
// o retorno deve ser [-1, 150, 160, 170, -1, -1, 180, 190].

function sortByHeight($a)
{
    $keys = array_keys($a, -1);
    $sort_me = array_diff($a, [-1]);
    asort($sort_me);
    $sorted = array_values($sort_me);
    foreach ($keys as $key) {
        array_splice($sorted, $key, 0, -1);
    }
    return $sorted;
}
