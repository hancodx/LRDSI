<?php
include("DBconn.php");
$req = "select * from equipe";
$resu = mysqli_query($conn, $req);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/equipes.css">
  <link rel="stylesheet" href="css/head-fot.css">
  <link rel="stylesheet" href="./css/events.css">
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
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

  <section>
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
            <input type="radio" id="Nationaux" name="projets" value="Nationaux"> <a href="./projects2.php">Nationaux</a>


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

    <div class="EQPS">
      <?php while ($row = mysqli_fetch_assoc($resu)) { ?>
        <div class="readmore">
          <div>
            <h2>
              <?php echo $row['domaine_recherche']; ?>
            </h2>
            <h5>Nom d'équipe <p>
                <?php echo $row['nom_equipe']; ?>
              </p>
            </h5>
            <h5>Chef d'équipe <p>
                <?php echo $row['nom_chef_equipe']; ?>
              </p>
            </h5>

            <p>
              <?php echo $row['description']; ?>
            </p>

            <div class="member" style="margin-top: 15px;">
              <?php
              include("DBconn.php");
              // Récupérer les membres de l'équipe
              $equipeId = $row['id_equipe'];
              $memberQuery = "SELECT membre.* FROM membre JOIN equipe_membre ON membre.id = equipe_membre.id_membre WHERE equipe_membre.id_equipe = $equipeId";
              $memberResult = mysqli_query($conn, $memberQuery);
              if ($memberResult && mysqli_num_rows($memberResult) > 0) {
                while ($memberData = mysqli_fetch_assoc($memberResult)) {
                  echo "<h6>" . $memberData['nom'] . "</h6>";
                  echo "<p style=\"margin-top: 5px;\">" . $memberData['adresse_email'] . "</p>";
                }
              }
              ?>
            </div>
          </div>
          <div class="div2">
            <h3> Mots clés </h3>
            <p>
              <?php echo $row['mots_clé']; ?>
            </p>
          </div>
          <p class="readmore-link">
            <a href="#">More</a>
          </p>
        </div>
      <?php } ?>
    </div>







  </section>

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
    <p>made by Izem Bahidja . Sameut Hind</p>
  </footer>
</body>

<script>
  var readmore = document.querySelectorAll(".readmore-link a");

  for (var i = 0; i < readmore.length; i++) {
    var el = readmore[i];
    el.onclick = function () {

      let readmoreContainer = this.closest("div");
      readmoreContainer.classList.toggle("open");

      let lable = (this.innerHTML === "More") ? "Less" : "More";
      this.innerHTML = lable;

      return false;
    };
  }

</script>

</html>