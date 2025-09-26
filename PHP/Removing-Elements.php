<?php
/*

Take an array and remove every second element from the array. Always keep the first element and start removing with the next element.

Example:
["Keep", "Remove", "Keep", "Remove", "Keep", ...] --> ["Keep", "Keep", "Keep", ...]

None of the arrays will be empty, so you don't have to worry about that!

*/

function removeEveryOther($array) {
  
  $tamanho = count($array);
  for($i = 0; $i < $tamanho; $i++){
    if($i % 2 != 0){
      unset($array[$i]);
    }
  }
  return $array;
}