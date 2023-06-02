<?php
include('DBconn.php');
// Récupérer la liste des membres
$resmembre = mysqli_query($conn, "SELECT * FROM membre");
$resequipe = mysqli_query($conn, "SELECT * FROM equipe");
$resprojet = mysqli_query($conn, "SELECT * FROM projet");
$resevent = mysqli_query($conn, "SELECT * FROM events");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/head-fot.css">
    <link rel="stylesheet" href="css/admin.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
    <!--<link rel="stylesheet" href="css/braa.css"> -->
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

 .sidebar {
  background-color: #f4f4f4;
  padding: 20px;
  width: 200px;
  float: right;
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


    </style>
</head>
<body>
  

<!-- header -->
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
    


    




    <!-- sidbare -->
    <div class="sidebar">
        <h3 class="titre">gestion</h3>
        <ul class="sidebar-list">
        <li class="sub-menu">
            <a href="#" class="menu-principal">Membres</a>
            <ul>
              <li><a href="#">tous les membres</a></li>
              <li><a href="#">ajouter un membre</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="#" class="menu-principal">Projets</a>
            <ul>
              <li><a href="#">tous les projets</a></li>
              <li><a href="#">ajouter un projet</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="#" class="menu-principal">Publications</a>
            <ul>
              <li><a href="#">tous les Publications</a></li>
              <li><a href="#">ajouter une publication</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="#" class="menu-principal">Événements</a>
            <ul>
              <li><a href="#">tous les événements</a></li>
              <li><a href="#">ajouter un événements</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="#" class="menu-principal">Thèses</a>
            <ul>
              <li><a href="#">tous les thèses</a></li>
              <li><a href="#">ajouter une thèses</a></li>
            </ul>
          </li>
        
        </ul>
      </div>
      



   



<!-- La 2 eme table des membres -->
<div class="container" style="max-width: 850px; margin-top: 130px; margin-right: 260px; margin-left: 200px;">      

<!-- tableu des membres -->
<h1 style=" font-size:25px; font-weight: bold; text-decoration: underline;">Voici tous les membres</h1>
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
                        <form method="POST"  >
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                <button type="submit" name="supprimer" class="btn btn-danger btn-sm" style="background-color: rgb(141, 179, 179) ; border: 0;"onclick="return confirm('Êtes-vous sûr de vouloir modifier ce membre ?')">Modifier</button>
                        </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>  



<!-- table des equipes -->
<h1 style=" font-size:25px; font-weight: bold; text-decoration: underline;">2 - Voici tous les equipes</h1>
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
                                <input type="hidden" name="id_equipe" value="<?php echo $row['id_equipe']; ?>">
                                <button type="submit" name="modifier_eq" class="btn btn-danger btn-sm"  style="background-color: rgb(141, 179, 179) ; border: 0;" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce membre ?')">Supprimer</button>
                        </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

      

<!-- table des projets -->
        <h1 style=" font-size:25px; font-weight: bold; text-decoration: underline;">Voici tous les projets</h1>
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
                                <button type="submit" name="supprimer" class="btn btn-danger btn-sm"  style="background-color: rgb(141, 179, 179) ; border: 0;" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce membre ?')">Supprimer</button>
                        </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>


        <h1 style=" font-size:25px; font-weight: bold; text-decoration: underline;">Voici tous les événements</h1>
        <table class="table table-striped">
            <thead>
                <tr style=" font-size:13px">
                    <th>id</th>
                    <th>Titre</th>
                    <th>Type</th>
                    <th>Date</th>
                    <th>Lieu</th>
                    <th>Photo</th>
                    <th>Action 1</th>
                    <th>Action 2</th>
                </tr>
            </thead>
            <tbody>
    <?php while ($row = mysqli_fetch_assoc($resevent)) { ?>
        <tr style=" font-size:13px">
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['titre']; ?></td>
            <td><?php echo $row['type']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td><?php echo $row['lieu']; ?></td>
            <td><img src="<?php echo $row['photo']; ?>" alt="Photo de l'événement" width="100"></td>
            <td>
                <form method="POST" action="suppression.php">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <button type="submit" name="supprimer_ev" class="btn btn-danger btn-sm" style="background-color: rgb(141, 179, 179); border: 0;" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet événement ?')">Supprimer</button>
                </form>
            </td>
            <td>
                <form method="POST">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <button type="submit" name="modifier_ev" class="btn btn-danger btn-sm" style="background-color: rgb(141, 179, 179); " onclick="return confirm('Êtes-vous sûr de vouloir modifier cet événement ?')">Modifier</button>
                </form>
            </td>
        </tr>
    <?php } ?>
</tbody>

        </table>

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