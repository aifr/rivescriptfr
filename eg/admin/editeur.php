<html>
<head>
<title>Program E Editeur AIML</title>
 <meta content="text/html; charset=UTF-8" http-equiv="content-type">
</head>
<body>
<!-- fonctionne sous php 4.4.3 par Claret Bruno fevrier 2013 licence GNU GPL-->	
        
</b>

 <?
// pour que ca fonctionne, il faut ouvrir ce fichier a l'aide d'un lien adresse (dans un menu par exmple ) qui mets en variable get le new.rs (apres editeur.php?) exemple http://monsiteinternet.free.fr/rivescript/eg/admin/editeur.php?fichieraouvrir=../brain/new.rs ça permet d'avoir qu'un seul editeur pour ouvrir un fichier existant ou en creer un nouveau


	if(isset($_GET['fichieraouvrir']))
	{
	$fichieraouvrir= $_GET['fichieraouvrir'] ;
	$fichier = fopen("$fichieraouvrir", "r" );  // on ouvre le fichier
	$contenu=fread($fichier, filesize ("$fichieraouvrir" )); // lecture du fichier pour affichage dans la zone de texte
	fclose($fichier);
	}
	else
	{
	echo "pas de variable GET donc </BR>";
		if(isset($_POST['nomfichier']))
		{
		$fichieraouvrir= $_POST['chemin'] . $_POST['nomfichier'] ;
		$fichier = fopen("$fichieraouvrir", "r" );  // on ouvre le fichier
		$contenu=fread($fichier, filesize ("$fichieraouvrir" )); // lecture du fichier pour affichage dans la zone de texte
		fclose($fichier);
		}
		else
		{
		echo "pas de variable Post donc </BR>";
		}
	}
?>



Fichier : <? print $fichieraouvrir;   ?> 

</br>
</br>

<form action="editeur3.php" method="post">
<textarea name="editeurtxt" cols="100" rows="15"><? print(htmlentities($contenu)); ?></textarea>  
</br>
<? $reste = substr("$fichieraouvrir", 9); // elimine les 9 premiers caracteres de ../brain/fichier.rs ?>
</br>
Fichier: <input type="text" name="nomfichier" size="15" value="<? echo $reste ?>" > 
<input type="hidden" name="chemin" size="15" value="../brain/"> 

<p><input type="submit" value="Save" /></p>
</form>
  <!-- Generateur de code rivscript version 1.0 Developpé par Claret Bruno en 2013 Licence GNU GPL -->



<script language="javascript">

