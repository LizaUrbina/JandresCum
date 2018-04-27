<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro usuario</title>
	<link rel="stylesheet" type="text/css" href="../plugins/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../plugins/css/miestilo.css">
</head>
<body>
<<<<<<< HEAD


<div class="container col-md-4" style="margin-top: 15%; border-color: black;">
			<div class="row">
				<div class="cuadro">
					<form action="../controller/ControllerUsuario.php" method="POST">	
							<div class="form-group">
								<label>Nombre usuario</label>
								<input type="text" name="user" placeholder="User" class="form-control">
							</div>
							<div class="form-group">
									<label>Password</label>
									<input type="password" name="pass" placeholder="Password" class="form-control">
							</div>
							<div class="form-group">
										<input type="hidden" name="estado" value="1">
							</div>
							<div class="form-group">
									<label>Tipo usuario</label>
									<input type="radio" name="rol" value="1">ADMIN
									<input type="radio" name="rol" value="2">CLIENTE
							</div>
							<div class="form-group">
									<input type="submit" name="Registrar" value="Registrar" class="btn btn-success">	
							</div>
					</form>
						
				</div>
			</div>
			

		</div>

=======
	<form action="../controller/ControllerUsuario.php" method="POST">
		<table>
			<tr>
				<td><label>Nombre usuario</label></td>
				<td><input type="text" name="user" placeholder="User"></td>
			</tr>
			<tr>
				<td><label>Password</label></td>
				<td><input type="password" name="pass" placeholder="Password"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="estado" value="1"></td>
			</tr>
			<tr>
				<td><label>Tipo usuario</label></td>
				<td><input type="radio" name="rol" value="1">ADMIN
					<input type="radio" name="rol" value="2">USUARIO</td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="Registrar" value="Registrar"></td>
			</tr>
		</table>
	</form>
	
>>>>>>> 8c95b5fbf432fcc922a95c0eed70c0a86c8086d0
</body>
</html>