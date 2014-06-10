
<?php


//<!-- fonctionne sous php 4.4.3 par Claret Bruno fevrier 2013 licence GNU GPL-->	

	


echo "<br><br><br><br><br><br><br><br><center><b> Nouveau cerveau chargé </b></center> ";


       

 	$fichier = fopen("../chat.html", "w+" );  //on ouvre le fichier en lecture ecriture avec le w on efface le 		contenut initiale du fichier
	fputs($fichier,stripslashes($_POST['editeurtxt'])); //on enregistre le fichier, le stripslashes evite d'avoir 		   		des / de partout
	fclose($fichier); //on ferme le fichier
	

?>







