<?php
// Informations de connexion à la base de données
$host = 'localhost';  // Le nom de l'hôte de votre base de données
$username = 'root' ;   // Votre nom d'utilisateur MySQL
$password ='' ;   // Votre mot de passe MySQL (laissez les guillemets vides si vous n'en avez pas)
$dbname = 'LRDSI';  // Le nom de votre base de données

// Connexion à la base de données
$conn = mysqli_connect($host, $username, $password, $dbname);

// Vérifier si la connexion a réussi
if (!$conn) {
    die("Connexion à la base de données échouée : " . mysqli_connect_error());
}
echo "Connexion à la base de données réussie !";

// Inserer les etudiants



?>
