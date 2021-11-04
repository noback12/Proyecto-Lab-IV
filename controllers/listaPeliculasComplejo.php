<?php 

// controllers / ListaPeliculasComplejo.php  
//Muestro las salas de un complejo

require '../fw/fw.php';
require '../models/Salas.php';
require '../models/peliculas.php';
require '../models/Complejos.php';
require '../models/Funciones.php';
require '../views/ListadoSalas.php';
require '../views/ElegirComplejo.php';
require '../views/ListaFunciones.php';

//require '../views/ListadoPeliculas.php';

	//Si tengo seteado el id complejo muestro 
	if(isset($_POST['id_complejo'])){
		$model = new Complejos();
		// identifico las salas de ese complejo
		$complejos = $model->getPeliculas($_POST['id_complejo']);
		$view= new ListaPeliculaComplejo();
		$view->complejos = $complejos;

	//Sino elijo el complejo
	}else{	
		$model = new Complejos();
		$todos = $model->getTodos(); 
		$view = new ElegirComplejo();
		$view->complejos = $todos;
	}
	$view->render();
 ?>