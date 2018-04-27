<?php 

  require_once "../model/Usuario.php";
  require_once "../app/validacionGeneral.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index admin</title>
</head>
<body>
	<h2>Bienvenido <?php echo $_SESSION['USUARIO']?></h2>
	<a href="indexCrud.php">crud</a>
	
	
	<a href="../app/cerrarSesion.php">Cerrar Sesion</a>
</body>
</html>
