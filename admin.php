<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/head-fot.css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="./css/equipes.css">
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


    
    <aside class="sidebar" theme="dark">
    <div class="sidebar__section sidebar__section--title">
    Gestion 
    </div>


    <div class="sidebar__section sidebar__section--menu">
      <h2 class="sidebar__subtitle">Menu</h2>
      <div class="nav">
        <ul class="nav__list">
          <li class="nav__item">
            <a href="#" class="nav__link">
              <span class="nav__icon nav__icon--home"></span>
              <span class="nav__text">Accueil</span>
             
            </a>
          </li>
          <li class="nav__item">
            <a href="#" class="nav__link">
              <span class="nav__icon nav__icon--activity"></span>
              <span class="nav__text">Activite</span>
            </a>
          </li>
         
        </ul>
      </div>
      <h2 class="sidebar__subtitle"><a href="">Projet</a></h2>
      <div class="nav">
        <ul class="nav__list">
          <li class="nav__item">
            <a href="#" class="nav__link">
            <ion-icon name="person-add-outline"></ion-icon>
              <span class="nav__text">ajouté un projet</span>
             
            </a>
          </li>
      
    </div>
    <h2 class="sidebar__subtitle"> <a href="">Equipes</a>  </h2>
      <div class="nav">
        <ul class="nav__list">
          <li class="nav__item">
            <a href="#" class="nav__link">
            <ion-icon name="person-add-outline"></ion-icon>
              <span class="nav__text">ajouté une equipe</span>
             
            </a>
          </li>
      
    </div>

    <h2 class="sidebar__subtitle"> <a href="">Publication et Event</a>  </h2>
      <div class="nav">
        <ul class="nav__list">
          <li class="nav__item">
            <a href="#" class="nav__link">
            <ion-icon name="person-add-outline"></ion-icon>
              <span class="nav__text">ajouté une publication</span>
             
            </a>
          </li>
          <li class="nav__item">
            <a href="#" class="nav__link">
            <ion-icon name="person-add-outline"></ion-icon>
              <span class="nav__text">ajouté une evenement</span>
             
            </a>
          </li>
      
    </div>

</div>
    <hr class="divider">

    <div class="sidebar__section sidebar__section--settings">
  
     
    <div class="nav">

        <ul class="nav__list">
          <li class="nav__item">
            <a href="#" class="nav__link">
              <span class="nav__icon nav__icon--settings"></span>
              <span class="nav__text">Settings</span>
            </a>
          </li>
          <li class="nav__item">
            <a href="#" class="nav__link">
              <span class="nav__icon nav__icon--report"></span>
              <span class="nav__text">Report</span>
            </a>
          </li>
          <li class="nav__item">
            <a href="#" class="nav__link">
              <span class="nav__icon nav__icon--support"></span>
              <span class="nav__text">Support</span>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <hr class="divider">

    <div class="sidebar__section sidebar__section--groups">
      <h2 class="sidebar__subtitle">Group</h2>
      <div class="nav">
        <ul class="nav__list">
          <li class="nav__item">
            <a href="#" class="nav__link">
              <span class="nav__circle nav__circle--green"></span>
              <span class="nav__text">Logoipsum Studio</span>
              <span class="nav__chevron"></span>
            </a>
          </li>
          <li class="nav__item">
            <a href="#" class="nav__link">
              <span class="nav__circle nav__circle--blue"></span>
              <span class="nav__text">Design System</span>
              <span class="nav__chevron"></span>
            </a>
          </li>
          <li class="nav__item">
            <a href="#" class="nav__link">
              <span class="nav__circle nav__circle--yellow"></span>
              <span class="nav__text">Accessibility</span>
              <span class="nav__chevron"></span>
            </a>
          </li>
        </ul>
      </div>
    </div>

   

    <div class="sidebar__section sidebar__section--account">
      <div class="account">
        <img src="data:image/png;base64,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" alt="Avatar image" class="account__avatar">
        <div class="account__details">
          <h4 class="account__name">Luke Skywalker</h4>
          <p class="account__email">luke@force.com</p>
        </div>
        <button class="account__exit"></button>
      </div>
    </div>
  </aside>

      

    
  
<!-- // la liste des membres  -->
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
                <span>Telephone </span>
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