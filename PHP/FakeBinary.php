<?php

/*

Given a string of digits, you should replace any digit below 5 with '0' and any digit 5 and above with '1'. Return the resulting string.

Note: input will never be an empty string

*/

function fake_bin(string $s): string {
  $array = str_split($s);
  $string = '';
    foreach($array as $element){
        if($element < 5){
          $string .= '0';
        }else{
          $string .= '1';
        }
    }
  return $string;
}


print_r(fake_bin('45385593107843568'));