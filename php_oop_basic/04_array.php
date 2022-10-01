<?php
/* An Array stores multiple values in one single variable.
for example:

$companies = array("Honda", "Toyota", "BMW", "Ford", "Tesla");

Array Types:
1. Indexed Arrays - Arrays with a numeric index
$companies = array("Honda", "Toyota", "BMW", "Ford", "Tesla");

2. Associative Arrays - Arrays with named keys
$marketShare = array("Honda" => 10, "Toyota" => 20, "BMW" => 30, "Ford" => 40, "Tesla" => 50);

3. Multidimensional Arrays - Arrays containing one or more arrays

$companyProfiles = array(
array("Honda", 10, 100),
array("Toyota", 20, 200),
array("BMW", 30, 300),
array("Ford", 40, 400),
array("Tesla", 50, 500)
);

 */

/* loop through an indexed array */
// $companies = array("Honda", "Toyota", "BMW", "Ford", "Tesla");
// $arrlength = count($companies);

// for ($index = 0; $index < $arrlength; $index++) {
//     echo "$index => $companies[$index]\n";
// }

/* loop through an associative array */
// $marketShare = array("Honda" => 10, "Toyota" => 20, "BMW" => 30, "Ford" => 40, "Tesla" => 50);
// foreach ($marketShare as $key => $value) {
//     echo "Company: $key, Market Share: $value\n";
// }

/* loop through a multidimensional array */
// $companyProfiles = array(
//     array("Honda", 10, 100),
//     array("Toyota", 20, 200),
//     array("BMW", 30, 300),
//     array("Ford", 40, 400),
//     array("Tesla", 50, 500),
// );

// for ($row = 0; $row < 5; $row++) {
//     echo "Row Number: $row\n";
//     echo "<ul>\n";
//     for ($col = 0; $col < 3; $col++) {
//         echo "<li>" . $companyProfiles[$row][$col] . "</li>\n";
//     }
//     echo "</ul>\n";
// }

//! Array Sorting
/* sort() - sort arrays in ascending order
rsort() - sort arrays in descending order
asort() - sort associative arrays in ascending order, according to the value
ksort() - sort associative arrays in ascending order, according to the key

arsort() - sort associative arrays in descending order, according to the value
krsort() - sort associative arrays in descending order, according to the key
 */

// $cars = array("Volvo", "BMW", "Toyota", "Honda", "Ford", "Abc", "Zyx");
// //sort($cars);
// rsort($cars);
// for ($index = 0; $index < count($cars); $index++) {
//     echo "$index => $cars[$index]\n";
// }

// $marketShare = array("Honda" => 10, "Toyota" => 20, "BMW" => 30, "Ford" => 40, "Tesla" => 50);
// asort($marketShare);
// arsort($marketShare);
// ksort($marketShare);
// krsort($marketShare);
// foreach ($marketShare as $key => $value) {
//     echo "Company: $key, Market Share: $value\n";
// }

// most used array functions
$companies = array("Honda", "Toyota", "BMW", "Ford", "Tesla", "Tesla");
// $marketShare = array("Honda" => 10, "Toyota" => 20, "BMW" => 30, "Ford" => 40, "Tesla" => 50);

//echo is_array($companies) ? "Yes, it is an array" : "No, it is not an array";
// $result = in_array("Honda", $companies) ? "Yes, it is in the array" : "No, it is not in the array";
// echo $result;

// $mergedArray = array_merge($companies, $marketShare);
// print_r($mergedArray);

// print_r(array_key_exists("Honda", $marketShare) ? "Yes, it is in the array" : "No, it is not in the array");
// array_push($companies, "Audi");
// array_pop($companies);
// print_r($companies);
// print_r(array_values($marketShare));

// Array map -> loop through each element of an array and apply a function to it

// function salesTax($price)
// {
//     return number_format(($price * 1.05), 2, '.', '');
// }
// $item = array(
//     100,
//     200,
//     300,
//     4000,
//     500,
// );
// $finalCost = array_map("salesTax", $item);
// print_r($finalCost);

// Array unique -> remove duplicate values from an array
$uniqueArray = array_unique($companies);
print_r($uniqueArray);

//Array slice -> extract a slice of an array
$sliceArray = array_slice($companies, 2, 3);
print_r($sliceArray);
