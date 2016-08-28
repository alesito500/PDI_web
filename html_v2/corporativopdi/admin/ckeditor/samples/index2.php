<?php

$fichero = "../../../prestamo_factura.html";

	$fp = fopen($fichero,"r"); 
		$contenido = fread ($fp, filesize ($fichero)); 
	fclose($fp);
					$contenido2=explode("<body>", $contenido);
					$contenido3=$contenido2[1];
					
					$contenido4=explode("</body>", $contenido3);
					$contenido5=$contenido4[0];
					$contenido6=htmlentities($contenido5);
?>

<!DOCTYPE html>
<!--
Copyright (c) 2003-2016, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.md or http://ckeditor.com/license
-->
<html>
<head>
	<meta charset="utf-8">
	<title>CKEditor Sample</title>
	<script src="../ckeditor.js"></script>
	<script src="js/sample.js"></script>
</head>
<body id="main">

<main>
	<div class="adjoined-top">
		<div class="grid-container"></div>
	</div>
	<div class="adjoined-bottom">
		<div class="grid-container">
			<div class="grid-width-100">
				<div id="editor">
					<?php echo $contenido;?>
				</div>
			</div>
		</div>
	</div>
</main>

<footer class="footer-a grid-container"></footer>
<script>
	initSample();
</script>
</body>
</html>
