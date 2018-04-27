<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="plugins/css/bootstrap.css">
    <link rel="stylesheet" href="plugins/css/style.css">
    <script src="plugins/js/jquery.js"></script>
    <script src="plugins/js/bootstrap.min.js"></script>
</head>
<body>
		
  <div class="contenedor">
    <form method="POST" action="controller/UsuarioController.php">
    <h2><center>INICIO DE SESION</center></h2>
    <br><br><br>
      <div class="row" id="datos">
        <div class="form-column col-md-6 col-sm-6 col xs-6">
            <div class="form-group">
            <label for="user">User:</label>
            <input type="text" class="form-control requerido" id="user" name="user" >
          </div>
        </div>
        <div class="form-column col-md-6 col-sm-6 col xs-6">
            <div class="form-group">
            <label for="pass">Password:</label>
            <input type="password" class="form-control requerido" id="pass" name="pass">
          </div>
        </div>
        <input type="submit" name="login" value="Login" class="btn btn-success" id="login">
      </div>
    </form>
    </div>
  </div>
</body>
</html>
</body>
</html>