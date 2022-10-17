<!--<a href="?username=Guest">Sigin in how Guest</a>-->

<header>
    <meta charset="UTF-8">
    <title>Main</title>
</header>
<body>
    <h1><?=$pageHeader?></h1>
    <?php if ($username !== null) : ?>
    <p>Welcome you, <?=$username?></p>
<?php else: ?>
    <form method="post">
        <input type="text" name="username" placeholder="write your name" />
        <input type="submit" value="send" />
    </form>
<?php endif ?>
</body>