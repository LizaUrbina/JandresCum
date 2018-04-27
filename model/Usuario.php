<?php 

	require_once 'Conexion.php';

/**
* 
*/
class Usuario extends Conexion
{
	private $username;
	private $password;
	private $estado;
	private $rol;
	
	public function __construct()
	{
		parent:: __construct();
	}

	public function getUsername()
	{
		return $this->username;
	}
	public function setUsername($username)
	{
		$this->username = $username;
	}
	public function getPassword()
	{
		return $this->password();
	}
	public function setPassword($password)
	{
		$this->password = $password;
	}
	private function getEstado()
	{
		return $this->estado;
	}
	public function setEstado($estado)
	{
		$this->estado = $estado;
	}
	public function getRol()
	{
		return $this->rol;
	}
	public function setRol($rol)
	{
		$this->rol = $rol;
	}

	public function generatePassword($password)
	{
		$passEnco = sha1($password);
	}

	public function login($username,$password)
	{
		$con = $this->conectar();
		$passEnco = $this->generatePassword($password);

		$sql = "SELECT u.username as usuario, r.nombre as rol FROM usuario u INNER JOIN rol r ON u.rol_id = r.id WHERE 
			u.estado = 1 AND r.estado =1 AND u.username = '".$username."' and u.password = '".$passEnco."'";

			$info = $con->query($sql);

				if ($info->num_rows>0) {
					
					$data = $info->fetch_assoc();

					session_start();

					$_SESSION['ROL'] = $data['rol'];
					$_SESSION['USUARIO'] = $data['usuario'];

				}
				else
				{
					header('Location: ../indexLogin.php');
					//comentariodfdfds
				}
	}
}

 ?>