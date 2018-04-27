<?php 
	require_once'../app/validacionGeneral.php';
	require_once'../controller/UsuarioController.php';
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>

 	<link rel="stylesheet" href="../plugins/dataTable/material.min.css">
 <link rel="stylesheet" href="../plugins/dataTable/dataTables.material.min.css">
 <script type="text/javascript" src="../plugins/jquery/jquery-3.3.1.js"></script>
 <script type="text/javascript" src="../plugins/dataTable/jquery.dataTables.min.js"></script>
 <script type="text/javascript" src="../plugins/dataTable/dataTables.material.min.js"></script>

 </head>
 <body>

 	<table id="listado" class="mdl-data-table" cellspacing="1" width="100%">
 		<thead>
 			
 			<th>$id;</th>
  			<th>$codigo</th> 
  			<th>$fecha</th> 
  			<th>$fechaRegistroSistema</th> 
  			<th>$fechaModificacionSistema</th> 
  			
 		</thead>
 		<tbody>
 			<?php 
 				$objUser = new Factura();
 				$data=$objUser->getAll();

 				foreach ($data as $value) {
 					echo "<tr>
							<td>".$value['id']."</td>
							<td>".$value['codigo']."</td>
							<td>".$value['fecha']."</td>
							<td>".$value['fechaRegistroSistema']."</td>
							<td>".$value['fechaModificacionSistema']."</td>
 						  </tr>";
 				}
 			 ?>
 		</tbody>
 	</table>

 </body>
 <script type="text/javascript">
 	$(document).ready(function(){

 		$("#listado").dataTable();

 	});
 </script>
 </html>