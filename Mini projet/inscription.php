<!DOCTYPE html>
<html>
<title>Mon projet</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://fonts.googleapis.com/css?family=Baloo" rel="stylesheet"> 
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h2,h1{font-family:"Raleway",Arial, sans-serif}
</style>
<body>
  <!-- Sidebar -->
  <!--<div class="w3-sidebar w3-bar-block  w3-animate-left w3-top w3-text-light-grey w3-xlarge" style="background-color:#696969;display:none;z-index:2;width:auto;min-width: 150px" id="mySidebar">
      <a onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-arrow-circle-o-left w3-right"></i> </a>
      <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-home "></i> Home</a>
      <a href="sports.php" class="w3-bar-item w3-button">Sports</a>
      <a href="connexion.php" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-user-o "></i> Connexion</a>
      <a href="about.php" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-vcard-o "></i> About</a>
  </div>-->

  <!--menu-->
  <div class="w3-top w3-text-white" style="background-color:#708090;">
    <div class="w3-button w3-left w3-hover-gray" id="open_menu" onclick="w3_open()">☰</div>
    <div class="w3-center " style="font-family:Arial; font-size:28px">All about YourLimits</div>
  </div>
</div>
  <!--Page content-->
<div class="w3-content" style="margin-top:10%">
  <div class="w3-container w3-card w3-center w3-margin-top w3-padding-32">
    <div class="w3-border-bottom w3-border-left w3-border-right w3-border-top w3-border-black">
    <h1><b>Inscription sur le site</b></h1>
      </div>
    </div>

     <div class="w3-padding-32"></div>
    <form action="register.php" method="post" name="form1" id="form1">
      <div class="w3-row">
        <div class="w3-third" style="font-family:'Baloo', cursive;">
          Pseudo :
        </div>
        <div class="w3-twothird">
          <input class="w3-input w3-border w3-round-large" type="text" name="pseudo" required/>
        </div>
        <div class="w3-third" style="font-family:'Baloo', cursive;">
          Nom de famille :
        </div>
        <div class="w3-twothird">
          <input class="w3-input w3-border w3-round-large" type="text" name="nom" requiered/>
        </div>
        <div class="w3-third" style="font-family:'Baloo', cursive;">
          Prénom :
        </div>
        <div class="w3-twothird">
          <input class="w3-input w3-border w3-round-large" type="text" name="prenom" requiered/>
        </div>
        <div class="w3-third  w3-tooltip" style="font-family:'Baloo', cursive;">
          Age :<span class="w3-text w3-tag w3-animate-opacity">Veuillez entrez une valeur entre 1 et 150 ans.</span>
        </div>
        <div class="w3-twothird">
          <input class="w3-input w3-border w3-round-large" type="number" name="Age" id="age1" requiered/>
        </div>
        <div class="w3-third" style="font-family:'Baloo', cursive;">
          Mot de passe :
        </div>
        <div class="w3-twothird">
          <input class="w3-input w3-border w3-round-large" type="password" name="pass" requiered/>
          <div id="info_age" style="display:none"></div>
        </div>
        <div class="w3-third" style="font-family:'Baloo', cursive;">
          Adresse Email :
        </div>
        <div class="w3-twothird">
          <input class="w3-input w3-border w3-round-large" type="mail" name="mail" id="email" placeholder="xx@univ-avignon.fr" requiered/>
        </div>
      </div>

      <div class="w3-row w3-margin-top">
        <div class="w3-third" style="text-align:left">
          <input class="w3-button w3-blue w3-round w3-hover-red" type="reset" value="Initialisez">
            </div>
          <div class="w3-twothird" style="text-align: right">
        <input class="w3-button w3-blue w3-round w3-hover-green" onclick="send();" type="submit" value="Envoyez">
      </div>
    </div>
  </form>
  <!--End content-->
</div>
  <div class="w3-padding-64"></div>



<!-- Footer -->
<div class=" w3-container w3-padding-24 w3-blue-gray  w3-center w3-large">
<p>Powered by <a href="https://www.w3schools.com/default.asp">W3.css</a></p>
  <p>© Copyright 30/03/2017 DEBORD Guillaume</p>
</div>

</body>
<script src="../Js/script.js"></script>
</html>