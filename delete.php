<?php
// Vérifier si l'ID du stagiaire à supprimer est présent dans l'URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $stagiaireId = $_GET['id'];

    // Inclure le fichier de connexion à la base de données
    require_once("connexion.php");

    // Préparer la requête SQL pour supprimer le stagiaire
    $sql = "DELETE FROM stagaire  WHERE ID_stage = :stagiaireId";

    // Préparer et exécuter la requête avec des paramètres liés
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':stagiaireId', $stagiaireId, PDO::PARAM_INT);

    if ($stmt->execute()) {
        // La suppression a réussi, rediriger vers la liste des stagiaires
        header("Location: indexx.php");
        exit();
    } else {
        // La suppression a échoué, afficher un message d'erreur
        echo "Erreur lors de la suppression du stagiaire.";
    }

    // Fermer la connexion à la base de données
    $conn = null;
} else {
    // Rediriger vers la page d'accueil si l'ID du stagiaire n'est pas présent dans l'URL
    header("Location: index.php");
    exit();
}
?>
