<?php require_once('../Connections/dpi2.php');?>
<?php require_once('top.php'); ?>
<?php require_once('leftmenu.php'); ?>
<?php 
	mysqli_select_db($dpi, $database_dpi);
	$query_list = "SELECT * 
	FROM contacto";
	$list = mysqli_query($dpi,$query_list) or die(mysql_error());
	$row_list = mysqli_fetch_assoc($list);
	$totalRows_list = mysqli_num_rows($list);
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Datos de mails enviados
        <small>plataforma</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Datos de correos enviados</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Nombre</th>
                  <th>Mail</th>
                  <th>Telefono</th>
                  <th>Auto</th>
                  <th>Sucursal</th>
                  <th>Mensaje</th>
                </tr>
                </thead>
                <tbody>
                 <?php do { ?>
                <tr>
                    <td><?php echo $row_list['id_contacto'];?></td>
                    <td><?php echo $row_list['nombre_contacto'];?></td>
                    <td><?php echo $row_list['mail_contacto'];?></td>
                    <td><?php echo $row_list['tel_contacto'];?></td>
                    <td><?php echo $row_list['auto_contacto'];?></td>
                    <td><?php echo $row_list['listasucursales_contacto'];?></td>
                  	<td><?php echo $row_list['mensajeforma_contacto'];?></td>
                </tr>
               <?php } while ($row_list = mysqli_fetch_assoc($list));	?>               
                </tbody>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>Nombre</th>
                  <th>Mail</th>
                  <th>Telefono</th>
                  <th>Auto</th>
                  <th>Sucursal</th>
                  <th>Mensaje</th>
                </tr>
                </tfoot>
              </table>
            </div>
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
