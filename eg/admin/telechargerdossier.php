<!-- fonctionne sous php 4.4.3 par Claret Bruno fevrier 2013 licence GNU GPL-->	

Pour telecharger un fichier aiml sur votre disque dur, cliquez avec le bouton droit dessus.</br>
Et choisissez Enregistrer la cible du lien... </br>

Listes des fichiers :
<?php //compteur de fichiers 
$nb_fichier = 0;
echo '<ul>';
?>

<?php //ouverture du dossier
if($dossier = opendir('../../aiml'))
{
?>

<?php  //lecture du dossier
while(false !== ($fichier = readdir($dossier)))
{
?>

<?php  //fichier a ne pas lister
if($fichier != '.' && $fichier != '..' && $fichier != 'index.php')
{
?>

<?php  //Affichage des reslutats
$nb_fichier++; // On incrémente le compteur de 1
echo '<li><a href="../../aiml/' . $fichier . '">' . $fichier . ' </a></li>';//on creer le lien html du fichier pour l'ouvrir dans l'editeur

} // On ferme le if (qui permet de ne pas afficher index.php, etc.)
  
} // On termine la boucle
?>

<?php  // fermeture du dossier
echo '</ul><br />';
echo 'Il y a <strong>' . $nb_fichier .'</strong> fichier(s) dans le dossier';
  
closedir($dossier);
  
}
  
else
     echo 'Le dossier n\' a pas pu étre ouvert';
?>
