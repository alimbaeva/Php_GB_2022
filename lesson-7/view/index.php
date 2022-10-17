<head>
    <meta charset="UTF-8">
    <title>Main todo</title>
</head>
<body>
    <h1><?= $pageHeader ?></h1>

    <?php if (is_null($username)): ?>
        <a href="/?controller=security">Sign in</a>
    <?php else: ?>
        <?= $username?> <a href="/?controller=security&action=logout">Sigin up</a>
        <a href="/?controller=tasks">Tasks</a>
    <?php endif; ?>
</body>