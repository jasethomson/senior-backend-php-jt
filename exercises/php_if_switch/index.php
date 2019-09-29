<?php


$currentTime = microtime(true);
$integerValue = intval($currentTime);

if ($integerValue % 2 === 1){
  print("{$integerValue} is odd");
} else {
  print("{$integerValue} is even");
}

$dateString = date("n-j");
$message = "";

switch($dateString){
  case "12-25":
    $message = "merry christmas";
    break;
  case "1-1":
    $message = "happy new year";
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
