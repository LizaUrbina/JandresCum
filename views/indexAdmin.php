<?php 

  require_once "../controller/ControllerUsuario.php";
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
	
	
	<a href="../app/cerrarSesion.php">Cerrar Sesion</a>
</body>
</html>
