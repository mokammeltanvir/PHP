<?php
//! Conditional Statements /

//* if...else

$age = 15;

if ($age >= 18) {
    echo "You are eligible to vote.\n";
} else {
    echo "You are not eligible to vote.\n";
}

$color = "red";
if ($color == "red") {
    echo "The color is red.\n";
} else {
    echo "The color is not red.\n";
}

//* if...elseif...else

$color = "black";
if ($color == "blue") {
    print "The color is blue.\n";
} elseif ($color == "red") {
    print "The color is red.\n";
} else {
    print "The color is not blue or red.\n";
}

//*Switch

$color = "black";
switch ($color) {
    case "blue":
        print "The color is blue.\n";
        break;
    case "red":
        print "The color is red.\n";
        break;
    default:
        print "The color is not blue or red.\n";
        break;
}

//! PHP Loops /

//* while loop

$tkt_no = 0;

while ($tkt_no <= 100) {
    echo "Ticket number: $tkt_no\n";
    $tkt_no++;
}

//* do...while loop
$tkt_no = 0;
do {
    print "Ticket number: $tkt_no\n";
    $tkt_no++;
} while ($tkt_no <= 100);

//* for loop
$tkt_no = 0;
for ($tkt_no = 0; $tkt_no <= 100; $tkt_no++) {
    print "Ticket number: $tkt_no\n";
}

//* foreach loop --> array[key: value]
$fruits = array("apple", "banana", "orange", "mango");

foreach ($fruits as $value) {
    print "Fruit: $value\n";
}

$person = array(
    'Sakil' => 25,
    'Rakib' => 26,
    'Rakibul' => 27,
    'Robiul Islam' => 28,
    'Siam' => 29,
);

foreach ($person as $key => $value) {
    print "$key is $value years old.\n";
}
