<?php 
	session_start();
	if ($_SESSION['ROL']=="Administrador") {
	
	}else
	{
		header("Location: ../login.php");
	}
	 ?>