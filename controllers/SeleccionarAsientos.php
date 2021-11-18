<?php  

	//controllers/SeleccionarAsientos.php

	require '../fw/fw.php';
	require '../models/Salas.php';
	require '../views/asientoFuncion.php';


	if(isset($_POST['reservas1'])){
		//Tengo un array con los ids de los asientos-funcion a reservar
		$mostrar = $_POST['reservas1'];
		var_dump($mostrar);

	}else{	

	//Valido el post y ...
	$idfuncion = $_POST['id_funcion'];

	$mSeleccionAsientos = new Salas();
	$AsientosFuncion = $mSeleccionAsientos->asientoFuncion("$idfuncion");

	$vAsientoFuncion = new AsientoFuncion();
	$vAsientoFuncion->Salas = $AsientosFuncion ;
	$vAsientoFuncion->render();

	}

?>