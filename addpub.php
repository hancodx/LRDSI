<?php
include("DBconn.php");

if(isset($_POST['submit'])){
    
    $titre = $_POST['titre'];
    $type = $_POST['type'];
    $auteur = $_POST['auteur'];
    $journal = $_POST['journal'];
    $date = $_POST['date'];

    var_dump($_FILES);

    if(isset($_FILES['photo'])){
        $photo = $_FILES['photo']['tmp_name'];

  
        $photo_contenu = file_get_contents($photo);

        
        $titre = mysqli_real_escape_string($conn, $titre);
        $type =  mysqli_real_escape_string($conn, $type);
        $auteur =  mysqli_real_escape_string($conn, $auteur);
        $journal =  mysqli_real_escape_string($conn, $journal);
        $date = mysqli_real_escape_string($conn, $date);
        $photo_contenu = mysqli_real_escape_string($conn, $photo_contenu);

        
        $sql = "INSERT INTO pub (titre, type, auteur, journal, date, photo) VALUES ('$titre', '$type', '$auteur', '$journal', '$date', \"$photo_contenu\")";
        $result = mysqli_query($conn, $sql);

        if($result){
            header("Location: addpub.php");
            exit;
        }else{
           
            $message = "Erreur lors de l'ajout de l'événement.";
        }
    }else{
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
  <input type="checkbox" id="check">
      <label for="check" >  
        <i class="fas fa-bars" id="btn"> </i>
        <i class="fas fa-times" id="cancel"> </i>
      </label>
    <nav>
      <div class="logo"> <a href=""> <img src="./photo/Fichier 2-8.png" alt="">
        </a></div>
      <ul>
        <li><a href="./index.html">Accueil</a></li>

        <li><a href="./projects2.php">Projets </a>
          <div class="dropdown">
            <ul>
              <li> <a href="./projects2.php">Nationaux </a></li>
              <li> <a href="./projects2.php">Internationaux </a></li>


            </ul>
          </div>
        </li>
        <li><a href="./Equips.php">Equipes</a></li>


        <li><a href="./pubbAlbome.php">Pub&Event</a>
          <div class="dropdown">
            <ul>
              <li> <a href="./events.php"> Evenement </a></li>
              <li> <a href="./pubbAlbome.php"> Publications </a></li>
              <li> <a href="./theses.php">Thèse et mémoire </a></li>
            </ul>
          </div>
        </li>

      </ul>
      <div class="search-form" id="search">
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

                        <input type="radio" id="Tout" name="projets" value="Tout" checked><a href="./projects2.php">
                            Tout</a>

                    </div>
                </label>

                <label for="Nationaux">
                    <div class="choix">
                        <input type="radio" id="Nationaux" name="projets" value="Nationaux"> <a
                            href="./projects2.php">Nationaux</a>


                    </div>
                </label>

                <label for="Internationaux">
                    <div class="choix">

                        <input type="radio" id="Internationaux" name="projets" value="Internationaux"> <a
                            href="./projects2.php">Internationaux</a>

                    </div>
                </label>

            </div>
            <div class="side-ul">
                <h4>Pub&Evnt</h4>
                <div class="choix">
                    <a href="./pubbAlbome.php"> Publication</a>
                </div>
                <div class="choix">
                    <a href="./events.php"> Evenment</a>
                </div>
                <div class="choix">
                    <a href="./theses.php"> Thèses et mémoires</a>

                </div>

            </div>
            <div class="side-ul">
                <h4>Equipe</h4>
                <div class="choix">

                    <a href="./Equips.php">Equipes</a>

                </div>


            </div>



        </div>
         
    <form method="post">
        <label for="titre">Titre :</label>
        <input type="text" name="titre" required><br><br>
        <select name="type" id="type">
            <option value="Communication nationale">Communication nationale</option>
            <option value="Communication internationale">Communication internationale</option>
        </select>
        <label for="titre">Auteur :</label>
        <input type="text" name="auteur" required><br><br>
        <label for="titre">Journal :</label>
        <input type="text" name="journal" required><br><br>

        <label for="date">Date :</label>
        <input type="date" name="date" required><br><br>
        <label for="photo">Photo :</label>
        <input type="file" name="photo" required><br><br>
        <input type="submit" name="submit" value="Ajouter">
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
        <a href="./admin.php" class="nav__link">
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

  <h2 class="sidebar__subtitle"><a href="./admin.php">Membres</a></h2>
  <div class="nav">
    <ul class="nav__list">
      <li class="nav__item">
        <a href="./addmember.php" class="nav__link">
        <ion-icon name="person-add-outline"></ion-icon>
          <span class="nav__text">ajouté un membre</span>
         
        </a>
      </li>
  
</div>

  <h2 class="sidebar__subtitle"><a href="./admin.php">Projet</a></h2>
  <div class="nav">
    <ul class="nav__list">
      <li class="nav__item">
        <a href="./addprojet.php" class="nav__link">
        <ion-icon name="person-add-outline"></ion-icon>
          <span class="nav__text">ajouté un projet</span>
         
        </a>
      </li>
  
</div>
<h2 class="sidebar__subtitle"> <a href="./admin.php">Equipes</a>  </h2>
  <div class="nav">
    <ul class="nav__list">
      <li class="nav__item">
        <a href="./addequipe.php" class="nav__link">
        <ion-icon name="person-add-outline"></ion-icon>
          <span class="nav__text">ajouté une equipe</span>
         
        </a>
      </li>
  
</div>

<h2 class="sidebar__subtitle"> <a href="./admin.php">Publication et Event</a>  </h2>
  <div class="nav">
    <ul class="nav__list">
      <li class="nav__item">
        <a href="./addpub.php" class="nav__link">
        <ion-icon name="person-add-outline"></ion-icon>
          <span class="nav__text">ajouté une publication</span>
         
        </a>
      </li>
      <li class="nav__item">
        <a href="./addevent.php" class="nav__link">
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
    <form method="POST" action="logout.php">
      <button class="account__exit" type="submit" name="logout">Déconnecter</button>
    </form>

  </div>
</div>
</aside></section>














    



<footer>
    <div class="txt">
      <h5> LABORATOIRE DE RECHERCHE POUR LE DEVELOPPEMENT DES SYSTEMES INFORMATISES</h5>
      <p> Université Saad Dahlab - Blida 1 | Faculté des Sciences </p>
      <p> http://www.univ-blida.dz </p>
    </div>
    <div class="wrapper">
      <div class="button">
       <a href="./contactsH.php"> <div class="icon"><ion-icon name="call"></ion-icon></div>
        <span>Telephone</span>
      </div></a>
      <div class="button">
    <a href=""> <div class="icon"><ion-icon name="mail"></ion-icon></div>
        <span>Email</span>
      </div></a>
      <div class="button">
     <a href="https://www.google.com/maps?client=firefox-b-d&q=saad+dahleb&um=1&ie=UTF-8&sa=X&ved=2ahUKEwj60s6Y8Kb_AhXQwKQKHcsMAk0Q_AUoA3oECAEQBQ">  <div class="icon"><ion-icon name="location-sharp"></ion-icon></i></div>
        <span>Location</span>
      </div></a> 

    </div>
    <p> Copyright ©2020 All rights reserved to LRDSI</p>
    <p>made by Izem Bahidja . Sameut Hind . Benmeddah Hadjer </p>
  </footer>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>