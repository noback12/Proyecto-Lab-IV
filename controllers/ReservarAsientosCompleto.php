<?php  

	//controllers/ReservarAsientosCompleto.php

	require '../fw/fw.php';
	require '../models/Funciones.php';
	require '../views/ReservarAsientosCompleto.php';
	session_start();
	if($_SESSION['logueado'] ){

		//Validaciones 
		if(!(isset($_POST['reservas2'])))throw new ValidacionException("No puedes acceder a este sitio si no reservas entradas");


		$arrayReservas = $_POST['reservas2'];
		//Valido de vuelta ?? quisiyo...

		if(isset($_POST['reservas2'])){
			$arrayReservas = $_POST['reservas2'];
			$mostrar = $arrayReservas;

			$mFunc = new Funciones();
			$Funciones = $mFunc->reservar2($arrayReservas);

			$vFunc = new ReservarAsientosCompleto();
			$vFunc->Funciones = $Funciones;
			$vFunc->render();
		}
	}else{
			header("Location: InicioSesion");

	}

?>