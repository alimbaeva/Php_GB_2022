<?php
//$array = [3, 22, 4, 5, 9, 8, 23, 12, 54, 34, 67, 7];
//$number = function ($n) {
//    var_dump($n%2 === 0 ? "even" : "odd");
//};
//array_map($number, $array);


//$array = [3, 22, 4, 5, 9, 8, 23, 12, 54, 34, 67, 7];
//
//$array2 = [];
//$sum=0;
//asort($array, SORT_NUMERIC);
//foreach ($array as $i) {
//    $sum+=$i;
//    array_push($array2, $i);
//}
//
//
//var_dump($array2[0], "   min number");
//var_dump($array2[count($array)-1], "   max number");
//var_dump($sum / count($array2), "average");



$box = [
    [
        0 => 'Тетрадь',
        1 => 'Книга',
        2 => 'Настольная игра',
        3 => [
            'Настольная игра',
            'Настольная игра',
        ],
        4 => [
            [
                'Ноутбук',
                'Зарядное устройство'
            ],
            [
                'Компьютерная мышь',
                'Набор проводов',
                [
                    'Фотография',
                    'Картина'
                ]
            ],
            [
                'Инструкция',
                [
                    'Ключ'
                ]
            ]
        ]
    ],
    [
        0 => 'Пакет кошачьего корма',
        1 => [
            'Музыкальный плеер',
            'Книга'
        ]
    ]
];

function isArray($array) {
    foreach ($array as $el) {
        if (is_array($el)) {
            var_dump("true");
            isArray($el);
        } else {
            var_dump("false");
        }
    }
}
isArray($box);
?>