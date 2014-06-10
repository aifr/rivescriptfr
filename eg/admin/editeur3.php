<html>
<head/>

<title>Program E Editeur AIML</title>
 <meta content="text/html; charset=UTF-8" http-equiv="content-type">
</head>
<body>
<!-- fonctionne sous php 4.4.3 par Claret Bruno fevrier 2013 licence GNU GPL-->	
fichier sauvegardé

</br>
</body>
<?

	if(isset($_POST['editeurtxt'],$_POST['nomfichier'],$_POST['chemin'])) //On regarde si les variables $_POST['editeurtxt'] et nom de 		fichier existent
     	{
        

 	$fichier = fopen($_POST['chemin'] . $_POST['nomfichier'], "w+" );  //on ouvre le fichier en lecture ecriture avec le w on efface le 		contenut initiale du fichier
	fputs($fichier,stripslashes($_POST['editeurtxt'])); //on enregistre le fichier, le stripslashes evite d'avoir 		   		des / de partout
	fclose($fichier); //on ferme le fichier
	}
?> 



<? include "editeur.php"; ?>
