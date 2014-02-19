<?php include("entete.php");?>
    
    <body>
    <div id="container">  
        <?php include("menus.php"); ?>
        <div id="olivier">
        <link rel="stylesheet" type="text/css"  href="css/admin.css"/>  <!--  gestion du formulaire  -->
        <link rel="stylesheet" type="text/css"  href="css/carte.css"/>
            <h1>appeler l'Olivier:</h1>
				<p>au numero: 0474295635
				</p>
            <h1>envoyer un mail a l'Olivier</h1>
				<p>
					<a class="popupa" href="mailto:olivier@rcdinfo.fr?subject=contact%20olivier%200147">
						<span class="popups">par exemple: thunderbird, windows live mail, outlook</span>
						<meta id="_email4" itemprop="email" content="olivier@rcdinfo.fr?subject=contact%20olivier%200147">
						envoyer un mail
					</a>
                    avec votre client de messagerie
				</p>  
				<p>
					l'adresse mail: olivier.rcdinfo.fr
				</p>
			<h1>utiliser le formulaire de contact</h1>
			
				    <form method="post" name="contact"  onsubmit="" action="mailto:olivier@rcdinfo.fr">
						<fieldset>
							<legend>Formulaire</legend>
								<label for="Nom">Nom * :</label>
								<input type="text" id="nom" required="required" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$" />
								<br/>
								<label for="Prenom">Prénom * :</label>
								<input type="text" required="required" name="Prenom" placeholder="Durand" id="prenom" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$" />
								<br/>
								<label for="adresse">Adresse mail * :</label>
								<input type="email" required="required" name="adresse" placeholder="franck.durand@mail.com" id="mail"/>
								<br/>
								<label for="message">Votre message :</label>
								<textarea  name="message" rows="10" cols="50" maxlength="800" placeholder="Max. 800 caractères" id="message"></textarea>
								<br/>
								<INPUT TYPE="radio" NAME="choix" VALUE="idée" onclick="desactiver()"/>Avis et retours
								<INPUT TYPE="radio" NAME="choix" VALUE="commande" onclick="desactiver()"/>Commande
								<INPUT TYPE="radio" NAME="choix" VALUE="autre" onclick="desactiver()"/>Autre...<BR> 
								
								
								<button type="reset">Annuler</button>
								<button type="submit">Envoyer</button>
								<p> Les champs marqués * sont obligatoires.</p>
						</fieldset>

					</form>
		    <h1>comment accéder au réstaurant:</h1>
                <p>
                   Zone de Jonchain Sud<br/>
                   rue Marcel Cachin<br/>
                   38150 Salaise sur Sanne<br/>
                </p>
				
                <iframe width="425" height="350" frameborder="0" scrolling="no" align="center" 
                    src="https://maps.google.fr/maps?q=45.339251,4.804984&amp;num=1&amp;t=h&amp;hl=fr&amp;ie=UTF8&amp;z=14&amp;output=embed">
                </iframe>
                <br />
                <p>
                    <a href="https://maps.google.fr/maps?q=45.339251,4.804984&amp;num=1&amp;t=h&amp;hl=fr&amp;ie=UTF8&amp;z=14&amp;source=embed" >
                    agrandir le plan</a>
                </p>
            
    </div>
        <?php include("pied.php"); ?>