<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $stagiaireId = $_POST['stagiaireId'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $niveau = $_POST['niveau'];
    $salaire = $_POST['salaire'];
    $departement = $_POST['departement'];

    // Inclure le fichier de connexion à la base de données
    require_once("connexion.php");

    // Préparer la requête SQL pour mettre à jour les informations du stagiaire
    $sql = "UPDATE stagaire  SET Nom = :nom, Prénom = :prenom, `Adresse e-mail` = :email, niveau = :niveau, salaire = :salaire, dipartement = :departement WHERE ID_stage = :stagiaireId";

    // Préparer et exécuter la requête avec des paramètres liés
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':stagiaireId', $stagiaireId, PDO::PARAM_INT);
    $stmt->bindParam(':nom', $nom, PDO::PARAM_STR);
    $stmt->bindParam(':prenom', $prenom, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':niveau', $niveau, PDO::PARAM_STR);
    $stmt->bindParam(':salaire', $salaire, PDO::PARAM_STR);
    $stmt->bindParam(':departement', $departement, PDO::PARAM_STR);

    if ($stmt->execute()) {
        // La mise à jour a réussi, rediriger vers la liste des stagiaires
        header("Location: indexx.php");
        exit();
    } else {
        // La mise à jour a échoué, afficher un message d'erreur
        echo "Erreur lors de la mise à jour du stagiaire.";
    }

    // Fermer la connexion à la base de données
    $conn = null;
} else {
    // Rediriger vers la page d'accueil si le formulaire n'a pas été soumis
    header("Location: index.php");
    exit();
}
?>
