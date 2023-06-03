<?php
include('DBconn.php');
// Récupérer la liste des membres
$resmembre = mysqli_query($conn, "SELECT * FROM membre");
$resequipe = mysqli_query($conn, "SELECT * FROM equipe");
$resprojet = mysqli_query($conn, "SELECT * FROM projet");
$resevent = mysqli_query($conn, "SELECT * FROM events");
$respub = mysqli_query($conn, "SELECT * FROM pub");
?>
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


   

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
    <!--<link rel="stylesheet" href="css/braa.css"> -->



    
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

        /* Style pour la sidebar */

 aside ul{
  padding: 0%;
  
 }
 aside li{
  width: 200%;
 }
 aside{
  left: 284px;
  margin-top: 465px;
 }
 aside a{
  pading:0;
 }
 .nav__text {
	flex-grow: 1;
	width: 57px;
}
.sidebar .titre {
  color: #333;
  font-size: 18px;
  margin-bottom: 10px;
}

.sidebar ul.sidebar-list {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

.sidebar ul.sidebar-list li {
  margin-bottom: 10px;
}

.sidebar ul.sidebar-list li a {
  text-decoration: none;
  color: #333;
  display: block;
}

.sidebar ul.sidebar-list li a:hover {
  color: #000;
}

.sidebar ul.sidebar-list li ul {
  display: none;
  margin-left: 15px;
}

.sidebar ul.sidebar-list li:hover ul {
  display: block;
}

/* Style pour la table des membres */
.container {
  margin-top: 50px;
}

.container h1 {
  font-size: 20px;
  margin-bottom: 20px;
}

.table {
  font-size: 14px;
  
}
.tables{
  width: 60%;
}
.table th {
  font-weight: bold;
}

.table td,
.table th {
  padding: 8px;
}

.table tbody tr:nth-child(even) {
  background-color: #f9f9f9;
}

.table tbody tr:hover {
  background-color: #f5f5f5;
}
.container .mod a {
	
	text-decoration: none;

}


    </style>
</head>
<body>

 

    
      

        
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


    
   



<!-- La 2 eme table des membres -->
<div class="containerr" style="max-width: 850px; margin-top: 160px;  margin-left: 110px; display: flex;">      
<div class="tabels" style=" width:600px ; position: relative; left:120px">
<!-- tableu des membres -->
<h1 style=" font-size:25px; font-weight: bold; text-decoration: underline; margin-top: 30px;">Voici tous les membres</h1>
        <table class="table table-striped">
            <thead>
                <tr style=" font-size:13px">
                    <th>id </th>
                    <th>Nom </th>
                    <th>Prenom</th>
                    <th>Email</th>
                    <th>Grade</th>
                    <th>Action 1</th>
                    <th>Action 2</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($resmembre)) { ?>
                    <tr style=" font-size:13px">
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['nom']; ?></td>
                        <td><?php echo $row['prenom']; ?></td>
                        <td><?php echo $row['adresse_email']; ?></td>
                        <td><?php echo $row['grade']; ?></td>
                        <td>
                        <form method="POST" action="suppression.php">
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                <button type="submit" name="supprimer-me" class="btn btn-danger btn-sm"  style="background-color: rgb(141, 179, 179) ; border: 0;" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce membre ?')">Supprimer</button>
                        </form>
                        </td>
                        <td>
                        <form method="POST">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <a href="modmembre.php?id=<?php echo $row['id']; ?>" class="btn btn-danger  btn-sm mod" style="background-color: rgb(141, 179, 179); border: 0; max-width:50;" onclick="return confirm('Êtes-vous sûr de vouloir modifier ce membre ?')">Modifier</a>
                        </form>

                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>  



<!-- table des equipes -->
<h1 style=" font-size:25px; font-weight: bold; text-decoration: underline; margin-top: 30px;">2 - Voici tous les equipes</h1>
        <table class="table table-striped" >
            <thead>
                <tr style=" font-size:13px">
                    <th>id equipe</th>
                    <th>Nom d'équipe</th>
                    <th>Nom de chef d'équipe</th>
                    <th>Domaine de recherche</th>
                    <th>Membres</th>
                    <th>Action 1</th>
                    <th>Action 2</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($resequipe)) { ?>
                    <tr style=" font-size:13px">
                        <td><?php echo $row['id_equipe']; ?></td>
                        <td><?php echo $row['nom_equipe']; ?></td>
                        <td><?php echo $row['nom_chef_equipe']; ?></td>
                        <td><?php echo $row['domaine_recherche']; ?></td>
                        <td><?php echo $row['membres']; ?></td>
                        <td>
                        <form method="POST" action="suppression.php">
                                <input type="hidden" name="id_equipe" value="<?php echo $row['id_equipe']; ?>">
                                <button type="submit" name="supprimer-eq" class="btn btn-danger btn-sm"  style="background-color: rgb(141, 179, 179) ;border: 0;" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce membre ?')">Supprimer</button>
                        </form>
                        </td>
                        <td>
                        <form method="POST">
                            <input type="hidden" name="id" value="<?php echo $row['id_equipe']; ?>">
                            <a href="modequipe.php?id=<?php echo $row['id_equipe']; ?>" class="btn btn-danger btn-sm" style="background-color: rgb(141, 179, 179); border: 0; max-width:50;" onclick="return confirm('Êtes-vous sûr de vouloir modifier ce membre ?')">Modifier</a>
                        </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

      

<!-- table des projets -->
        <h1 style=" font-size:25px; font-weight: bold; text-decoration: underline; margin-top: 30px;">Voici tous les projets</h1>
        <table class="table table-striped">
            <thead>
                <tr style=" font-size:13px">
                    <th>Id</th>
                    <th>Titre</th>
                    <th>Responsable</th>
                    <th>Description</th>
                    <th>Type</th>
                    <th>Date</th>
                    <th>Action 1</th>
                    <th>Action 2</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($resprojet)) { ?>
                    <tr style=" font-size:13px">
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['titre']; ?></td>
                        <td><?php echo $row['responsable']; ?></td>
                        <td><?php echo $row['description_projet']; ?></td>
                        <td><?php echo $row['type_projet']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td>
                        <form method="POST" action="suppression.php">
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                <button type="submit" name="supprimer-pr" class="btn btn-danger btn-sm"  style="background-color: rgb(141, 179, 179) ; border: 0;" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce membre ?')">Supprimer</button>
                        </form>
                        </td>
                        <td>
                        <form method="POST">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <a href="modprojet.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" style="background-color: rgb(141, 179, 179); border: 0; max-width:50;" onclick="return confirm('Êtes-vous sûr de vouloir modifier ce membre ?')">Modifier</a>
                        </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>


        <h1 style="font-size:25px; font-weight:bold; text-decoration:underline; margin-top: 30px;">Voici tous les événements</h1>
<table class="table table-striped">
    <thead>
        <tr style="font-size:13px">
            <th>id</th>
            <th>Titre</th>
            <th>Date</th>
            <th>Lieu</th>
            <th>Photo</th>
            <th>Action 1</th>
            <th>Action 2</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = mysqli_fetch_assoc($resevent)) { ?>
            <tr style="font-size:13px">
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['titre']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo $row['lieu']; ?></td>
                <td><img src="data:image/jpeg;base64,<?php echo base64_encode($row['photo']); ?>" alt="Photo de l'événement" width="100"></td>
                <td>
                    <form method="POST" action="suppression.php">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <button type="submit" name="supprimer_ev" class="btn btn-danger btn-sm" style="background-color:rgb(141, 179, 179); border:0;" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet événement ?')">Supprimer</button>
                    </form>
                </td>
                <td>
                <form method="POST">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <a href="modevent.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" style="background-color: rgb(141, 179, 179); border: 0; max-width:50;" onclick="return confirm('Êtes-vous sûr de vouloir modifier ce membre ?')">Modifier</a>
                    </form>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>


<h1 style="font-size:25px; font-weight:bold; text-decoration:underline; margin-top: 30px;">Voici tous les publications</h1>
<table class="table table-striped">
    <thead>
        <tr style="font-size:13px">
            <th>id</th>
            <th>Titre</th>
            <th>type</th>
            <th>Auteur</th>
            <th>Journal</th>
            <th>Date</th>
            <th>Photo</th>
            <th>Action 1</th>
            <th>Action 2</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = mysqli_fetch_assoc($respub)) { ?>
            <tr style="font-size:13px">
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['titre']; ?></td>
                <td><?php echo $row['type']; ?></td>
                <td><?php echo $row['auteur']; ?></td>
                <td><?php echo $row['journal']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td>
                  <a href="chemin_vers_la_page_de_l_image">
                  <img src="data:image/jpeg;base64,<?php echo base64_encode($row['photo']); ?>" alt="Photo de l'événement" width="100">
                </a>
                </td>

                <td>
                    <form method="POST" action="suppression.php">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <button type="submit" name="supprimer_pub" class="btn btn-danger btn-sm" style="background-color:rgb(141, 179, 179); border:0;" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet événement ?')">Supprimer</button>
                    </form>
                </td>
                <td>
                <form method="POST">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <a href="modpub.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" style="background-color: rgb(141, 179, 179); border: 0; max-width:50;" onclick="return confirm('Êtes-vous sûr de vouloir modifier ce membre ?')">Modifier</a>
                    </form>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>



</div>
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

      <h2 class="sidebar__subtitle"><a href="">Membres</a></h2>
      <div class="nav">
        <ul class="nav__list">
          <li class="nav__item">
            <a href="#" class="nav__link">
            <ion-icon name="person-add-outline"></ion-icon>
              <span class="nav__text">ajouté un membre</span>
             
            </a>
          </li>
      
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
        <form method="POST" action="logout.php">
          <button class="account__exit" type="submit" name="logout">Déconnecter</button>
        </form>

      </div>
    </div>
  </aside>

    </div>



    
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
<script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('.table').DataTable();
    });
</script>







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








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>