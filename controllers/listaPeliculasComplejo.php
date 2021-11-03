<?php 

// controllers / ListaPeliculasComplejo.php  
//Muestro las salas de un complejo

require '../fw/fw.php';
require '../models/Salas.php';
require '../models/peliculas.php';
require '../models/Complejos.php';
require '../views/ListadoSalas.php';
require '../views/ElegirComplejo.php';
require '../views/ListadoPeliculas.php';

	//Si tengo seteado el id complejo muestro 
	if(isset($_POST['id_complejo'])){
		$model = new Salas();
		// identifico las salas de ese complejo
		$Salas = $model->getSalaComplejo($_POST['id_complejo']);

		$view = new ListadoSalas();
		$view->Salas = $Salas;

		//Busco las funciones que usan esas salas 

		//Muestro que peliculas dan en esas funciones

		/*$model = new Peliculas();
		$Peliculas = $model->getTodos();

		$view = new ListadoPeliculas();
		$view->Peliculas = $Peliculas;
*/
	//Sino elijo el complejo
	}else{	
		$model = new Complejos();
		$todos = $model->getTodos(); 
		$view = new ElegirComplejo();
		$view->complejos = $todos;
	}
	$view->render();
 ?>