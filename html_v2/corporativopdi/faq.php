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

	<script type="text/javascript" charset="utf-8">
	$(function(){
		$('#menufaq li a').click(function(event){
			var elem = $(this).next();
			if(elem.is('ul')){
				event.preventDefault();
				$('#menufaq ul:visible').not(elem).slideUp();
				elem.slideToggle();
			}
		});
	});
	</script>
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
  <title>Preguntas frecuentes</title>
</head>
<body>

  <div class="container-fluid">
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
                  <li ><a href="index.php">Inicio</a></li>
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
                  <li class="active"><a href="#Marco_informacion" >Preguntas frecuentes</a></li>
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
            <li><a href="index.php">Inicio</a></li>
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
            <li class="active"><a href="#Marco_informacion" >Preguntas frecuentes</a></li>
          </ul>
        </div>
      </div>
      <!-- Men&uacute; de navegaci&oacute;n -->
    </div>
  </div>
  <!-- Banner principal -->
  <div class="renglon_imagen">
    <img src="images/FAQ.jpg" alt="Preguntas frecuentes" class="img-responsive">
  </div>
  <br>
  <div class="container" id="Marco_informacion">


    <div class="row">
      <div class="col-sm-8">
        <article>
          <ul id="menufaq" class="ulfaq dropdownlist">
            <li><a href="#">¿Qué tipo de vehículos reciben en AutoDinero?</a>
              <ul>
                <li>
                  En AutoDinero recibimos autos particulares, de empresas y refacturados. No se reciben autos de aseguradora, taxis, de transporte público ni de subastas. <br>
                  Puedes obtener un préstamo por la factura sin tener que dejar tu auto con cualquiera de estos
                  vehículos.
                  <dl class="dl-list">
                    <dt>Automóviles</dt>
                    <dt>Camionetas</dt>
                    <dt>Tráileres</dt>
                    <dt>Tractores</dt>
                    <dt>Camiones de carga</dt>
                  </dl>
                  Además de los anteriores, puedes obtener un préstamo dejándolo en resguardo con cualquiera de
                  estos vehículos.
                  <dl class="dl-list">
                    <dt>Motocicletas</dt>
                    <dt>Motonetas</dt>
                    <dt>Cuatrimotos</dt>
                  </dl>
                </li>
              </ul>
            </li>
            <li><a href="#">¿En cuánto tiempo me dan el dinero?</a>
              <ul>
                <li>
                  Puedes obtener dinero en 24 horas una vez que tu crédito está autorizado, si tus documentos
                  están en regla, podemos autorizarte en una hora.
                </li>
              </ul>
            </li>
            <li><a href="#">¿Requiero aval?</a>
              <ul>
                <li>
                  No, te prestamos dinero sin aval.
                </li>
              </ul>
            </li>
            <li>
              <a href="#">
                ¿Con qué formas de pago cuentan?
              </a>
              <ul>
                <li>
                  Para tu comodidad puedes depositar en cualquier sucursal Bancomer. <br>
                  Algunas de nuestras sucursales aceptan pagos en caja. <a href="sucursales.php">Comprueba aquí cuáles son.</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#">
                ¿Puedo liquidar mi préstamo anticipadamente?
              </a>
              <ul>
                <li>Sí, puedes liquidar en cualquier momento sin penalización.</li>
              </ul>
            </li>
            <li>
              <a href="#">
                ¿Aceptan abonos a capital?
              </a>
              <ul>
                <li>
                  Sí, en aceptamos abonos a capital desde $1,000 pesos, así pagas menos intereses.
                </li>
              </ul>
            </li>
            <li>
              <a href="#">
                ¿Tengo que pagar por la investigación o comisión de apertura?
              </a>
              <ul>
                <li>No, no cobramos por investigación ni por apertura de crédito. Sólo pagas el seguro y el localizador.</li>
              </ul>
            </li>
            <li>
              <a href="#">
                ¿Puedo renovar mi contrato?
              </a>
              <ul>
                <li>
                  Sí, puedes renovar tu contrato cuantas veces lo desees.
                </li>
              </ul>
            </li>
            <li>
              <a href="#">
                ¿Qué pasa si me falta algún documento?
              </a>
              <ul>
                <li>Podemos ayudarte a solucionar el problema, acude a nuestras <a href="http://www.autodinero.com.mx/sucursales.html/"></a> sucursales</li> para obtener más opciones.
              </ul>
            </li>
            <li>
              <a href="#">
                ¿Cuánto me pueden prestar?
              </a>
              <ul>
                <li>
                  El monto depende del costo de tu vehículo, te podemos prestar hasta un 80% de su valor.
                </li>
              </ul>
            </li>
            <li>
              <a href="#">
                ¿Cómo se calcula el monto de mi préstamo?
              </a>
              <ul>
                <li>Usamos el indicador de la Guía Autométrica y evaluamos el estado general del vehículo para hacerte una oferta.</li>
              </ul>
            </li>
            <li>
              <a href="#">
                ¿Cómo es el proceso obtención del crédito?
              </a>
              <ul>
                <li>
                  El proceso es muy fácil y sencillo
                  <dl>
                    <dt class="dt-no-bold"><span class="glyphicon glyphicon-ok"  aria-hidden="true"></span>Entregas la documentación en tu sucursal más cercana</dt>
                    <dt class="dt-no-bold"><span class="glyphicon glyphicon-ok"  aria-hidden="true"></span>La sucursal conforma tu expediente y se programa la visita domiciliaria</dt>
                    <dt class="dt-no-bold"><span class="glyphicon glyphicon-ok"  aria-hidden="true"></span>Durante la visita se verifican datos, domicilio y otros documentos</dt>
                    <dt class="dt-no-bold"><span class="glyphicon glyphicon-ok"  aria-hidden="true"></span>Al mismo tiempo, la sucursal valida los documentos del auto y las referencias</dt>
                    <dt class="dt-no-bold"><span class="glyphicon glyphicon-ok"  aria-hidden="true"></span>Ya en la sucursal, se firma el contrato y se instala el GPS</dt>
                    <dt class="dt-no-bold"><span class="glyphicon glyphicon-ok"  aria-hidden="true"></span>Una vez finalizado el expediente, recibirás tu depósito en cuestión de horas</dt>
                  </dl>
                </li>
              </ul>
            </li>
            <li>
              <a href="#">
                ¿Qué tipo de seguro me contratan y cuánto cuesta?
              </a>
              <ul>
                <li>
                  El costo es variable. El básico cubre robo y pérdida total. El de cobertura amplia ofrece aún mejor protección. Si ya cuentas con un seguro podemos usarlo para hacer el trámite.
                </li>
              </ul>
            </li>
            <li>
              <a href="#">
                ¿Para qué necesito un GPS y cuánto cuesta?
              </a>
              <ul>
                <li>
                  Es necesario saber dónde está el vehículo en caso de robo. Para ello la empresa cuenta con una plataforma de localización propia que acelera el proceso de localización y recuperación.
                </li>
              </ul>
            </li>
            <li>
              <a href="#">
                ¿Necesito comprobantes de ingresos?
              </a>
              <ul>
                <li>
                  Deberás entregarlos como parte de tu expediente pero no es un factor para determinar tu crédito. Los comprobantes que se te podrían solicitar son:
                  <dl>
                    <dt class="dt-no-bold"><span class="glyphicon glyphicon-ok"  aria-hidden="true"></span>Recibos de nóminas</dt>
                    <dt class="dt-no-bold"><span class="glyphicon glyphicon-ok"  aria-hidden="true"></span>La sucursal conforma tu expediente y se programa la visita domiciliaria</dt>
                    <dt class="dt-no-bold"><span class="glyphicon glyphicon-ok"  aria-hidden="true"></span>Estados de cuenta bancarios</dt>
                    <dt class="dt-no-bold"><span class="glyphicon glyphicon-ok"  aria-hidden="true"></span>Recibos de honorarios facturas emitidas</dt>
                  </dl>
                </li>
              </ul>
            </li>
            <li>
              <a href="#">
                ¿Revisan mi buró de crédito?
              </a>
              <ul>
                <li>
                  Sí, se revisa pero no es determinante para otorgar un crédito
                </li>
              </ul>
            </li>
            <li>
              <a href="#">
                Al terminar el crédito ¿Cuándo me devuelven mis documentos?
              </a>
              <ul>
                <li>
                  Al finalizar el crédito se programa la entrega de documentos originales y la desinstalación del GPS, no más de siete días después de la fecha del último pago.
                </li>
              </ul>
            </li>
            <li>
              <a href="#">
                ¿Cómo se hace un refrendo?
              </a>
              <ul>
                <li>Según el estado de tu saldo, se hace una evaluación y una nueva oferta.</li>
              </ul>
            </li>
            <li>
              <a href="#">
                ¿Puedo obtener un préstamo si estoy pagando mi coche?
              </a>
              <ul>
                <li>No es posible, se necesita la factura.</li>
              </ul>
            </li>
            <li>
              <a href="#">
                ¿Por qué AutoDinero es la mejor opción para obtener un préstamo?
              </a>
              <ul>
                <li>Puedes obtener tu crédito en 24 horas o incluso menos tiempo. <br>
                  Una empresa respaldada por 11 años en el mercado.<br>
                  Nos ajustamos a tus necesidades.<br>
                  Te ofrecemos el mejor servicio, siempre personalizado.
                </li>
              </ul>
            </li>
          </ul>

        </article>
      </div>
    </div>

    <br>
    <div class="row">
      <div class="col-xs-8 text-center">
        <h2 style="font-family:inherit;">¿Tienes más dudas?</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-8">
        <div class="col-sm-4">
          <div class="opciones_faq">
            <h3>(55) 6845-0000</h3>
            <img src="images/telefono.png" alt="Llamar" class="img-responsive">
          </div>

        </div>
        <div class="col-sm-4">
          <div class="opciones_faq">
            <h3>Chatea en vivo</h3>
            <a href="javascript:void($zopim.livechat.window.show())">
              <img src="images/chat.png" class="img-responsive" alt="Chatea con nosotros">
            </a>
          </div>

        </div>
        <div class="col-sm-4">
          <div class="opciones_faq">
            <h3>Escríbenos</h3>
            <a href="mailto:contacto@autodinero.com.mx?subject=Consulta">
              <img src="images/correo.png" class="img-responsive" alt="Escribenos">
            </a>
          </div>

        </div>
      </div>
    </div>
    <br>
  </div>
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
      <footer id="fondo">
        Derechos reservados 2016
      </footer>
    </div>
    <!-- Pie de p&aacute;gina azul -->
  </div>
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
          <input type="text" id="nombre-cotizador" name="nombre-cotizador" placeholder="Nombre:" class="form-control" autofocus tabindex="1" required/>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-sm-12">
          <input type="email" id="mail-cotizador" name="mail-cotizador" class="form-control" placeholder="Correo:" tabindex="2" required>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-sm-6">
          <input type="tel" id="tel-cotizador" name="tel-cotizador" class="form-control" placeholder="Tel&eacute;fono:" tabindex="3" required maxlength="10">
        </div>
        <div class="col-sm-6">
          <input type="text" id="auto-cotizador" name="auto-cotizador" placeholder="Veh&iacute;culo" tabindex="4" required class="form-control">
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-sm-5 col-sm-offset-6">
          <button type="submit" id="boton-cotizador" tabindex="5" >Cotiza</button>
        </div>
      </div>
    </form>
  </div>
  <!-- Marco para cotizar -->
</body>
</html>
