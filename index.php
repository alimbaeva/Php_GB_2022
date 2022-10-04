<?php
require_once 'TaskServise.php';
require_once 'Comment.php';

$comment = new Comment();

TaskServise::addComment('asel','walk', 'i like walk evry day');

var_dump($comment);
?>