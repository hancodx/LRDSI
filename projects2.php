<?php
include("DBconn.php");
$req = "select * from projet";
$resu = mysqli_query($conn, $req);

?>

<!DOCTYPE html>

<html >
<head>
  <meta charset="UTF-8">
  <script src="./jquery-3.6.4.js"></script>
  <title></title>
 
    <link rel="stylesheet" href="./css/projects.css">
      <link rel="stylesheet" href="./css/head-fot.css">
      <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
      <script src="https://kit.fontawesome.com/27fd92e4a2.js" crossorigin="anonymous"></script>

    </head>
<script>

    function showDiv() {
        document.getElementById("myDiv").style.display = "block";
    }

    function hideDiv() {
        document.getElementById("myDiv").style.display = "none";
    }

    // Check the "Hey" radio button by default
    document.getElementById("hey").checked = true;
    showDiv();
</script>
<style>
.leader {
   display: flex;
   width: 50%;
   justify-content: space-between;
   margin-top: 1%;
   color: var(--color1)
}</style>
<body>
 
    
  <div class="container">
  <input type="checkbox" id="check">
      <label for="check" >  
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
        
    
<main>
    La liste des projets...
    <?php while ($row = mysqli_fetch_assoc($resu)) { ?>
          <div class="projet">
              <div class="titre">
                  <div class="type"><h5><?php echo $row['type_projet']; ?></h5> <span><?php echo $row['date']; ?></span></div>
                  <h4><?php echo $row['titre']; ?></h4> 
                  <div class="leader">
                      <div class="" style="display: flex;">
                          <ion-icon class="i" name="person-outline"></ion-icon>
                          <h6><strong>Responsable</strong></h6>
                      </div>
                      <h6><?php echo $row['responsable']; ?></h6>
                  </div>
              </div>
              <div class="discr">
                  <p><?php echo $row['description_projet']; ?></p>
              </div>
              <a href="">acceder</a>
          </div>
    <?php } ?>
</main>



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


    <script>
        
  //	function toggleCheckbox() {
    ///	var checkboxes = document.getElementsByName("grup");
    //	var checkedOne = false;
      /* for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i].checked) {
          if (checkedOne) {
            checkboxes[i].checked = false;
                    
          } else {
            checkedOne = true;
          }
        }
      } */
         //   if(checkboxes[1].checked){
         //       checkboxes[0].checked= false;

        //    }else if (checkboxes[1].checked && checkboxes[2].checked){
        //        checkboxes[0].checked=true;
                
         //   }
    //}
  
    </script>
    
    <script src="./jquery-3.6.4.js"></script>
    <script >
      $(document).ready(function(){
        $('input[type="radio"]').click(function(){
          var val = $(this).attr("value");
          var target = $("." + val);
          $(".listes").not(target).hide();
          $(target).show();
        });
        $('input[value="Tout"]').trigger('click');
      });
    </script>

 
   
</body>
</html>