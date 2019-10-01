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
print( $answer1 . "<br>" . $answer2);

?>
