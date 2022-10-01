<?php
/**
 * String to array and multiple delimiter
 * array to string
 */
$animals = explode(', ', 'cat, dog, tiger, lion, cow');
var_dump($animals);
//echo $animals[0];

//array to string
$animalsString = join(', ', $animals);
echo $animalsString;
