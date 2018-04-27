<?php

 require_once "Conexion.php";

 class Usuario extends Conexion{

 	  private $id;
	  private $usuario;
	  private $password;
	  private $estado;
	  private $rol;

	  public function __construct()
	  {
	  	parent::__construct();
	  }

	  public function getId()
	  {
		return $this->id;
	  }
	  public function setId($id)
	  {
		$this->id = $id;
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
	  			header("Location:../index.php");
	  		}
	  	}
	  	else
	  	{
	  		header("Location:../index.php");
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
	  	 	header("Location:../index.php");
	  	 }

	  }

	  


	  public function consultarUsuario()
	{
		$_query = "call p_Consultar(".$this->id.")";

		$resultado = $this->conectar()->query($_query);

		$fila = $resultado->fetch_assoc();

		return json_encode($fila);
	}


	public function editarUsuario()
	{
		$passEnco = $this->generatePassword($password);
		$_query = "call p_Editar(".$this->id.", '".$this->usuario."', '".$passEnco."', '".$this->estado."', '".$this->rol."')";

		$resultado = $this->conectar()->query($_query);

		return $resultado;
	}

	public function EliminarUsuario()
	{
		$_query = "call p_Eliminar(".$this->id.")";

		$resultado = $this->conectar()->query($_query);

		return $resultado;
	}

	public function registrarUsuario()
	{
		$passEnco = $this->generatePassword($password);
		$_query = "call p_Registrar('".$this->usuario."', '".$passEnco."', '".$this->estado."', '".$this->rol."')";

		$resultado = $this->conectar()->query($_query);

		return $resultado;
	}

	public function getAllUsuarios()
	{
		$_query = "SELECT * FROM usuario";

		$resultado = $this->conectar()->query($_query);

		$numFilas = $resultado->num_rows;

		if($numFilas == 0)
		{
			echo '	<table class="tabla">
						<tr><th class="text-center">No se ha registrado ningún usuario registrado</th></tr>
					</table>';
		}
		else
		{
			echo '	<table class="table table-hover">
					<thead>
						<tr>
							<th class="text-left">Username</th>
							<th class="text-left">Password</th>
							<th class="text-left">Estado</th>
							<th class="text-left">Rol</th>
							<th></th>
						</tr>
					</thead>
					<tbody>';
			while($fila = $resultado->fetch_assoc())
			{
				if($fila["estado"] == 1)
				{
					echo '	<tr class="fila-tabla">
							<td class="text-left">'.$fila["usuario"].'</td>
							<td class="text-left">'.$fila["password"].'</td>
							<td class="text-left">'.$fila["estado"].'</td>
							<td class="text-left">'.$fila["rol"].'</td>
							<td class="text-right">
								<button onClick="Editar('.$fila["id"].')" class="btnCrud btn btn-secondary" title="Editar" data-toggle="modal" data-target="#ModalEditar">
									Editar
								</button>
								<button onClick="Eliminar('.$fila["id"].')" class="btnCrud btn btn-danger" title="Eliminar" data-toggle="modal" data-target="#ModalEliminar">
									Eliminar
								</button>
							</td>
						</tr>';
				}
			}
		}
	}
}


?>