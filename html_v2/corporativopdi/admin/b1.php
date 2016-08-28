<?php require_once('top.php'); ?>
<?php require_once('leftmenu.php'); ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edición de paginas
        <small>Codigo</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

       <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Edición de paginas</h3>´
              <form method="post" action="b1_b.php">              
                <select name="docs" class="docs">
                  <option value="">..: Elegir archivo :..</option>
                    <?php
                    $path="../";
                    function listar_directorios_ruta($ruta,$part){ 
                        // abrir un directorio y listarlo recursivo 
                        if (is_dir($ruta)) { 
                            if ($dh = opendir($ruta)) { 
                                while (($file = readdir($dh)) !== false) { 
                                    if(($file==".")||($file=="..")||($file==" ")){            	
                                    }
                                    else {						
                                        $rutafile=$ruta."/".$file;
                                        $extension = (pathinfo("$rutafile",PATHINFO_EXTENSION ));
                                        $extension=strtolower ($extension);
                                        if($extension=="jpg" || $extension=="gif" || $extension=="png" || $extension=="ico"|| $extension=="jpeg"|| $extension=="bmp"){}
                                        else{
                                            if (is_dir($ruta . $file) && $file!="." && $file!=".."){ 								
                                            }
                                            else{ 
                                                echo '<option value="'.$rutafile.'">'.$file.'</option>';
                                            }
                                        }										
                                    } 
                                } 
                                closedir($dh); 
                            } 
                        }else 
                            echo "<br>No es ruta valida"; 
                        }
                        listar_directorios_ruta($path,$part);
                ?>
                </select> 
               <input name="" type="submit" value="Enviar">
			  </form>

            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
            </div>
          </div>         
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php require_once('bottom.php'); ?>