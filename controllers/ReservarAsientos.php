<?php  

	//controllers/ReservarAsientos.php

	require '../fw/fw.php';
	require '../models/Funciones.php';
	require '../views/ReservarAsientos.php';


	//Validaciones 
	if(!(isset($_POST['reservas1'])))die("Error reservas1");


	$arrayReservas = $_POST['reservas1'];
	if(isset($_POST['reservas1'])){
		//Tengo un array con los ids de los asientos-funcion a reservar
		$mostrar = $arrayReservas;
		var_dump($mostrar);

		//

		$mFunc = new Funciones();
		$Funciones = $mFunc->reservar1($arrayReservas);

		$vFunc = new ReservarAsientos();
		$vFunc->Funciones = $Funciones;
		$vFunc->render();
	}




?>