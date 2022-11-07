<?php

use App\Blog\BlogHW_Post;
use App\User\Person;
use App\User\Name;

require_once __DIR__ . '/vendor/autoload.php';

// Реализуйте автозагрузчик классов согласно следующим правилам:
// 1. Разделитель пространства имён преобразуется в разделитель папок: / для Linux и
// MacOS или \ для Windows.
// 2. Знак _ в имени класса преобразуется в разделитель папок.
// 3. Файл с кодом класса имеет расширение .php.
// Примеры:
// 1. \Doctrine\Common\ClassLoader ⇒ /some/path/Doctrine/Common/ClassLoader.php.
// 2. \my\package\Class_Name ⇒ /some/path/namespace/package/Class/Name.php.
// 3. \my\package_name\Class_Name ⇒ /some/path/my/package_name/Class/Name.php

spl_autoload_register(
    function (string $class) {
        $dirs = explode('\\', $class);
        print($dirs);
        $fileClass = str_replace('_', DIRECTORY_SEPARATOR, array_pop($dirs));
        print($fileClass);
        require sprintf('%s.php', implode(DIRECTORY_SEPARATOR, array_merge($dirs, [$fileClass])));
    }
);

echo new Post
(
    new Person(
        new Name('Ivan', 'Ivanov'),
        new DateTimeImmutable()
    ),
    'Это мой первый блог'
);