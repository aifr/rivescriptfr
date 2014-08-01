<?
$myarray = &$_POST ; 
$var1=$myarray["you"];
$var2=$myarray["bot"];
$date = date('l jS \of F Y h:i:s A');// on met la date et l heure dans une variable


$fp = fopen("historic.html","a"); // ouverture du fichier en écriture
fputs($fp, "<br> \n"); // on va a la ligne
fputs($fp, "<span style='font-size: x-small;'> id : $idcoupe - $date</span><br>\n");
fputs($fp, "you : $var1 <br> \n"); // on écrit le dialogue dans le fichier et on va a la ligne
fputs($fp, "bot : $var2 <br> \n");
fclose($fp);
?>

