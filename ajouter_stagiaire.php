<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Stagiaire</title>
    <!-- Ajoutez les liens vers les fichiers Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="indexx.php">Gestion Stagiaires</a>
            </div>
        </nav>
    </header>

    <div class="container mt-5">
        <h1>Ajouter un Stagiaire</h1>
        <form action="traitement_ajout_stagiaire.php" method="POST">
            <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>
            <div class="form-group">
                <label for="prenom">Prénom :</label>
                <input type="text" class="form-control" id="prenom" name="prenom" required>
            </div>
            <div class="form-group">
                <label for="email">Adresse e-mail :</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="niveau">Niveau :</label>
                <input type="text" class="form-control" id="niveau" name="niveau" required>
            </div>
            <div class="form-group">
                <label for="salaire">Salaire :</label>
                <input type="text" class="form-control" id="salaire" name="salaire" required>
            </div>
            <div class="form-group">
                <label for="departement">Département :</label>
                <input type="text" class="form-control" id="departement" name="departement" required>
            </div>
            <br><br>
            <button type="submit" class="btn btn-primary">Ajouter Stagiaire</button>
        </form>
    </div>

    <!-- Ajoutez les liens vers les fichiers Bootstrap JavaScript et jQuery (pour les fonctionnalités Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
