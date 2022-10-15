<?php

include_once 'model/Task.php';
include_once 'model/TaskProvider.php';
include_once 'model/User.php';

session_start();

$pageHeader = 'Задачи'ж

// Получаем текущего пользователя, если он залогинен
$username = null;
if (isset($_SESSION['user'])) {
    $username = $_SESSION['user']->getUsername();
} else {
    // Перенапрвим на главную если пользователь не залогинен
    header('Location: /');
    die();
}

$taskProvider = new TaskProvider();

var_dump($_SESSION ?? null);
// var_dump($_SESSION['tasks'] ?? null);

//Сделаем метод добавления новой задачи и сохроняем ее в сессии
if (isset($_GET['action']) && $_GET['action'] === 'add') {
    $taskText = strip_tags($_POST['task']);
    $taskProvider->addTask(new Task($taskText));
    header('Location: /?controller=tasks');
    die();
}

if (isset($_GET['action']) && $_GET['action'] === 'done') {
    $key = $_GET['key'];
    $taskProvider->dleteTask($key);
    header('Location: /?controller=tasks');
    die();
}

$tasks = $taskProvider->getUndoneList();
include 'view/tasks.php';