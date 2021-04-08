<?php
$fp = fopen ("compteur.txt", "r+");
$nb_visites = fgets ($fp, 11);
$nb_visites = $nb_visites + 1; // on augmente le nombre de visites de 1.
fseek ($fp, 0); // on se positionne au tout début de notre fichier.
fputs ($fp, $nb_visites); // on écrit dans le fichier la nouvelle valeur correspondant au nombre de visites.
fclose ($fp);
echo 'Ce site compte '.$nb_visites.' visiteurs !';
?>