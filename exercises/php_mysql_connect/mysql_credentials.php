<?php

$conn = mysqli_connect('localhost:3306','root','root', 'c619db');

if($conn){
  print_r( $conn );
} else {
  die('Connect Error: ' . mysqli_connect_error());
}

?>
