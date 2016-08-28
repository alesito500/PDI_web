<?php require_once('../Connections/dpi2.php');?>
<?php
$pila=array();

	$palabra=$_POST['palabra'];
	$descripcion=$_POST['descripcion'];
	$autor=$_POST['autor'];
		
	$SQL2 = "UPDATE tags SET palabra = '$palabra', descripcion = '$descripcion', autor = '$autor';";
	$sql= mysqli_query($dpi,$SQL2) or die(mysql_error());
	
		
			echo 'Palabras clave modificado<br>'; 
			echo 'Descripción modificado<br>'; 
			echo 'Autor modificado'; 
		

?>