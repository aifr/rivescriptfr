<html>
<head>
<title>modificateur chat.html</title>
 <meta content="text/html; charset=UTF-8" http-equiv="content-type">
</head>
<body>
<!-- fonctionne sous php 4.4.3 par Claret Bruno fevrier 2013 licence GNU GPL-->	
        
</b>

 <?
// pour que ca fonctionne, il faut ouvrir ce fichier a l'aide d'un lien adresse (dans un menu par exmple ) qui mets en variable get le new.rs (apres editeur.php?) exemple http://monsiteinternet.free.fr/rivescript/eg/admin/editeur.php?fichieraouvrir=../brain/new.rs ça permet d'avoir qu'un seul editeur pour ouvrir un fichier existant ou en creer un nouveau



		$fichieraouvrir= "../chat.html" ;
		$fichier = fopen("$fichieraouvrir", "r" );  // on ouvre le fichier
		$contenu=fread($fichier, filesize ("$fichieraouvrir" )); // lecture du fichier pour affichage dans la zone de texte
		fclose($fichier);

echo "<h2>Attention aux fausses manipulations ! </h2><br>"	;
echo '<span style="font-size: small;">incrire vos nouveaux fichiers cerveau.rs dans chat.html apres la commande ci dessous : <br><br>
// Load our files from the brain/ folder. Inscrire ici vos fichiers cerveaux a ouvrir, <br>
// attention a ne pas oublier la virgule finale <br>
<br>
rs.loadFile([
<br>
&nbsp;"brain/cerveaueliza.rs",<br>
&nbsp;"brain/votre_nouveau_fichier.rs",&nbsp;//exemple <br>
<br>
&nbsp;], on_load_success, on_load_error); <br>
</sapn>';
?>


</br>
</br>

<form action="modifchat.php" method="post">
<textarea name="editeurtxt" cols="100" rows="15"><? print(htmlentities($contenu)); ?></textarea>  
</br>
<? $reste = substr("$fichieraouvrir", 3); // elimine les 3 premiers caracteres de ../chat.html ?>
</br>
Fichier: <input type="text" name="nomfichier" size="15" value="<? echo $reste ?>" > 
<input type="hidden" name="chemin" size="15" value=""> 

<p><input type="submit" value="Save" /></p>
</form>
          
</br>
</br>
<br>



</body>
</html>



