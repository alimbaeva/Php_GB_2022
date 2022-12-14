<?php

use App\Blog\Post;
use App\User\Person;
use App\User\Name;

require_once __DIR__ . '/vendor/autoload.php';

// spl_autoload_register(
//     function (string $class) {
//         $file = str_replace('\\', DIRECTORY_SEPARATOR, $class).'.php';

//         if(file_exists($file)) {
//             require_once $file;
//         }
//     }
// );

echo new Post
(
    new Person(
        new Name('Ivan', 'Ivanov'),
        new DateTimeImmutable()
    ),
    'Это мой первый блог'
);