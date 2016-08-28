<?php require_once('../Connections/dpi2.php');?>
<?php

	$estado=$_POST['estado'];
	$SQL2 = "INSERT INTO estado (nmbre_estado) values('$estado');";
	$sql= mysqli_query($dpi,$SQL2) or die(mysql_error());
	
	echo "Agregado el estado $estado";
?>