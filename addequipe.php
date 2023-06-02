<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/head-fot.css">

    <link rel="stylesheet" href="./css/equipes.css">

    <link rel="stylesheet" href="css/ajouterequipe.css">
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
        <li><a href="./index.html">Accueil</a></li>
       
        <li><a href="./projects2.html">Projets </a>
          <div class="dropdown">
            <ul>
              <li> <a href="./projects2.html">Nationaux </a></li>
              <li> <a href="./projects2.html">Internationaux </a></li>
              

            </ul>
          </div>
        </li>
        <li><a href="./Equips.html">Equipes</a></li>

        
        <li><a href="./pubbAlbome.html">Pub&Event</a>
          <div class="dropdown">
            <ul>
              <li> <a href="./events.html"> Evenement  </a></li>
              <li> <a href="./pubbAlbome.html"> Publications </a></li>
              <li> <a href="">Thèse et mémoire </a></li>
            </ul>
          </div>
        </li>
        <li><a href="admin.html">Gestion</a></li>
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

   
    

   
		


    <section class="formulaire">
    <div class="said-check">
        <div class="side-ul">
         <h4>Projets </h4> 
         <label for="Tout">
      <div class="choix">

        <input type="radio" id="Tout" name="projets" value="Tout" checked=""> <a href="./projects2.html">Tout</a>

      </div>
    </label>

    <label for="Nationaux">
      <div class="choix">

        <input type="radio" id="Nationaux" name="projets" value="Nationaux"> <a href="./projects2.html">Nationaux</a>

        
      </div>
    </label>

    <label for="Internationaux">
      <div class="choix">

  
        <input type="radio" id="Internationaux" name="projets" value="Internationaux"> <a href="./projects2.html">Internationaux</a>

      </div>
    </label>

    </div>
    <div class="side-ul">

      <h4>Pub&amp;Evnt</h4> 
    <div class="choix">
     <a href="./pubbAlbome.html"> Publication </a>
    </div>
    <div class="choix">
        <a href="./events.html">Evenment </a>
    </div>
    <div class="choix">
      <a href="">Thèses et mémoires</a>

    </div>

 </div>
 <div class="side-ul">
  <h4>Equipe</h4> 
<div class="choix">

  <a href="./Equips.php"> Equipes</a>

</div>


</div>


    
  </div> 

    
  <form action="ajouter_equipe.php" method="post">
    <label for="nom_equipe">Nom de l'équipe :</label>
    <input type="text" id="nom_equipe" name="nom_equipe"><br><br>

    <label for="nom_chef">Nom du chef d'équipe :</label>
    <input type="text" id="nom_chef" name="nom_chef"><br><br>

    <label for="domaine_recherche">Domaine de recherche :</label>
    <input type="text" id="domaine_recherche" name="domaine_recherche"><br><br>

    <label for="mots_clé">Mots clés :</label>
    <input type="text" id="mots_clé" name="mots_clé"><br><br>

    <label for="date" class="description_projet">Description :</label>
    <textarea name="description_projet" rows="3"></textarea>
    <br><br>

    
    <label for="membres_equipe">Membres de l'équipe :</label>

<select id="membres_equipe" name="membres_equipe[]" multiple size="5">
   <?php
  include('DBconn.php');
  $resultat = mysqli_query($conn, "SELECT nom, prenom FROM membre");
  
  if (!$resultat) {
    echo "Erreur lors de la récupération des données : " . mysqli_error($conn);
    exit;
  }
  
  while ($row = mysqli_fetch_assoc($resultat)) {
    echo "<option value='" . $row["nom"] . " " . $row["prenom"] . "'>" . $row["nom"] . " " . $row["prenom"] . "</option>";
  }
  
  mysqli_free_result($resultat);
  mysqli_close($conn);
  ?> 
</select><br><br>
<input type="submit" value ="ajouter">

    <select id="membres_equipe" name="membres_equipe[]" multiple="">
      

</select>

</form>
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
        <img src="./photo/Untitleerd.png" alt="Avatar image" class="account__avatar">
        <div class="account__details">
          <h4 class="account__name">Luke Skywalker</h4>
          <p class="account__email">luke@force.com</p>
        </div>
        <button class="account__exit"></button>
      </div>
    </div>
  </aside>



</section>










<?php
include('DBconn.php');

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // Récupérer les données du formulaire
  $nom_equipe = $_POST['nom'];
  $nom_chef_equipe = $_POST['nom_chef_equipe'];
  $domaine_recherche = $_POST['domaine_recherche'];
  $membres_equipe = $_POST['membres_equipe'];

  // Insérer le membre dans la table membre
  $requete = "INSERT INTO membre (nom, prenom, adresse_email, grade) VALUES ('$nom_equipe', '$nom_chef_equipe', '$domaine_recherche', '$membres_equipe')";
  if (!mysqli_query($conn, $requete)) {
    echo "Erreur lors de l'insertion du membre : " . mysqli_error($conn);
    exit;
  }
  // Récupérer l'ID du membre inséré
  $id_membre = mysqli_insert_id($conn);

  // Afficher un message de confirmation
  echo "Le membre a été ajouté avec succès !";

}

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