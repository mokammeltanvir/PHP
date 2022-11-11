<?php
/*
for ($i=0; $i < 100; $i++) { 
    // if($i % 7 == 0) echo $i."\n";
    // if($i % 11 == 0) echo $i."\n";

    // echo $i % 7 == 0 ? $i. "\n":'';
    // echo $i % 11 == 0 ? $i. "\n":'';
}

for ($i=0, $j=0; $j < 100; $i+=7, $j+=11) { 
  echo $i."\n";
  echo $j."\n";
  echo $j< 100 ? $j."\n":'';

}
*/
$i = 0;
while($i < 5) {
  echo $i;
  echo PHP_EOL;
  $i++;
}
echo "==========\n";
$j= 0;
while ($j++ < 5) {
  echo $j;
  echo PHP_EOL;
}
echo "==========\n";
$j= 0;
while (++$j < 5) {
  echo $j;
  echo PHP_EOL;
}