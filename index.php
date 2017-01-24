<?php
	session_start();
	
	if (!(isset ($_SESSION['Mail'])))
	{
		include_once('controleur/connexion.php');
	}

	$section=null;

if (isset ($_SESSION['Mail']))
	{
		if ($_GET['section'] == 'accueil')
		{  
			include_once('controleur/accueil.php');
		}

		if ($_GET['section'] == 'messervices')
		{
			include_once('controleur/messervices.php');
		}

		if ($_GET['section'] == 'service')
		{  
			include_once('controleur/service.php');
		}

		if ($_GET['section'] == 'messalaries')
		{  
			include_once('controleur/messalaries.php');
		}

		if ($_GET['section'] == 'lesentreprises')
		{  
			include_once('controleur/lesentreprises.php');
		}

		if ($_GET['section'] == 'commande')
		{  
			include_once('controleur/commande.php');
		}

		if ($_GET['section'] == 'cmdservice')
		{  
			include_once('controleur/cmdservice.php');
		}

		if ($_GET['section'] == 'bouquet')
		{  
			include_once('controleur/bouquet.php');
		}

		if ($_GET['section'] == 'connexion')
		{  
			include_once('controleur/connexion.php');
		}

		if ($_GET['section'] == 'deconnexion')
		{  
			include_once('controleur/deconnexion.php');
		}
	}
?>