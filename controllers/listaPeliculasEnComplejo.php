<?php 

// controllers / ListaPeliculasEnComplejo.php  
//Muestro las Peliculas en un complejo , luego sus funciones

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
	//Sino elijo el complejo (otro controlador)
	}else{	
		echo "Hacer validacion error entro sin elegir complejo";
	}
	$view->render();
 ?>