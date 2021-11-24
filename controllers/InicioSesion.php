<?php  

//controllers/InicioSesion.php

require '../fw/fw.php';
require '../models/Usuarios.php';
require '../views/InicioSesion.php';


$mUser = new Usuarios();

if(isset($_POST['email'])){
	//chequear validaciones email

	$email = $_POST['email'];
	$passwd = sha1($_POST['contraseña']);
	$Usuarios = $mUser->Inicio($email, $passwd);
	
	//Si no devuelve una fila vacia 
	if(!empty($Usuarios) ){
		//Se inicia sesion
		session_start();
		$_SESSION['logueado'] = true;
		$_SESSION['email'] = $email ;
		header("Location: inicio");

	}else{
		//Si la contraseña o usuario incorrecto 
		echo "<script>alert('Usuario o contraseña incorrecto')</script>";
		$vUser = new InicioSesion();
	}
}	

else{
	//Primer ingreso 
	$vUser = new InicioSesion();
}

$vUser->render();

?>