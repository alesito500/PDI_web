<?php require_once('Connections/dpi.php');?>
<?php 
	mysqli_select_db($dpi, $database_dpi);
	$query_meta = "SELECT * 
	FROM tags";
	$meta = mysqli_query($dpi,$query_meta) or die(mysql_error());
	$row_meta = mysqli_fetch_assoc($meta);
	$totalRows_meta = mysqli_num_rows($meta);
	
	mysqli_select_db($dpi, $database_dpi);
	$query_list = "SELECT * 
	FROM estado";
	$list = mysqli_query($dpi,$query_list) or die(mysql_error());
	$row_list = mysqli_fetch_assoc($list);
	$totalRows_list = mysqli_num_rows($list);
	
	mysqli_select_db($dpi, $database_dpi);
	$query_list2 = "SELECT * 
	FROM estado";
	$list2 = mysqli_query($dpi,$query_list2) or die(mysql_error());
	$row_list2 = mysqli_fetch_assoc($list2);
	$totalRows_list2 = mysqli_num_rows($list2);
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
  <link rel="icon" href="images/Llanta-Autodinero.ico">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <title>¿Qu&eacute; obtengo?</title>
</head>
<body>

    <!-- Banner superior -->
    <div class="container">

      <div class="row" id="banner-superior" >
        <div class="col-xs-8 col-sm-3 col-md-3 col-md-offset-1">
          <img src="images/AutoDinero-gde.png" class="img-responsive" alt="Autodinero" id="logoAutoDinero">
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
              <a href="https://www.facebook.com/autodinero/">
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

      <!-- Men&uacute; de navegaci&oacute;n -->
      <div class="row" id="menu-navegacion">
        <div class="col-sm-12">
          <ul class="Menu-Flecha">
            <li><a href="index.php">Inicio</a></li>
            <li ><a href="general.php" >Requisitos</a></li>
            <li class="active"><a href="#Marco_informacion" >Beneficios</a></li>
            <li ><a href="cuanto.php" >Cotiza</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Sucursales<span class="caret"></span></a>
              <ul class="dropdown-menu Menu-dropdown-Flecha">
                      <?php do {
							$id_estado=$row_list['id_estado'];
							$nmbre_estado=$row_list['nmbre_estado'];
							echo "<li><a href=\"sucursales_detalle.php?estado=$id_estado\">$nmbre_estado</a></li>";
							
							} while ($row_list = mysqli_fetch_assoc($list));										
						?> 
              </ul>
            </li>
            <li ><a href="faq.php" >Preguntas frecuentes</a></li>
          </ul>
        </div>
      </div>
      <!-- Men&uacute; de navegaci&oacute;n -->
      <!-- Banner principal -->
    </div>
    <div class="renglon_imagen">
      <img src="images/BENEFICIOS.jpg" alt="¿Qu&eacute; beneficios obtengo?" class="img-responsive">
    </div>
    <br>
    <div class="container" id="Marco_informacion">
      <div class="row">
        <div class="col-sm-8">
          <blockquote>
            <h1 class="titulos_index">
              ¿Qu&eacute; obtengo?
            </h1>
          </blockquote>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-8">
          <article>
            <p>Trabajamos por un propósito, ayudarte a resolver tus necesidades financieras.</p>
            <p>Para lograrlo te ofrecemos increíbles beneficios</p>
            <dl>
              <dt class="dt-no-bold"><span class="glyphicon glyphicon-ok"  aria-hidden="true"></span>Puedes llevarte tu auto</dt>
              <dt class="dt-no-bold"><span class="glyphicon glyphicon-ok"  aria-hidden="true"></span>Aseguramos tu auto durante el plazo del préstamo</dt>
              <dt class="dt-no-bold"><span class="glyphicon glyphicon-ok"  aria-hidden="true"></span>Te damos respuesta en una hora</dt>
              <dt class="dt-no-bold"><span class="glyphicon glyphicon-ok"  aria-hidden="true"></span>Tú eliges la duración del crédito</dt>
              <dt class="dt-no-bold"><span class="glyphicon glyphicon-ok"  aria-hidden="true"></span>Puedes renovar contrato al término del mismo</dt>
              <dt class="dt-no-bold"><span class="glyphicon glyphicon-ok"  aria-hidden="true"></span>Aceptamos abonos a capital sin penalización</dt>
              <dt class="dt-no-bold"><span class="glyphicon glyphicon-ok"  aria-hidden="true"></span>Puedes liquidar anticipadamente sin penalización</dt>
              <dt class="dt-no-bold"><span class="glyphicon glyphicon-ok"  aria-hidden="true"></span>Obtén tu dinero en máximo 24 horas</dt>
            </dl>
            <br>
            <p>¿Quieres saber cuánto puedes obtener?</p>
          </article>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-8">
          <form action="cuanto.php" target="_self" method="post">
            <label for="boton-cotiza">Solicita una cotización sin compromiso ahora</label>
            <button type="submit" id="boton-cotiza" class="boton-ama">Cotiza</button>
          </form>
        </div>
      </div>
    </div>
    <br>
    <!-- Pie de p&aacute;gina azul -->
    <div class="row fondo_azul">
      <div class="col-xs-3 cuadro_pie_p" id="cuadro_inferior_1">
        <div class="fondo_blanco">
          <h3>Obtener préstamo</h3>
          <ul>
            <li><a href="cuanto.php">Cotiza</a></li>
            <li><a href="general.php">Requisitos</a></li>
            <li><a href="queobtengo.php">Beneficios</a></li>
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
            <li><a href="http://www.prestadinero.com/">Empeños</a></li>
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
            <li><a href="cuanto.php">Solicita que te llamen</a></li>
          </ul>
          <a href="https://www.facebook.com/autodinero/"><img src="images/facebook.png" alt="Síguenos en facebook" class="img-responsive"></a>
        </div>
      </div>
    </div>
    <div class="row">
      <footer>
        Derechos reservados 2016
      </footer>
    </div>
    <!-- Pie de p&aacute;gina azul -->
  <!-- Container-fluid principal -->
  <!-- Marco para cotizar -->
  <div class="marco_cotiza" id="forma_cotizador">
    <form id="cotizador" method="post" action="contacto.php">
      <div class="row">
        <div class="col-sm-12">
          <input type="text" id="nombre-cotizador" placeholder="Nombre:" class="form-control" autofocus tabindex="1" required></intput>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-sm-12">
          <input type="email" id="mail-cotizador" class="form-control" placeholder="Correo:" tabindex="2" required>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-sm-6">
          <input type="tel" id="tel-cotizador" class="form-control" placeholder="Tel&eacute;fono:" tabindex="3" required maxlength="10">
        </div>
        <div class="col-sm-6">
          <input type="text" id="auto-cotizador" placeholder="Veh&iacute;culo" tabindex="4" required class="form-control">
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-sm-5 col-sm-offset-6">
          <button type="button" id="boton-cotizador" tabindex="5" >Cotiza</button>
        </div>
      </div>
    </form>
  </div>
  <!-- Marco para cotizar -->
</body>
</html>
