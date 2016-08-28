        <?php require_once('Connections/dpi.php');?>
		<?php 
    			$nombre=$_POST["nombre-cotizador"];
    			$mail=$_POST["mail-cotizador"];
    			$tel=$_POST["tel-cotizador"];
    			$auto=$_POST["auto-cotizador"];
    			
				$listasucursales=$_POST["listasucursales"];
    			$mensaje_forma=$_POST["textareamensaje"];
				
				
    			$mensaje= "Nombre: ".$nombre." \r\n Telefono: ".$tel." \r\nSucursal: ".$listasucursales." \r\ncorreo de contacto ".$mail." \r\n ".$mensaje_forma." \r\n";
    			$titulo="Cotizacion de la pagina de internet";

    			$contacto="borregoebc@gmail.com";
    			$cabeceras = "From: Sitio de Autodinero" . "\r\n" .
    		    "Reply-To: $mail" . "\r\n";
				
				$palabra="$mail, $nombre, $tel, $auto, $listasucursales, $mensaje_forma\r\n";
    			
				if(mail($contacto, $titulo, $mensaje, $cabeceras)){
    					//echo "Se envio el correo. Gracias \n";

    			}else{
    				//echo "El correo no se envió, puede intentarlo mediante esta liga <a href='mailto:contacto@autodinero.com.mx'>contacto</a>";

    			}
				
				
				$SQL2 = "INSERT INTO contacto (nombre_contacto,mail_contacto,tel_contacto,auto_contacto,listasucursales_contacto,mensajeforma_contacto) values('$nombre','$mail','$tel','$auto','$listasucursales','$mensaje_forma');";
				$sql= mysqli_query($dpi,$SQL2) or die(mysql_error());
				
				
	echo $HTTP_REFERER=$_SERVER["HTTP_REFERER"];
	echo "<meta http-equiv=\"Refresh\" content=\"3;url=$HTTP_REFERER \">";
	
    		?>    
            
<?php require_once('Connections/dpi.php');?>
<?php 
	mysqli_select_db($dpi, $database_dpi);
	$query_meta = "SELECT * 
	FROM tags";
	$meta = mysqli_query($dpi,$query_meta) or die(mysql_error());
	$row_meta = mysqli_fetch_assoc($meta);
	$totalRows_meta = mysqli_num_rows($meta);	
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="<?php echo $row_meta['palabra'];?>">
  <meta name="description" content="<?php echo $row_meta['descripcion'];?>">
  <meta name="author" content="<?php echo $row_meta['autor'];?>">

  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/MenuFlechas.css">
  <link rel="stylesheet" href="css/slider.css">
  <link rel="icon" href="images/Llanta-Autodinero.ico">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/slider.js"></script>

  <title>AutoDinero | Dinero inmediato sin dejar tu auto</title>
</head>
<body>
  <!-- Men&uacute; de navegaci&oacute;n -->
  <div class="container">

    <div class="visible-xs">
      <br>
      <div class="espacio_blanco" ></div>
    </div>
      <div class="row" id="banner-superior" >
        <div class="col-md-offset-1 col-xs-8 col-sm-3">
          <a href="/"><img src="images/AutoDinero-gde.png" class="img-responsive" alt="Autodinero" id="logoAutoDinero"></a>
        </div>
        <div class="col-xs-12 col-sm-8 col-sm-offset-1 col-md-7 col-md-offset-1">
          <br>
          <div class="row">
            <div class="col-xs-6">
              <img src="images/telefono.png" class="img-responsive" alt="Llamar" title="Llamar">
              <div class="visible-xs visible-sm" id="telefono_azul_sm">
                (55) 6845-0000
              </div>
              <div class="visible-md" id="telefono_azul_md">
                (55) 6845-0000
              </div>
              <div class="visible-lg" id="telefono_azul_lg">
                (55) 6845-0000
              </div>
            </div>
            <div class="col-xs-6">
              <a href="https://www.facebook.com/autodinero/" target="_blank">
                <img src="images/facebook.png" alt="Facebook" class="img-responsive" id="ico-fb" title="Facebook">
              </a>
              <a href="mailto:contacto@autodinero.com.mx?subject=Cotizaci&oacute;n">
                <img src="images/correo.png" alt="Correo" class="img-responsive" id="ico-email" title="Correo">
              </a>
              <a href="javascript:void($zopim.livechat.window.show())"><img src="images/chat.png" alt="Chat" class="img-responsive" id="ico-chat" title="Chat"></a>   
            </div>
          </div>
        </div>
      </div>

      <div class="row hidden-xs" id="menu-navegacion">
        <div class="col-sm-12">
          <ul class="Menu-Flecha">
            <li class="active">
              <a href="#Bienvenido">Inicio</a>
            </li>
            <li ><a href="requisitos.php" >Requisitos</a></li>
            <li ><a href="beneficios.php" >Beneficios</a></li>
            <li ><a href="cotiza.php" >Cotiza</a></li>           
            <li ><a href="faq.php" >Preguntas frecuentes</a></li>
          </ul>

        </div>
      </div>
    </div>

  <!-- Men&uacute; de navegaci&oacute;n -->
  <br><br><br>


