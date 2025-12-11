<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Todo List MVC</title>
</head>

<body>

    <h1>Ma Todo List</h1>

    <form action="index.php?action=store" method="POST">
        <input type="text" name="nom" placeholder="Nouvelle tâche" required>
        <input type="text" name="contenu" placeholder="Nouvelle contenu" required>
        <button type="submit">Ajouter</button>
    </form>

    <ul>
        <?php foreach($tasks as $task): ?>
        <li>
            <?php if($task['statut']): ?>
            <s><?= htmlspecialchars($task['nom']); ?></s>
            <?php else: ?>
            <?= htmlspecialchars($task['nom']); ?>
            <a href="index.php?action=complete&id=<?= $task['id'] ?>">✔</a>
            <?php endif; ?>

            <a href="index.php?action=delete&id=<?= $task['id'] ?>">🗑️</a>
        </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>