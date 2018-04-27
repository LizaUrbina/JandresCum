<?php  ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registrar Factura</title>
	<link rel="stylesheet" href="../plugins/css/bootstrap.css">
    <link rel="stylesheet" href="../plugins/css/style.css">
    <script src="../plugins/js/jquery.js"></script>
    <script src="../plugins/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="contenedor">
		<h4 class="display-4">Registrar Factura</h4>
		<hr>
		<div class="barra-principal">
			<form action="../controller/ControllerFactura.php" method="POST" class="">
				<div class="form-row">
					<div class="form-column col-md-6">
						<div class="form-group">
							<label for="">Código Factura:</label>
							<input type="text" class="form-control" name="cod" readonly="true">
						</div>
					</div>
					<div class="form-column col-md-6">
						<div class="form-group">
							<label for="">Fecha:</label>
							<input type="text" class="form-control" name="fecha">
						</div>
					</div>
					<div class="form-column col-md-2">
						<div class="form-group">
							<input type="submit" class="btn btn-success" name="btnFactura" value="Registrar" disabled="">
						</div>
					</div>
				</div>
				<hr>
			</form>
		</div>
		<p class="h3">Detalle de Factura</p>
		<form action="" id="frmDetalle">
				
		</form>
	</div>
</body>
</html>