<span style="display: none;">Transmit 4 is out! Mac OS X file transfer just got really great. Read on.</span>
          <!-- The Page -->
          <div class="page" style="-webkit-border-radius: 10px; -webkit-box-shadow: rgba(0,0,0,.4) 0 3px 10px; clear: both; margin: 0px; background: white url('') no-repeat 100% 16px; border: 0px; font: 14px/19px Helvetica, sans-serif; padding: 0px 40px 25px;">
               <div id="airmail-line" style="overflow: hidden; margin: 0 -40px; text-indent: -20px; white-space: nowrap; min-height: 15px; padding: 0; font: italic bold 260px/15px Helvetica, sans-serif; height: 15px; max-height: 15px; -webkit-border-top-right-radius: 10px; -moz-border-radius: 10px; -webkit-border-top-left-radius: 10px; letter-spacing: -44px;">
                    <b style="color: #f5290a;">/</b>
                    <i style="color: #006699;">/</i>
                    <b style="color: #f5290a;">/</b>
                    <i style="color: #006699;">/</i>
                    <b style="color: #f5290a;">/</b>
                    <i style="color: #006699;">/</i>
                    <b style="color: #f5290a;">/</b>
                    <i style="color: #006699;">/</i>
                    <b style="color: #f5290a;">/</b>
                    <i style="color: #006699;">/</i>
                    <b style="color: #f5290a;">/</b>
                    <i style="color: #006699;">/</i>
                    <b style="color: #f5290a;">/</b>
                    <i style="color: #006699;">/</i>
                    <b style="color: #f5290a;">/</b>
                    <i style="color: #006699;">/</i>
                    <b style="color: #f5290a;">/</b>
                    <i style="color: #006699;">/</i>
                    <b style="color: #f5290a;">/</b>
                    <i style="color: #006699;">/</i>
                    <b style="color: #f5290a;">/</b>
                    <i style="color: #006699;">/</i>
                    <b style="color: #f5290a;">/</b>
                    <i style="color: #006699;">/</i>
                    <b style="color: #f5290a;">/</b>
                    <i style="color: #006699;">/</i>
                    <b style="color: #f5290a;">/</b>
                    <i style="color: #006699;">/</i>
                    <b style="color: #f5290a;">/</b>
                    <i style="color: #006699;">/</i>
                    <b style="color: #f5290a;">/</b>
                    <i style="color: #006699;">/</i>
               </div>
               <!-- Headline / Subhead -->
               <center><h1 class="headline" style="font-weight: normal; padding-top: 2px; min-height: 64px; font: 30px/30px HelveticaNeue-Light, 'Helvetica Neue Light', sans-serif;">Correo enviado</h1></center>
          </div> <!-- End The Page -->
</div>
          
          <!-- End -->





<br><br><br>
  <!-- Pie de p&aacute;gina azul -->
  <div class="container-fluid">
    <div class="row fondo_azul">
      <div class="col-xs-3 cuadro_pie_p" id="cuadro_inferior_1">
        <div class="fondo_blanco">
          <h3>Obtener préstamo</h3>
          <ul>
            <li><a href="cotiza.php">Cotiza</a></li>
            <li><a href="requisitos.php">Requisitos</a></li>
            <li><a href="beneficios.php">Beneficios</a></li>
            <li><a href="faq.php">Preguntas frecuentes</a></li>
          </ul>
        </div>
      </div>
      <div class="col-xs-3 cuadro_pie_p" id="cuadro_inferior_2">
        <div class="fondo_blanco">
          <h3>
            Sobre la empresa
          </h3>
          <ul>
            <li><a href="empresa.php">AutoDinero</a></li>
            <li><a href="prestadinero.php">PrestaDinero</a></li>
            <li><a href="sucursales.php">Sucursales</a></li>
            <li><a href="Aviso_privacidad.php">Aviso de privacidad</a></li>
          </ul>
        </div>
      </div>
      <div class="col-xs-3 cuadro_pie_p" id="cuadro_inferior_3">
        <div class="fondo_blanco">
          <h3>
            Productos
          </h3>
          <ul>
            <li><a href="">Préstamos sobre autos</a></li>
            <li><a href="prestamo_factura.php">Préstamos sobre factura</a></li>
            <li><a href="http://www.prestadinero.com/" target="_blank">Empeños</a></li>
          </ul>
        </div>
      </div>
      <div class="col-xs-3 cuadro_pie_p" id="cuadro_inferior_4">
        <div class="fondo_blanco">
          <h3>
            Contacto
          </h3>
          <ul>
            <li>(55) 6845-0000</li>
            <li><a href="javascript:void($zopim.livechat.window.show())">Chatea con nosotros</a></li>
            <li><a href="mailto:contacto@autodinero.com.mx">Envía un correo</a></li>
            <li><a href="cotiza.php">Solicita que te llamen</a></li>
          </ul>
          <a href="https://www.facebook.com/autodinero/" target="_blank"><img src="images/facebook.png" alt="Síguenos en facebook" class="img-responsive"></a>
        </div>
      </div>
    </div>
    <div class="row">
      <footer>
        Derechos reservados 2016
      </footer>
    </div>
  </div>
  <!-- Pie de p&aacute;gina azul -->
</body>
</html>
