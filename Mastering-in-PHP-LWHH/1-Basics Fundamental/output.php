<?php
$name = "Mokammel";
$age = 25;
$float = 25.639;
$null = null;

echo $name . " " . $age. "\n";
var_dump($name);
var_dump($age);
var_dump($float);
var_dump($null);

print $name;
echo "\n";
//echo strtoupper($name);

printf("My name is %s\n", $name);

echo "I am
from
Dhaka\n

Bangladesh\n";

$fname = "Mokammel";
$lname = "Hossain";

$output = sprintf('My name is %2$s, %1$s', $fname, $lname);
echo $output;
