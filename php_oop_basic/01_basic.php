<?php
echo "Hello World!\n";
echo "PHP: Hypertext Preprocessor\n";
print "php is a server side scripting language\n";

// difference between echo and print
// echo can take multiple parameters (although such usage is rare)
// print can only take one argument
// echo is faster than print statements

//echo "Hello", "World!\n";
//print "Hello" , "World!\n"; // wrong error

// single line comment
/* multi line comment
line 1
line 2
line 3
 */

$firstName = "John";
$lastName = "Doe";
$age = 35;
$height = 5.8;

print $firstName . " " . $lastName . " is " . $age . " years old and " . $height . " feet tall.\n";

$x = 5;
$y = 10;

print $x + $y . "\n";
print $x - $y . "\n";
print $x * $y . "\n";

/*
Data Types
1. Numbers - Integers and Floats
2. Strings
3. Booleans - True or False
4. Arrays
5. Objects
6. NULL
7. Resources
 */
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);
