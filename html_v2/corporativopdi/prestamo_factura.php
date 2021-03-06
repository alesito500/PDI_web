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
  <!--Start of Zopim Live Chat Script-->
  <script type="text/javascript">
    window.$zopim||(function(d,s){
      var z=$zopim=function(c){
        z._.push(c)
      },
      $=z.s=d.createElement(s),
      e=d.getElementsByTagName(s)[0];
      z.set=function(o){
        z.set._.push(o)
      };
      z._=[];
      z.set._=[];
      $.async=!0;
      $.setAttribute("charset","utf-8");
      $.src="//v2.zopim.com/?3oyUKkXWp4IeQSoqiWvJYXBLe6jhFHYr";
      z.t=+new Date;
      $.type="text/javascript";
      e.parentNode.insertBefore($,e)
    })(document,"script");
  </script>
  <!--End of Zopim Live Chat Script-->
  <title>¿Qué necesito?</title>
</head>
<body>

    <div class="container">
      <div class="visible-xs">
        <br>
        <header>
          <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-mobile" >
                  <span class="sr-only">Menu</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a href="/" class="navbar-brand">AutoDinero</a>
              </div>
              <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav">
                  <li ><a href="index.html">Inicio</a></li>
                  <li ><a href="requisitos.php" >Requisitos</a></li>
                  <li ><a href="beneficios.php" >Beneficios</a></li>
                  <li ><a href="cotiza.php" >Cotiza</a></li>
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
                  <li ><a href="faq.html" >Preguntas frecuentes</a></li>
                </ul>
              </div>
            </div>
          </nav>
        </header>
        <div class="espacio_blanco" ></div>
      </div>
      <!-- Banner superior -->
      <div class="row" id="banner-superior" >
        <div class="col-xs-8 col-sm-3 col-md-offset-1">
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

      <!-- Men&uacute; de navegaci&oacute;n -->
      <div class="row hidden-xs" id="menu-navegacion">
        <div class="col-sm-12">
          <ul class="Menu-Flecha">
            <li><a href="index.html">Inicio</a></li>
            <li ><a href="requisitos.php" >Requisitos</a></li>
            <li ><a href="beneficios.php" >Beneficios</a></li>
            <li ><a href="cotiza.php" >Cotiza</a></li>
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
            <li ><a href="faq.html" >Preguntas frecuentes</a></li>
          </ul>
        </div>
      </div>
      <!-- Men&uacute; de navegaci&oacute;n -->
      <!-- Banner principal -->
    </div>
    <div class="renglon_imagen">
      <img src="images/REQUISITOS.jpg" alt="¿Te falta algo? Te ayudamos a solucionarlo" class="img-responsive" />
    </div>
    <br>
    <div class="container" id="Marco_informacion">
      <div class="row">
        <div class="col-sm-8">
          <article>
            <p>Obtener dinero por tu auto sin dejarlo es muy sencillo. Te  préstamos desde 40% hasta 80%* por la factura de tu auto. <br>
              Los plazos son muy cómodos para ti, con AutoDinero tienes  derecho a 13 refrendos mensuales**, sin embargo, puedes abonar a capital y  pagar tan pronto como lo desees, incluso al siguiente mes. No hay penalización  por esto. <br>
              ¿Quieres saber cómo funciona tu préstamo? Imagina que  solicitas un préstamo por un auto con valor de $50 000 y tienes planeado  pagarlo en tres meses. Así es como funcionará tu crédito:
              <p>[Gráfico]</p>
              <p>*La valuación final depende de las condiciones del auto,  entre otros factores. <br>
                **Si requieres una ampliación de plazo es posible  solicitarlo, sólo acude con tu ejecutivo para obtener más detalles. <br>
                ***El Costo Anual Total ___ para fines informativos. <br>
                *El costo varía dependiendo del auto. <br>
                *El costo varía dependiendo del auto. <br>
                si tu auto ya cuenta con seguro es posible endosarlo a  nuestro nombre para evitar este costo adicional. </p>
                <br>
              </article>
            </div>
          </div>
        </div>
        <!-- Pie de p&aacute;gina azul -->
        <div class="row fondo_azul">
          <div class="col-xs-3 cuadro_pie_p" id="cuadro_inferior_1">
            <div class="fondo_blanco">
              <h3>Obtener préstamo</h3>
              <ul>
                <li><a href="cotiza.php">Cotiza</a></li>
                <li><a href="requisitos.php">Requisitos</a></li>
                <li><a href="beneficios.php">Beneficios</a></li>
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
        <!-- Pie de p&aacute;gina azul -->
      <!-- Container-fluid principal -->
      <!-- Marco para cotizar -->
      <div class="marco_cotiza hidden-xs" id="forma_cotizador">
        <form id="cotizador" method="post" action="contacto.php">
          <div class="row">
            <div class="col-sm-12">
              <legend>¿Cuánto me prestan?</legend>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <input type="text" id="nombre-cotizador" placeholder="Nombre:" class="form-control" autofocus tabindex="1" required/>
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
