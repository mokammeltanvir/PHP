<?php
$n = 12;

if ($n % 2 == 0) {
  echo "$n even number";
}else {
  echo "$n odd number";
}


if($n %2 ==0):
  echo "$n even number";
  echo PHP_EOL;
  echo "some text";
else:
  echo "$n odd number";
  echo PHP_EOL;
  echo "some text";
endif;