function formatage() {
        newinput = newinput.replace(/[éèêë]/gi, "e");
	newinput = newinput.replace(/[àâä]/gi, "a");
	newinput = newinput.replace(/[ïî]/gi, "i");
	newinput = newinput.replace(/[üûù]/gi, "u");
	newinput = newinput.replace(/[öô]/gi, "o");
        newinput = newinput.replace(/[ç]/gi, "c");
        newinput = newinput.replace(/[']/gi, " ");
        newinput = newinput.replace(/[-]/gi, " ");
        newinput = newinput.replace(/[?]/gi, " ");
        newinput = newinput.replace(/[!]/gi, " ");
        newinput = newinput.replace(/[\s]{2,}/g," "); // Enlève les espaces doubles, triples, etc.
        newinput = newinput.trim();
        newinput = newinput.toLowerCase();
         // on remplace les accents avec repalce
        // on suprime les espaces blanc en debut de ligne et en fin de ligne avec trim()
        // on remplit la variable text avec newinput pour la suite du programe.

}

function formatage2() {
        newinput = newinput.replace(/[éèêë]/gi, "e");
	newinput = newinput.replace(/[àâä]/gi, "a");
	newinput = newinput.replace(/[ïî]/gi, "i");
	newinput = newinput.replace(/[üûù]/gi, "u");
	newinput = newinput.replace(/[öô]/gi, "o");
        newinput = newinput.replace(/[ç]/gi, "c");
        newinput = newinput.replace(/[']/gi, " ");
        newinput = newinput.replace(/[-]/gi, " ");
     // newinput = newinput.replace(/[?]/gi, " ");
     // newinput = newinput.replace(/[!]/gi, " ");
        newinput = newinput.replace(/[\s]{2,}/g," "); // Enlève les espaces doubles, triples, etc.
        newinput = newinput.trim();
        newinput = newinput.toLowerCase();
         // on remplace les accents avec repalce
        // on suprime les espaces blanc en debut de ligne et en fin de ligne avec trim()
        // on remplit la variable text avec newinput pour la suite du programe.

}

function generateursimple(form3) {

entreehumain =document. form3.input.value;
    newinput = entreehumain;
    formatage();
    entreehumain = newinput;

 sujet11 =document. form3.input01.value;
    newinput = sujet11;
    formatage();     
    sujet11 =newinput;

 phrasethat1 =document. form3.input00.value;
    newinput = phrasethat1;
    formatage2();     
    phrasethat1 =newinput;

 entreesujet1 =document. form3.inputsujet.value;
    newinput = entreesujet1;
    formatage();     
    entreesujet1 =newinput;

 sortierobot1 =document. form3.sortierobot1.value;
    newinput = sortierobot1;
    formatage2();     
    sortierobot1 =newinput;

 sortierobot21 =document. form3.sortierobot2.value;
    newinput = sortierobot21;
    formatage2();     
    sortierobot21 =newinput;



	if (sortierobot21==""){
 	sortierobot2 = sortierobot21;
        sortierobot221 = "";
        sortierobot22 = sortierobot21;
        sortierobot222 = "";
        }
 	else {
	sortierobot2 = "\r\n"+"- " + sortierobot21;
        sortierobot22 = "   ^ |" + sortierobot21;
        sortierobot221 = "{random}"+"\r\n"+ "   ^ " ;
        sortierobot222 = "{/random}";
	 };


if (phrasethat1==""){
 phrasethat = phrasethat1
 }
 else {

phrasethat1 = phrasethat1.replace(/\s\!/gi, "!");
phrasethat1 = phrasethat1.replace(/\s\?/gi, "?");
phrasethat1 = phrasethat1.replace(/[\!]/gi, "*");
phrasethat1 = phrasethat1.replace(/[\?]/gi, "*");
phrasethat1 = phrasethat1.replace(/[\*]{2,}/gi, "*"); // on remplace les doubles triple * du a plusieur point ? ou ! par une seule
phrasethat = "% " + phrasethat1+"\r\n"
 };

if (entreesujet1==""){
 entreesujet = entreesujet1}
 else {
entreesujet = " <set sujet=" + entreesujet1+ ">"
 };

if (sujet11==""){
 sujet1 = sujet11;
 reponse= 
"- "+ sortierobot1 + entreesujet
+ sortierobot2
+"\r\n";
}
 else {
sujet1 = sujet11;
reponse=
"* <get sujet> == " + sujet1 + " => "+ sortierobot221 
+ sortierobot1 + entreesujet+"\r\n"
+ sortierobot22 + sortierobot222
+"\r\n";
};


document.form3.output.value= 
"+ " + entreehumain   +"\r\n"
+ phrasethat 
+ reponse

+"\r\n"
+"\r\n"
+"      + * " + entreehumain  +"\r\n"
+"      @" + entreehumain  +"\r\n"
+"\r\n"



+"      + * " + entreehumain  + " * "+"\r\n"
+"      @" + entreehumain  +"\r\n"
+"\r\n"

+"      + " + entreehumain  + " * "+"\r\n"
+"      @" + entreehumain  +"\r\n"
+"\r\n"
;
}



function synonymeph(form4){

entreesynoph =document.form4.entreesynoph.value;
    newinput = entreesynoph;
    formatage();
    entreesynoph = newinput;

sortiesynoph =document.form4.sortiesynoph.value;
    newinput = sortiesynoph;
    formatage();
    sortiesynoph = newinput;

document.form4.output.value= 

"\r\n"
+"      + " + entreesynoph  +"\r\n"
+"      @" + sortiesynoph  +"\r\n"
+"\r\n"


+"\r\n"
+"      + * " + entreesynoph  +"\r\n"
+"      @" + entreesynoph  +"\r\n"
+"\r\n"



+"      + * " + entreesynoph  + " * "+"\r\n"
+"      @" + entreesynoph  +"\r\n"
+"\r\n"

+"      + " + entreesynoph  + " * "+"\r\n"
+"      @" + entreesynoph  +"\r\n"
+"\r\n"
;

}

function synonyme(form5){

entreesyno =document.form5.entreesyno.value;
    newinput = entreesyno;
    formatage();
    entreesyno = newinput;

sortiesyno =document.form5.sortiesyno.value;
    newinput = sortiesyno;
    formatage();
    sortiesyno = newinput;

document.form5.output.value= 

"\r\n"
+"      + " + entreesyno  +"\r\n"
+"      @" + sortiesyno  +"\r\n"
+"\r\n"


+"\r\n"
+"      + * " + entreesyno  +"\r\n"
+"      - <@> {@" + entreesyno  +"}"+"\r\n"
+"\r\n"



+"      + * " + entreesyno  + " * "+"\r\n"
+"      - <@> {@" + entreesyno  +"} <@>"+"\r\n"
+"\r\n"

+"      + " + entreesyno  + " * "+"\r\n"
+"      - {@" + entreesyno  +"} <@>"+"\r\n"
+"\r\n"
;

}


function traducteur(form6){

entreefr =document.form6.entreefr.value;
    newinput = entreefr;
    formatage();
    entreefr = newinput;

sortieatl =document.form6.sortieatl.value;
    newinput = sortieatl;
    formatage();
    sortieatl = newinput;

document.form6.output.value= 

"\r\n"
+"+ " + entreefr  +"\r\n"
+"- " + sortieatl  +"\r\n"

+"+ * " + entreefr  +"\r\n"
+"- <@> " + sortieatl  +"\r\n"

+"+ * " + entreefr  + " * "+"\r\n"
+"- <@> " + sortieatl  +" {@<star2>}"+"\r\n"

+"+ " + entreefr  + " * "+"\r\n"
+"- " + sortieatl  +" <@>"+"\r\n"
+"\r\n"
;

}



</script>







<table bgcolor="#CCCCFF" border="1" width="53%">

  <tbody>
    <tr>
      <td width="50%">
        <p align="center"><font size="2">Generateur de code rivescript avec renvois 3*simple <br> Formatage du texte
minsucule, pas d'accents pas de ?! pas de - sauf dans les réponses </font>
<font size="2">(Copier coller le code optenu dans votre fichier cerveau)</font>:
      </p><form name="form3">
<p style="background-color: #FF9999; margin-top: -2; margin-bottom: -2">depand du sujet<input name="input01" value="" type="text" size="20"> 
	</p><p style="background-color: #99CC00; margin-top: -2; margin-bottom: -2">depand de phrase deja sortie par le robot <input name="input00" value="" type="text" size="35"> 

        </p><p style="background-color: #0066FF; margin-top: -2; margin-bottom: -2">entree humain <input name="input" value="" type="text" size="35"> 
        </p><p style="background-color: #0066FF; margin-top: -2; margin-bottom: -2">&nbsp; 	
        </p><p style="background-color: #FF9999; margin-top: -2; margin-bottom: -2">mise du sujet <input name="inputsujet" value="" type="text" size="35"> 
       
        </p>
        <p style="margin-top: -2; margin-bottom: -2"><font size="2">reponse du robot simple </font>
      <input name="sortierobot1" value="" type="text" size="38"> </p>

        <p style="margin-top: -2; margin-bottom: -2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="1">réponse
        2</font>&nbsp;&nbsp;&nbsp; <input name="sortierobot2" value="" type="text" size="38"> </p>
        <p style="margin-top: -2; margin-bottom: -2">&nbsp; </p>
         <input name="bouton" value="Simple" onclick="generateursimple(form3)" type="button">
        <textarea rows="20" name="output" cols="60"></textarea> <p></p>
 </form>
      </td>
      
 

     
      <td width="50%"> Programme de renvois 4* pour faire les synonymes des phrases
        complettes :
      <form name="form4">entree <input name="entreesynoph" value="" type="text"> <br>
synonyme de <input name="sortiesynoph" value="" type="text"> <br>
        <br>
        <input name="bouton" value="Afficher" onclick="synonymeph(form4)" type="button"><br>

        <textarea rows="20" name="output" cols="60"></textarea> </form>
        
        
      </td>
    </tr>



    <tr>
      <td width="50%">Traducteur   

<form name="form6">entree francais<input name="entreefr" value="" type="text"> <br>

atlante <input name="sortieatl" value="" type="text"> <br>
        <br>
        <input name="bouton" value="Afficher" onclick="traducteur(form6)" type="button"><br>
        <textarea rows="20" name="output" cols="60"></textarea> </form>

</td>


      <td width="50%">Programme de renvois 4* avec renvois des étoiles
pour les mots seuls
comme les sms, les fautes, les synonymes etc.

      <form name="form5">entree <input name="entreesyno" value="" type="text"> <br>

synonyme de <input name="sortiesyno" value="" type="text"> <br>
        <br>
        <input name="bouton" value="Afficher" onclick="synonyme(form5)" type="button"><br>
        <textarea rows="20" name="output" cols="60"></textarea> </form>
      </td>
    </tr>
  </tbody>

</table>

<br>

<br>



</br>
</br>
<a href="listedossier.php">Liste des dossiers
<br>



</body>
</html>



