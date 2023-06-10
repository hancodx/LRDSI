<?php
include('DBconn.php');

// Vérifier si l'ID du membre est passé en paramètre dans l'URL
if (isset($_GET['id'])) {
  $id_membre = $_GET['id'];

  // Vérifier si le formulaire a été soumis
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les nouvelles valeurs des champs
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $adresse_email = $_POST['adresse_email'];
    $grade = $_POST['grade'];

    // Exécuter une requête UPDATE pour mettre à jour les informations du membre
    $requete = "UPDATE membre SET nom = '$nom', prenom = '$prenom', adresse_email = '$adresse_email', grade = '$grade' WHERE id = $id_membre";
    if (mysqli_query($conn, $requete)) {
      // Afficher un message de succès
      echo "Le membre a été modifié avec succès !";
    } else {
      // Afficher un message d'erreur si la mise à jour a échoué
      echo "Erreur lors de la modification du membre : " . mysqli_error($conn);
    }
  }

  // Récupérer les informations actuelles du membre à partir de la base de données
  $requete = "SELECT * FROM membre WHERE id = $id_membre";
  $resultat = mysqli_query($conn, $requete);

  // Vérifier si le membre existe
  if (mysqli_num_rows($resultat) == 1) {
    // Récupérer les données du membre
    $membre = mysqli_fetch_assoc($resultat);

    // Utiliser les valeurs récupérées pour pré-remplir le formulaire de modification
    $nom = $membre['nom'];
    $prenom = $membre['prenom'];
    $adresse_email = $membre['adresse_email'];
    $grade = $membre['grade'];
  } else {
    // Afficher un message d'erreur si le membre n'existe pas
    echo "Membre introuvable.";
    exit;
  }
} else {
  // Afficher un message d'erreur si l'ID du membre n'est pas passé en paramètre
  echo "ID du membre non spécifié.";
  exit;
}

mysqli_close($conn);
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <!-- incons link -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <title>index page</title>

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Fraunces:wght@700&family=Montserrat:ital,wght@0,700;1,200&family=Roboto:wght@400;500;700&display=swap');
  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />


</head>

<body>



  <div class="container">
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"> </i>
      <i class="fas fa-times" id="cancel"> </i>
    </label>
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
              <li> <a href="./events.html"> Evenement </a></li>
              <li> <a href="./pubbAlbome.html"> Publications </a></li>
              <li> <a href="">Thèse et mémoire </a></li>
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

    <!-- formulaire a droite -->
    <section class="formulaire">
      <div class="said-check">
        <div class="side-ul">
          <h4>Projets </h4>
          <label for="Tout">
            <div class="choix">
              <input type="radio" id="Tout" name="projets" value="Tout" checked> <a href="./projects2.html">Tout</a>
            </div>
          </label>

          <label for="Nationaux">
            <div class="choix">
              <input type="radio" id="Nationaux" name="projets" value="Nationaux"> <a
                href="./projects2.html">Nationaux</a>

            </div>
          </label>

          <label for="Internationaux">
            <div class="choix">
              <input type="radio" id="Internationaux" name="projets" value="Internationaux">
              <a href="./projects2.html"> Internationaux</a>
            </div>
          </label>

        </div>
        <div class="side-ul">
          <h4>Pub&Evnt</h4>
          <div class="choix">
            <a href="./pubbAlbome.html"> Publication</a>
          </div>
          <div class="choix">
            <a href="./events.html"> Evenment</a>
          </div>
          <div class="choix">
            <a href=""> Thèses et mémoires</a>
          </div>

        </div>
        <div class="side-ul">
          <h4>Equipe</h4>
          <div class="choix">
            <a href="./Equips.php"> Equipes</a>
          </div>


        </div>

      </div>
      <form method="post">

        <label for="nom">Modifier le nom :</label>
        <input type="text" name="nom" required value="<?php echo $nom; ?>"><br><br>
        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" required value="<?php echo $prenom; ?>"><br><br>
        <label for="adresse_email">Adresse e-mail :</label>
        <input type="text" name="adresse_email" required value="<?php echo $adresse_email; ?>"><br><br>
        <label for="grade">Grade :</label>
        <select name="grade" id="grade" value="<?php echo $grade; ?>">
          <option value="Doctorant">Doctorant</option>
          <option value="Chercheur">Chercheur</option>
        </select>
        <br><br>
        <input type="submit" name="submit" value="Modifier">
      </form>





      <!-- sidbare droite -->

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
          <h2 class="sidebar__subtitle"> <a href="">Equipes</a> </h2>
          <div class="nav">
            <ul class="nav__list">
              <li class="nav__item">
                <a href="#" class="nav__link">
                  <ion-icon name="person-add-outline"></ion-icon>
                  <span class="nav__text">ajouté une equipe</span>

                </a>
              </li>

          </div>

          <h2 class="sidebar__subtitle"> <a href="">Publication et Event</a> </h2>
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









    <footer>
      <div class="txt">
        <h5> LABORATOIRE DE RECHERCHE POUR LE DEVELOPPEMENT DES SYSTEMES INFORMATISES</h5>
        <p> Université Saad Dahlab - Blida 1 | Faculté des Sciences </p>
        <p> http://www.univ-blida.dz </p>
      </div>
      <div class="wrapper">
        <div class="button">
          <a href="./contactsH.php">
            <div class="icon"><ion-icon name="call"></ion-icon></div>
            <span>Telephone</span>
        </div></a>
        <div class="button">
          <a href="">
            <div class="icon"><ion-icon name="mail"></ion-icon></div>
            <span>Email</span>
        </div></a>
        <div class="button">
          <a
            href="https://www.google.com/maps?client=firefox-b-d&q=saad+dahleb&um=1&ie=UTF-8&sa=X&ved=2ahUKEwj60s6Y8Kb_AhXQwKQKHcsMAk0Q_AUoA3oECAEQBQ">
            <div class="icon"><ion-icon name="location-sharp"></ion-icon></i></div>
            <span>Location</span>
        </div></a>

      </div>
      <p> Copyright ©2020 All rights reserved to LRDSI</p>
      <p>made by Izem Bahidja . Sameut Hind . Benmeddah Hadjer </p>
    </footer>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"></script>
</body>

</html>