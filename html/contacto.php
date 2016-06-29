<?php 
	$nombre=$_POST['nombre'];
	$mail=$_POST['mail'];
	$tel=$_POST['tel'];
	$listasucursales=$_POST['listasucursales'];
	
	$mensaje="Nombre: $nombre<br>Telefono: $tel<br>Sucursal: $listasucursales";
	$titulo="Cotizacion de la pagina de internet";
	
	$contacto="contacto@autodinero.com.mx";
	$cabeceras = "From: $mail" . "\r\n" .
    "Reply-To: $mail" . "\r\n";
	
	mail($contacto, $titulo, $mensaje, $cabeceras);

?>