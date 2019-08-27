<?php

require_once 'db_connection.php';
require_once 'functions.php';

$query = "SELECT * FROM `multitable_json`";
$result = mysqli_query($conn, $query);

$output = [];

while ($row = mysqli_fetch_assoc($result)) {
  $output[] = $row;
}


?>
