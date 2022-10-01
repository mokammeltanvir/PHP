<?php
/**
 *associative array
 */
// $students = [
//     '12' => 'Hasan',
//     '13' => 'Karim',
//     '20' => 'jalal',
// ];
// echo $students['20'];

$foods = [
    'vegetables' => 'carrot, capsicam',
    'fruits' => 'orange, banana, apple',
    'drinks' => 'water, milk',
];
foreach ($foods as $key => $value) {
    echo $key . "=" . $value . "\n";
}

$keys = array_values($foods);
print_r($keys);

//$foods['drinks']= $foods['drinks'].", orange juice";
//$foods['drinks'].= ", orange juice";
