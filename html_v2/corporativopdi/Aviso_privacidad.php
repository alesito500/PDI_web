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
  <title>¿Qu&eacute; obtengo?</title>
</head>
<body>

  <div class="container-fluid">
    <!-- Banner superior -->
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
                  <li ><a href="faq.php" >Preguntas frecuentes</a></li>
                </ul>
              </div>
            </div>
          </nav>
        </header>
        <div class="espacio_blanco" ></div>
      </div>
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
          <li ><a href="index.php">Inicio</a></li>
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
          <li ><a href="faq.php" >Preguntas frecuentes</a></li>
        </ul>
      </div>
    </div>
    <!-- Men&uacute; de navegaci&oacute;n -->
    </div>
    <br>
    <div class="container" id="Marco_informacion">
      <div class="row">
        <div class="col-sm-8">
          <blockquote>
            <h1 class="titulos_index">
              Aviso de privacidad</h1>
          </blockquote>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-8">
          <article>
            <blockquote>
              <br><h3>AVISO DE PRIVACIDAD DE PRESTA DINERO, S.A. DE C.V.</h3><br>
                <h4>Estimado Cliente</h4>
              <br>
                En Presta Dinero, S.A. de C.V. estamos conscientes de la  importancia de proteger correctamente sus datos personales, es por ello y en  cumplimiento con lo establecido en la Ley Federal de Protección de Datos  Personales en Posesión de los Particulares (LFPDPPP), en sus artículos 15, 16 y  18, que hacemos de su conocimiento que los datos personales que haya  proporcionado y proporcione con motivo de operaciones de mutuo con interés y  garantía prendaria, contratos de crédito, operaciones de compra-venta,  solicitudes de crédito, pagos de interés, serán tratados bajo las más estrictas  medidas de seguridad que garanticen su confidencialidad de conformidad con la  regulación vigente en la materia y a sus políticas internas.
              <br><br>
                Responsable de los datos personales Para los efectos del  presente Aviso de Privacidad Presta Dinero, S.A. de C.V. señala como  responsable de la protección y tratamiento de datos personales a Presta Dinero,  S.A. de C.V., a la que podrá contactar a través de su correo electrónico  derechosarco@autodinero.com, con domicilio en Pensylvania No. 127, Col. Parque  San Andrés, Delegación Coyoacán, México, D.F., C.P. 04040.
              <br><br>
                <h3>Datos Personales</h3><br>
                Recabamos sus datos personales de forma directa cuando usted  mismo nos los proporciona en persona, al llenar un formulario impreso, a través  de un formato en línea, por correo electrónico o por cualquier otra fuente  permitida por la Ley.<br>
                Los datos personales que recopilamos de nuestros clientes son: nombre, domicilio,  teléfono, correo electrónico, género, estado civil, situación económica,  nacionalidad, ocupación, datos del empleo actual, fecha de nacimiento, Registro  Federal de Contribuyentes, datos generales del cónyuge, referencias,  fotografía. Es importante mencionar que, los datos recopilados varían  dependiendo de la operación que realice con nosotros. De conformidad a lo  establecido en el artículo 9 de la Ley, cuando Presta Dinero, S.A. de C.V.  recabe tales datos, le será requerido su consentimiento expreso para el  tratamiento de estos datos, por lo que le solicitaremos que, en su momento,  indique si acepta o no el tratamiento.<br><br>
              <h3>Finalidades del tratamiento</h3><br>
                Sus datos personales son utilizados (tratados), y protegidos  bajo estricta confidencialidad, para las siguientes finalidades: (i)  realización de operaciones de mutuo con interés y garantía prendaría, compra  –venta de artículos, celebración de contratos, (ii) identificación y  verificación; (iii) contacto; (¡v) análisis de demanda, estadísticas de venta y  comportamiento del mercado; (v) dar seguimiento a sus operaciones y  necesidades, recordarle sus próximos vencimientos; (v¡) facturación; (v¡¡)  atender requerimientos de autoridad competente y envío de reportes.<br>
                Asimismo, sus datos personales serán utilizados en las  siguientes finalidades comerciales y de promoción: (i) enviarle información  relativa a nuestros productos o servicios, (ii) realizar encuestas sobre la  calidad de nuestros servicios; (iii) hacerle llegar ofertas y promociones y  nuevos productos; (iv) promoción de sorteos, eventos, realizarle invitaciones.<br>
                <h3>Ejercicio de derechos Arco y Revocación del Consentimiento</h3><br>
                Usted podrá revocar en cualquier momento su consentimiento para  el tratamiento que Presta Dinero, S.A. de C.V. hace de sus datos personales a  través de nuestro correo electrónico derechosarco@autodinero.com.mx.<br>
                Así mismo, usted podrá rectificar sus datos personales en caso  de ser inexactos o incompletos, cancelarlos cuando considere que no se  requieren para algunas de las finalidades señaladas en este Aviso de  Privacidad, estén siendo utilizados para finalidades no consentidas o haya  finalizado la relación contractual o de servicio, o bien oponerse al  tratamiento de los mismos para fines específicos.<br>
                Lo anterior a través de la solicitud respectiva por medio del  correo electrónico derechosarco@autodinero.com, que deberá contener: i) El  nombre completo del titular de los datos personales y domicilio u otro medio  para comunicarle la respuesta a su solicitud; ii) Los documentos que acrediten  la identidad o, en su caso, la representación legal del titular; iii) La  descripción clara y precisa de los datos personales respecto de los que se  busca ejercer alguno de los derechos antes mencionados; iv) Cualquier otro  elemento o documento que facilite la localización de los datos personales; v)  En el caso de solicitudes de rectificación de datos personales, el titular,  deberá indicar, las modificaciones a realizarse y aportar la documentación que  sustente su petición.<br>
                Presta Dinero, S.A. de C.V. se comunicará con usted, en un plazo  máximo de veinte días hábiles, contados desde la fecha en que se recibió la  solicitud, para informarle sobre la determinación adoptada, y en caso de ser  procedente, se haga efectiva dentro de los quince días hábiles siguientes a la  fecha en que se comunique la respuesta.<br>
                <h3>Tratamiento indebido de sus datos personales</h3><br>
                Si usted considera que su derecho de protección de datos  personales ha sido lesionado con alguna conducta por parte de Presta Dinero,  S.A. de C.V., o sus actuaciones o respuestas, presume que en el tratamiento de  sus datos personales existe alguna violación a las disposiciones previstas en  la Ley Federal de Protección de Datos Personales en Posesión de los  Particulares, podrá interponer la queja o denuncia correspondiente ante el  Instituto Federal de Acceso a la Información y Protección de Datos (IFAI).<br>
                Consentimiento<br>
                Al ingresar a nuestro sitio de Internet, usted se compromete a  aceptar los términos y condiciones de nuestra actual Política de Privacidad. Si  usted no acepta los términos y condiciones de esta Política de Privacidad, le  pedimos que no proporcione ningún dato de carácter personal a Presta Dinero,  S.A. de C.V. a través de este sitio de Internet.<br>
               <h3>Transferencias</h3><br>
                Presta Dinero, S.A. de C.V en su calidad de empresa mercantil  con diferentes productos y servicios, podrá transferir sus datos personales con  sus empresas subsidiarias o filiales, para las finalidades comerciales y de  promoción descritas en puntos anteriores del presente Aviso de Privacidad.<br>
                Sus datos personales pueden ser transferidos y tratados por  personas físicas y/o morales tales como, (i) Auditores externos (legales y  contables); (ii) Compañías de seguros con las que se tenga una relación  jurídica; (iii) proveedores que asistan a la empresa, en el desarrollo y  desempeño de sus funciones.<br>
                Presta Dinero, S.A. de C.V., se compromete a no transferir su  información personal a terceros sin su consentimiento, salvo las excepciones  previstas en Ley Federal de Protección de Datos Personales en Posesión de los Particulares  y su Reglamento, así como a realizar esta transferencia en los términos que  fijan dichos ordenamientos.<br>
                Si usted no manifiesta su oposición para que sus datos  personales puedan ser transferidos, se entenderá que ha otorgado su  consentimiento.<br>
                <br>• No consiento que mis datos personales sean transferidos.  Modificaciones al Aviso de Privacidad Nos reservamos el derecho de efectuar en  cualquier momento modificaciones o actualizaciones al presente Aviso de  Privacidad, para la atención de novedades legislativas, políticas internas o  nuevos requerimientos para la prestación u ofrecimiento de nuestros productos o  servicios. Estas modificaciones estarán disponibles a través de los siguientes  medios:<br>
               <br> 1. Anuncios visibles en nuestro establecimiento o centro de  atención a clientes. 2. En nuestra página web, www.autodinero.com.mx, sección  Aviso de Privacidad.<br>
                <br>Para mayor información en relación con el presente Aviso, los  derechos de acceso, modificación, rectificación, cancelación o limitación de  uso, se podrán solicitar directamente en el domicilio arriba indicado; en el  correo electrónico derechosarco@prestadinero.com.mx<br>
                Atentamente,<br><br>
                Representante Legal de Presta Dinero, S.A. de C.V.
            </blockquote>
<br>
            <br>¿Quieres saber cuánto puedes obtener?
          </article>
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
