<?php 
	$nombre=$_POST['nombre'];
	$mail=$_POST['mail'];
	$tel=$_POST['tel'];
	$listasucursales=$_POST['listasucursales'];
	
	$mensaje="Nombre: $nombre<br>Telefono: $tel<br>Sucursal: $listasucursales correo de contacto $mail";
	$titulo="Cotizacion de la pagina de internet";
	
	$contacto="borregoebc@gmail.com";
	$cabeceras = "From: pagina@autodinero.com.mx" . "\r\n" .
    "Reply-To: $mail" . "\r\n";
	
	mail($contacto, $titulo, $mensaje, $cabeceras);
			
	echo "Se envio el correo. Gracias";

?>