<?php
require_once 'models/UserProvider.php';
$pageSecurity = 'Hi this page Security';

$error = null;
if (isset($_POST['username'], $_POST['password'])) {
    ['username' => $username, 'password' => $password] = $_POST;

    var_dump($username, $password);

    try {
        $userPrivider = new UserProvider();
        $user = $userPrivider->getByNameAndPassword($username, $password);

    } catch (Throwable $exception) {
        echo $exception->getMessage();
    }

    if ($user === null) {
        $error = "Not Found User";
    }else {
        $_SESSION['user'] = $user;
    }

}

if (isset($_SESSION['user'])) {
    header('Location: /');
}

//if (!$user) {
//    $error = 'note foun this user';
//} else {
//    $_SESSION['user'] = $user;
//}

require_once 'views/login.php';