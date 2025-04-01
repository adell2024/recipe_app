<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une recette</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h1>Ajouter une recette</h1>
    <form action="index.php?action=add" method="POST">
        <label for="titre">Titre :</label>
        <input type="text" id="titre" name="titre" required><br>

        <label for="description">Description :</label>
        <textarea id="description" name="description" required></textarea><br>

        <label for="ingredients">Ingrédients :</label>
        <textarea id="ingredients" name="ingredients" required></textarea><br>

        <label for="etapes">Étapes :</label>
        <textarea id="etapes" name="etapes" required></textarea><br>

        <label for="categorie">Catégorie :</label>
        <select id="categorie" name="categorie">
            <option value="Entrée">Entrée</option>
            <option value="Plat">Plat</option>
            <option value="Dessert">Dessert</option>
        </select><br>

        <button type="submit">Ajouter la recette</button>
    </form>
</body>
</html>
