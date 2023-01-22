<?php
$n = "12";
$students = array(
    "rahim",
    "karim",
    123,
    "monir",
);
//echo $students[1];
//var_dump($students);
//echo count($students);

$n = count($students);
// for ($i = 0; $i < $n; $i++) {
//     echo $students[$i] . "\n";
// }

for ($i = $n - 1; $i >= 0; $i--) {
    echo $students[$i] . "\n";
}

$teachers = [
    "Jamal",
    "Hasan",
    "Roofik",
    "Kamal",
];
