<?php  

//controllers/InicioSesion.php

require '../fw/fw.php';
require '../models/Usuarios.php';
require '../views/InicioSesion.php';
require '../views/InicioSesionOk.php';

$mUser = new Usuarios();

if(isset($_POST['email'])){
	//validaciones

	$email = $_POST['email'];
	$passwd = sha1($_POST['contraseña']);
	
	$Usuarios = $mUser->Inicio($email, $passwd);
	if(!empty($Usuarios) ){
		session_start();
		$_SESSION['logueado'] = true;
		$_SESSION['email'] = $email ;
		header("Location: elegirComplejo.php");
		$vUser = new InicioSesionOk();
		$vUser->Usuarios = $Usuarios;
	}else{
		echo "<script>alert('Usuario o contraseña incorrecto')</script>";
		$vUser = new InicioSesion();
	}
}	

else{

	$vUser = new InicioSesion();
	//$vUser->Usuarios = $Usuarios;
}

$vUser->render();

?>