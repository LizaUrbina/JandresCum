<?php  
	require_once '../model/Usuario.php';
	$datos =  new Usuario();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CRUD Shido</title>
	<link rel="stylesheet" href="../plugins/css/bootstrap.css">
	<link rel="stylesheet" href="../plugins/css/style.css">
	<script src="../plugins/plugins/js/jquery.js"></script>
	<script src="../plugins/js/bootstrap.min.js"></script>
	<script src="../plugins/js/registrar.js"></script>
	<script src="../plugins/js/botones.js"></script>
	<script src="../plugins/js/eliminar.js"></script>
	<script src="../plugins/js/editar.js"></script>
</head>
<body>
	<!-- CÓDIGO MODALES  -->

	<!-- modal registrar -->
	<div class="modal fade" id="ModalRegistrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="ModalRegistrarTitulo">Registrar Usuario</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form action="proc/regAuto.php" method="POST" id="frmRegistrar">
	        	<div class="form-row">
	        		<div class="form-column col-md-12">
	        			<div class="form-group">
	        				<label for="">Marca:</label>
	        				<input type="text" class="form-control" name="marcaRegistrar" id="marcaRegistrar">
	        			</div>
	        		</div>
	        	</div>
	        	<div class="form-row">
	        		<div class="form-column col-md-6">
	        			<div class="form-group">
	        				<label for="">Modelo:</label>
	        				<input type="text" class="form-control" name="modeloRegistrar" id="modeloRegistrar">
	        			</div>
	        		</div>
	        		<div class="form-column col-md-6">
	        			<div class="form-group">
	        				<label for="">Año:</label>
	        				<input type="text" class="form-control" name="yearRegistrar" id="yearRegistrar">
	        			</div>
	        		</div>
	        	</div>
	        	<input type="hidden" value="registrar" name="tipo">
	        	<!-- <input type="submit" class="btn btn-primary" id="btnRegistrar" name="tugfa" value="Registrar"> -->
	        </form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal" >Cancelar</button>
	        <button type="button" class="btn btn-primary" id="btnRegistrar" name="tugfa">Registrar</button>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- modal editar -->
	<div class="modal fade" id="ModalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="ModalRegistrarTitulo">Editar Automóvil</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form action="" method="POST" id="frmEditar">
	        	<div class="form-row">
	        		<div class="form-column col-md-12">
	        			<div class="form-group">
	        				<label for="">Marca:</label>
	        				<input type="text" class="form-control marcaEditar" name="marcaEditar" id="marcaEditar">
	        			</div>
	        		</div>
	        	</div>
	        	<div class="form-row">
	        		<div class="form-column col-md-6">
	        			<div class="form-group">
	        				<label for="">Modelo:</label>
	        				<input type="text" class="form-control editar" name="modeloEditar" id="modeloEditar">
	        			</div>
	        		</div>
	        		<div class="form-column col-md-6">
	        			<div class="form-group">
	        				<label for="">Año:</label>
	        				<input type="text" class="form-control editar" name="yearEditar" id="yearEditar">
	        			</div>
	        		</div>
	        	</div>
	        	<input type="hidden" value="" name="idEditar" id="idEditar">
	        	<input type="hidden" value="editar" name="tipo">
	        </form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
	        <button type="button" class="btn btn-info" id="btnEditar">Editar</button>
	      </div>
	    </div>
	  </div>
	</div>
	
	<!-- modal eliminar -->
	<div class="modal fade" id="ModalEliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="ModalRegistrarTitulo">Eliminar Automóvil</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<form action="php/Controller/registrarController.php" method="POST" id="frmEliminar">
	      		<input type="hidden" value="" name="idEliminar" id="idEliminar">
	      		<input type="hidden" value="eliminar" name="tipo">
	      		<!-- <input type="submit" class="btn btn-danger" id="btnEliminar" value="Eliminar"> -->
	      	</form>
	       	¿Desea eliminar el registro?
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
	        <button type="button" class="btn btn-danger" id="btnEliminar">Eliminar</button>
	      </div>
	    </div>
	  </div>
	</div>


	<div class="contenedor">
		<p class="display-4">CRUD Shido</p>
		<hr>
		<div class="barra-principal">
			<p class="h3">Registros</p>
			<button class="btn btn-primary" data-toggle="modal" data-target="#ModalRegistrar">Registrar</button>
		</div>
		<hr>
		<div class="tabla">
			<?php $auto->getAllAutos() ?>
		</div>
	</div>
</body>
</html>