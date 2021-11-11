<?php 

// controllers / ListaPeliculasComplejo.php  
//Muestro las salas de un complejo

require '../fw/fw.php';
require '../models/Complejos.php';
require '../views/ElegirComplejo.php';
require '../views/ListaPeliculaComplejo.php';
require '../views/ListaPeliculaFuncion.php';

	//Si tengo el id pelicula Y el del complejo 
	if(isset($_POST['id_pelicula'] ,$_POST['id_complejo'])){
		$model = new Complejos();
		$complejos = $model->getFunciones($_POST['id_pelicula'] ,$_POST['id_complejo'] );
		$view= new ListaPeliculaFuncion();
		$view->complejos = $complejos ; 
	}
	//Si tengo seteado SOLO  el id complejo muestro 
	else if(isset($_POST['id_complejo'])){
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