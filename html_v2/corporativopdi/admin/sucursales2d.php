<?php require_once('../Connections/dpi2.php');?>
<?php
	
	$id_sucursal=$_GET['sucursal'];
	$id_estado=$_GET['estado'];
			
		$SQL2 = "DELETE FROM pdi.sucursal WHERE sucursal.id_sucursal = '$id_sucursal'";
		$sql= mysqli_query($dpi,$SQL2) or die(mysql_error());
		
		echo "<meta http-equiv=\"Refresh\" content=\"0;url=sucursales2b.php?estado=$id_estado \">";

?>