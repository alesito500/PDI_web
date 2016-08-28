<?php require_once('../Connections/dpi2.php');?>
<?php require_once('top.php'); ?>
<?php require_once('leftmenu.php'); ?>
<?php 
	mysqli_select_db($dpi, $database_dpi);
	$query_meta = "SELECT * 
	FROM tags";
	$meta = mysqli_query($dpi,$query_meta) or die(mysql_error());
	$row_meta = mysqli_fetch_assoc($meta);
	$totalRows_meta = mysqli_num_rows($meta);
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Metatags
        <small>Edición</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

       <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Edición de meta tags</h3>´
            </div>
            <div id="my_id" style="display: none; background-color:#BAB2E0;height:60px"><iframe name="mainFrame" frameborder="0" width="200px" height="60px" scrolling="no"></iframe></div>
            
            <!-- /.box-header -->
            <div class="box-body pad">
            <form action="a1_b.php" method="post" target="mainFrame">
               <div class="col-md-4">
                	Coloque las palabras separadas por coma que seran usadas por los motores de busqueda:
                </div>
                 <div class="col-md-6">
                	<textarea cols="100" rows="4" name="palabra"><?php echo $row_meta['palabra'];?> </textarea>
                </div>   
                 <div class="col-md-4">
                	Descripción de su pagina web:
                </div>
                <div class="col-md-6">
                	<textarea cols="100" rows="4" name="descripcion"><?php echo $row_meta['descripcion'];?></textarea>
                </div>
                <div class="col-md-4">
                	Defina el autor de la pagina web:
                </div>
                <div class="col-md-6">
                	<textarea cols="100" rows="4" name="autor"><?php echo $row_meta['autor'];?></textarea>
                    <br><br>
                </div>
                <div class="col-md-6"></div>	
                <div class="col-md-3 box-footer">
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