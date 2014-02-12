<?php 
    $fichierouvert = fopen (suivi, "a");
        //Copie du fichier
  if(!strlen($_POST['texte'] >= 500)){      
    if ( !fwrite($fichierouvert, $_POST['texte'])) {
        echo "Impossible d'écrire dans le fichier(". $filename.")";
        exit;
    }
    else{
        fwrite($fichierouvert, "\n");
    }
        //Fermeture du fichier
    fclose ($fichierouvert);
  }
    header('Location: ad-home.php');
?>
