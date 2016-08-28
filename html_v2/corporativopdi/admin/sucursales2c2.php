<?php require_once('../Connections/dpi2.php');?>
<?php

	$nombre=$_POST['nombre'];
	$descripcion=$_POST['descripcion'];
	$telefono=$_POST['telefono'];
	$horario=$_POST['horario'];
	
	$id_estado=$_POST['estado'];
			
		$SQL2 = "INSERT INTO sucursal (nmbre_sucursal,descripcion_sucursal,telefono_sucursal,horario_sucursal,id_estado_sucursal) values('$nombre','$descripcion','$telefono','$horario','$id_estado');";
		$sql= mysqli_query($dpi,$SQL2) or die(mysql_error());
		
		
		echo "Se agrego la sucursal";

?>