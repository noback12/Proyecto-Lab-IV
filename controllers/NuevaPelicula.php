<?php 


// controllers / NuevaPelicula.php 

require '../fw/fw.php';
require '../models/Peliculas.php';
require '../models/NuevaPelicula.php';
require '../views/AgregarPelicula.php';
require '../views/AgregarPeliculaOk.php';



$mPeli = new Peliculas();
<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes
//if(count($_POST)>0){


if(isset($_POST['nombre'])){

	//Es de prueba , agregar al modelo pelicula
	$mNuevaPelicula = new NuevaPelicula();
<<<<<<< Updated upstream
	$mNuevaPelicula->AgregarPeli();
=======
	
	if(!isset($_POST['nombre']))die("nombre error 1 ");
	if(!isset($_POST['duracion']))die("duracion error 1 ");
	if(!isset($_POST['sinopsis']))die("sinopsis error 1 ");
	if(!isset($_POST['genero']))die("genero error 1 ");
	if(!isset($_POST['estreno']))die("estreno error 1 ");


	$mNuevaPelicula->AgregarPeli($_POST['nombre'],$_POST['duracion'],$_POST['sinopsis'],$_POST['genero'],$_POST['estreno']);
>>>>>>> Stashed changes

	$v = new AgregarPeliculaOK();
}else{
	$vPeli = new AgregarPelicula();
	$vPeli->Peliculas = $mPeli->getTodos();
}

$vPeli->render();



?>