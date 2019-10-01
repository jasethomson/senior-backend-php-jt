<?php

function doMath($num1, $num2, $op){
  $num1 = floatval($num1);
  $num2 = floatval($num2);
  if($op === '+'){
    return $num1 + $num2;
  } elseif($op === '-'){
    return $num1 - $num2;
  } elseif ($op === '*') {
    return $num1 * $num2;
  } elseif ($op === '/') {
    return $num1 / $num2;
  }
}

$answer1 = doMath(2,4,'+');
$answer2 = doMath('2','4', '*');
print( "answer1: " . $answer1 . "<br>" . "answer2: " . $answer2);

$people = ['Jake', 'Jane', 'Dirk', 'Dane'];


function findPerson($name){
  global $people;
  $peopleLength = count($people);
  $currentPosition = 0;
  while($currentPosition < $peopleLength && $people[$currentPosition] !== $name){
    $currentPosition++;
  }
  if($currentPosition < $peopleLength){
    return $currentPosition;
  }
  return -1;
}

$dirkPosition = findPerson('Dirk');
$karlPosition = findPerson('Karl');
print("<br>" . "Dirk was found at position " . $dirkPosition . " and Karl was found at position " . $karlPosition);

?>
