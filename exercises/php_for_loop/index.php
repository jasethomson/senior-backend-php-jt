<?php

$people = ['John', 'Jane', 'Sarah', 'Smithers', 'Anna'];
$arrayLength = count($people);
for($peopleI = 0; $peopleI < $arrayLength; $peopleI++){
  print("<div>" . $people[$peopleI] . "</div>");
}
?>
