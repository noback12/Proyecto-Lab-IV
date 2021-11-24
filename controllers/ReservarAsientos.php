<?php  

	//controllers/ReservarAsientos.php

	require '../fw/fw.php';
	require '../models/Funciones.php';
	require '../views/ReservarAsientos.php';
	session_start();
	if($_SESSION['logueado'] ){

		//Validaciones 
		if(!(isset($_POST['reservas1'])))throw new ValidacionException("No puedes acceder a este sitio si no reservas entradas");

		$arrayReservas = $_POST['reservas1'];
		if(isset($_POST['reservas1'])){
			//Tengo un array con los ids de los asientos-funcion a reservar
			$mostrar = $arrayReservas;

			$mFunc = new Funciones();
			$Funciones = $mFunc->reservar1($arrayReservas);

			$vFunc = new ReservarAsientos();
			$vFunc->Funciones = $Funciones;
			$vFunc->render();
		}
	}else{
			header("Location: InicioSesion");

	}
	

?>