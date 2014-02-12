
<?php
			include("entete.php");
			echo('<body> <div id="container">');
			include("menus.php");
			echo('<div id="olivier">');
				if (isset($_POST['texte'])){
					file_put_contents( 'matrice', $_POST['texte'] );
					echo('modification prie en compte');
				}
			echo('</div>');
			include("pied.php");
?>