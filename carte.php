<?php
	include("entete.php");
	echo('<body> <div id="container">');  
	include("menus.php");
?>
	<div id="olivier">
		<link rel="stylesheet" type="text/css"  href="css/carte.css"/>

		<span id="sl_play" class="sl_command">&nbsp;</span>
		<span id="sl_pause" class="sl_command">&nbsp;</span>
		<span id="sl_i1" class="sl_command sl_i">&nbsp;</span>
		<span id="sl_i2" class="sl_command sl_i">&nbsp;</span>
		<span id="sl_i3" class="sl_command sl_i">&nbsp;</span>
		<span id="sl_i4" class="sl_command sl_i">&nbsp;</span>

		<h1>Plats à emporter, cocktails...</h1>
			<p>Vous pouvez commander votre plat du jour a partir de 9h00.<br/>
				Pour les plateaux repas a emporter, il est conseillé d'appeller la veille.<br/>
				Des plateaux repas seront a votre disposition pour les emporter.

			</p>
			<a id="livre" target="_blank" href="carte/index.html">Regarder la carte</a>
	</div>
	<?php include("pied.php"); ?>
