<?php 

class Conexion
{
	private $hostName;
	private $dbUser;
	private $dbPass;
	private $dbName;

	public function __construct()
	{
		
	}

	public function conectar()
	{
		$datos = include '../app/config.php';

		$this->hostName = $datos["hostName"];
		$this->dbUser   = $datos["dbUser"];
		$this->dbPass   = $datos["dbPass"];
		$this->dbName   = $datos["dbName"];

		$con = new mysqli($this->hostName, $this->dbUser, $this->dbPass, $this->dbName);

		return $con;
	}

	public function ejecutar($sql)
	{
		$resultado = $this->conectar()->query($sql);

		return $resultado;
	}
}