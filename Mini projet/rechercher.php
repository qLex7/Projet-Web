<?php
	
		$mot = $_POST['Mot'] ;

		if($mot == "ski" || $mot == "Ski")
		{
			header("Location: ./Sports/ski.php") ;
		}
		else if($mot == "snowboard" || $mot == "Snowboard" || $mot == "snow" || $mot == "Snow")
		{
			header('Location: ./Sports/snowboard.php') ;
		}
		else if($mot == "speedriding" || $mot == "Speedriding")
		{
			header('Location: ./Sports/speedriding.php') ;
		}
		else if($mot == "bmx" || $mot == "Bmx" || $mot == "BMX")
		{
			header('Location: ./Sports/bmx.php') ;
		}
		else if($mot == "vtt" || $mot == "Vtt" || $mot == "VTT")
		{
			header('Location: ./Sports/vtt.php') ;
		}
		else if($mot == "fmx" || $mot == "Fmx" || $mot == "FMX")
		{
			header('Location: ./Sports/fmx.php') ;
		}
		else if($mot == "escalade" || $mot == "Escalade")
		{
			header("Location: ./Sports/escalade.php");
		}
		else if($mot == "skate" || $mot == "Skateboard" || $mot == "Skate" || $mot == "skateboard")
		{
			header("Location: ./Sports/skateboard.php");
		}
		else if($mot == "Plongeon" || $mot == "plongeon")
		{
			header("Location: ./Sports/plongeon.php");
		}
		else if($mot == "Surf" || $mot == "surf")
		{
			header("Location: ./Sports/surf.php");
		}
		else if($mot == "kitsurf" || $mot == "Kitsurf")
		{
			header("Location: ./Sports/kitsurf.php");
		}
		else if($mot == "wingsuit" || $mot == "Wingsuit")
		{
			header("Location: ./Sports/wingsuit.php");
		}
		else
		{
			echo '<a href="../index.php">La recherche n\'est pas valide</a>' ;
		}
?>