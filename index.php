<?php
require_once 'Task.php';

$done = readline('Done date');
$prio = readline('priority num');

$task = new Task('Asel');

$task
    ->setdescription('pay dress')
    ->setdateCreated(date('Y-m-d'))
//    ->setdateUpdate(date('Y-m-d'))
    ->setdateDone($done)
    ->setpriority((int) $prio)
    ->setisDone(false);

//$date = date('Y-m-d');

var_dump($task);
$task->markAsDone();
var_dump($task);
?>