<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/head-fot.css">
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
              <li><a href="#"> nationaux</a></li>
              <li><a href="#">internationaux </a></li>
            </ul>
          </li>
          <li><a href="#">Membres</a></li>
          <li><a href="#">Publications</a></li>
          <li><a href="#">Événements</a></li>
          <li><a href="#">Thèses</a></li>
        </ul>
      </div>


    

    <div class="content">
		


    <section class="formulaire">
    <div class="said-check">
        <div class="side-ul">
         <h4>Projets </h4> 
         <label for="Tout">
      <div class="choix">
        <input type="radio" id="Tout" name="projets" value="Tout" checked> Tout
      </div>
    </label>

    <label for="Nationaux">
      <div class="choix">
        <input type="radio" id="Nationaux" name="projets" value="Nationaux"> Nationaux
        
      </div>
    </label>

    <label for="Internationaux">
      <div class="choix">
        <input type="radio" id="Internationaux" name="projets" value="Internationaux"> Nnternationaux
      </div>
    </label>

    </div>
    <div class="side-ul">
      <h4>Pub&Evnt</h4> 
    <div class="choix">
      Publication 
    </div>
    <div class="choix">
      Evenment 
    </div>
    <div class="choix">
      Thèses et mémoires
    </div>

 </div>
 <div class="side-ul">
  <h4>Equipe</h4> 
<div class="choix">
  Equipes
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

    <input type="submit" value="Ajouter l'équipe">
  </form>
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