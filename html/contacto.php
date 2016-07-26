<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Gracias por tu confianza</title>
	</head>
	<body>
		<?php
			$nombre=$_POST['nombre-cotizador'];
			$mail=$_POST['mail-cotizador'];
			$tel=$_POST['tel-cotizador'];
			$auto=$_POST['auto-cotizador'];
			$listasucursales=$_POST['listasucursales'];
			$mensaje_forma=$_POST['textareamensaje'];

			$mensaje= "Nombre: $nombre \n Telefono: $tel \nSucursal: $listasucursales \ncorreo de contacto $mail \n $mensaje_forma \n";
			$titulo="Cotizacion de la pagina de internet";

			$contacto="alesito500@gmail.com";
			$cabeceras = "From: Sitio de Autodinero" . "\r\n" .
		    "Reply-To: $mail" . "\r\n";
			if(mail($contacto, $titulo, $mensaje, $cabeceras)){
					echo "Se envio el correo. Gracias \n";
					echo "Variables: \n Contacto = $contacto \n Titulo: $titulo \n Mensaje: $mensaje";
			}else{
				echo "El correo no se envió";
				echo "Variables: \n Contacto = $contacto \n Titulo: $titulo \n Mensaje: $mensaje";
			}

		?>

	</body>
</html>
