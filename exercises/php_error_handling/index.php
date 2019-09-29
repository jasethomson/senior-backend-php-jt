<?php

function error_handler($error)
{
  print('custom error: ' . $error->getMessage());
}

set_exception_handler('error_handler');

// throw new Exception("I want an error");
// doStuff();
$randomNumber = rand(1,10);
if($randomNumber % 2 === 0){
  throw new Exception("Exception: the number was even");
} else {
  print("the number was {$randomNumber}");
}
?>
