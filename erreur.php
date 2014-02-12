<?php 
	include("entete.php");

	echo('<body><div id="container">');
	include("menus.php"); 
	echo('<div id="olivier">');
	echo('<h1>une erreur c\'est produite:</h1><p>');
	$iderreur	= isset($_GET['id']);
	switch ($iderreur) {
		case 404:
			echo "Cette page n'a malheureusement pas été trouvée desolé...";
			break;
		case 403:
			echo "Vous essayez d'acceder a quelque chose sans y avoir été autorisé";
			break;
		case 500:
			echo "Oups... Il semblerais que le serveur a un petit soucis, on est sur le coup ^^";
			break;
		default:
			echo("Pourquoi chercher l'erreur là où il n'y en a pas ???");
	}
	echo('<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>   </p></div>'); 
	include("pied.php"); ?>
