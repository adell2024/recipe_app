<?php
require_once('../config/db.php');

class Recipe
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAllRecipes()
    {
        $stmt = $this->pdo->query("SELECT * FROM recipes");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getRecipeById($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM recipes WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function addRecipe($data)
    {
        $stmt = $this->pdo->prepare("INSERT INTO recipes (titre, description, ingredients, etapes, categorie) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$data['titre'], $data['description'], $data['ingredients'], $data['etapes'], $data['categorie']]);
    }

    public function updateRecipe($id, $data)
    {
        $stmt = $this->pdo->prepare("UPDATE recipes SET titre = ?, description = ?, ingredients = ?, etapes = ?, categorie = ? WHERE id = ?");
        $stmt->execute([$data['titre'], $data['description'], $data['ingredients'], $data['etapes'], $data['categorie'], $id]);
    }

    public function deleteRecipe($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM recipes WHERE id = ?");
        $stmt->execute([$id]);
    }
}
