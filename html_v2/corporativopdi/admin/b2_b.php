<?php require_once('top.php'); ?>
<?php require_once('leftmenu.php'); ?>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edición de paginas
        <small>Seccion</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

       <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Edición de paginas</h3>´
              <form method="post" action="b2_b.php">               
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
            <div id="my_id" style="display: none; background-color:#BAB2E0;"><iframe name="mainFrame" frameborder="0" width="200px" height="60px" scrolling="no"></iframe></div>
            <!-- /.box-header -->
            <div class="box-body pad">
                <?php
				$fichero = $_POST["docs"];
				
					$fp = fopen($fichero,"r"); 
						$contenido = fread ($fp, filesize ($fichero)); 
					fclose($fp);
					$contenido2=explode("<body>", $contenido);
					$contenido3=$contenido2[1];
					
					$contenido4=explode("</body>", $contenido3);
					$contenido5=$contenido4[0];
					$contenido6=htmlentities($contenido5);
				
				echo "<form method='POST' action='b2_c.php' target='mainFrame'>
					<textarea class=\"ckeditor\" id=\"editor1\" name=\"editor1\" cols=\"150\" rows=\"10\">$contenido</textarea>
					<br>
					<input type='hidden' value='$fichero' name='fichero'/>
					<input type='Submit' value='Guardar' onclick=\"document.getElementById('my_id').style.display = 'block' ;\">
					</form>";
				?>
            </div>
          </div>         
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php require_once('bottom.php'); ?>