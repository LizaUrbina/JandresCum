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



	<br>

	<form action="controller/ControllerUsuario.php" method="POST">
		<center>
			<br>
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

	</center>
	
</body>
</html>