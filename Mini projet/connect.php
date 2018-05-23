<?php session_start();

	$username = $_POST['pseudo'];
	$password = $_POST['password'];

	$admin ="admin";
	$mdp_admin ="admin";


	$returnedCode = -1;

	if ($username == $admin && $mdp_admin == $password) 
	{
		header('Location:./admin/admin.php');
	}

	else
{

	if(!file_exists("accounts/" . $username))
	{
		$returnedCode = 30;
	}
	else
	{
		$fname = "accounts/" . $username . "/username.txt";
		$file = fopen($fname, "r");

		if(!file)
		{
			$returnedCode = 31;
		}
		else
		{
			$content = fread($file,filesize($fname));

			if($password == $content)
			{
				$returnedCode = 20;
				$_SESSION['pseudo'] = $username;
				$_SESSION['connected'] = "1";
			}
			else
			{
				$returnedCode = 21;
			}

			fclose($file);
		}

	}
}
	switch($returnedCode)
	{
		case 20 :
			header("Location: index.php");
			break;
		case 21 :
			echo'Il semblerait que votre mot de passe ne soit pas le bon';
			break;
		case 30 :
			echo'Ce n\'est pas le bon nom de compte <br> <a href="Accueil.php"> Voulez-vous revenir ?</a>';
			break;
		case 31 :
			echo'Pas de compte, inscrivez-vous :D';
			break;
		default :
			case 30 :
			echo'<p id="welcome">Le code retourné par notre serveur n\'est pas valable>.<br>Peut-être va t-il revenir</a> à la normale ??</p>'; 
	}
?>