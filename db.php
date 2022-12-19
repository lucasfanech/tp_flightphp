<?php
// Créez une chaîne de connexion PDO
$dsn = 'mysql:host=localhost;dbname=TP4';

// Créez un objet PDO en utilisant la chaîne de connexion et les identifiants d'utilisateur
$pdo = new PDO($dsn, 'root', '');

// Vérifiez si la connexion a réussi en vous connectant à la base de données
try {
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOException $e) {
    // Affichez un message d'erreur si la connexion a échoué
    die('Erreur de connexion : ' . $e->getMessage());
}
