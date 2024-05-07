<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Stagiaires</title>
    <!-- Ajoutez les liens vers les fichiers Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Gestion Stagiaires</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                      
                        <li class="nav-item">
                            <a class="nav-link" href="ajouter_stagiaire.php">Ajouter Stagiaire</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Deconexion</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container mt-5">
        <h1>Liste des Stagiaires</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Adresse e-mail</th>
                    <th>Niveau</th>
                    <th>Salaire</th>
                    <th>Département</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once("connexion.php");

                // Récupérer les données des stagiaires depuis la base de données
                $sql = "SELECT * FROM  stagaire ";
                $result = $conn->query($sql);

                if ($result->rowCount() > 0) {
                    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                        echo "<tr>";
                        echo "<td>{$row['ID_stage']}</td>";
                        echo "<td>{$row['Nom']}</td>";
                        echo "<td>{$row['Prénom']}</td>";
                        echo "<td>{$row['Adresse e-mail']}</td>";
                        echo "<td>{$row['niveau']}</td>";
                        echo "<td>{$row['salaire']}</td>";
                        echo "<td>{$row['dipartement']}</td>";
                        echo "<td>";
                        echo "<a href='modifier_stagiaire.php?id={$row['ID_stage']}' class='btn btn-warning'>Modifier</a>&nbsp&nbsp&nbsp";
                        echo "<a href='delete.php?id={$row['ID_stage']}' class='btn btn-danger ml-2'>Supprimer</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='8'>Aucun stagiaire trouvé.</td></tr>";
                }

                // Fermer la connexion à la base de données
                $conn = null;
                ?>
            </tbody>
        </table>
    </div>

    <!-- Ajoutez les liens vers les fichiers Bootstrap JavaScript et jQuery (pour les fonctionnalités Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
