<?php
$name = readline("Hi, what is your name?");
$chalange = readline("What is your chalange today?");
$chArr = (explode(',', $chalange, 3));
$time = readline("Approximately how long will this task take?");
$time = (int)$time;
var_dump("$name today you have 3 priority tasks planned for the day:");
var_dump($chArr[0], ($time/2));
var_dump($chArr[1], ($time/2/2));
var_dump($chArr[2], ($time/2/2));
var_dump("Estimated tim to complate the plan = $time");
?>