<?php
//$key = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
//$values = [11, 2, 54, 56, 76, 89, 8, 2, 0, 66];
//
//$keys2 = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
//$values2 = [9, 7, 98, 23, 51, 33, 4, 8, 33, 21];
//
//$array1 = array_combine($key, $values);
//$array2 = array_combine($keys2, $values2);
//
//for ($i = 0; $i < 10; $i++) {
//    print_r($array1[$i]*$array2[$i]);
//    echo PHP_EOL;
//}



//$name = readline("Hi, what is your name?");
//var_dump("$name happy Berth Day!!! yhoooooo ");



//$name = readline("Hi, what is your name?");
//$values = ["longer", "bigger", "infinity", "huger"];
//$values2 = ["happy", "health", "love"];
//
//$arr1 = array_rand($values, 2);
//$arr2 = array_rand($values2, 2);
//$text = implode(" ", [$values[$arr1[0]], $values2[$arr2[0]], $values[$arr1[1]], $values2[$arr2[1]]]);
//var_dump("$name i wish you $text");



$students = [
    "grope-1" => [
        "Ivanov" => 5,
        "Zaisev" => 2,
        "Hapopt" => 4,

    ],
    "grope-2" => [
        "Ivanov" => 5,
        "Zaisev" => 5,
        "Hapopt" => 4,

    ],
    "grope-3" => [
        "Ivanov" => 2,
        "Zaisev" => 2,
        "Hapopt" => 3,

    ]
];

$number = 0;
$ballGroup =[0, 0];

foreach ($students as &$group) {
    $i=0;
    foreach ($group as &$el) {
        $number += (int)$el;
    }
    $num = $number / count($group);
    var_dump(floor((int)$num));
    if ($ballGroup[1] < $num) {
        array_slice($ballGroup, array(`$i`, `$num`));
    }
    $i++;
}
var_dump($ballGroup);
?>