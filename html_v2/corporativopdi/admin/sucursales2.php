<?php require_once('../Connections/dpi2.php');?>
<?php require_once('top.php'); ?>
<?php require_once('leftmenu.php'); ?>
<?php 
	mysqli_select_db($dpi, $database_dpi);
	$query_list = "SELECT * 
	FROM estado";
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
        <small>estado</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

       <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Edición de estados</h3>´
            </div>
            <div id="my_id" style="display: none; background-color:#BAB2E0;height:60px"><iframe name="mainFrame" frameborder="0" width="200px" height="60px" scrolling="no"></iframe></div>
            
            <!-- /.box-header -->
            <div class="box-body pad">
            <form action="a1_b.php" method="post" target="mainFrame">
 
                 <div class="col-md-12">
                	Seleccione el estado que desea modificar:
                </div>
                <?php do {
					$id_estado=$row_list['id_estado'];
					$nmbre_estado=$row_list['nmbre_estado'];
					echo "<div class=\"col-md-4\"><a href=\"sucursales2b.php?estado=$id_estado\">$nmbre_estado</a></div>";
					
					} while ($row_list = mysqli_fetch_assoc($list));										
				?>               
            </form>	 
            </div>
          </div>         
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php require_once('bottom.php'); ?>