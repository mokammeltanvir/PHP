<?php
// ternarry operrator

$num = 3;
if (12 == $num) {
  echo "Twelve";
}elseif(10 == $num) {
  echo "ten";
}else {
  echo "A number";
}
echo " \n";
$numberInWords = (12 == $num) ? "Twelve" : "A number";
echo $numberInWords;
echo " \n";

if ($num % 2 == 0) {
  echo "Even number";
}else{
  echo "odd number";
}
echo " \n";

$result = ($num % 2 == 0) ? "Even number" : "odd number";
echo $result;

