<?php 

 require_once "../app/validacionGeneral.php";

	class Conexion{

		private $host;
		private $user;
		private $password;
		private $database;

		public function __construct()
		{
			$data= require_once "../app/config.php";
			$this->host=$data['host'];
			$this->user=$data['user'];
			$this->password=$data['password'];
			$this->database=$data['database'];
		}

		public function conectar()
		{
			$con= new mysqli($this->host,$this->user,$this->password,$this->database);

			if(mysqli_connect_errno())
			{
				echo "Error al conectar";
				die();
			}

			return $con;
		}


		public function ejecutar($sql)
	    {
		$resultado = $this->conectar()->query($sql);

		return $resultado;
	     }




	}





?>