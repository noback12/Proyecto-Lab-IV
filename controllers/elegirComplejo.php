<?php 

// controllers / ElegirComplejo.php  
//Lo separe de las peliculas por complejo

require '../fw/fw.php';
require '../models/Complejos.php';
require '../views/ElegirComplejo.php';
	/*session_start();
	if($_SESSION['logueado'] ){
		//var_dump($_SESSION);
	*/
		$model = new Complejos();
		$todos = $model->getTodos(); 
		$view = new ElegirComplejo();
		$view->complejos = $todos;
		$view->render();

	/*}else{
		header("Location: InicioSesion.php");

	}
*/


 ?>