<?php 
	$hostname_dpi = "127.0.0.1";
	$database_dpi = "pdi";
	$username_dpi = "root";
	$password_dpi = "";
	$dpi = mysqli_connect($hostname_dpi, $username_dpi, $password_dpi,$database_dpi); 
	date_default_timezone_set('America/Mexico_City');
	mysqli_query($dpi ,"SET NAMES 'utf8'");
	
	$var=0;
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['email'])) {
  $loginUsername=$_POST['email'];
  //$key=$_POST['password'];
  $password=$_POST['password'];
  //$password= hash('sha512', $key);
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "home.php";
  $MM_redirectLoginFailed = "../";
  $MM_redirecttoReferrer = false;

	
	mysqli_select_db($dpi, $database_dpi);
	$query_meta = "SELECT * FROM usuario where email='$loginUsername' AND password='$password';";
	$meta = mysqli_query($dpi,$query_meta) or die(mysql_error());
	$row_meta = mysqli_fetch_assoc($meta);
	$totalRows_meta = mysqli_num_rows($meta);
	
  if ($totalRows_meta==1){
	  $_SESSION['MM_Username'] = $loginUsername;	  
		echo "<META HTTP-EQUIV=\"REFRESH\" CONTENT=\"0;URL=home.php\"> ";
  }
  else{
	  
		echo "Su usuario, contraseña o nivel de acceso son incorrectos";  
  }
}
?>
<?php require_once('top.php'); ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Inicio de sesion
        <small></small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

       <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Datos</h3>´
            </div>
            <div id="my_id" style="display: none; background-color:#BAB2E0;height:60px"><iframe name="mainFrame" frameborder="0" width="200px" height="60px" scrolling="no"></iframe></div>
            
            <!-- /.box-header -->
            <div class="box-body pad">
				<?php if ($var==1){echo "Error en su usuario o contraseña";}?>
                <?php if ($var==2){echo "Ya no tiene permisos para acceder a la pagina";}?>
                <form ACTION="<?php echo $loginFormAction; ?>" METHOD="POST" id="loginForm">
                      <fieldset id="body">
                        <div class="col-sm-4">
                             <label for="email">Usuario: </label>
                             <input type="text" name="email" id="email" />
                        </div>
                        <div class="col-sm-4">
                            <label for="password">Contraseña: </label>
                            <input type="password" name="password" id="password" />
                        </div>
                        <br><br><br>
                        <input type="submit" id="login" value="Sign in" />           
                     </fieldset>
                </form>	 
            </div>
          </div>         
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php require_once('bottom.php'); ?>