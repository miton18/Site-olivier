<?php include("entete.php");?>
    
    <body><div id="container">
        <?php 
			include("menus.php"); 
			echo('
				<link rel="stylesheet" type="text/css" href="css/admin.css"/>
			'); 

            if ( isset($_COOKIE['identifier']) && $_COOKIE['identifier'] == "biensur"){
				
				echo ('
                    <a href="image/flashcode.png"  target="_blank" > <img id="flash" src="image/flashcode.png" title="
                        voici un flashcode, les 
                        personnes qui photographie
                        cette image avec la bonne application 
                        tomberons directement sur le site"/>
                    </a>
                
                    <p>bonjour ^^ vous n\'avez qu\'a remplir avec ce qu\'il faut modifier et je m\'en occupe</p>
                    <p>(une ligne par modification à faire)</p>
                    <form id="form1" name="form1" method="post" action=\'ad-ecriture.php\' enctype=`\'multipart/form-data\' onsubmit="javascript:confirmation()">  
                        <fieldset>
                            <legend>demande de modification:</legend>
                            <textarea name="texte" placeholder="on aimerais que..." cols="100" rows="8"></textarea>
							<input type="hidden" name="mot_de_passe" value="le bourg">
                            <legend>
                                <input type="submit" name="Submit" value="poster" />
                            </legend>
                        </fieldset>
                    </form>
					
					<a href="ad-edition.php">edition de la page de news<br/></a>
                ');
                include 'MyCounter.php';
                echo "statistiques<br/>";
                $counts=MyCounter(false);
                echo $counts[0]." visites<br> et ";
                echo $counts[1]." coups";
                echo('
                    <a href="http://www.pagerank.fr/" title="Mon PageRank">
                        <img src="http://www.pagerank.fr/pagerank-actuel.gif?uri=rcdinfo.toile-libre.org" 
                        style="border: none;" alt="PageRank Actuel"/></a>
               
                ');
                
                
                if (file_exists('suivi')){                                      // a faire
                    $fichierb = file('suivi'); // Nom du fichier à afficher
     
                    $total = count($fichierb); // Nombre total des lignes du fichier
                    echo('<table> <caption>tâches:</caption>');
                    for($i = 0; $i < $total; $i++) 
                    { // Départ de la boucle

                    echo ('<tr><td>-');                    // On affiche ligne par ligne le contenu du fichier
                    echo($fichierb[$i]);
                    echo('</td></tr>');
                    } // Fin de la boucle
                    echo('</table>');
                }
                 if (file_exists('traite')){                                     //fait
                    $fichierc = file('traite'); // Nom du fichier à afficher
     
                    $total = count($fichierc); // Nombre total des lignes du fichier
                    echo('<table> <caption>évolutions apportées:</caption>');
                    for($i = 0; $i < $total; $i++) 
                    { // Départ de la boucle

                    echo ('<tr><td class="fait" >-');                    // On affiche ligne par ligne le contenu du fichier
                    echo($fichierc[$i]);
                    echo('</td></tr>');
                    } // Fin de la boucle
                    echo('</table>');
				}   
            }
            else{
				header('Location: ad-login.php'); 
			}
			include("pied.php"); 
		?>
