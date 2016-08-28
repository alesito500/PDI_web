<?php require_once('../Connections/dpi2.php');?>
<?php require_once('top.php'); ?>
<?php require_once('leftmenu.php'); ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Cambio
        <small>Administrador</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

       <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Cambio de contraseña</h3>´
            </div>
            <div id="my_id" style="display: none; background-color:#BAB2E0;height:60px"><iframe name="mainFrame" frameborder="0" width="200px" height="60px" scrolling="no"></iframe></div>
            
            <!-- /.box-header -->
            <div class="box-body pad">
            <form ACTION="e_b.php" METHOD="POST" id="loginForm" target="mainFrame">
                      <fieldset id="body">                       
                        <div class="col-sm-4">
                            <label for="password">Nueva Contraseña: </label>
                            <input type="password" name="password" id="password" />
                        </div>
                           <div class="col-md-3 box-footer">
                            <button type="reset" class="btn btn-info pull-left">Cancel</button>
                            <button type="submit" class="btn btn-info pull-right" onclick="document.getElementById('my_id').style.display = 'block' ;">Sign in</button>
                         </div>        
                     </fieldset>
                </form>	
                <br><br>
            </div>
          </div>         
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php require_once('bottom.php'); ?>