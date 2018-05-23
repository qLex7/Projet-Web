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
body,h1,h2{font-family:"Raleway",Arial, sans-serif}
</style>
<body>
  <!-- Sidebar -->
  <div class="w3-sidebar w3-bar-block  w3-animate-left w3-top w3-text-light-grey w3-xlarge" style="background-color:#696969;display:none;z-index:2;width:auto;min-width: 150px" id="mySidebar">
      <a onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-arrow-circle-o-left w3-right"></i> </a>
      <a href="index.php"  class="w3-bar-item w3-button"><i class="fa fa-home "></i> Home</a>
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
  <div class="w3-margin-top w3-padding-24">
  </div>

<!--Snow-->
   <div class="w3-container w3-pale-blue w3-margin-top w3-padding-32" style="width:100%">
      <h1 class="w3-center"><b>Snow</b></h1>
    </div>

      <div class="w3-row-padding w3-margin-top">
        <div class="w3-third">
          <div class="w3-card-2">
            <a href="./Sports/ski.php"> <img src="Photos/moyski.jpg" class="w3-hover-opacity" style="width:100%"></a>
          <div class="w3-container">
        <h2>Ski</h2>
      </div>
    </div>
  </div>

      <div class="w3-third">
        <div class="w3-card-2">
            <a href="./Sports/snowboard.php"><img src="Photos/moysnow.jpg" class="w3-hover-opacity " style="width:100%"></a>
          <div class="w3-container">
        <h2>Snowboard</h2>
      </div>
    </div>
</div>

      <div class="w3-third">
        <div class="w3-card-2">
            <a href="./Sports/speedriding.php"><img src="Photos/moysprd.jpg" class="w3-hover-opacity" style="width:100%"></a>
          <div class="w3-container">
        <h2>Speed Riding</h2>
      </div>
    </div>
  </div>
</div>

<!--Air-->
<div class="w3-container w3-aqua w3-margin-top" style="100%">
  <h1 class="w3-center"><b>Air</b></h1>
    </div>

      <div class="w3-row-padding w3-margin-top">
        <div class="w3-third">
          <div class="w3-card-2">
                <a href="./Sports/escalade.php"><img src="Photos/escalade.jpg" class="w3-hover-opacity" style="width:100%"></a>
                <div class="w3-container">
              <h2>Escalade</h2>
            </div>
          </div>
        </div>
            <div class="w3-third">
              <div class="w3-card-2">
                 <a href="./Sports/wingsuit.php"><img src="Photos/wingsuit.jpg" class="w3-hover-opacity" style="width:100%"></a>
                <div class="w3-container">
              <h2>Wingsuit</h2>
            </div>
          </div>
      </div>
            <div class="w3-third">
              <div class="w3-card-2">
                 <a href="./Sports/skateboard.php"><img src="Photos/moyskate.jpg" class="w3-hover-opacity" style="width:100%"></a>
                  <div class="w3-container">
                    <h2>Skateboard</h2>
                  </div>
                </div>
              </div>
            </div>

<!--water-->
<div class="w3-container w3-light-blue w3-margin-top" style="100%">
  <h1 class="w3-center"><b>Water</b></h1>
    </div>

      <div class="w3-row-padding w3-margin-top">
        <div class="w3-third">
          <div class="w3-card-2">
             <a href="./Sports/surf.php"><img src="Photos/surf.jpg" class="w3-hover-opacity" style="width:100%"></a>
              <div class="w3-container">
            <h2>Surf</h2>
          </div>
        </div>
      </div>

          <div class="w3-third">
            <div class="w3-card-2">
               <a href="./Sports/kitsurf.php"><img src="Photos/kitsurf.jpg" class="w3-hover-opacity" style="width:100%"></a>
              <div class="w3-container">
            <h2>Kitsurf</h2>
          </div>
        </div>
    </div>

          <div class="w3-third">
            <div class="w3-card-2">
               <a href="./Sports/plongeon.php"><img src="Photos/plongeon.jpg" class="w3-hover-opacity" style="width:100%"></a>
              <div class="w3-container">
            <h2>Plongeon</h2>
          </div>
        </div>
      </div>
    </div>

<!--Dirt-->
<div class="w3-container w3-brown w3-margin-top" style="100%">
  <h1 class="w3-center"><b>Dirt</b></h1>
    </div>

          <div class="w3-row-padding w3-margin-top">
            <div class="w3-third">
              <div class="w3-card-2">
                 <a href="./Sports/bmx.php"><img src="Photos/bmx.jpg" class="w3-hover-opacity" style="width:100%"></a>
                  <div class="w3-container">
                <h2>BMX</h2>
              </div>
            </div>
          </div>

              <div class="w3-third">
                <div class="w3-card-2">
                   <a href="./Sports/vtt.php"><img src="Photos/vtt.jpg" class="w3-hover-opacity" style="width:100%"></a>
                  <div class="w3-container">
                <h2>VTT</h2>
              </div>
            </div>
        </div>

              <div class="w3-third">
                <div class="w3-card-2">
                   <a href="./Sports/fmx.php"><img src="Photos/fmx.jpg" class="w3-hover-opacity" style="width:100%"></a>
                  <div class="w3-container">
                <h2>FMX</h2>
              </div>
            </div>
          </div>
        </div>









    <div class="w3-container w3-margin-top w3-padding-24"></div>

<!-- Footer -->
<div class=" w3-container w3-padding-24 w3-blue-gray  w3-center w3-large">
<p>Powered by <a href="https://www.w3schools.com/default.asp">W3.css</a></p>
  <p>© Copyright 30/03/2017 DEBORD Guillaume</p>
</div>

</body>
<script src="../Js/script.js"></script>
</html>