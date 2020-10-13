<?php

// Questão 5
// Dada uma sequência de inteiros como um array,
// determine se é possível obter uma sequência
// estritamente crescente removendo não mais do que um elemento do array.

//Exemplo

// Se $sequence = [1, 3, 2, 1], a saída deve ser false
// Não há nenhum elemento neste array que possa ser
// removido para obter uma sequência estritamente crescente.

// Se $sequence = [1, 3, 2], a saída deve ser true.
// Você pode remover 3 do vetor para obter a sequência
// estritamente crescente [1, 2]. 
// Como alternativa, você pode remover 2 para obter a
// sequência estritamente crescente [1, 3].

function almostIncreasingSequence($sequence)
{
    $mistakes = 0;

    for ($i = 0; $i < count($sequence) - 1; $i++) {
        if ($sequence[$i] >= $sequence[$i + 1]) {
            if (
                count($sequence) > $i + 2 &&
                $sequence[$i] >= $sequence[$i + 2] &&
                $i > 0 &&
                $sequence[$i - 1] >= $sequence[$i + 1]
            ) {
                return false;
            } else
                $mistakes++;
        }

        if ($mistakes > 1)
            return false;
    }

    return true;
}
