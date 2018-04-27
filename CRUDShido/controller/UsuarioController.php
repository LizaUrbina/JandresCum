<?php

require_once '../Model/Usuario.php';

if(isset($_POST["tipo"]))
{
	$tipo = $_POST["tipo"];
	switch ($tipo) {
		case 'eliminar':
			Eliminar();
			break;
		case 'editar':
			Editar();
			break;

		case 'registrar':
			Registrar();
			break;
		case 'consulta':
			Consultar();
			break;
		default:
			echo 'Error';
			break;
	}
}

function Consultar()
{
	$datos = new Usuario();
	$datos->setId($_POST["idEditar"]);

	$resultado = $datos->consultarUsuario();

	echo $resultado;
}

function Editar()
{
	$datos = new Usuario();
	$datos->setId($_POST["idEditar"]);
	$datos->setUsuario($_POST["usuarioEditar"]);
	$datos->setPassword($_POST["passwordEditar"]);
	$datos->setEstado($_POST["estadoEditar"]);
	$datos->setRol($_POST["rolEditar"]);
	$resultado = $datos->editarUsuario();

	if($resultado)
	{
		echo "Insertado";
	} else{
		echo "Error";
	}
}

function Eliminar()
{
	$datos = new Usuario();
	$datos->setId(intval($_POST["idEliminar"]));
	$resultado = $datos->EliminarUsuario();

	if($resultado)
	{
		echo "Insertado";
	} else{
		echo "Error";
	}
}

function Registrar()
{
	$datos = new Usuario();
		if((isset($_POST["usuarioRegistrar"])) && (isset($_POST["passwordRegistrar"])) && (isset($_POST["estadoRegistrar"]) && (isset($_POST["rolRegistrar"])))
	{
		$Usuario = $_POST["usuarioRegistrar"];
		$password = $_POST["passwordRegistrar"];
		$estado = $_POST["estadoRegistrar"];
		$rol = $_POST["rolRegistrar"];

		$datos->setUsuario($Usuario);
		$datos->setPassword($password);
		$datos->setEstado($estado);
		$datos->setRol($rol);
		$resultado = $datos->registrarUsuario();

		if($resultado)
	    {
		echo "Insertado";
	    } else{
		echo "Error";
	    }
	}
}
