<?php
include("DBconn.php");
$req = "select * from pub";
$resu = mysqli_query($conn, $req);

?>



<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <script src="../assets/js/color-modes.js"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.111.3">
  <title>Album example · Bootstrap v5.3</title>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album/">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />


  <link rel="stylesheet" href="">



  <link rel="stylesheet" href="./css/">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


  <link rel="stylesheet" href="./css/head-fot.css">
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">


  <style>
    :root {

      /* dark mode */
      /*--color1: #126E62;
      --color2: #E1EDEB;
      --color3: #6BA49D;
      --color4: #89B6B1;
      color: #000f31; */
      --color4: #f0fafb;
      --color2: #ffff;
      --color3: rgb(141, 179, 179);
      --color1: #5ea4a4;

    }

    .img {
      height: 225;
      width: 100%;
      height: 48%;
      object-fit: cover;
    }



    .choix a {
      color: rgb(110, 133, 133);

    }

    .choix a:hover {
      color: #385f5f;
    }

    label {
      display: block;
    }

    body {
      background-color: var(--color4);
    }

    .co {
      height: auto;
      width: 340px;
      height: auto;
    }

    .sm {
      border-radius: 20px;
      overflow: hidden;
      margin: 4%;
      height: 100%;

    }

    .img {
      height: 225;
      width: 100%;
    }

    .bt {
      align-self: center;
      border-radius: 20px;
      background-color: var(--color3);
      height: 30px;
      width: 90px;
      text-align: center;
      cursor: pointer;
      transition: .2s;
      box-shadow: 62px 28px 179px 2px rgba(0, 0, 0, 0.47);
      -webkit-box-shadow: 62px 28px 179px 2px rgba(0, 0, 0, 0.47);
      border: none;
      -moz-box-shadow: 62px 28px 179px 2px rgba(0, 0, 0, 0.47);
    }


    .bt a {
      color: var(--color2);
      text-decoration: none;

    }

    .bt:hover a {
      color: var(--color2);


    }

    .bt:hover {
      background-color: var(--color1);

    }



    .txt .fp1 {
      overflow: hidden;
      margin-bottom: 5%;
      color: #126E62;
      font-weight: 600;
      font-size: 90%;
    }

    p {
      font-weight: 600;
      font-size: 80%;
      color: #000000;
      margin-bottom: 2%;

    }

    .rw {
      display: flex;
      justify-content: flex-end;
      height: auto;
      width: 100%;

    }

    .cdr {
      justify-content: space-around;
      display: flex;
      flex-direction: column;
      height: 160px;
    }

    .container {
      max-width: 100%;
    }


    .img {
      height: 225;
      width: 100%;
    }

    .card {
      position: relative;
      display: flex;
      flex-direction: column;
      /* min-width: 0; */
      word-wrap: break-word;
      background-color: #fff;
      background-clip: border-box;
      border: 1px solid rgba(0, 0, 0, .125);
      border-radius: .25rem;
      width: 100%;
    }

    .sm {
      border-radius: 20px;
      overflow: hidden;
      margin: 4%;
      height: 100%;
    }

    .row>* {
      flex-shrink: 0;
      width: 100%;
      max-width: 100%;
      padding-right: calc(var(--bs-gutter-x) * .5);
      padding-left: calc(var(--bs-gutter-x) * .5);
      margin-top: var(--bs-gutter-y);
    }
    .rw {
	display: flex;
	justify-content: flex-end;
	height: auto;
	width: 100%;
	flex-wrap: wrap;
}

    .co {
      height: auto;
      width: 315px;
      height: 359px;
    }

    .rw {
      display: flex;
      justify-content: flex-end;
      height: auto;
      width: 100%;
    }

    .main {
      display: flex;
      padding: 132px 5%;
      justify-content: flex-end;
      margin-top: 0%;
      padding-bottom: 10%;
    }

    .said-check::after {
      content: "";
      height: 11px;
      background-color: #64b9bb92;
      background-color: rgba(163, 198, 198, 0.791);

      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      backdrop-filter: blur(15.6px);
      -webkit-backdrop-filter: blur(15.6px);
      position: absolute;
      top: 0%;
      width: 100%;

    }

    .said-check .side-ul {
      gap: 5px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      padding: 8%;

    }

    .said-check .side-ul .choix {
      padding-left: 15px;
      height: 35px;
      padding-top: 9px;
      cursor: pointer;
      color: rgb(110, 133, 133);
    }

    .said-check .side-ul .choix:hover {
      background-color: #f0fafb;
      color: #385f5f;
    }

    .side-ul h4 {
      padding-left: 5%;
      background-color: var(--color4);
      height: 35px;
      padding-top: 4%;
      color: var(--color1);
      font-size: 110%;
      font-weight: 500;
      border-left: #64babb solid;
      border-radius: 2px;
      width: 173px;
    }

    .said-check {
      background-color: var(--color2);
      height: 530px;
      width: 17.5%;
      border-radius: 13px;
      display: flex;
      justify-content: center;
      flex-direction: column;
      color: var(--color3);
      margin-top: 4.9%;
      box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
      box-shadow: 0 3px 10px rgba(163, 198, 198, 0.791);
      /* position: fixed; */
      /* left: 5%; */
      /* top: 023.4%; */
      position: sticky;
      overflow: hidden;
      right: 78.5%;
      top: 100px;
    }


    .said-check {
      background-color: var(--color2);
      height: 530px;
      width: 17.9%;
      border-radius: 13px;
      display: flex;
      justify-content: center;
      flex-direction: column;
      color: var(--color3);
      margin-top: 4.9%;
      box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
      box-shadow: 0 3px 10px rgba(163, 198, 198, 0.791);
      /* position: fixed; */
      /* left: 5%; */
      /* top: 023.4%; */
      position: sticky;
      overflow: hidden;

      top: 100px;
      left: 69px;
    }

    h4 {
      margin-top: 0;
      margin-bottom: 0rem;
      font-weight: 500;
      line-height: 1.2;
    }

    @media screen and (max-width: 400px) {
      .said-check {
        display: none;
      }

      .main {
        justify-content: flex-start;
      }
    }

    @media only screen and (max-width:768px) {

      .said-check {
        width: 25%;
        left: 0;
      }

      .co {

        width: 259px;
        height: 403px;
      }

    }
  </style>

