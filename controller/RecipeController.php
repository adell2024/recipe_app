<?php
require_once('../model/Recipe.php');

class RecipeController
{
    private $model;

    public function __construct($pdo)
    {
        $this->model = new Recipe($pdo);
    }

    public function listRecipes()
    {
        $recipes = $this->model->getAllRecipes();
        include('../view/list_recipes.php');
    }

    public function addRecipe()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'titre' => $_POST['titre'],
                'description' => $_POST['description'],
                'ingredients' => $_POST['ingredients'],
                'etapes' => $_POST['etapes'],
                'categorie' => $_POST['categorie']
            ];
            $this->model->addRecipe($data);
            header('Location: index.php?action=list');
        } else {
            include('../view/add_recipe.php');
        }
    }

    public function updateRecipe($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'titre' => $_POST['titre'],
                'description' => $_POST['description'],
                'ingredients' => $_POST['ingredients'],
                'etapes' => $_POST['etapes'],
                'categorie' => $_POST['categorie']
            ];
            $this->model->updateRecipe($id, $data);
            header('Location: index.php?action=list');
        } else {
            $recipe = $this->model->getRecipeById($id);
            include('../view/update_recipe.php');
        }
    }

    public function deleteRecipe($id)
    {
        $this->model->deleteRecipe($id);
        header('Location: index.php?action=list');
    }
}
