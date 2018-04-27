<?php 
require_once '../model/Factura.php'
?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Facturas</title>

    <link rel="stylesheet" href="../plugins/css/bootstrap.css">
    <link rel="stylesheet" href="../plugins/dataTable/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../plugins/css/style.css">
    <script src="../plugins/js/jquery.js"></script>
    <script src="../plugins/js/bootstrap.min.js"></script>
    <script src="../plugins/dataTable/jquery.dataTables.min.js"></script>
 	<script src="../plugins/dataTable/dataTables.bootstrap.min.js"></script>
 </head>
 <body>
<div class="contenedor">
	<p class="display-4">Facturas</p>
	<br>
  <hr>
  <div class="barra-principal">
      <p class="h3">Registros</p>
      <a class="btn btn-primary" href="viewRegistroFacturas.php">Registrar</a>
    </div>
    <hr>
	<table id="listado" class="table table-striped table-bordered" cellspacing="1" width="100%">
 		<thead>
  			<th>Código</th> 
  			<th>Fecha</th> 
  			<th>fechaRegistroSistema</th> 
  			<th>fechaModificacionSistema</th> 
  			
 		</thead>
 		<tbody>
 			<?php 
 				$objFac = new Factura();
 				// $data=$objUser->getAll();

 				// foreach ($data as $value) {
 				// 	echo "<tr>
					// 		<td>".$value['id']."</td>
					// 		<td>".$value['codigo']."</td>
					// 		<td>".$value['fecha']."</td>
					// 		<td>".$value['fechaRegistroSistema']."</td>
					// 		<td>".$value['fechaModificacionSistema']."</td>
 				// 		  </tr>";
 				// }
 			 ?>
 		</tbody>
 	</table>
</div>
 	

 </body>
 <script type="text/javascript">
 	$(document).ready(function(){

 		$("#listado").DataTable();

 	});
 </script>
 </html>