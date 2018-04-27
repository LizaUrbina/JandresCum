<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../plugins/css/bootstrap.css">
    <link rel="stylesheet" href="../plugins/css/style.css">
    <script src="../plugins/js/jquery.js"></script>
    <script src="../plugins/js/bootstrap.min.js"></script>
</head>
<body>
		<div class="contenedor">
      <p class="display-4">Iniciar Sesión</p> 
      <br>
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
              <label for="">Contraseña:</label>
                  <input type="password" class="form-control" name="pass" id="pass">
            </div>
          </div>
        </div>
        <input type="hidden" id="tipo" name="tipo" value="login">
        <p>¿Aún no tiene Cuenta? <a href="registroView.php">Regístrarse</a></p>
        <div class="form-row">
          <div class="form-column col-md-12">
            <button class="btn btn-success" id="btnLogin">Ingresar</button>
          </div>
        </div>
      </form>
    </div> 
    </div>
</body>
</html>