<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../plugins/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../plugins/css/miestilo.css">
</head>
<body>

<<<<<<< HEAD
<div class="container col-md-4" style="margin-top: 15%; border-color: black;">
			<div class="row">
				<div class="cuadro">
						<form action="controller/usuarioController.php" method="POST">
							<div class="form-group">
								<label>Usuario</label>
								<input type="text" name="user" class="form-control">
								
							</div>
							<div class="form-group">
								<label>Contraseña</label>
								<input type="password" name="pass" class="form-control">
							</div>
							<div class="form-group">
								<input type="submit" name="Submit" value="Ingresar" class="btn btn-success">
												

							</div>
							<div class="form-group">
								<a style="color:skyeblue;" href="views/registroUsuario.php">Desea crear una cuenta?</a>
							</div>
							
						</form>
				</div>
			</div>
			

		</div>

	<br>
	
=======
	<form action="controller/ControllerUsuario.php" method="POST">
		<center>
			<br><br><br><br><br><br><br><br>
		<table>
			<tr>
				<td><label>Usuario</label></td>
				<td><input type="text" name="user" placeholder="User"></td>
			</tr>
			<tr>
				<td><label>Password</label></td>
				<td><input type="password" name="pass" placeholder="Password"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="Login" value="Login"></td>
			</tr>
		</table>
	</form>
	<!-- <br>
	<a style="color:skyeblue;" href="views/registroUsuario.php">Desea crear una cuenta?</a>-->
>>>>>>> 8c95b5fbf432fcc922a95c0eed70c0a86c8086d0
	</center>
	
</body>
</html>