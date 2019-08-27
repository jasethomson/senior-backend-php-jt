<?php

require_once 'db_connection.php';
require_once 'functions.php';
startup();
$query = "SELECT * FROM `multitable_json`";
$result = mysqli_query($conn, $query);

$output = [];

while ($row = mysqli_fetch_assoc($result)) {
  $decoder = json_decode($row['releaseData']);
  $row['releaseData'] = $decoder;
  $output[] = $row;
}

print(json_encode($output));

?>
