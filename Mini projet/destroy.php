<?php        
session_start();  
//session_destroy permet de détruire la session actif
session_destroy();  
header('Location: Accueil.php') ;

?>