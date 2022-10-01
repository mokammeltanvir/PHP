<?php
/*
 *Determines if the argument is even or odd.
 */
//parameter

function isEven($n)
{
    if ($n % 2 == 0) {
        return true;
    }
    return false;

}
$x = 13;

//argument
// if (isEven($x)) {
//     echo "{$x} is an even number";
// } else {
//     echo "{$x} is an odd number";
// }

function serve($foodType, $numberOfItems)
{
    echo "{$numberOfItems} of {$foodType} has been served. ";
}
