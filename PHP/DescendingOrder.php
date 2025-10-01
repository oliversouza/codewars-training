<?php

/*

Your task is to make a function that can take any non-negative integer as an argument and return it with its digits in descending order.
Essentially, rearrange the digits to create the highest possible number.

*/

function descendingOrder(int $n): int
{
    //O Split transforma em Array
    $numerosArray = str_split($n);

    //O rsort ordena os números em ordem crescente
    rsort($numerosArray);

    //o Implode junta tudo em string e você escolhe se quer colocar algum caractere entre eles
    $numerosOrdenados = implode('', $numerosArray);

    $resultado = (int)$numerosOrdenados;
    return $resultado;
}

echo descendingOrder(126581);
