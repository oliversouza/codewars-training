<?php

/*

Given a random non-negative number, you have to return the digits of this number within an array in reverse order.

Example (Input => Output):
35231 => [1,3,2,5,3]
0     => [0]

*/

function digitize(int $n): array
{

    $array = str_split((string)$n);

    foreach ($array as $key => $element) {
        $array[$key] = (int)$element;
    }
    return array_reverse($array);
}
