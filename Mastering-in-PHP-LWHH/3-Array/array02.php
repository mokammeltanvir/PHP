<?php
$students = [
    "Mokammel",
    "Tanvir",
    "Hossain",
    "Programmer",

];
//mutable
// $students[3] = "Developer";
// $n = count($students);
// for ($i = 0; $i < $n; $i++) {
//     echo $students[$i] . "\n";
// }

$student = array_pop($students);
$student = array_shift($students);

$n = count($students);
for ($i = 0; $i < $n; $i++) {
    echo $students[$i] . "\n";
}

$students[] = "Siam";
array_push($students, "Ahmed");

array_unshift($students, "Mou");
array_unshift($students, "Sumi");
$n = count($students);
for ($i = 0; $i < $n; $i++) {
    echo $students[$i] . "\n";
}

/**
 *
array_shift();
array_unshift();
array_pop();
array_push();

 */
