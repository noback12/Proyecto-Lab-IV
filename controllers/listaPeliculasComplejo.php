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
		$model = new Salas();
		// identifico las salas de ese complejo
		$Salas = $model->getSalaComplejo($_POST['id_complejo']);

		//Busco las funciones que usan esas salas 
		$model = new Funciones();
		$Funciones ;
		$Peliculas = new Peliculas() ;

		$view= new ListaPeliculaComplejo();

		$arrayPeliculas = array(); 
		

		//Por cada ID sala que haya en un complejo ,busco funciones que coincidan
		foreach ($Salas as $S ) {
			//Funciones por cada id_de sala 
			$Funciones = $model->getFuncionesSala($S['id_sala']);
			foreach ($Funciones as $F ) {
				//Obtengo la pelicula para mostrar el nombre
				$Pelicula = $Peliculas->getPelicula($F['id_pelicula']);
				// Esto lo tendria que pasar a una view ???

				if($Peliculas->existePelicula($F['id_pelicula'])){
				echo "<BR>". $F['id_funcion'] ." Pelicula  " . $Pelicula['nombre']  . "<BR>";
				array_push($arrayPeliculas, $Pelicula["id_pelicula"]);
				}else{
					 //echo "Sala ".$S['numero'] ." sin pelicula a las " . $F['hora'] ;
				}
			}
		}

		foreach($arrayPeliculas as $value){
			    echo '<input type="hidden" name="arrayPelis[]" value="'. $value. '">';
			}
		var_dump($arrayPeliculas);

	//Sino elijo el complejo
	}else{	
		$model = new Complejos();
		$todos = $model->getTodos(); 
		$view = new ElegirComplejo();
		$view->complejos = $todos;
	}
	$view->render();
 ?>