<?php
$pageHeader = 'Hellow, well come';
//
//var_dump($_GET);
//$pageHeader = 'Hellow, well come';
//$username = isset($_GET['username']) && !empty($_GET['username']) ? $_GET['username'] : null;
//$username = isset($_POST['username']) && !empty($_POST['username']) ? $_POST['username'] : null;
//$username = isset($_REQUEST['username']) && !empty($_REQUEST['username']) ? $_REQUEST['username'] : null;
//
//if ($username) {
//    setcookie('username', $username, time() + 60*60*24);
//}
//
//if (isset($_COOKIE['username'])) {
//    var_dump($_COOKIE);
//    die;
//}

if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    unset($_SESSION['username']);
}

var_dump($_SESSION);
//die();

$username = null;
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} elseif (isset($_REQUEST['username']) && !empty($_REQUEST['username'])) {
    $username = $_SESSION['username'];
    $_SESSION['username'] = $username;
}

//ini_set('session.cookie_lifetime', 84688);

require_once 'views/home.php';