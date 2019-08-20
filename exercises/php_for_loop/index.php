<?php

$people = ["John","Jane","Sarah","Smithers","Anna"];
$peopleLength = count($people);

for( $peopleIndex = 0; $peopleIndex < $peopleLength; $peopleIndex++){
  print("<div> $people[$peopleIndex] </div>");
}

$film = [
  "title" => "The Shawshank Redemption",
  "year" => 1994,
  "director" => "Frank Darabont",
  "cast" => [
    "Andy Dufresnne" => "Tim Robbins",
    'Ellis "Red" Redding' => "Morgan Freeman",
    "Warden Norton" => "Bob Gunton"
  ]
];

$sentence = "{$film["title"]} was made in {$film["year"]} and directed by {$film["director"]}.<br><br>Cast: ";
print( $sentence );

foreach( $film["cast"] as $stageName => $realName ){
  $sentence2 = "<br>\t{$stageName} - {$realName}";
  print($sentence2);
}

?>
