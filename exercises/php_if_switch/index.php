<?php

$currentTime = intval(microtime(true));
if($currentTime % 2 === 1){
  print($currentTime . " is odd" . "<br>");
} else {
  print($currentTime . " is even" . "<br>");
}

$dateString = date( "n-j");
$message = '';

switch($dateString){
  case '12-25':
    $message = 'Merry Christmas';
    break;
  case '1-1':
    $message = 'Happy New Year';
    break;
  case '2-14':
    $message = "Happy Valentine's day";
    break;
  case '7-4':
    $message = "fireworks! yay!";
    break;
  case '10-1':
    $message = "not a holiday...";
    break;
}

print($message);

?>
