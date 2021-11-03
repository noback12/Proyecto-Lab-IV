<?php 

//// controllers / ListaPeliculasComplejos.php  

require '../fw/fw.php';
require '../models/Salas.php';
require '../views/ListadoSalas.php';

	$mSala = new Salas();
	$Salas = $mSala->getTodos();

	$vSala = new ListadoSalas();
	$vSala->Salas = $Salas;
	$vSala->render();



 ?>