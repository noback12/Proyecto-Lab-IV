<?php

	//controllers/listaComplejos.php 

	require '../fw/fw.php';
	require '../models/Complejos.php';
	require '../views/ListadoComplejos.php';

	$comp = new Complejos();
	$todos = $comp->getTodos(); 

	$vcomp = new ListadoComplejos();
	$vcomp->complejos = $todos ;
	$vcomp->render();

?>
