

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="plugins/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="plugins/css/miestilo.css">
</head>
<body>

<div class="container col-md-4" style="margin-top: 15%; border-color: black;">
			<div class="row">
				<div class="cuadro">
						<form action="controller/ControllerUsuario.php" method="POST">
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
	

	</center>
	
</body>
</html>