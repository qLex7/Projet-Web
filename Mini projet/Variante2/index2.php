<?php session_start() ; ?>
<!DOCTYPE html>
<html>
<title>Mon projet</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.mySlides {display:none;}
body,h2,h1{font-family:"Raleway",Arial, sans-serif}
</style>
<body>
  <!-- Sidebar -->
  <div class="w3-sidebar w3-bar-block  w3-animate-right w3-top w3-text-light-grey w3-xlarge" style="background-color:#A52A2A;display:none;z-index:2;width:auto;min-width: 150px" id="mySidebar">
      <a onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-arrow-circle-o-left w3-right"></i> </a>
      <a href="index2.php"  class="w3-bar-item w3-button"><i class="fa fa-home "></i> Home</a>
      <a href="sports.php" class="w3-bar-item w3-button">Sports</a>
      <a href="Accueil.php" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-user-o  "></i>  Connexion</a>
      <a href="about.php" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-vcard-o "></i> About</a>
  </div>

  <!--menu-->
  <div class="w3-top w3-text-white" style="background-color:#0000FF;">
    <div class="w3-button  w3-right w3-hover-blue" id="open_menu" onclick="w3_open()">☰</div>
      <div class="w3-center " style="font-family:Arial; font-size:28px">All about YourLimits</div>
        <div class="w3-top">
        <i class="fa fa-user-circle-o w3-left" style="font-size:18px"> <?php echo $_SESSION['pseudo']; ?></i></div> 
          <div class="w3-dropdown-click w3-left">
            <button onclick="myFunction()" class="w3-button"><i class="fa fa-angle-down"></i></button>
              <div id="demo" class="w3-dropdown-content w3-bar-block w3-border" style="left:0">
            <form method="post" action="destroy.php">
            <input class="w3-button w3-xlarge" type="submit" value="déconnexion" style=" background-color:#708090;font-family:Arial; font-size:18px">
            </form>
        </div>
    </div>    
</div>
  <!--Page content-->
  <div class=" w3-content w3-margin-top w3-padding-24">
    </div>

   <div class="w3-content w3-margin-top w3-padding-32" style="width:100%">
      <h2 class="w3-center"><b>Présentation des sport extrêmes</b></h2>
        <p class="w3-center">Bienvenue sur le site de l'extrême.<br> Le site a été créé pour présenter au public des sports qui ne sont pas connus. Vous aurez la possibilité de présenter vos vidéos et vos photos aux autres utilisateurs du site afin de montrer le sport que vous pratiquez.</p>
        <div class="w3-content w3-center">
          <form action="rechercher.php" method="Post">
            <input  type="text" name="Mot" size="15"/>
          <input  type="submit" value="Recherche"/>
        </form>
      </div>
    </div>

          <div class="w3-content w3-section" style="width:100%;margin-top: 0;">
            <img class="slides" src="Photos/ski.jpg" style="width:100%">
                <img class="slides" src="Photos/Bmx.jpg" style="width:100%">
                  <img class="slides" src="Photos/vtt.jpg" style="width: 100%">
                    <img class="slides" src="Photos/fmx.jpg" style="width: 100%">
                      <img class="slides" src="Photos/escalade.jpg" style="width: 100%">
                        <img class="slides" src="Photos/surf.jpg" style="width: 100%">
                            <img class="slides" src="Photos/snowboard.jpg" style="width: 100%">
                              <img class="slides" src="Photos/wingsuit.jpg" style="width: 100%">
                                <img class="slides" src="Photos/kitsurf.jpg" style="width: 100%">
                                  <img class="slides" src="Photos/plongeon.jpg" style="width: 100%">
                                    <img class="slides" src="Photos/SpeedRiding.jpg" style="width: 100%">

          </div>


    <div class="w3-container w3-margin-top w3-padding-24"></div>

<!-- Footer -->
<div class=" w3-container w3-padding-24 w3-blue  w3-center w3-large">
<p>Powered by <a href="https://www.w3schools.com/default.asp">W3.css</a></p>
  <p>© Copyright 30/03/2017 DEBORD Guillaume</p>
</div>

</body>
<script src="../Js/script.js"></script>
</html>