<?php
$x = 7;
$y =5;

function greaterOrSmaller($x, $y){
  if ($x>$y) {
    return 1;
  }else if ($x==$y) {
    return 0;
  }else {
    return -1;
  }
}

if(greaterOrSmaller($x, $y)== 1){
  echo "{$x} is greater than {$y}";
}else if(greaterOrSmaller($x, $y)==0){
  echo "{$x} is equal to {$y}";
}elseif (greaterOrSmaller($x, $y)==-1){
  echo "{$x} is smaller than {$y}";
} 

echo PHP_EOL;
// Spaceship Operator

$result = $x <=> $y;

if($result == 1){
  echo "{$x} is greater than {$y}";
}else if($result ==0){
  echo "{$x} is equal to {$y}";
}elseif ($result ==-1){
  echo "{$x} is smaller than {$y}";
} 