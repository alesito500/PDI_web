<?php

echo $img=$_POST['img'];
unlink($img);

echo "<meta http-equiv=\"Refresh\" content=\"0;url=b3.php \">";
?>