<?php
/*Rules for PHP variables:

A variable starts with the $ sign, followed by the name of the variable
A variable name must start with a letter or the underscore character
A variable name cannot start with a number
A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
Variable names are case-sensitive ($age and $AGE are two different variables) */

$name = "Bangladesh"; // string
$BD = 'Bangladesh'; // string
$myname = "Mokammel Tanvir";
$num =123;

//variables style types
$my_name = "Mokammel Tanvir"; //underscores
$myName = "Mokammel Hossain Tanvir"; //camelCase
$MyNameIs = "Mokammel tanvir"; //TitleCase

echo $name."\n";

echo $num;

echo $my_name.$myName. "\n";
echo "{$BD},\n {$MyNameIs}, {$num}";