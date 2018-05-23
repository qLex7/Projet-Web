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
  <div class="w3-sidebar w3-bar-block  w3-animate-left w3-top w3-text-light-grey w3-xlarge" style="background-color:#696969;display:none;z-index:2;width:auto;min-width: 150px" id="mySidebar">
      <a onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-arrow-circle-o-left w3-right"></i> </a>
      <a href="../index.php"  class="w3-bar-item w3-button"><i class="fa fa-home "></i> Home</a>
      <a href="../sports.php" class="w3-bar-item w3-button">Sports</a>
      <a href="../Accueil.php" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-user-o  "></i>  Connexion</a>
      <a href="../about.php" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-vcard-o "></i> About</a>
  </div>

  <!--menu-->
  <div class="w3-top w3-text-white" style="background-color:#708090;">
    <div class="w3-button  w3-left w3-hover-gray" id="open_menu" onclick="w3_open()">☰</div>
      <div class="w3-center " style="font-family:Arial; font-size:28px">All about YourLimits</div>
        <div class="w3-top">
        <i class="fa fa-user-circle-o w3-right" style="font-size:18px"> <?php echo $_SESSION['pseudo']; ?></i></div> 
          <div class="w3-dropdown-click w3-right">
            <button onclick="myFunction()" class="w3-button"><i class="fa fa-angle-down"></i></button>
              <div id="demo" class="w3-dropdown-content w3-bar-block w3-border" style="right:0">
            <form method="post" action="../destroy.php">
            <input class="w3-button w3-xlarge" type="submit" value="déconnexion" style=" background-color:#708090;font-family:Arial; font-size:18px">
            </form>
        </div>
    </div>    
</div>
  <!--Page content-->
  <div class="w3-margin-top w3-padding-64">
  </div>

   <div class="w3-content w3-center w3-margin-top w3-padding-64">
      <form action="ajout.php" method="post">
        <input type="file" name="recu" /><br>
        Répertoires de fichier :
        <select name="envoi" id="envoi" required>                                             
          <option value="Ski" selected>Ski</option>                                        
          <option value="Snowboard">Snowboard</option>
          <option value="Speed riding">Speed Riding</option>
          <option value="Escalade">Escalade</option>
          <option value="Wingsuit">Wingsuit</option>
          <option value="Surf">Surf</option>
          <option value="Kitsurf">Kitsurf</option>
          <option value="Plongeon">Plongeon</option>
          <option value="BMX">BMX</option>
          <option value="VTT">VTT</option>
          <option value="FMX">FMX</option>
        </select>
        <input type="submit"  name="monfichier" value="Envoyez le fichier" />
      </form>
    </div>

    <?php

        $dir_nom = '../import/'; // dossier listé (pour lister le répertoir courant : $dir_nom = '.'  --> ('point')
        $dir = opendir($dir_nom) or die('Le répertoire n\'existe pas'); // on ouvre le contenu du dossier courant
        $fichier= array(); // on déclare le tableau contenant le nom des fichiers
        $dossier= array(); // on déclare le tableau contenant le nom des dossiers
 
        while($element = readdir($dir)) 
        {
          if($element != '.' && $element != '..') {
            if (!is_dir($dir_nom.'/'.$element)) {$fichier[] = $element;}
            else {$dossier[] = $element;}
          }
        }
      ?>


          

    <div class="w3-margin-top w3-padding-64"></div>
    <div class="w3-padding-64"></div>

<!-- Footer -->
<div class=" w3-container w3-padding-64 w3-blue-gray  w3-center w3-large">
<p>Powered by <a href="https://www.w3schools.com/default.asp">W3.css</a></p>
  <p>© Copyright 30/03/2017 DEBORD Guillaume</p>
</div>

</body>
<script src="../Js/script.js"></script>
</html>