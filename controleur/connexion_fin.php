<?php
	session_start();
	
	$_SESSION['Mail']=$_POST['mail'];

	if (isset($_SESSION['Mail'])) 
	{		
		header("location:../index.php?section=accueil");
	}

	else
	{
		header("location:../index.php?section=connexion");
	}
?>