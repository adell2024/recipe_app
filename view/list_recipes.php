<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des recettes</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <h1>Liste des recettes</h1>
    <a href="index.php?action=add">Ajouter une nouvelle recette</a>
    <ul>
        <?php foreach ($recipes as $recipe): ?>
            <li>
                <strong><?php echo htmlspecialchars($recipe['titre']); ?></strong><br>
                <?php echo htmlspecialchars($recipe['description']); ?><br>
                <a href="index.php?action=update&id=<?php echo $recipe['id']; ?>">Modifier</a> |
                <a href="index.php?action=delete&id=<?php echo $recipe['id']; ?>" onclick="return confirm('Êtes-vous sûr ?')">Supprimer</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>