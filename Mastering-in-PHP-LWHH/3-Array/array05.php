<?php
/**
 * Multi dimensional Array / nested Array
 */
$foods = [
    'vegetables' => explode(', ', 'carrot, Capsicam, brocolli'),
    'fruits' => explode(', ', 'orange, banana, apple'),
    'drinks' => explode(', ', 'water, milk'),
];

array_push($foods['drinks'], 'orange juice');
print_r($foods);

//echo $foods['vegetables'][1];

$sample = [
    'test' => [
        'test-again' => [
            'a',
            'b',
            'c',
            'd',
        ],
    ],
];

$sample2 = [
    [1, 2, 3, 4],
    [11, 22, 33, 44],
    [111, 222, 333, 444],
    [1111, 2222, 3333, [5, 6, 7]],
];

echo $sample['test']['test-again'][1];
