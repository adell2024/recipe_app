CREATE DATABASE IF NOT EXISTS recipe_db;

USE recipe_db;

CREATE TABLE IF NOT EXISTS recipes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    ingredients TEXT NOT NULL,
    etapes TEXT NOT NULL,
    categorie VARCHAR(100) NOT NULL
);

INSERT INTO recipes (titre, description, ingredients, etapes, categorie)
VALUES ('Salade de tomates', 'Une salade fraîche avec des tomates et des herbes', 'Tomates, Herbes, Huile d\'olive', 'Couper les tomates, mélanger avec les herbes et ajouter l\'huile d\'olive', 'Entrée');
