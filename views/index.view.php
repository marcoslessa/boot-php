<?php require('partials/head.php'); ?>

    <h1>My tasks</h1>

    <?php foreach ($tasks as $task): ?>
        <li>
            <?php if ($task->completed == '1') : ?>
                <strike><?= $task->description; ?></strike>
            <?php else: ?>
                <?= $task->description; ?>
            <?php endif; ?>
        </li>
    <?php endforeach; ?>

<?php require('partials/footer.php'); ?>