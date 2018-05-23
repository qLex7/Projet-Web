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
body,h2,h1{font-family:"Raleway",Arial, sans-serif}
</style>
<body>
  <!-- Sidebar -->
  <div class="w3-sidebar w3-bar-block  w3-animate-left w3-top w3-text-light-grey w3-xlarge" style="background-color:#696969;display:none;z-index:2;width:auto;min-width: 150px" id="mySidebar">
      <a onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-arrow-circle-o-left w3-right"></i> </a>
      <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-home "></i> Home</a>
      <a href="sports.php" class="w3-bar-item w3-button">Sports</a>
      <a href="Accueil.php" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-user-o "></i> Connexion</a>
      <a href="about.php" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-vcard-o "></i> About</a>
  </div>

  <!--menu-->
  <div class="w3-top w3-text-white" style="background-color:#708090;">
    <div class="w3-button  w3-left w3-hover-gray" id="open_menu" onclick="w3_open()">☰</div>
      <div class="w3-center" style="font-family:Arial; font-size:28px">All about YourLimits</div>
        <div class="w3-top">
          <i class="fa fa-user-circle-o w3-right" style="font-size:18px"> <?php echo $_SESSION['pseudo']; ?></i></div>
            <div class="w3-dropdown-click w3-right">
              <button onclick="myFunction()" class="w3-button"><i class="fa fa-angle-down"></i></button>
                <div id="demo" class="w3-dropdown-content w3-bar-block w3-border" style="right:0">
            <a href="Accueil.php" class="w3-bar-item w3-button w3-hover-aqua" style=" background-color:#708090;font-family:Arial; font-size:18px">déconnexion</a>
        </div>
      </div>
   </div>
</div>
  <!--Page content-->
  <div class="w3-margin-top w3-padding-32">
  </div>

   <div class="w3-container w3-card w3-center w3-margin-top w3-padding-32"style="width:100%">
   <div class="w3-border-bottom w3-border-left w3-border-right w3-border-top w3-border-black">
      <h2><b>Qui suis je ?</b></h2>
        <p>Etudiants à l'Université d'Avignon au centre d'Enseignement et de recherche en Informatique (CERI).<br>
        Je suis passionné de sports, c'est pour cette raison que j'ai choisi ce thème pour mon projet.<br>
        Passionné de sport depuis mon plus jeune âge, je pratique le Ski, le Snowboard et le VTT de descente.
      </p>
        </div>
      </div>
        <br>

        
  <div class="w3-content w3-display-container">
  <img class="mySlides" src="Photos/ski.jpg" style="width:100%">
  <img class="mySlides" src="Photos/Snowboard.jpg" style="width:100%">
  <img class="mySlides" src="Photos/Vtt.jpg" style="width:100%">


  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>

  <div class="w3-container w3-margin-top w3-padding-24"></div>
</body>
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
<!-- Footer -->
<div class=" w3-container w3-padding-24 w3-blue-gray  w3-center w3-large">
<p>Powered by <a href="https://www.w3schools.com/default.asp">W3.css</a></p>
  <p>© Copyright 30/03/2017 DEBORD Guillaume</p>
</div>
<script src="../Js/script.js"></script>
</html>