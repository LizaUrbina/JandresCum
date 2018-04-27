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

</body>
</html>