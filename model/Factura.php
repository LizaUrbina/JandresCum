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
		public function set($codigo)
		{
			$this->codigo=$codigo;
		}
		public function getFecha()
		{
			return $this->fecha;
		}
		public function set($fecha)
		{
			$this->fecha=$fecha;
		}
		public function getFechaRegistro()
		{
			return $this->fechaRegistroSistema;
		}
		public function set($fechaRegistroSistema)
		{
			$this->fechaRegistroSistema=$fechaRegistroSistema;
		}
		public function getFechaModificacion()
		{
			return $this->fechaModificacionSistema;
		}
		public function set($fechaModificacionSistema)
		{
			$this->fechaModificacionSistema=$fechaModificacionSistema;
		}
		public function generatePassword($password){
		$passEnco= sha1($password);
		return $passEnco;
	}



	public function getAll()
	{
		$con=$this->conectar();
		$sql="SELECT * FROM usuario u WHERE u.estado=1";
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