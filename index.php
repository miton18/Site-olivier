<?php include("entete.php"); ?>
	<body> 	<!-- fermé dans le pieds -->
		<div id="container">  <!-- fermée dans le pied -->
		<?php	include("menus.php"); ?>
	
	<link rel="stylesheet" media="screen" type="text/css" title="test" href="css/index.css" />
	
	<div id="olivier">
		<div id="time"></div>
			<script>start();</script>
		
		<h1>Les news de l'olivier</h1>
			<p>toute notre équipe vous souhaite un agréable moment.<br/>
				le restaurant peut accueillir 45 personnes en salle ainsi 35 en terrasse.
			</p>
		<h2>Horaires d'ouverture: <a class="popupa">?<span class="popups">Hors jours fériés</span></a></h2>
		<p>du lundi au samedi midi( de 12h à 14h )<br/>le vendredi et samedi soir( de 19h30 à 21h30 )
			<ul id="toggle-view">
				<li title="Cliquez pour déplier">
					<h3 style="color: #11ae1c;">Cas particuliers</h3>
					<span>+</span>
					<div class="panel">
						<p>Si vous etez un groupe de plus de 20 personnes,<br/>
							le restaurant ce fera un plaisir d'ouvrir exceptionnellement ses portes.
						</p>
					</div>
				</li>
			</ul>
		</p>

		<ul id="toggle-view">
			<li title="Cliquez pour déplier">
				<h3>Menu du midi</h3>
				<span>+</span>
				<div class="panel">
					<p>formule de 12h00 a 14h00:<br/>
						Entrée + Plat OU Plat + Dessert		à 13,95 €<br/>
						Entrée + Plat + dessert à 15,50 €<br/>
						( 3 entrées et 3 plats au choix ainsi que le dessert maison)
					</p>
				</div>
			</li>
			<li title="Cliquez pour déplier">
				<h3>Menu du soir</h3>
				<span>+</span>
				<div class="panel">
					<p>formule de 19h30 a 21h30:<br/>
						differents menus vous sont proposées à 23.90€ - 26.90€ - 29.50€
					
					</p>
				</div>
			</li>
		</ul>
		<script>	develloppe();	</script>
		<p>La majoritée de notre cuisine est préparée avec des produits frais</p>
		<ul id="galerie1">
			<li>
				<a href="image/olivier/oli1.jpg" class="swipebox" title="devant">
					<img src="image/olivier/oli1.jpg" alt="devant"/>
				</a>
			</li><!--
			--><li>
				<a href="image/olivier/oli2.jpg" class="swipebox" title="dedans">
					<img src="image/olivier/oli2.jpg" alt="dedans"/>
				</a>
			</li><!--
			--><li>
				<a href="image/olivier/oli3.jpg" class="swipebox" title="la terrasse">
					<img src="image/olivier/oli3.jpg" alt="terrasse"/>
				</a>
			</li>
			<li>
				<a href="image/olivier/oli4.jpg" class="swipebox" title="devant">
					<img src="image/olivier/oli4.jpg" alt="terrasse"/>
				</a>
			</li>
		</ul>
		<script>photos();</script>
		<noscript>
			<p>votre navigateur ne gère pas le javascript, nous vous recommandons d'en telecharger un autre par exemple 
				<a href="http://www.google.fr/intl/fr/chrome/browser/">chrome</a>
			</p>
		</noscript>
		<script>googleana();</script>
	</div>
    <?php 
		include("pied.php");
		include 'MyCounter.php';
		$counts=MyCounter(false); 
	?>
