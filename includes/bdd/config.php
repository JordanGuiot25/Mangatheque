<?php

// Adresse du serveur
$adresseDuServeur = "localhost";

// Identifiant de la bdd
$identifiantDeLaBdd = "root";

// Mot de passe de la bdd
$mdpDeLaBdd = "";

// Nom de la bdd
$nomDeLaBdd = "mangatheque";

try 
{
    // Méthode qui permet de se connecter à la bdd
    $bdd = new PDO("mysql:host=$adresseDuServeur;dbname=$nomDeLaBdd", $identifiantDeLaBdd, $mdpDeLaBdd);
    // Cas d'erreurs
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    // Si php ne parvient pas à se connecter à la bdd
    echo "Erreur de connexion: " . $e->getMessage();
}

?>