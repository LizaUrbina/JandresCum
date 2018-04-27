<?php 

	require_once "../model/Usuario.php";
	require_once "../app/validacionGeneral.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index usuario</title>
</head>
<body>
	<h2>Bienvenido <?php echo $_SESSION['USUARIO']; ?></h2>
	<br>
	<a href="../app/cerrarSesion.php">Cerrar Sesion</a>
</body>
</html>