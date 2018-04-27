<?php 
	require_once'Conexion.php';

	/**
	* 
	*/
	class Factura 
	{
		private $id;
  		private $codigo;
  		private $fecha;
  		private $fechaRegistroSistema;
  		private $fechaModificacionSistema;
  		private $estado;
		
		function __construct()
		{
			parent:: __construct();
		}
		public function getId()
		{
			return $this->id;
		}
		public function setId($id)
		{
			$this->id=$id;
		}
		public function getCodigo()
		{
			return $this->codigo;
		}
		public function setFecha($codigo)
		{
			$this->codigo=$codigo;
		}
		public function getFecha()
		{
			return $this->fecha;
		}
		public function setFechaRegistro($fecha)
		{
			$this->fecha=$fecha;
		}
		public function getFechaRegistro()
		{
			return $this->fechaRegistroSistema;
		}
		public function setFechaModificacion($fechaRegistroSistema)
		{
			$this->fechaRegistroSistema=$fechaRegistroSistema;
		}
		public function getFechaModi()
		{
			return $this->fechaModificacionSistema;
		}
		public function setFechaModi($fechaModificacionSistema)
		{
			$this->fechaModificacionSistema=$fechaModificacionSistema;
		}
		
		public function getAll()
	{
		$con=$this->conectar();
		
		$info=$con->query($sql);
		if ($info->num_rows>0) {
			$data=$info;
		}else{
			$data= null;
		}
		return $data;
	}


}
 ?>