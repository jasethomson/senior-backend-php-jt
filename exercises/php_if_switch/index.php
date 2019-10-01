<?php

$currentTime = intval(microtime(true));
if($currentTime % 2 === 1){
  print($currentTime . " is odd");
} else {
  print($currentTime . " is even");
}

?>
