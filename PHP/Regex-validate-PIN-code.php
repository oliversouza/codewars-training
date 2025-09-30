<?php

/*
ATM machines allow 4 or 6 digit PIN codes and PIN codes cannot contain anything but exactly 4 digits or exactly 6 digits.

If the function is passed a valid PIN string, return true, else return false.
*/

function validatePin(string $pin): bool
{

    $tamanhoString = strlen($pin);

    if (!ctype_digit($pin)) {
        return false;
    }

    if ($tamanhoString == 4 || $tamanhoString == 6) {
        return true;
    } else {
        return false;
    }
}

echo var_dump(validatePin('111121'));
