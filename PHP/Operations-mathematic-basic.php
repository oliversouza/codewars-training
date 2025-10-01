<?php
/*
Your task is to create a function that does four basic mathematical operations.

The function should take three arguments - operation(string/char), value1(number), value2(number).
The function should return result of numbers after applying the chosen operation.
*/

function basicOp($op, $val1, $val2) {
    $val1 = (int)$val1;
    $val2 = (int)$val2;
    return eval("return $val1 $op $val2;");
}

echo basicOp('+', '2', '1');
?>
