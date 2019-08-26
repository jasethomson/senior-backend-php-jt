<?php

if(empty($_GET['name'])){
  print("must have name");
  exit();
}


$name = $_GET['name'];
$age = $_GET['age'];
$favfood = $_POST['favfood'];

$sentence = "Hello, " . $name . ", you are " . $age . " years old, and your favorite food is $favfood";

print($sentence);

?>
