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

function factorial($n)
{
// php 5.8
    if (gettype($n) !== 'integer') {
        return "invalid";
    }

    $result = 1;
    for ($i = $n; $i > 1; $i--) {
        $result *= $i;
    }
    return $result;
}
