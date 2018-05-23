<?php
	
	$username = $_POST['pseudo'];
	$mail = $_POST['email'];

	if(!file_exists("accounts/" . $username))
	{
		mkdir("accounts/" . $username);
	}

	$file = fopen("accounts/" . $username. "/username.txt", "x") or die ("Le compte existe deja");

	if(!$file)
	{
		echo 'Ce compte existe deja';
		echo '<a href="Accueil.php">Retour à l\'Accueil</a>';
	}
	else
	{
		if(isset($_POST['pass']))
		{
			fwrite($file, $_POST['pass']);
		}
		else
		{
			echo '<a href="inscription.php>Erreur ! </a>';
		}
	}

	fclose($file);
	header("Location: Accueil.php");
?>