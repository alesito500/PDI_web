<?php
	if (!isset($_SESSION)) {
	  session_start();
	}

	  $_SESSION['MM_Username'] = NULL;
	  $_SESSION['MM_UserGroup'] = NULL;
	  $_SESSION['PrevUrl'] = NULL;
	
	  unset($_SESSION['MM_Username']);
	  unset($_SESSION['MM_UserGroup']);
	  unset($_SESSION['PrevUrl']);
	  header("Location: ../index.php");

?>