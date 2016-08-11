<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="AutoDinero: La soluci&oacute;n m&aacute;s f&aacute;cil y r&aacute;pida para obtener pr&eacute;stamos sobre autos sin dejar de manejar.">
  <meta name="keywords" content="AutoDinero,autos,pr&eacute;stamo,dinero,auto,empe&ntilde;os,empe&ntilde;o">

  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/MenuFlechas.css">
  <link rel="icon" href="images/Llanta-Autodinero.ico">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <title>¿Cuánto me prestan?</title>
</head>
<body>

  <div class="container">

    <!-- Banner superior -->
    <div class="row" id="banner-superior" >
      <div class="col-xs-8 col-sm-3 col-md-3 col-md-offset-1">
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
            <img src="images/chat.png" alt="Chat" class="img-responsive" id="ico-chat" title="Chat">
          </div>
        </div>
      </div>
    </div>
    <!-- Men&uacute; de navegaci&oacute;n -->
    <div class="row" id="menu-navegacion">
      <div class="col-sm-12">
        <ul class="Menu-Flecha">
          <li><a href="index.html">Inicio</a></li>
          <li ><a href="general.html" >Requisitos</a></li>
          <li ><a href="queobtengo.html" >Beneficios</a></li>
          <li class="active" ><a href="#Marco_informacion" >Cotiza</a></li>
          <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Sucursales<span class="caret"></span></a>
            <ul class="dropdown-menu Menu-dropdown-Flecha">
              <li><a href="suc_cdmx.html">Ciudad de México</a></li>
              <li><a href="suc_edomex.html">Estado de México</a></li>
              <li><a href="suc_gto.html">Guanajuato</a></li>
              <li><a href="suc_hgo.html">Hidalgo</a></li>
              <li><a href="suc_mor.html">Morelos</a></li>
              <li><a href="suc_pbla.html">Puebla</a></li>
              <li><a href="suc_qtro.html">Querétaro</a></li>
            </ul>
          </li>
          <li ><a href="faq.html" >Preguntas frecuentes</a></li>
        </ul>
      </div>
    </div>

    <!-- Men&uacute; de navegaci&oacute;n -->
    <!-- Banner principal -->
  </div>
  <div class="renglon_imagen">
      <img src="images/COTIZA.jpg" alt="¿Cuánto me prestan?" class="img-responsive">
    </div>
  <br>
  <div class="container" id="Marco_informacion">
    <div class="row">
      <div class="col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8">
        <blockquote>
        <?php
    			$nombre=$_POST["nombre-cotizador"];
    			$mail=$_POST["mail-cotizador"];
    			$tel=$_POST["tel-cotizador"];
    			$auto=$_POST["auto-cotizador"];
    			$listasucursales=$_POST["listasucursales"];
    			$mensaje_forma=$_POST["textareamensaje"];

    			$mensaje= "Nombre: ".$nombre." \r\n Telefono: ".$tel." \r\nSucursal: ".$listasucursales." \r\ncorreo de contacto ".$mail." \r\n ".$mensaje_forma." \r\n";
    			$titulo="Cotizacion de la pagina de internet";

    			$contacto="contacto@autodinero.com.mx";
    			$cabeceras = "From: Sitio de Autodinero" . "\r\n" .
    		    "Reply-To: $mail" . "\r\n";
    			if(mail($contacto, $titulo, $mensaje, $cabeceras)){
    					echo "Se envio el correo. Gracias \n";

    			}else{
    				echo "El correo no se envió, puede intentarlo mediante esta liga <a href='mailto:contacto@autodinero.com.mx'>contacto</a>";

    			}

    		?>
        </blockquote>
      </div>
    </div>
  </div>
  <br>
  <!-- Pie de p&aacute;gina azul -->
  <div class="container-fluid">
    <div class="row fondo_azul">
      <div class="col-xs-3 cuadro_pie_p" id="cuadro_inferior_1">
        <div class="fondo_blanco">
          <h3>Obtener préstamo</h3>
          <ul>
            <li><a href="cuanto.html">Cotiza</a></li>
            <li><a href="general.html">Requisitos</a></li>
            <li><a href="queobtengo.html">Beneficios</a></li>
            <li><a href="faq.html">Preguntas frecuentes</a></li>
          </ul>
        </div>
      </div>
      <div class="col-xs-3 cuadro_pie_p" id="cuadro_inferior_2">
        <div class="fondo_blanco">
          <h3>
            Sobre la empresa
          </h3>
          <ul>
            <li><a href="empresa.html">AutoDinero</a></li>
            <li><a href="prestadinero.html">PrestaDinero</a></li>
            <li><a href="sucursales.html">Sucursales</a></li>
            <li><a href="Aviso_privacidad.html">Aviso de privacidad</a></li>
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
            <li><a href="prestamo_factura.html">Préstamos sobre factura</a></li>
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
            <li><a href="">Chatea con nosotros</a></li>
            <li><a href="mailto:contacto@autodinero.com.mx">Envía un correo</a></li>
            <li><a href="cuanto.html">Solicita que te llamen</a></li>
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
  <!-- Container-fluid principal -->
</body>
</html>
