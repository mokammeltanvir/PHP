<?php
$n = 12;
$r = $n % 2;
/*
switch ($r) {
  case '0':
    echo "{$n} is an even number";
    break;
    default:
    echo "{$n} is an odd number";
}

$color = 'red';
switch ($color) {
  case 'red':
    echo "Red is our favorite color";
    break;
    case 'green':
      echo "Green is our favorite color";
      break;
      case 'blue':
        echo "Blue is our favorite color";
}
*/
//Nesting



switch ($r) {
  case 0:
    switch ($n) {
      case $n > 0 :
      echo "{$n} is a positive even number";
        break;
      case $n<0:
        echo "{$n} is a negative even number";
        break;
      }
      break;
      default:
        switch ($n) {
      case $n > 0 :
      echo "{$n} is a positive odd number";
        break;
      case $n<0:
        echo "{$n} is a negative odd number";
        break;
    }
}

echo "\n";

switch (true) {
  case ($r == 0 && $n > 0) :
    echo "$n is a positive even number";
    break;

  case ($r == 1 && $n>0):
    echo "$n is a positive odd number"; 
    break;
  case ($r == 0 && $n<0): 
      echo "$n is a negative even number";
      break;
  case ($r == -1 && $n<0): 
      echo "$n is a negative odd number";
      break;
}