<?php

$currentTime = microtime( $get_as_float = TRUE );
$integerValue = intval($currentTime);

if ($currentTime % 2 === 1){
  print("{$integerValue} is odd");
} else {
  print("{$integerValue} is even");
}

$monthString = date( "n" );
$dayString = date( "j" );
$dateString = "{$monthString}-{$dayString}";
$message = "";
switch($dateString){
  case "12-25":
    $message = "merry christmas";
    break;
  case "1-1":
    $message= "happy new year";
    break;
  case "2-14":
    $message = "happy valentine\'s day";
    break;
  case "7-4":
    $message = "fireworks\! yay\!";
    break;
}
print( $message );

?>
