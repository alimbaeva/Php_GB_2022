<?php
    if (isset($_POST['text'])) {
        ['text' => $text] = $_POST;
        $todo =` <h3><?=$text?></h3>`
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="heading">
        <h2>To-Do LIST</h2>
    </div>

    <form method="POST" action="index.php">
        <input type="text" name="task" class="task_input">
        <button type="submit" class="task_btn" name="submit">Add Task</button>
    </form>

    <div><?=$todo?></div>
</body>
</html>