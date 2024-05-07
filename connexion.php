<?php
$serveur = "localhost";
$login = "root";
$pass = "";
$database = "g_stage";

try {
    $conn = new PDO("mysql:host=$serveur;dbname=$database", $login, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
    die();
}
?>
