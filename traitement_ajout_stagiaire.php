<?php
require_once("connexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $niveau = $_POST["niveau"];
    $salaire = $_POST["salaire"];
    $departement = $_POST["departement"];

    // Préparez et exécutez la requête SQL pour ajouter le stagiaire
    $sql = "INSERT INTO  stagaire  (Nom, Prénom, `Adresse e-mail`, niveau, salaire, dipartement) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$nom, $prenom, $email, $niveau, $salaire, $departement]);

    // Redirigez l'utilisateur vers la page d'accueil après l'ajout
    header("Location: indexx.php");
    exit();
}

$conn = null;
?>
