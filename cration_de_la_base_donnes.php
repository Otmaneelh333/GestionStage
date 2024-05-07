<?php
	$serveure="localhost";
    $login="root";
    $pass="";

try {
    $conn =new PDO("mysql:host=$serveure",$login,$pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = "CREATE DATABASE g_stage";
    $conn->exec($sql);
    
    echo "Base de données créée avec succès";
} catch(PDOException $e) {
    echo "Erreur lors de la création de la base de données : " . $e->getMessage();
}

$conn = null; 
?>
