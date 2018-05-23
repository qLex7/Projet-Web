<?php
	
	$fichier = $_POST['recu'] ;
	$fichierbis = 'bis' . $fichier ;
	$url = $_POST['envoi'] ;

	echo $fichier, "\n";
	echo $fichierbis, "\n";

	rename("add/".$fichier, "../import".$url.'/'.$fichierbis);
	header("Location: admin.php") ;

?>