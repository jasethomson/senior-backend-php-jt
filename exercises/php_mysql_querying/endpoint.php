<?php

require_once 'mysql_credentials.php';

$query = "SELECT * FROM `mysqlQueryTest`";

$result = mysqli_query( $conn, $query);

if(!$result) {
  print( "Error: " . mysqli_error($conn));
  exit();
}

$output = [
  "success" => "true",
  "data" => []
];

if(!(mysqli_num_rows( $result ))){
  print("no data available");
  exit();
}

while($row = mysqli_fetch_assoc( $result )){
  $output['data'][] = $row;
}
$json_output = json_encode( $output['data']);
print($json_output);
?>
