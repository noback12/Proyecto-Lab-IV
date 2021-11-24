<?php  

//controllers/InicioSesionEmpleado.php

require '../fw/fw.php';
require '../models/Empleados.php';
require '../views/InicioSesionEmpleado.php';

$mEmp = new Empleados();

if(isset($_POST['email'])){
	//validaciones	

	$email = $_POST['email'];
	$passwd = sha1($_POST['contraseña']);
	$Empleados = $mEmp->Inicio($email, $passwd);
	
	if(!empty($Empleados) ){
		session_start();
		$_SESSION['logueado'] = true;
		$_SESSION['email'] = $email ;
		$_SESSION['empleado'] = true;
		header("Location: ListadoPeliculas.php");
		$vEmp = new InicioSesionEOk();
		$vEmp->Empleados = $Empleados;
	}else{
		echo "<script>alert('Usuario o contraseña incorrecto')</script>";
		$vEmp = new InicioSesionEmpleado();
	}


}

else{
	$vEmp = new InicioSesionEmpleado();
}

$vEmp->render();

?>