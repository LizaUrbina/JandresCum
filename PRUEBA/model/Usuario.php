<?php

 require_once "Conexion.php";
 require_once "../app/validacionGeneral.php"; 

 class Usuario extends Conexion{

	  private $usuario;
	  private $password;
	  private $estado;
	  private $rol;

	  public function __construct()
	  {
	  	parent::__construct();
	  }

	  public function getUsuario()
	  {
	  	return $this->usuario;
	  }

	  public function setUsuario($usuario)
	  {
	  	$this->usuario=$usuario;
	  }

	  public function getPassword()
	  {
	  	return $this->password;
	  }

	  public function setPassword($password)
	  {
	  	$this->password=$password;
	  }  

	  public function getEstado()
	  {
	  	return $this->estado;
	  }

	  public function setEstado($estado)
	  {
	  	$this->estado=$estado;
	  }

	  public function getRol()
	  {
	  	return $this->rol;
	  }

	  public function setRol($rol)
	  {
	  	$this->rol=$rol;
	  }

	  public function generatePassword($password)
		{
			$passEnco = sha1($password);
			return $passEnco;
		}


	  public function login($usuario,$password)
	  {
	  	$con=$this->conectar();
	  	$passEnco = $this->generatePassword($password);
	  	$sql="SELECT u.username as usuario, r.nombre as rol FROM usuario u INNER JOIN rol r on u.rol_id=r.id WHERE u.username='".$usuario."' AND u.password='".$passEnco."'";

	  	$info=$con->query($sql);

	  	if($info)
	  	{
	  		$data=$info->fetch_assoc();

	  		$cantidadRegistros=count($data);

	  		if($cantidadRegistros>0)
	  		{

	  			session_start();
	  			$_SESSION['ROL']=$data['rol'];
	  			$_SESSION['USUARIO']=$data['usuario'];

	  			if($data['rol']=="ADMIN")
	  			{
	  				header("Location:../views/indexAdmin.php");	
	  			}
	  			else if($data['rol']=="CLIENTE")
	  			{
	  				header("Location:../views/indexCliente.php");
	  			}
	  			
	  		}
	  		else
	  		{
	  			header("Location:../indexLogin.php");
	  		}
	  	}
	  	else
	  	{
	  		header("Location:../indexLogin.php");
	  	}

	  }

	  public function crearCuenta($usuario,$password,$estado,$rol)
	  {
	  	$con=$this->conectar();
	  	$sql="INSERT into usuario (username,password,estado,rol_id) VALUES('$usuario','$password','1','$rol')";

	  	$info=$con->query($sql);

	  	 if($info)
	  	 {
	  	 	echo "<h2>Error al crear cuenta</h2>";
	  	 	header("Location:../indexLogin.php");
	  	 }

	  }

	  public function getAll()
	  {
	  	$con=$this->conectar();
	  	$sql="SELECT * FROM usuario u WHERE u.estado=1";
	  	$info=$con->query($sql);

	  	return $info;
	  }






 }





?>