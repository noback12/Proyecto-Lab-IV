<?php 

	// controllers / ListaPeliculasEnComplejo.php  
	//Muestro las Peliculas en un complejo , luego sus funciones

	require '../fw/fw.php';
	require '../models/Complejos.php';
	require '../views/ElegirComplejo.php';
	require '../views/ListaPeliculaComplejo.php';
	require '../views/ListaPeliculaFuncion.php';

	//Una vez que ya elegí el complejo
	if(isset($_POST['id_pelicula'] ,$_POST['id_complejo'])){
		$model = new Complejos();
		$complejos = $model->getFunciones($_POST['id_pelicula'] ,$_POST['id_complejo'] );
		$view= new ListaPeliculaFuncion();

		$view->complejos = $complejos ;

	}
	//Si no elegí el complejo muestro esto
	else if(isset($_POST['id_complejo'])){
		$model = new Complejos();
		$complejos = $model->getPeliculas($_POST['id_complejo']);
		$view= new ListaPeliculaComplejo();
		$view->complejos = $complejos; 
	//Si ni siquiera pase por la página para elegir el complejo
	}else{	
		header("Location: elegirComplejo");
	}
	$view->render();

	
?>