<?php

// Paramètres de connexion à la base de données MySQL
$dsn = "mysql:host=localhost;dbname=cvbd";
$username = "root";
$password = "";

// Fonction pour établir la connexion à la base de données
function getConnection() {
    global $dsn, $username, $password;
    try {
        // Crée une nouvelle connexion PDO
        $conn = new PDO($dsn, $username, $password);
        // Configure les options de PDO pour générer des exceptions en cas d'erreurs
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
        echo "Erreur lors de la connexion à la base de données : " . $e->getMessage();
        return null;
    }
}
