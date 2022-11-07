<?php

use app\Test; // вызываем класс Test с пространством имен Test2 (2 одинаковые классы находятся в разных участкач памяти)
include 'app/Test.php'; // импортировали файл

spl_autoload_register(
    function(string $class)
    {
        // $path = str_replace('\\', '/', $class);
        $path = str_replace('\\', DIRECTORY_SEPARATOR, $class);
        require_once "$path.php";
    }
);


$test = new Test(1, 10);
echo $test->sendMessage().PHP_EOL;

