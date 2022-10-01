<?php
// Fibonacci series

$veryold = 0;
$old = 1;
$new = 1;

for ($i=0; $i < 10; $i++) { 
  echo $veryold." ";
  $old = $new;
  $new = $old + $veryold;
  $veryold = $old;
}

/* 
!initial
v= 0
o = 1
v = 1

*--> 1st loop
v = 1
o = 1
n = 1

*-> 2nd loop
v = 1
o = 1
n = 2

*/