<?php

include 'credentials.php';

$sentence = "My name is {$creds["name"]} and I am {$creds["age"]} and I am a {$creds["occupation"]}";

print( $sentence );

?>
