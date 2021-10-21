<?php 


// controllers / AgregarPelicula.php 

require '../fw/fw.php';
require '../models/Peliculas.php';
require '../models/NuevaPelicula.php';
require '../views/AgregarPelicula.php';
require '../views/AgregarPeliculaOk.php';



$mPeli = new Peliculas();

//if(count($_POST)>0){
if(isset($_POST['nombre'])){

	//Es de prueba , agregar al modelo pelicula
	$mNuevaPelicula = new NuevaPelicula();
	$mNuevaPelicula->AgregarPeli();

	$v = new AgregarPeliculaOK();
}else{
	$vPeli = new AgregarPelicula();
	$vPeli->Peliculas = $mPeli->getTodos();
}

$vPeli->render();



?>