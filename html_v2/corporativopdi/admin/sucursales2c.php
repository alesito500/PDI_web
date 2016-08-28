<?php require_once('../Connections/dpi2.php');?>
<?php require_once('top.php'); ?>
<?php require_once('leftmenu.php'); ?>
<?php echo $id_estado=$_GET['estado'];

	mysqli_select_db($dpi, $database_dpi);
	$query_list = "SELECT * 
	FROM estado where id_estado='$id_estado'";
	$list = mysqli_query($dpi,$query_list) or die(mysql_error());
	$row_list = mysqli_fetch_assoc($list);
	$totalRows_list = mysqli_num_rows($list);

?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edicion
        <small><?php echo $row_list['nmbre_estado'];?></small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

       <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Edición de <?php echo $row_list['nmbre_estado'];?></h3>´
            </div>
            <div id="my_id" style="display: none; background-color:#BAB2E0;height:60px"><iframe name="mainFrame" frameborder="0" width="200px" height="60px" scrolling="no"></iframe></div>
            
            <!-- /.box-header -->
            <div class="box-body pad">
            <form action="sucursales2c2.php" method="post" target="mainFrame">
                 <div class="col-md-4">
                	Coloque el nombre de la sucursal:
                </div>
                <div class="col-md-6">
                	<textarea cols="100" rows="4" name="nombre" required></textarea>
                </div>
                <div class="col-md-4">
                	Descripcion:
                </div>
                <div class="col-md-6">
                	<textarea cols="100" rows="4" name="descripcion" required></textarea>
                    <br><br>
                </div>
                <div class="col-md-4">
                	Telefono:
                </div>
                <div class="col-md-6">
                	<textarea cols="100" rows="4" name="telefono" required></textarea>
                    <br><br>
                </div>
                <div class="col-md-4">
                	Horario:
                </div>
                <div class="col-md-6">
                	<textarea cols="100" rows="4" name="horario" required></textarea>
                    <br><br>
                </div>
                <div class="col-md-6"></div>	
                <div class="col-md-3 box-footer">
                	<input type="hidden" value="<?php echo $id_estado?>" name="estado"/>
                	<button type="reset" class="btn btn-info pull-left">Cancel</button>
                	<button type="submit" class="btn btn-info pull-right" onclick="document.getElementById('my_id').style.display = 'block' ;">Sign in</button>
             	 </div>
                 <div class="col-md-3"></div>
            </form>	 
            </div>
          </div>         
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php require_once('bottom.php'); ?>