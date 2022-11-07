<?php
include_once "auth.php";

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
        Дщбро пожаловать <?= $name ?> <a href="/?action=logout">[exit]</a>
    <?php endif; ?>
</body>
</html>