</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <a class="contact contac" href="./contactsH.html">contact</a>


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


  <main class="main">

    <div class="said-check">
      <div class="side-ul">
        <h4>Projets </h4>
        <label for="Tout">
          <div class="choix">

            <input type="radio" id="Tout" name="projets" value="Tout" checked> <a href="./projects2.php">Tout</a>

          </div>
        </label>

        <label for="Nationaux">
          <div class="choix">



            <input type="radio" id="Nationaux" name="projets" value="Nationaux"><a href="./projects2.php">
              Nationaux</a>


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
          <a href="./events.php">Evenment</a>
        </div>
        <div class="choix">
          <a href="./theses.php">Thèses et mémoires</a>

        </div>

      </div>
      <div class="side-ul">
        <h4>Equipe</h4>
        <div class="choix">



          <a href="./Equips.php">Equipes</a>

        </div>


      </div>



    </div>



    <div class="album  bg-body-tertiary" style="padding-top: 45px; position: relative;  left: 15px;   width: 84%;">
      <div class="container-end">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 rw">
          <?php while ($row = mysqli_fetch_assoc($resu)) { ?>
            <div class="col co">
              <div class="card shadow-sm sm">
                <img class="img" src="data:image/jpeg;base64,<?php echo base64_encode($row['photo']); ?>"
                  alt="Photo de l'événement">
                <div class="card-body cdr">
                  <div class="card-text txt">
                    <p class="fp1">
                      <?php echo $row['titre']; ?>
                    </p>
                    <p><span style="color: #126E62;">Journal</span>:
                      <?php echo $row['journal']; ?>
                    </p>
                    <!-- Ajoutez d'autres informations ici -->
                  </div>

                  <div class="d-flex justify-content-between align-items-center end">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary bt">
                        <a href="chemin_vers_la_page_de_l_image">View</a>
                      </button>
                    </div>
                    <small class="text-body-secondary">
                      <?php echo $row['date']; ?>
                    </small>
                  </div>

                </div>
              </div>

            </div>
          <?php } ?>
        </div>






      </div>
    </div>
    </div>

  </main>

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


  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>

</body>

</html>