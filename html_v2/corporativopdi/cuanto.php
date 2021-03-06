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
  <title>¿Cuánto me prestan?</title>
</head>
<body>

  <div class="container">

    <!-- Banner superior -->
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
          <li ><a href="queobtengo.php" >Beneficios</a></li>
          <li class="active" ><a href="#Marco_informacion" >Cotiza</a></li>
          <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Sucursales<span class="caret"></span></a>
            <ul class="dropdown-menu Menu-dropdown-Flecha">
                <?php do {
							$id_estado2=$row_list2['id_estado'];
							$nmbre_estado2=$row_list2['nmbre_estado'];
							echo "<li><a href=\"sucursales_detalle.php?estado=$id_estado2\">$nmbre_estado2</a></li>";
							
							} while ($row_list2 = mysqli_fetch_assoc($list2));											
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
      <img src="images/COTIZA.jpg" alt="¿Cuánto me prestan?" class="img-responsive">
    </div>
  <br>
  <div class="container" id="Marco_informacion">
    <div class="row">
      <div class="col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8">
        <form action="contacto.php" method="POST" autocomplete="on" target="#contacto" id="forma_cotiza_completa">
          <fieldset>
            <legend>
              Tus datos
            </legend>
            <div class="form-group">
              <input name="nombre-cotizador" id="nombre-cotizador" type="text" class="form-control" placeholder="Nombre completo" autofocus tabindex="1" autocomplete="on" required>
            </div>
            <div class="form-group">
              <input name="mail-cotizador" type="email" class="form-control" id="mail-cotizador" placeholder="Correo electrónico" tabindex="2" autocomplete="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Ingresa tu correo electrónico como cuenta@dominio.extension">
            </div>
            <div class="form-group">
              <input name="tel-cotizador" type="tel" class="form-control" id="tel-cotizador" placeholder="teléfono" tabindex="3" required autocomplete="true" maxlength="12" title="Ingresa tu número telefónico, sin espacio y sin letras">
            </div>
          </fieldset>
          <fieldset>
            <legend>Datos del vehículo</legend>
            <div class="form-group">
              <input type="text" class="form-control" id="auto-cotizador" name="auto-cotizador" tabindex="4" placeholder="Marca/Modelo/Versión">
            </div>
          </fieldset>
          <div class="form-group">
            <label for="input-sucursal-cotiza">Qué sucursal quieres que te contacte</label>
            <select name="listasucursales" id="input-sucursal-cotiza" tabindex="5">
              <option value="nes" selected="true">No estoy seguro</option>
              <option value="cdmx-azc">Ciudad de México - Azcapotzalco</option>
              <option value="cdmx-coa">Ciudad de México - Coapa</option>
              <option value="cdmx-grs">Ciudad de México - Gran sur</option>
              <option value="cdmx-izt">Ciudad de México - Iztapalapa</option>
              <option value="cdmx-mon">Ciudad de México - Monterrey</option>
              <option value="cdmx-rom">Ciudad de México - Roma</option>
              <option value="cdmx-sng">Ciudad de México - San Gerónimo</option>
              <option value="cdmx-val">Ciudad de México - Vallejo</option>
              <option value="cdmx-zar">Ciudad de México - Zaragoza</option>
              <option value="edomex-alm">Estado de México - Almoloya</option>
              <option value="edomex-eca">Estado de México - Ecatepec</option>
              <option value="edomex-hue">Estado de México - Huehuetoca</option>
              <option value="edomex-izc">Estado de México - Izcalli</option>
              <option value="edomex-teo">Estado de México - Teoloyucan</option>
              <option value="edomex-tla">Estado de México - Tlalnepantla</option>
              <option value="edomex-ati">Estado de México - Atizapán</option>
              <option value="gto-aca">Guanajuato - Acámbaro</option>
              <option value="gto-apa">Guanajuato - Apaseo</option>
              <option value="gto-com">Guanajuato - Comonfort</option>
              <option value="gto-juv">Guanajuato - Juventino</option>
              <option value="gto-snf">Guanajuato - San Felipe</option>
              <option value="gto-slp">Guanajuato - San Luis de la Paz</option>
              <option value="hgo-apa">Hidalgo - Apan</option>
              <option value="hgo-cuau">Hidalgo - Cuautepec</option>
              <option value="hgo-hui">Hidalgo - Huichapan</option>
              <option value="hgo-sah">Hidalgo - Sahagún</option>
              <option value="hgo-tep">Hidalgo - Tepeapulco</option>
              <option value="hgo-tiz">Hidalgo - Tizayuca</option>
              <option value="hgo-tul">Hidalgo - Tulancingo</option>
              <option value="hgo-zim">Hidalgo - Zimapan</option>
              <option value="mor-tep">Morelos - Tepoztlán</option>
              <option value="mor-xoc">Morelos - Xochitepec</option>
              <option vlaue="pbla-tla">Puebla - Tlatauquitepec</option>
              <option value="qrto-ame">Querétaro - Amealco</option>
              <option value="qrto-ped">Querétaro - Pedro Escobedo</option>
            </select>
          </div>
          <fieldset>
            <legend>Mensaje<label for="text-area-mensaje" title="Si deseas escribenos un mensaje con más detalles de tu situación">*</label></legend>
            <div class="form-group">
            <textarea name="textareamensaje"  id="text-area-mensaje" class="form-control" tabindex="6"></textarea>
          </div>
          </fieldset>
          <div class="form-group">
            Al enviar tu información autorizas a AutoDinero contactarte con fines informativos.
            los datos se almacenan de forma segura y serán utilizados bajo los términos de nuestro
            <a href="Aviso_privacidad.php">aviso de privacidad</a>.
          </div>
          <div class="form-group">
            <iframe name="contacto" id="contacto" width="250px" height="50px" frameborder="0"></iframe>
          </div>
          <div class="form-group">
            <button type="submit" value="Cotizar" class="boton-ama" tabindex="7">Cotizar</button>
          </div>
        </form>
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
  </div>
  <!-- Pie de p&aacute;gina azul -->
  <!-- Container-fluid principal -->
</body>
</html>
