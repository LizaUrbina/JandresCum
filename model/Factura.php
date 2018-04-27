<?php 
	require_once'Conexion.php';

	/**
	* 
	*/
	class Factura extends Conexion
	{
		private $id;
  		private $codigo;
  		private $fecha;
  		private $fechaRegistroSistema;
  		private $fechaModificacionSistema;
  		private $estado;
		
		function __construct()
		{
			parent:: __construct;
		}
	}

 ?>