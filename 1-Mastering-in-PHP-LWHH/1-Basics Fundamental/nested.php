<?php

$condition1 = true;
$condition2 = false;
$condition3 = true;
if ($condition1) {
    if ($condition2) {
      if ($condition3) {
        echo "hello";
      }else {
        echo " number 1";
      }
    }else{
      echo "number 2";
    }
}else{
  echo "number 3";
}
echo "\n";

if ($condition1 && $condition2 && $condition3) {
  echo "hello";
}elseif ($condition1 && $condition2) {
    echo " number 1";
}elseif ($condition1) {
  echo "number 2";
}else {
  echo "number 3";
}