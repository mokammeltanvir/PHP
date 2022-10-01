<?php
$num = 123; //Decimal number
$o = 012;
$h = 0x2B;
//printf("The number is %d and %d & %d", $num, $o, $h);

printf("The binary of %d is %b \n",16, 16);
printf("The hexadecimal of %d is %x \n",1612, 1612);
printf("The Octal of %d is %o \n",27, 27);

printf("Octal %o = %d \n",0200000,0200000);

$n = 45.1235;
printf("%.2f", $n);
echo "\n";

$m= 123.5325;
$n= 27;
printf("%04d",$m);
echo "\n";
printf("%04d",$n);
echo "\n";
printf("%04.2f",$m);
echo "\n";
printf("%04.2f",$n);
