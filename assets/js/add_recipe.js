document.querySelector('form').addEventListener('submit', async function(event) {
    event.preventDefault(); // Empêche le rechargement de la page à l'envoi du formulaire

    // Récupération des données du formulaire
    const formData = new FormData(this);

    try {
        // Envoi des données au serveur avec fetch (méthode POST)
        const response = await fetch('index.php?action=add', {
            method: 'POST',
            body: formData
        });

        // Vérification si la réponse est en JSON
        const data = await response.json();

        // Si l'ajout est réussi
        if (data.success) {
            // Redirection vers la liste des recettes
            window.location.href = 'index.php?action=list';
        } else {
            // Affichage d'un message d'erreur
            alert('Erreur lors de l\'ajout de la recette.');
        }
    } catch (error) {
        // Si une erreur se produit, l'afficher dans la console
        console.error('Erreur:', error);
        alert('Une erreur est survenue, veuillez réessayer.');
    }
});
