<?php require_once('top.php'); ?>
<?php require_once('leftmenu.php'); 
$x=0;?>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Imagenes
        <small>Edición</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

       <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Edición de imagenes locales</h3>´
              <center><h3><a href="#addimg" title="Traspaso">Agregar imagenes</a></h3></center>
            </div>

            
            <!-- /.box-header -->
            <div class="box-body pad">
            <div class=\"col-xs-4\">
				
			</div><br>
            <?php			
				$dir='../images/';
				$images = glob("$dir{*.gif,*.jpg,*.png}", GLOB_BRACE);  
				foreach($images as $v){  
					$v2=explode('../',$v);
					$v2=$v2[1];
				
					echo "<div class=\"row\">
							<div class=\"col-xs-5\">
									<img src=\"$v\" border=\"0\" style=\"width:300px;\" /><br>
							</div>
							<div class=\"col-xs-4\">
								http://www.prestadinero.com/$v2
							</div>
							<div class=\"col-xs-2\">
								<a href=\"#delimg$x\" title=\"Traspaso\">Eliminar</a>
							</div>
						</div><hr>";
						
					echo "<div id=\"delimg$x\" class=\"modalmask\">
							<div class=\"modalbox movedown\">
								 <a href=\"#close\" title=\"Close\" class=\"close\">X</a>
								  <h2>Eliminar imagenes</h2><hr><br>
								  <form action=\"b3_d_img.php\" method=\"post\" name=\"formname\" enctype=\"multipart/form-data\">
										<div class=\"col-sm-6\">
											<center><img src=\"$v\" border=\"0\" style=\"width:200px;\" /></center>
										</div>
										<center><input type=\"submit\" value=\"Eliminar\" class=\"course-submit\"></center>
										<input type=\"hidden\" value=\"$v\" name=\"img\">
									</form><br><br><br><br><br><br><br><br><br><br><br>
							 </div>
						</div>"; 
						$x++;  
				}  
			?> 
            </div>
          </div>         
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php require_once('bottom.php'); ?>

<div id="addimg" class="modalmask">
	<div class="modalbox movedown">
         <a href="#close" title="Close" class="close">X</a>
          <h2>Agregar imagenes</h2><hr><br>
          <form action="b3_c_img.php" method="post" name="formname" enctype="multipart/form-data">
                <div class="col-sm-6">
                    Imagen <input class="form-control has-dark-background" name="img" id="img" placeholder="img" type="file"/>
                </div>
				<center><input type="submit" value="Guardar" class="course-submit"></center>
			</form><br><br>
     </div>
</div>