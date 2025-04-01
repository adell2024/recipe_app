<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier une recette</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <h1>Modifier la recette</h1>
    <form action="index.php?action=update&id=<?php echo $recipe['id']; ?>" method="POST">
        <label for="titre">Titre :</label>
        <input type="text" id="titre" name="titre" value="<?php echo htmlspecialchars($recipe['titre']); ?>" required><br>

        <label for="description">Description :</label>
        <textarea id="description" name="description" required><?php echo htmlspecialchars($recipe['description']); ?></textarea><br>

        <label for="ingredients">Ingrédients :</label>
        <textarea id="ingredients" name="ingredients" required><?php echo htmlspecialchars($recipe['ingredients']); ?></textarea><br>

        <label for="etapes">Étapes :</label>
        <textarea id="etapes" name="etapes" required><?php echo htmlspecialchars($recipe['etapes']); ?></textarea><br>

        <label for="categorie">Catégorie :</label>
        <select id="categorie" name="categorie">
            <option value="Entrée" <?php if ($recipe['categorie'] == 'Entrée') echo 'selected'; ?>>Entrée</option>
            <option value="Plat" <?php if ($recipe['categorie'] == 'Plat') echo 'selected'; ?>>Plat</option>
            <option value="Dessert" <?php if ($recipe['categorie'] == 'Dessert') echo 'selected'; ?>>Dessert</option>
        </select><br>

        <button type="submit">Mettre à jour la recette</button>
    </form>
</body>

</html>