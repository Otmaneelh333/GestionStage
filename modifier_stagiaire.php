<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Stagiaire</title>
    <!-- Inclure les fichiers Bootstrap CSS -->
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
        <h1>Modifier Stagiaire</h1>
        
        <?php
        // Vérifier si l'ID du stagiaire à modifier est présent dans l'URL
        if (isset($_GET['id']) && is_numeric($_GET['id'])) {
            $stagiaireId = $_GET['id'];

            // Inclure le fichier de connexion à la base de données
            require_once("connexion.php");

            // Récupérer les données du stagiaire à partir de la base de données
            $sql = "SELECT * FROM stagaire  WHERE ID_stage = :stagiaireId";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':stagiaireId', $stagiaireId, PDO::PARAM_INT);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $row = $stmt->fetch(PDO::FETCH_ASSOC);

                // Afficher le formulaire de modification avec les données actuelles du stagiaire
                echo '<form action="traitement_modification_stagiaire.php" method="post">';
                echo '<input type="hidden" name="stagiaireId" value="' . $stagiaireId . '">';
                echo '<div class="form-group">';
                echo '<label for="nom">Nom :</label>';
                echo '<input type="text" class="form-control" id="nom" name="nom" value="' . $row['Nom'] . '">';
                echo '</div>';
                echo '<div class="form-group">';
                echo '<label for="prenom">Prénom :</label>';
                echo '<input type="text" class="form-control" id="prenom" name="prenom" value="' . $row['Prénom'] . '">';
                echo '</div>';
                echo '<div class="form-group">';
                echo '<label for="email">Adresse e-mail :</label>';
                echo '<input type="email" class="form-control" id="email" name="email" value="' . $row['Adresse e-mail'] . '">';
                echo '</div>';
                echo '<div class="form-group">';
                echo '<label for="niveau">Niveau :</label>';
                echo '<input type="text" class="form-control" id="niveau" name="niveau" value="' . $row['niveau'] . '">';
                echo '</div>';
                echo '<div class="form-group">';
                echo '<label for="salaire">Salaire :</label>';
                echo '<input type="text" class="form-control" id="salaire" name="salaire" value="' . $row['salaire'] . '">';
                echo '</div>';
                echo '<div class="form-group">';
                echo '<label for="departement">Département :</label>';
                echo '<input type="text" class="form-control" id="departement" name="departement" value="' . $row['dipartement'] . '">';
                echo '</div><br><br>';
                echo '<button type="submit" class="btn btn-primary">Enregistrer les modifications</button>';
                echo '</form>';
            } else {
                echo '<p>Aucun stagiaire trouvé avec cet ID.</p>';
            }

            // Fermer la connexion à la base de données
            $conn = null;
        } else {
            echo '<p>Paramètre d\'ID de stagiaire manquant dans l\'URL.</p>';
        }
        ?>

    </div>

    <!-- Inclure les fichiers Bootstrap JavaScript et jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
