<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro usuario</title>
	<link rel="stylesheet" type="text/css" href="../plugins/css/bootstrap.min.css">
	<link rel="stylesheet" href="../plugins/css/style.css">
	   <script src="../plugins/js/jquery.js"></script>
    <script src="../plugins/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="contenedor">
		<h4 class="display-4">
			Registro
		</h4>
		<div class="contenedor-interno">
			<form id="frmLogin" action="../controller/ControllerUsuario.php" method="POST">
				<div class="form-row">
					<div class="form-column col-md-12">
						<div class="form-group">
							<label for="">Nombre de Usuario:</label>
	        				<input type="text" class="form-control" name="user" id="user">
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="form-column col-md-12">
						<div class="form-group">
							<label for="">Tipo de Usuario:</label>
	        				<select type="text" class="form-control" name="TipoUser" id="TipoUser">
								<option value="-">Seleccionar...</option>
	        					<option value="1">Administrador</option>
	        					<option value="2">Usuario</option>
	        				</select>
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="form-column col-md-12">
						<div class="form-group">
							<label for="">Contraseña:</label>
	        				<input type="password" class="form-control" name="pass" id="pass">
						</div>
					</div>
				</div>
				<input type="hidden" id="tipo" name="tipo" value="registro">
				<div class="form-row">
					<div class="form-column col-md-12">
						<button class="btn btn-success" id="btnRegistro">Registrarse</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>