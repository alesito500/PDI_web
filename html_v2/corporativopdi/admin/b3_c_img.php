<?php

	if(!empty($_FILES["img"]["tmp_name"])){
		$src1  = $_FILES["img"]["tmp_name"];
		$carta = "../images/".$_FILES["img"]["name"];
		copy($src1,$carta);	
	}
	else{
		$carta=NULL;
	}

echo "<meta http-equiv=\"Refresh\" content=\"0;url=b3.php \">";
?>