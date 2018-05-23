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
<div class="w3-top w3-text-white" style="background-color:#708090;">
  <div class="w3-xxlarge">
    <div class="w3-center w3-padding-16" style="font-family:Arial; font-size:28px">All about YourLimits</div>
    <img src="Photos/fond.jpg" style="width:100%">
  </div>
</div>
        
      

      <div class="w3-top w3-row-padding">

        <div class="w3-center w3-right w3-text-white w3-half w3-content" style="margin-top:20%">
        <form action="connect.php" id="tonid" method="post">
          <h1>Connexion</h1>
          <input class="w3-border" style="width:200px" type="text" name="pseudo" placeholder="Pseudo" required /></input> 
          <br> <br>
          <input class="w3-border" type="password" name="password" placeholder="Mot de passe "/></input> 
          <br> <br>
          <input class="w3-button w3-blue w3-round w3-hover-green" type="submit" value="Envoyez"/>
        </form>
        </div>

        <div class="w3-center w3-left w3-text-white w3-half w3-content" style="margin-top:20%">
        <h2>Si vous n'avez aucun compte sur notre Site,<br> veuillez cliquer sur ce Bouton</h2>
        <a href="inscription.php" class="w3-button w3-blue w3-hover-aqua w3-round"><i class="fa fa-user-plus "></i> Register</a>
      </div>
    </div>
  </body>
</html>