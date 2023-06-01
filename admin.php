<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/head-fot.css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/sidbar.css">
    <!-- animation link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <!-- incons link -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>index page</title>

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fraunces:wght@700&family=Montserrat:ital,wght@0,700;1,200&family=Roboto:wght@400;500;700&display=swap');
    </style>

</head>
<body>
  <a class="contact" href="">contact</a>

    <header>
        <div class="container">
            <nav>
                <div class="logo"> <a href=""> <img src="./photo/Fichier 2-8.png" alt="">
                </a></div>
                <ul>
                    <li><a href="index.html">home</a></li>
                    <li><a href="Equips.html">Equipes</a></li>
                    <li ><a href="#pub&event">pub&event</a>
                        <div class="dropdown">
                            <ul>
                                <li> <a href="./events.html"> events </a></li>
                                <li> <a href="publication.html"> publication </a></li>
                            </ul>
                        </div>
                    </li>
                   
                    <li ><a href="ProjectsH.html">projects</a>
                        <div class="dropdown">
                            <ul>
                                <li> <a href="projetsH.html">national </a></li>
                                <li> <a href="projetsH.html"> international </a></li>
                                <li> <a href="projetsH.html"> tous </a></li>
                              
                            </ul>
                        </div>
                    </li>
                    <li><a href="admin.html">Admin</a></li>
                </ul>
                <div class="search-form">
                    <input type="search" value="" placeholder="Search" class="search-input">
                    <button type="submit" class="search-button">
                        <ion-icon name="search-outline"></ion-icon>
                    </button>
                  
               
                </div>
            </nav>
            
        </div>
    </header>


    
    <div class="sidebar">
        <h3 class="titre">gestion</h3>
        <ul class="sidebar-list">
        <li class="sub-menu">
            <a href="#">Projets</a>
            <ul>
              <li><a href="#">tous</a></li>
              <li><a href="#">les projets nationaux</a></li>
              <li><a href="#">les projets internationaux </a></li>
            </ul>
          </li>
          <li><a href="#">Membres</a></li>
          <li><a href="#">Publications</a></li>
          <li><a href="#">Événements</a></li>
          <li><a href="#">Thèses</a></li>
        </ul>
      </div>
      

    
  
// la liste des membres 
  <h1>voici la liste membres</h1><br>

<button class="add-button"  onclick="window.location.href = 'ajouter.php'">Ajouter étudiant</button>
<br>


<?php

include('DBconn.php');
$resultat = mysqli_query($conn, "SELECT id, nom, prenom, adresse_email, grade FROM membre");

if (!$resultat) {
  echo "Erreur lors de la récupération des données : " . mysqli_error($conn);
  exit;
}
echo "</table>";

mysqli_free_result($resultat);

// Vérifier si le bouton "Supprimer" a été cliqué
if (isset($_POST["supprimer"])) {
$numE = $_POST["id"];

// Supprimer l'étudiant de la base de données
$requete = "DELETE FROM membre WHERE id=$id";
mysqli_query($conn, $requete);

// Réinitialisation de l'identité auto-incrémentée

// Rediriger vers la page d'accueil
header("Location: admin.php");
exit();
}
// Afficher la liste des étudiants
$requete = "SELECT * FROM membre";
$resultat = mysqli_query($conn, $requete);

echo "<table>";
echo "<tr><th>id</th><th>nom</th><th>prenom</th><th>adresse_email </th><th>grade</th><th>Supprimer</th><th>Modifier</th></tr>";

while ($row = mysqli_fetch_assoc($resultat)) {
  echo "<tr>";
  echo "<td>" . $row["id"] . "</td>";
  echo "<td>" . $row["nom"] . "</td>";
  echo "<td>" . $row["prenom"] . "</td>";
  echo "<td>" . $row["adresse_email"] . "</td>";
  echo "<td>" . $row["grade"] . "</td>";
  echo "<td><form method='post'><input type='hidden' name='id' value='" . $row["id"] . "'><input type='submit' name='supprimer' value='Supprimer'></form></td>";
  
  echo "<td><button class='modification.php'>Modifier</button></td>";
  echo "</tr>";
}

echo "</table>";

mysqli_free_result($resultat);
?>






<h1>voici la liste des equipes </h1><br>

<button class="add-button"  onclick="window.location.href = 'ajouter.php'">Ajouter étudiant</button>
<br>



<?php
include('DBconn.php');

$resultat2 = mysqli_query($conn, "SELECT equipe.id_equipe, equipe.nom_equipe, equipe.nom_chef_equipe, equipe.domaine_recherche, GROUP_CONCAT(membre.nom, ' ', membre.prenom) AS membres FROM equipe LEFT JOIN equipe_membre ON equipe.id_equipe = equipe_membre.id_equipe LEFT JOIN membre ON equipe_membre.id_membre = membre.id GROUP BY equipe.id_equipe;");

if (!$resultat2) {
  echo "Erreur lors de la récupération des données : " . mysqli_error($conn);
  exit;
}

echo "<table>";
echo "<tr><th>Nom de l'équipe</th><th>Nom de chef d'équipe</th><th>Domaine de recherche</th><th>Membres</th><th>Supprimer</th><th>Modifier</th></tr>";

while ($row = mysqli_fetch_assoc($resultat2)) {
  echo "<tr>";
  echo "<td>" . $row["nom_equipe"] . "</td>";
  echo "<td>" . $row["nom_chef_equipe"] . "</td>";
  echo "<td>" . $row["domaine_recherche"] . "</td>";
  echo "<td>" . $row["membres"] . "</td>";
  echo "<td><form method='post'><input type='hidden' name='id' value='" . $row["id_equipe"] . "'><input type='submit' name='supprimer' value='Supprimer'></form></td>";
  echo "<td><form method='post' action='modification_equipe.php'><input type='hidden' name='id' value='" . $row["id_equipe"] . "'><input type='submit' name='modifier' value='Modifier'></form></td>";
  echo "</tr>";
}

echo "</table>";

mysqli_free_result($resultat2);
mysqli_close($conn);
?>





    <footer>
        <div class="wrapper">
            <div class="button">
                <div class="icon"><ion-icon name="call"></ion-icon></div>
                <span>Telephone</span>
                </div>
            <div class="button">
                <div class="icon"><ion-icon name="mail"></ion-icon></div>
                <span>Email</span>
                </div>
            <div class="button">
                <div class="icon"><ion-icon name="location-sharp"></ion-icon></i></div>
                <span>Location</span>
                </div>
                 
            </div>  
    </footer>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>