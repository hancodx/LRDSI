<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>

 <form action="post">
 <label for="membres_equipe">Membres de l'équipe :</label>
<select id="membres_equipe" name="membres_equipe[]" multiple size="5">
  <?php
  include('DBconn.php');
  $resultat = mysqli_query($conn, "SELECT nom, prenom FROM membre");
  
  if (!$resultat) {
    echo "Erreur lors de la récupération des données : " . mysqli_error($conn);
    exit;
  }
  
  while ($row = mysqli_fetch_assoc($resultat)) {
    echo "<option value='" . $row["nom"] . " " . $row["prenom"] . "'>" . $row["nom"] . " " . $row["prenom"] . "</option>";
  }
  
  mysqli_free_result($resultat);
  mysqli_close($conn);
  ?>
</select><br><br>


<input type="submit" value="Ajouter l'équipe">
</form>

 
</body>
</html>