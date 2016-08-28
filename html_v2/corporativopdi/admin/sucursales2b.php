<?php require_once('../Connections/dpi2.php');?>
<?php require_once('top.php'); ?>
<?php require_once('leftmenu.php'); ?>
<?php $id_estado=$_GET['estado'];?>
<?php 
	mysqli_select_db($dpi, $database_dpi);
	$query_list = "SELECT * 
	FROM estado where id_estado='$id_estado'";
	$list = mysqli_query($dpi,$query_list) or die(mysql_error());
	$row_list = mysqli_fetch_assoc($list);
	$totalRows_list = mysqli_num_rows($list);

	mysqli_select_db($dpi, $database_dpi);
	$query_list2 = "SELECT * 
	FROM sucursal where id_estado_sucursal='$id_estado'";
	$list2 = mysqli_query($dpi,$query_list2) or die(mysql_error());
	$row_list2 = mysqli_fetch_assoc($list2);
	$totalRows_list2 = mysqli_num_rows($list2);
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Estado 
        <small><?php echo $row_list['nmbre_estado'];?></small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><?php echo $row_list['nmbre_estado'];?> - <a href="sucursales2c.php?estado=<?php echo $id_estado?>">Agregar sucursales</a></h3>
            </div>
            <div id="my_id" style="display: none; background-color:#BAB2E0;height:60px"><iframe name="mainFrame" frameborder="0" width="200px" height="60px" scrolling="no"></iframe></div>
            <!-- /.box-header -->
            <?php if ($totalRows_list2 > 0){ ?>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Nombre</th>
                  <th>Descripción</th>
                  <th>Telefono</th>
                  <th>Horario</th>
                  <th>Eliminar</th>                  
                </tr>
                </thead>
                <tbody>
                 <?php do { 
				 	$id_sucursal=$row_list2['id_sucursal'];
				 ?>
                <tr>
                    <td><?php echo $id_sucursal;?></td>
                    <td><?php echo $row_list2['nmbre_sucursal'];?></td>
                    <td><?php echo $row_list2['descripcion_sucursal'];?></td>
                    <td><?php echo $row_list2['telefono_sucursal'];?></td>
                    <td><?php echo $row_list2['horario_sucursal'];?></td>
                    <td><a href="sucursales2d.php?sucursal=<?php echo $id_sucursal?>&estado=<?php echo $id_estado?>" ><img src="../images/close.png" width="20" height="20" alt=""/></a></td>
                </tr>
               <?php } while ($row_list2 = mysqli_fetch_assoc($list2));	?>               
                </tbody>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>Nombre</th>
                  <th>Descripción</th>
                  <th>Telefono</th>
                  <th>Horario</th>
                  <th>Eliminar</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <?php }else {echo "No tiene sucursales";}?>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      <a href="http://visionebc.com">VISIONEBC</a>.</strong> All rights reserved.
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016
  </footer>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.1.4 -->
<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>