<?php  

	//controllers/ListadoFunciones.php

	require '../fw/fw.php';
	require '../models/Funciones.php';
	require '../views/ListadoFunciones.php';

	$func = new Funciones();
	$todas = $func->getTodos(); 

	$vfunc = new ListadoFunciones();
	$vfunc->Funciones = $todas ;
	$vfunc->render();


?>