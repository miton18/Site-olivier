<?php 
	include("entete.php");
	echo('<div id="container">'); 
	include("menus.php");
	echo('<link rel="stylesheet" type="text/css" href="css/admin.css"/>');

	if ( isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] == "le bourg" OR $_COOKIE['identifier'] == "biensur"){
		
		$contenu = file_get_contents( 'matrice' );
		
		echo("<link rel=\"stylesheet\" type=\"text/css\" href=\"css/ad-edition.css\"/>
					<a href=\"upload/index.html\" target=\"_blank\" >inserer une image</a>
					<pre>code pour une image: &ltimg src=\"upload/images/nom_fichier\" height=\"50\" width=\"50\" /&gt		</pre>
					<form action=\"ad-ecriture-page.php\" method=\"post\">
						<textarea rows=\"30\" cols=\"100\" name=\"texte\">$contenu</textarea><br/>
						<input type=\"HIDDEN\" name=\"mot_de_passe\" value=\"le bourg\">
						<input type=\"submit\" value=\"ecrire\" />
						</form>
			");
	}
	else{ 
		header('Location: ad-login.php'); 
	}
	include("pied.php"); 
?>