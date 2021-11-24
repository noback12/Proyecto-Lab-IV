<?php 

// controllers / ElegirComplejo.php  
//Lo separe de las peliculas por complejo

require '../fw/fw.php';
require '../models/Complejos.php';
require '../views/ElegirComplejo.php';

		$model = new Complejos();
		$todos = $model->getTodos(); 
		$view = new ElegirComplejo();
		$view->complejos = $todos;
		$view->render();

 ?>