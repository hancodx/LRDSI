<?php
// inclure la page de connexion
include("DBconn.php");

// vérifier si le formulaire a été soumis
if(isset($_POST['submit'])){
    // récupérer les données du formulaire
    $titre = $_POST['titre'];
    $date = $_POST['date'];
    $lieu = $_POST['lieu'];

    // vérifier si un fichier a été sélectionné
    if(isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK){
        $photo = $_FILES['photo']['tmp_name'];

        // lire le contenu du fichier
        $photo_contenu = file_get_contents($photo);

        // échapper les caractères spéciaux dans les données pour les utiliser dans une requête SQL
        $titre = mysqli_real_escape_string($con, $titre);
        $date = mysqli_real_escape_string($con, $date);
        $lieu = mysqli_real_escape_string($con, $lieu);
        $photo_contenu = mysqli_real_escape_string($con, $photo_contenu);

        // construire et exécuter la requête d'insertion
        $sql = "INSERT INTO events (titre, date, lieu, photo) VALUES ('$titre', '$date', '$lieu', '$photo_contenu')";
        $result = mysqli_query($con, $sql);

        if($result){
            // insertion réussie, effectuer les actions souhaitées (redirection, affichage d'un message, etc.)
            header("Location: addevent.php");
            exit;
        }else{
            // échec de l'insertion, afficher un message d'erreur
            $message = "Erreur lors de l'ajout de l'événement.";
        }
    }else{
        // aucun fichier sélectionné, afficher un message d'erreur
        $message = "Veuillez sélectionner une photo.";
    }
}

?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/head-fot.css">
    <link rel="stylesheet" href="css/equipes.css">
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
    <form method="post">
        <label for="titre">Titre :</label>
        <input type="text" name="titre" required><br><br>

        <label for="date">Date :</label>
        <input type="date" name="date" required><br><br>
        <label for="lieu">Lieu :</label>
        <input type="text" name="lieu" required><br><br>
        <br><br>
        <label for="photo">Photo :</label>
        <input type="file" name="photo" required><br><br>
        <input type="submit" name="submit" value="Ajouter">
    </form>
</section>


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