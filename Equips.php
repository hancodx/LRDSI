<?php
include("DBconn.php");
$req = "select * from equipe";
$resu=mysqli_query($conn, $req);

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
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</head>

<body>

  <div class="container">
    <nav>
      <div class="logo"> <a href=""> <img src="./photo/Fichier 2-8.png" alt="">
        </a></div>
      <ul>
        <li><a href="#Equipes">Equipes</a></li>
        <li><a href="#pub&event">pub&event</a>
          <div class="dropdown">
            <ul>
              <li> <a href="./events.html"> events </a></li>
              <li> <a href=""> publication </a></li>
              <li> <a href=""> titre 1 </a></li>
            </ul>
          </div>
        </li>

        <li><a href="#project">projects</a>
          <div class="dropdown">
            <ul>
              <li> <a href="">national </a></li>
              <li> <a href=""> international </a></li>
              <li> <a href=""> titre 1 </a></li>

            </ul>
          </div>
        </li>
        <li><a href="#">home</a></li>
      </ul>
      <div class="search-form">
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



    
    <div class="EQPS">
    <?php while($row = mysqli_fetch_assoc($resu)) { ?>
      <div class="readmore">
        <div>
          <h2> <?php echo $row['domaine_recherche']; ?> </h2>
          <h5>Nom d'equipe <p><?php echo $row['nom_equipe']; ?></p>
          </h5>
          <h5>Chef d'equipe <p><?php echo $row['nom_chef_equipe']; ?> </p>
          </h5>

          <p><?php echo $row['description']; ?> </p>

          <div class="mamber">
          <div class="mamber">
    <?php
    include('DBconn.php');

    // Requête pour récupérer les membres et leurs adresses e-mail
    $requete = "SELECT m.nom, m.email FROM equipe_membre em
                INNER JOIN membre m ON em.id_membre = m.id";

    $resultat = mysqli_query($conn, $requete);

    if (!$resultat) {
        echo "Erreur lors de la récupération des données : " . mysqli_error($conn);
        exit;
    }

    while ($row = mysqli_fetch_assoc($resultat)) {
        echo "<h6>" . $row['nom'] . "</h6>";
        echo "<p>" . $row['email'] . "</p>";
    }

    mysqli_free_result($resultat);
    mysqli_close($conn);
    ?>
</div>




          <!--<div class="mamber">
            <h6>nom</h6>
            <p>email @</p>
            <h6>nom</h6>
            <p>email @</p>
            <h6>nom</h6>
            <p>email @</p>
            <h6>nom</h6>
            <p>email @</p>
            <h6>nom</h6>
            <p>email @</p>
            <h6>nom</h6>
            <p>email @</p>
            <h6>nom</h6>
            <p>email @</p>
            <h6>nom</h6>
            <p>email @</p>
          </div>  --> 

        </div>
        <div class="div2">
          <h3> <?php echo $row['mots_clé']; ?> </h3>
        </div>
        <p class="readmore-link">
          <a href="#">More</a>
        </p>
        </div>
        
        
      <?php } ?>
  </section>





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