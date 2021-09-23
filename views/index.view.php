<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Tasks</title>
</head>
<body>
    <?php foreach ($tasks as $task): ?>
        <li>
            <?php if ($task->completed == '1') : ?>
                <strike><?= $task->description; ?></strike>
            <?php else: ?>
                <?= $task->description; ?>
            <?php endif; ?>
        </li>
    <?php endforeach; ?>
</body>
</html>