<?php
/* Write a function to convert a name into initials. This kata strictly takes two words with one space in between them.

The output should be two capital letters with a dot separating them.

It should look like this:
*/

function abbrevName(string $name): string {
  $name = explode("", $name);
  $firstName = str_split($name[0]);
  $lastName = str_split($name[1]);

  $completeName = strtoupper($firstName[0] . "." . $lastName[0]);
  return $completeName;
}

?>