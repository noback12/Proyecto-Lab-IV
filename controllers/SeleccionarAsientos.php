<?php  

	//controllers/SeleccionarAsientos.php

	require '../fw/fw.php';
	require '../models/Salas.php';
	require '../views/asientoFuncion.php';

	$mSeleccionAsientos = new Salas();
	$AsientosFuncion = $mSeleccionAsientos->asientoFuncion("5");

	$vAsientoFuncion = new AsientoFuncion();
	$vAsientoFuncion->Salas = $AsientosFuncion ;
	$vAsientoFuncion->render();



?>