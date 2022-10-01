<?php
//6= 6*5*4*3*2*1
$num = 3;

for ($i=$num, $factorial = 1; $i>1; $i--) { 
  //$factorial = $factorial * $i;
  $factorial *= $i;
}
printf("Factorial of %d is %d\n",$num,$factorial);