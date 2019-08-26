<?php

if(empty($_GET['name'])){
  print("must have name");
  exit();
}

$json_input = file_get_contents("php://input");
$input = json_decode($json_input);

$name = $_GET['name'];
$age = $_GET['age'];

$sentence = "Hello, " . $name . ", you are " . $age . " years old, and your favorite food is " . $input->{'favfood'};
print($sentence);

?>
