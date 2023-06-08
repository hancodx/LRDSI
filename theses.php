<?php
include("DBconn.php");
$req = "select * from these";
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
<style>
  .EQPS {
	width: 75%;
	margin-top: 34px;
	display: flex;
  flex-wrap: wrap;
}
.div2 h3{
  font-size: 90%;
}
section h5{
  display: block;
}
.readmore {
	/* margin: 2em auto; */
	
  width: 200px;
	display: flex;
  margin-right: 30px;
	background-color: var(--color2);
	padding: 30px;
	max-height: 200px;
	border-radius: 30px;
	position: relative;
	overflow-y: hidden;
	box-shadow: 0 4px 7px rgba(0, 0, 0, 0.18), 0 1px 2px rgba(0, 0, 0, 0.24);
	transition: all 0.5s ease;
	margin-bottom: 30px;
}
.readmore.open {
	/* max-height: unset; */
	transition: all 0.5s ease;
	

}
.readmore.open{
  max-height: 60%;
}
</style>
<body>

<div class="container">
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
        
  <div class="EQPS">
  <?php while ($row = mysqli_fetch_assoc($resu)) { ?>
    <div class="readmore" style="width: 410px;">
      <div>
        <h2 style="font-size: 140%;">  <p><?php echo $row['titre_these']; ?></p></h2>
        
        <h5>Nom de doctorant <p><?php echo $row['nom_doctorant']; ?></p>
        </h5>

        <p><?php echo $row['description']; ?></p>
      </div>
      <div class="div2">
        <h3> Date de soutnance </h3> 
        <p> <?php echo $row['date_soutenance']; ?> </p>
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