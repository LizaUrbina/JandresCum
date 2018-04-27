<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro usuario</title>
</head>
<body>
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
					<input type="radio" name="rol" value="2">CLIENTE</td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="Registrar" value="Registrar"></td>
			</tr>
		</table>
	</form>
	
</body>
</html>