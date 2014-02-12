<?php include("entete.php");
			if( isset($_COOKIE["identifier"]) and $_COOKIE["identifier"] == "biensur"){
				header('Location: ad-home.php');
			}

			if (isset($_POST['mot_de_passe']) && $_POST['mot_de_passe'] == "le bourg"){
			
				setcookie("identifier", "biensur", (time() + 3600*24), "/");
				header('Location: ad-home.php');
			}
			echo('<link rel="stylesheet" type="text/css" href="css/admin.css"/>');
?>
    
<body>
	<div id="container">
		<?php
			include("menus.php");
		?>
		<form action="ad-login.php" method="post">
			<fieldset>
				<legend>le mot de passe</legend>
				<input type="password" name="mot_de_passe" placeholder="motdepasse"/>
				<input type="submit" value="Valider" />
			</fieldset>
		</form>
<?php
	include('pied.php');
?>