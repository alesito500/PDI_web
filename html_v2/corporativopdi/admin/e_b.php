<?php require_once('../Connections/dpi2.php');?>
<?php
  //$key=$_POST['password'];
  $password=$_POST['password'];
  //$password= hash('sha512', $key);
  
  	$SQL2 = "UPDATE usuario SET password = '$password';";
	$sql= mysqli_query($dpi,$SQL2) or die(mysql_error());
	
		
			echo 'Clave modificada<br>'; 
		

?>