<?php

 require_once "../model/Usuario.php";
 require_once "../app/validacionGeneral.php"; 

 if(isset($_POST['Login']))
 {
 	login();
 }

 function login()
 {
 	$usuario=$_POST['user'];
 	$password=$_POST['pass'];
 	$objUsuario= new Usuario();
 	$objUsuario->login($usuario,$password);
 }

 if(isset($_POST['Registrar']))
 {
 	crearCuenta();
 }

 function crearCuenta()
 {
 	$usuario=$_POST['user'];
 	$password=sha1($_POST['pass']);
 	$estado=$_POST['estado'];
 	$rol=$_POST['rol'];
 	$objUsuario= new Usuario();
 	$objUsuario->crearCuenta($usuario,$password,$estado,$rol);
 	
 }




?>