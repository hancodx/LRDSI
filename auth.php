<?php
session_start();

// Vérifier si l'administrateur est déjà connecté
if(isset($_SESSION['admin_loggedin']) && $_SESSION['admin_loggedin'] === true){
    header("Location: admin.php");
    exit;
}

// Vérifier si le formulaire de connexion a été soumis
if(isset($_POST['submit'])){
    // Récupérer les valeurs du formulaire de connexion
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Vérifier si les identifiants sont valides (vous pouvez remplacer cette vérification avec votre propre logique d'authentification)
    if($email === "adminlrdsi@gmail.com" && $password === "lrdsi@admin"){
        // Authentification réussie, définir la session de l'administrateur
        $_SESSION['admin_loggedin'] = true;
        $_SESSION['admin_username'] = "adminlrdsi";

        header("Location: admin.php");
        exit;
    }else{
        $message = "Identifiant ou mot de passe incorrect.";
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
    
    <link rel="stylesheet" href="css/auth.css">

    
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
                    <li><a href="admin.php">Gestion</a></li>
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
        <section class="user">
            <div class="user_options-container">
                <div class="user_options-text">
                    <div class="user_options-unregistered">
                        <h2 class="user_unregistered-title">C'est la partie de l'administrateur </h2>
                        <p class="user_unregistered-text">L'administrateur a l'accès de voir la base de données de la plateforme et effectuer des modifications en cas de besoin, comme supprimer, ajouter, modifier, etc.</p>
                    </div>
                </div>
                
                <div class="user_options-forms" id="user_options-forms">
                    <div class="user_forms-login">
                        <h2 class="forms_title">Connexion</h2>
                        <?php if(isset($message)){ ?>
                            <p class="error-message"><?php echo $message; ?></p>
                        <?php } ?>
                        <form class="forms_form" method="POST">
                            <div class="forms_field">
                                <input type="email" name="email" placeholder="Email" class="forms_field-input" required autofocus />
                            </div>
                            <div class="forms_field">
                                <input type="password" name="password" placeholder="Mot de passe " class="forms_field-input" required />
                            </div>
                            <div class="forms_buttons">
                                <input type="submit" name="submit" value="Accéder" class="forms_buttons-action">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
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
                <div class="icon"><ion-icon name="location-sharp"></ion-icon></div>
                <span>Location</span>
            </div>
        </div>  
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
