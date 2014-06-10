<?php
header('Content-type: text/html; charset=utf-8');

//<!-- fonctionne sous php 4.4.3 par Claret Bruno fevrier 2013 licence GNU GPL-->	

	
$ecrire = fopen('../historic.html',"w");
ftruncate($ecrire,0);

echo "<br><br><br><br><br><br><br><br><center><b> Historique (chat log) effacé </b></center> ";



?>
