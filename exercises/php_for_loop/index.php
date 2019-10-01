<?php

$people = ['John', 'Jane', 'Sarah', 'Smithers', 'Anna'];
$arrayLength = count($people);
for($peopleI = 0; $peopleI < $arrayLength; $peopleI++){
  print("<div>" . $people[$peopleI] . "</div>");
}

$film = [
  'title'=>'The Shawshank Redemption',
  'year'=> 1994,
  'director'=> 'Frank Darabont',
  'cast'=> [
    '        Andy Dufresnne'=> 'Tim Robbins',
    '        Ellis "Red" Redding'=> 'Morgan Freeman',
    '        Warden Norton'=> 'Bob Gunton'
  ]
];

$sentence = $film['title'] . " was made in " . $film['year'] . " and directed by " . $film['director'] . ".<br><br>" . "Cast: ";
$output = '';
foreach( $film['cast'] as $key => $value ){
  $output = $output . "<br>" . $key . " - " . $value;
}

print("<pre>" . $sentence . $output . "</pre>");

?>
