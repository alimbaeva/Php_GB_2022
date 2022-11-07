<?php
$pdo = require_once "db.php";

include_once "auth.php";

if (!isset($_SESSION['login'])) {
    header('Location: index.php');
    die();
}

$user_id = $_SESSION['id'];

if (isset($_POST['text']) && isset($_GET['action']) && $_GET['action'] == 'addtask') {
    $taskText = strip_tags($_POST['text']);

    $statement = $pdo->prepare(
        'INSERT INTO tasks (id_user, text) VALUES (:user_id, :text)'
    );
    $statement->execute([
        'user_id' => $user_id,
        'text' => $taskText
    ]);

    // $_SESSION["products"][] = $product;
    header('Location: tasks.php');
    die();
}

if (isset($_GET["action"]) && $_GET["action"] == "done") {
    $key = $_GET["key"];

    unset($_SESSION["products"][$key]);
    header('Location: tasks.php');
    die();
}

$statement = $pdo->prepare(
    'SELECT * FROM tasks WHERE id_user = :id_user'
);

$statement->execute([
    'id_user' => $user_id
])

$tasks = $statement->fetchAll();
var_dump('файл tasks.php строка 46;');
var_dump($tasks);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cтраница</h1>
    <?php include "menu.php" ?>
    <?php if (is_null($name)) ?>
        <form method="post">
            <input type="text" name="login">
            <input type="password" name="pass">
            <input type="submit" value="login">
        </form>
    <?php else: ?>
        Добро пожаловать <?= $name ?> <a href="/?action=logout">[exit]</a>
    <?php endif; ?>

    <h2>Список Задач</h2>
    <form method="post">
        <input type="text" name="text" placeholder="Добавьте задачу">
        <input type="submit" value="Добавить">
    </form>
    <br>

    <?php if (!empty($tasks)): ?>
        <?php foreach ($tasks as $key => $tasks): ?>
            * <?=$tasks["text"]?> <a href="?action=done&key=<?=$tasks["id"]?>">[x]</a><br>
        <?php endforeach; ?>
    <?php else: ?>
        Нет Задач
    <?php endif; ?>

</body>
</html>