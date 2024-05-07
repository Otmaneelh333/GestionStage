<?php
require_once("connexion.php");

try {
    // Table stage
    $sql_users = "CREATE TABLE stagaire (
        ID_stage INT AUTO_INCREMENT PRIMARY KEY,
        Nom VARCHAR(255),
        Prénom VARCHAR(255),
        `Adresse e-mail` VARCHAR(255),
        `niveau` VARCHAR(255),
        `salaire` VARCHAR(255),
        `dipartement` VARCHAR(255)
        
    )";
    $conn->exec($sql_users);



    echo "Tables créées avec succès";
} catch(PDOException $e) {
    echo "Erreur lors de la création des tables : " . $e->getMessage();
}

$conn = null;
?>
