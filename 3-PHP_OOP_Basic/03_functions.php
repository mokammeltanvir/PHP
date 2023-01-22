<?php

/* function - a block of code or statements that can be called or used repeatedly in a program
function name() {
"code to be executed here"
}

1. function with no return
2. function with arguments
3. function with default arguments values
4. function with returning values
5. function with referenced arguments

 */

//! 1. function with no return
function printMessage()
{
    echo "Hello World! This is a function with no return value type<br>";
}
printMessage();

//! 2. function with arguments
function fullName($firstName, $lastName)
{
    echo "Hello $firstName $lastName\n";
}
fullName("Mokammel", "Tanvir");

//! 3. function with default arguments values
function fullName2($firstName = "John", $lastName = "Doe")
{
    echo "Hello $firstName $lastName\n";
}
fullName2('Mokammel', 'Tanvir');

//! 4. function with returning values
function fullName3($firstName, $lastName)
{
    return $firstName . ' ' . $lastName;
}
print fullName3('Mokammel', 'Tanvir');

//! return type declaration
function addNumbers(int $x = 0, int $y = 0): float
{
    return $x + $y;
}
print addNumbers(5, 10);

//! 5. function with referenced arguments
function addFiveToCount(&$countValue)
{
    $countValue += 5;
}
$countingNumber = 10;

addFiveToCount($countingNumber);

echo $countingNumber;

function calculator($method = "sum", int $var1, int $var2)
{
    if ($method == 'sum') {
        return $var1 + $var2;
    } else if ($method == 'sub') {
        return $var1 - $var2;
    } else if ($method == 'mul') {
        return $var1 * $var2;
    } else if ($method == 'div') {
        return $var1 / $var2;
    } else {
        return "Invalid method";
    }

}
print calculator('sub', 10, 5);
