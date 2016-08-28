<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_dpi = "127.0.0.1";
$database_dpi = "pdi";
$username_dpi = "root";
$password_dpi = "";
$dpi = mysqli_connect($hostname_dpi, $username_dpi, $password_dpi,$database_dpi); 
date_default_timezone_set('America/Mexico_City');
mysqli_query($dpi ,"SET NAMES 'utf8'");

if (!isset($_SESSION)) {
	  session_start();
}
//initialize the session
if(!isset($_SESSION["MM_Username"]))
{
	echo "<META HTTP-EQUIV=\"REFRESH\" CONTENT=\"0;URL=index.php\"> ";
}
else{
	
}

?>