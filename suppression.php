<?php

//suppression d un membre 

include('DBconn.php');

if (isset($_POST['supprimer-me'])) {
    
    $memberId = $_POST['id']; 

    // Supprimer la référence dans la table "equipe_membre"
    $query = "DELETE FROM equipe_membre WHERE id_membre = $memberId";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Erreur lors de la suppression de la référence dans la table equipe_membre : " . mysqli_error($conn));
    }

    // Supprimer le membre de la table "membre"
    $query = "DELETE FROM membre WHERE id = $memberId";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Erreur lors de la suppression du membre : " . mysqli_error($conn));
    }
    header("Location: admin.php");
    exit();
   
}






// Suppression de l'équipe

if (isset($_POST['supprimer-eq'])) {
    $idEquipe = $_POST['id_equipe'];

    $query = "DELETE FROM equipe_membre WHERE id_equipe = $idEquipe";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Erreur lors de la suppression des références dans la table equipe_membre : " . mysqli_error($conn));
    }

    $query = "DELETE FROM equipe WHERE id_equipe = $idEquipe";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Erreur lors de la suppression de l'équipe : " . mysqli_error($conn));
    }

    header("Location: admin.php");
    exit();
}





// suppression dun projet
if(isset($_POST['supprimer-pr'])) {
  $id = $_POST['id'];

  $reqsupp3 = "DELETE FROM projet WHERE id = $id";
  $suppproject = mysqli_query($conn, $reqsupp3);

  if($suppproject) {
      header("Location: admin.php");
      exit(); 
  } else {
      echo "Erreur lors de la suppression de l'équipe.";
  }
}



//suppression d un evenement

if(isset($_POST['supprimer_ev'])){
    $id = $_POST['id'];

    $id = mysqli_real_escape_string($conn, $id);

    $sql = "DELETE FROM events WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    if($result){
        header("Location: admin.php");
        exit;
    }else{
        // échec de la suppression, afficher un message d'erreur
        $message = "Erreur lors de la suppression de l'événement.";
    }
}







?>

