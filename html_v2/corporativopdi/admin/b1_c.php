<?php

$fichero = $_POST["fichero"];
$texto = $_POST["editor1"]; 
 
	
if($texto != '') { 
	if($fp = fopen($fichero, "w+")) { fwrite($fp,stripslashes($texto)); 
		echo 'Archivo modificado<br><br>'; 
	} 
	fclose($fp); 
}
?>