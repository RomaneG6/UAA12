<?php
try {
        $strConnexion = "mysql:host=10.10.51.98;dbname=immobilier;port=3306";
        $pdo = new PDO($strConnexion, "romane", "root");
        die("Connexion réussie");
}catch (PDOException $e) {
        die("ERROR!! " . $e -> getMessage());
    }
?>