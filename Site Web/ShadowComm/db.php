<?php
session_start();

// Connexion à la base de données

try {
    $mysqlClient = new PDO('mysql:host=localhost;dbname=cyberquiz;charset=utf8', 'root', '');
    $mysqlClient->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}

?>